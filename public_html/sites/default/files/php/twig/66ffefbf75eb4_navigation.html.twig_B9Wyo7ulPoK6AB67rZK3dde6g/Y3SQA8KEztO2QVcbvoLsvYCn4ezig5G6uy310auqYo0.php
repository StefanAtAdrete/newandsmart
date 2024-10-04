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

/* core/modules/navigation/layouts/navigation.html.twig */
class __TwigTemplate_04d4c93a9e153032c89e9cb02a37efe3 extends Template
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
        // line 19
        $context["control_bar_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 20
        yield "
<div ";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["control_bar_attributes"] ?? null), "addClass", ["admin-toolbar-control-bar"], "method", false, false, true, 21), "setAttribute", ["data-drupal-admin-styles", ""], "method", false, false, true, 21), "setAttribute", ["data-offset-top", ""], "method", false, false, true, 21), 21, $this->source), "html", null, true);
        yield ">
  <div class=\"admin-toolbar-control-bar__content\">
    ";
        // line 23
        yield from         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/layouts/navigation.html.twig", 23)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "aria-controls" => "admin-toolbar", "type" => "button"]), "icon" => "burger", "text" => t("Expand sidebar"), "extra_classes" => "admin-toolbar-control-bar__burger"]));
        // line 29
        yield "  </div>
</div>

<aside
  ";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["admin-toolbar"], "method", false, false, true, 33), "setAttribute", ["id", "admin-toolbar"], "method", false, false, true, 33), "setAttribute", ["data-drupal-admin-styles", true], "method", false, false, true, 33), 33, $this->source), "html", null, true);
        yield "
>
  ";
        // line 36
        yield "  <div class=\"admin-toolbar__displace-placeholder\"></div>

  <div class=\"admin-toolbar__scroll-wrapper\">
    ";
        // line 39
        $context["title_menu"] = \Drupal\Component\Utility\Html::getUniqueId("admin-toolbar-title");
        // line 40
        yield "    ";
        // line 41
        yield "    <nav ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "content", [], "any", false, false, true, 41), "setAttribute", ["id", "menu-builder"], "method", false, false, true, 41), "addClass", ["admin-toolbar__content"], "method", false, false, true, 41), "setAttribute", ["aria-labelledby", ($context["title_menu"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
        yield ">
      <h3 id=\"";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_menu"] ?? null), 42, $this->source), "html", null, true);
        yield "\" class=\"visually-hidden\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Administrative toolbar content"));
        yield "</h3>
      ";
        // line 44
        yield "      <div class=\"admin-toolbar__header\">
        ";
        // line 45
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "settings", [], "any", false, false, true, 45), "hide_logo", [], "any", false, false, true, 45)) {
            // line 46
            yield "          <a class=\"admin-toolbar__logo\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\">
            ";
            // line 47
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "settings", [], "any", false, false, true, 47), "logo_path", [], "any", false, false, true, 47))) {
                // line 48
                yield "              <img alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Navigation logo"));
                yield "\" src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "settings", [], "any", false, false, true, 48), "logo_path", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                yield "\" loading=\"eager\" width=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "settings", [], "any", false, true, true, 48), "logo_width", [], "any", true, true, true, 48)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "settings", [], "any", false, true, true, 48), "logo_width", [], "any", false, false, true, 48), 48, $this->source), 40)) : (40)), "html", null, true);
                yield "\" height=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "settings", [], "any", false, true, true, 48), "logo_height", [], "any", true, true, true, 48)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "settings", [], "any", false, true, true, 48), "logo_height", [], "any", false, false, true, 48), 48, $this->source), 40)) : (40)), "html", null, true);
                yield "\">
            ";
            } else {
                // line 50
                yield "              ";
                yield from                 $this->loadTemplate("@navigation/logo.svg.twig", "core/modules/navigation/layouts/navigation.html.twig", 50)->unwrap()->yield(CoreExtension::toArray(["label" => t("Navigation logo")]));
                // line 53
                yield "            ";
            }
            // line 54
            yield "          </a>
        ";
        }
        // line 56
        yield "        ";
        yield from         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/layouts/navigation.html.twig", 56)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-toolbar-back-control" => true, "tabindex" => "-1"]), "extra_classes" => "admin-toolbar__back-button", "icon" => "back", "text" => t("Back")]));
        // line 62
        yield "        ";
        yield from         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/layouts/navigation.html.twig", 62)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-controls" => "admin-toolbar", "tabindex" => "-1", "type" => "button"]), "extra_classes" => "admin-toolbar__close-button", "icon" => "cross", "label_classes" => "visually-hidden", "text" => t("Collapse sidebar")]));
        // line 69
        yield "      </div>

      ";
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        yield "
    </nav>

    ";
        // line 74
        $context["title_menu_footer"] = \Drupal\Component\Utility\Html::getUniqueId("admin-toolbar-footer");
        // line 75
        yield "    <nav ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "footer", [], "any", false, false, true, 75), "setAttribute", ["id", "menu-footer"], "method", false, false, true, 75), "addClass", ["admin-toolbar__footer"], "method", false, false, true, 75), "setAttribute", ["aria-labelledby", ($context["title_menu_footer"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
        yield ">
      <h3 id=\"";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_menu_footer"] ?? null), 76, $this->source), "html", null, true);
        yield "\" class=\"visually-hidden\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Administrative toolbar footer"));
        yield "</h3>
      ";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "footer", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        yield "
      <button aria-controls=\"admin-toolbar\" class=\"admin-toolbar__expand-button\" type=\"button\">
        <span class=\"visually-hidden\" data-text>";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Collapse sidebar"));
        yield "</span>
      </button>
    </nav>
  </div>
</aside>
<div class=\"admin-toolbar-overlay\" aria-controls=\"admin-toolbar\" data-drupal-admin-styles></div>
<script>
  if (localStorage.getItem('Drupal.navigation.sidebarExpanded') !== 'false' && (window.matchMedia('(min-width: 1024px)').matches)) {
    document.documentElement.setAttribute('data-admin-toolbar', 'expanded');
  }
</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "region_attributes", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/navigation/layouts/navigation.html.twig";
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
        return array (  155 => 79,  150 => 77,  144 => 76,  139 => 75,  137 => 74,  131 => 71,  127 => 69,  124 => 62,  121 => 56,  117 => 54,  114 => 53,  111 => 50,  99 => 48,  97 => 47,  92 => 46,  90 => 45,  87 => 44,  81 => 42,  76 => 41,  74 => 40,  72 => 39,  67 => 36,  62 => 33,  56 => 29,  54 => 23,  49 => 21,  46 => 20,  44 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/navigation/layouts/navigation.html.twig", "/var/www/html/public_html/core/modules/navigation/layouts/navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 19, "include" => 23, "if" => 45);
        static $filters = array("escape" => 21, "t" => 26, "clean_unique_id" => 39, "default" => 48);
        static $functions = array("create_attribute" => 19, "path" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['escape', 't', 'clean_unique_id', 'default'],
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
