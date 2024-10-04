<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* core/modules/navigation/templates/menu-region--footer.html.twig */
class __TwigTemplate_4903978653ab114609ee75fb095c8522 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "<div class=\"admin-toolbar__item\">
  ";
        // line 27
        yield "  <h4 class=\"visually-hidden focusable\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 27, $this->source), "html", null, true);
        yield "</h4>
  <ul class=\"toolbar-block__list\">
    ";
        // line 29
        if (($context["help"] ?? null)) {
            // line 30
            yield "      <li class=\"toolbar-block__list-item\">
        ";
            // line 31
            yield from             $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/templates/menu-region--footer.html.twig", 31)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["href" => $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("help.main"), "data-drupal-tooltip" => t("Help"), "data-drupal-tooltip-class" => "admin-toolbar__tooltip"]), "icon" => "help", "html_tag" => "a", "text" => t("Help"), "extra_classes" => "toolbar-button--collapsible"]));
            // line 38
            yield "      </li>
    ";
        }
        // line 40
        yield "    <li id=\"admin-toolbar-user-menu\" class=\"toolbar-block__list-item toolbar-block__list-item--user toolbar-popover\" data-toolbar-popover>
      ";
        // line 41
        yield from         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/templates/menu-region--footer.html.twig", 41)->unwrap()->yield(CoreExtension::toArray(["action" => true, "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "aria-controls" => "admin-toolbar-user-menu", "data-toolbar-popover-control" => true]), "icon" => \Drupal\Component\Utility\Html::getClass(        // line 44
($context["menu_name"] ?? null)), "text" =>         // line 45
($context["title"] ?? null), "extra_classes" => "toolbar-button--expand--side toolbar-button--collapsible toolbar-popover__control", "has_safe_triangle" => true]));
        // line 49
        yield "      <div class=\"toolbar-popover__wrapper\" data-toolbar-popover-wrapper>
        <span class=\"toolbar-popover__header toolbar-button toolbar-button--large toolbar-button--dark toolbar-button--non-interactive\">";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 50, $this->source), "html", null, true);
        yield "</span>
        <ul class=\"toolbar-menu toolbar-popover__menu\">
          ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            yield "            <li class=\"toolbar-menu__item toolbar-menu__item--level-1\">
              <a
                href=\"";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            yield "\"
                class=\"toolbar-button\"
              >";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            yield "</a>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "        </ul>
      </div>
    </li>
  </ul>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "help", "menu_name", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/navigation/templates/menu-region--footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  101 => 60,  92 => 57,  87 => 55,  83 => 53,  79 => 52,  74 => 50,  71 => 49,  69 => 45,  68 => 44,  67 => 41,  64 => 40,  60 => 38,  58 => 31,  55 => 30,  53 => 29,  47 => 27,  44 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/navigation/templates/menu-region--footer.html.twig", "/var/www/html/public_html/core/modules/navigation/templates/menu-region--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 29, "include" => 31, "for" => 52);
        static $filters = array("escape" => 27, "t" => 32, "clean_class" => 44);
        static $functions = array("create_attribute" => 32, "path" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include', 'for'],
                ['escape', 't', 'clean_class'],
                ['create_attribute', 'path'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
