<?php

namespace Drupal\provider_anthropic\Form;

use Drupal\ai\AiProviderPluginManager;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Configure Anthropic API access.
 */
class AnthropicConfigForm extends ConfigFormBase {

  /**
   * Config settings.
   */
  const CONFIG_NAME = 'provider_anthropic.settings';

  /**
   * The AI provider manager.
   *
   * @var \Drupal\ai\AiProviderPluginManager
   */
  protected $aiProviderManager;

  /**
   * Module Handler.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * Constructs a new AnthropicConfigForm object.
   */
  final public function __construct(AiProviderPluginManager $ai_provider_manager, ModuleHandlerInterface $module_handler) {
    $this->aiProviderManager = $ai_provider_manager;
    $this->moduleHandler = $module_handler;
  }

  /**
   * {@inheritdoc}
   */
  final public static function create(ContainerInterface $container) {
    return new static(
      $container->get('ai.provider'),
      $container->get('module_handler')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'anthropic_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::CONFIG_NAME,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::CONFIG_NAME);

    $form['#attached']['library'][] = 'provider_anthropic/verification';

    $form['api_key'] = [
      '#type' => 'key_select',
      '#title' => $this->t('Anthropic API Key'),
      '#description' => $this->t('The API Key. Can be found on <a href="https://console.anthropic.com/settings/keys">https://console.anthropic.com/settings/keys</a>.'),
      '#default_value' => $config->get('api_key'),
    ];

    // Check if the OpenAI provider is enabled and usabled.
    $disabled = TRUE;
    $description = $this->t('Enable OpenAI moderation for any Anthropic chat query.');
    if ($this->moduleHandler->moduleExists('provider_openai') && $this->aiProviderManager->createInstance('openai')->isUsable() && $this->moduleHandler->moduleExists('ai_external_moderation')) {
      $disabled = FALSE;
    }
    else {
      $description .= ' ' . $this->t('<strong>AI External Moderation module and/or OpenAI provider is not enabled or usable. Please enable the OpenAI provider and the AI External Moderation module to use this feature.</strong>');
    }

    $form['version'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Anthropic Version'),
      '#description' => $this->t('The version of the Anthropic API to use. This could need to be changed if the API gets updated with a better model. See https://docs.anthropic.com/en/docs/models-overview.'),
      '#default_value' => $config->get('version'),
      '#required' => TRUE,
    ];

    $form['openai_moderation'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable OpenAI Moderation'),
      '#description' => $description,
      '#default_value' => $config->get('openai_moderation'),
      '#disabled' => $disabled,
    ];

    $form['moderation_checkbox'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('No Moderation Needed'),
      '#description' => $this->t('I hereby understand that Anthropic is being run without moderation, which might lead to me sending a prompt that will be seen as malicious to Anthropic, THAT WILL GET ME BANNED.'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if ($form_state->getValue('openai_moderation') == 0 && !$form_state->getValue('moderation_checkbox')) {
      $form_state->setErrorByName('moderation_checkbox', $this->t('You need to verify that you understand the consequences of disabling moderation.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration.
    $this->config(static::CONFIG_NAME)
      ->set('api_key', $form_state->getValue('api_key'))
      ->set('openai_moderation', $form_state->getValue('openai_moderation'))
      ->set('version', $form_state->getValue('version'))
      ->save();

    // Get the configuration of the AI External Moderation.
    $config = $this->configFactory->getEditable('ai_external_moderation.settings');
    $moderations = $config->get('moderations');
    if ($form_state->getValue('openai_moderation')) {
      if (!isset($moderations['anthropic__chat'])) {
        $moderations['anthropic__chat'] = 'openai__text-moderation-latest';
        $config->set('moderations', $moderations);
        $config->save();
      }
    }
    else {
      if (isset($moderations['anthropic__chat'])) {
        unset($moderations['anthropic__chat']);
        $config->set('moderations', $moderations);
        $config->save();
      }
    }

    // Set some defaults.
    $this->aiProviderManager->defaultIfNone('chat', 'anthropic', 'claude-3-sonnet-20240229');
    $this->aiProviderManager->defaultIfNone('chat_with_image_json', 'anthropic', 'claude-3-sonnet-20240229');
    $this->aiProviderManager->defaultIfNone('chat_with_complex_json', 'anthropic', 'claude-3-5-sonnet-20240620');

    parent::submitForm($form, $form_state);
  }

}
