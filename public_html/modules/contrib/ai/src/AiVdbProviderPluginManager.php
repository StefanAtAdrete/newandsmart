<?php

declare(strict_types=1);

namespace Drupal\ai;

use Drupal\ai\Attribute\AiVdbProvider;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * Vector DB plugin manager.
 */
final class AiVdbProviderPluginManager extends DefaultPluginManager {

  /**
   * Constructs the object.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/VdbProvider', $namespaces, $module_handler, AiVdbProviderInterface::class, AiVdbProvider::class);
    $this->alterInfo('ai_vdb_provider_info');
    $this->setCacheBackend($cache_backend, 'ai_vdb_provider_info_plugins');
  }

  /**
   * Creates a plugin instance of a Vector Database Provider.
   *
   * @param string $plugin_id
   *   The ID of the plugin being instantiated.
   * @param array $configuration
   *   An array of configuration relevant to the plugin instance.
   *
   * @return \Drupal\ai\Attribute\AiVdbProviderInterface
   *   A fully configured vector database plugin instance.
   *
   * @throws \Drupal\Component\Plugin\Exception\PluginException
   *   If the instance cannot be created, such as if the ID is invalid.
   */
  public function createInstance($plugin_id, array $configuration = []): AiVdbProviderInterface {
    /** @var \Drupal\ai\AiVdbProviderInterface $providerInstance */
    $providerInstance = parent::createInstance($plugin_id, $configuration);
    return $providerInstance;
  }

  /**
   * Gets all the available Vector DB providers.
   *
   * @param bool $setup
   *   If TRUE, only return the providers that are setup.
   *
   * @return array
   *   The providers.
   */
  public function getProviders($setup = FALSE): array {
    $plugins = [];
    foreach ($this->getDefinitions() as $definition) {
      $instance = $this->createInstance($definition['id']);
      if ($setup && !$instance->isSetup()) {
        continue;
      }
      $plugins[$definition['id']] = $definition['label']->__toString();
    }
    return $plugins;
  }

}
