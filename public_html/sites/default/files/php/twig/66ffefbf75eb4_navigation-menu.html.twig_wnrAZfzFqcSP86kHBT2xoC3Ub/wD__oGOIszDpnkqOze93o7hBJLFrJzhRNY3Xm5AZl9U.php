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

/* core/modules/navigation/templates/navigation-menu.html.twig */
class __TwigTemplate_6d68a8e84c131cf358f29005f9e1cc1e extends Template
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
        // line 1
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        yield "<div class=\"admin-toolbar__item\">
  <h4 class=\"visually-hidden focusable\">";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 3, $this->source), "html", null, true);
        yield "</h4>
  <ul class=\"toolbar-block__list\">
    ";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 5, $context, $this->getSourceContext()));
        yield "
  </ul>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "title", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 9
    public function macro_menu_items($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                yield "
    ";
                // line 12
                $context["item_link_tag"] = "a";
                // line 13
                yield "
    ";
                // line 14
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 14), "isRouted", [], "any", false, false, true, 14)) {
                    // line 15
                    yield "      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 15), "routeName", [], "any", false, false, true, 15) == "<nolink>")) {
                        // line 16
                        yield "        ";
                        $context["item_link_tag"] = Twig\Extension\CoreExtension::constant("\\Drupal\\Core\\GeneratedNoLink::TAG");
                        // line 17
                        yield "      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 17), "routeName", [], "any", false, false, true, 17) == "<button>")) {
                        // line 18
                        yield "        ";
                        $context["item_link_tag"] = Twig\Extension\CoreExtension::constant("\\Drupal\\Core\\GeneratedButton::TAG");
                        // line 19
                        yield "      ";
                    }
                    // line 20
                    yield "    ";
                }
                // line 21
                yield "
    ";
                // line 22
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 22), "options", [], "any", false, false, true, 22), "attributes", [], "any", false, false, true, 22))) {
                    // line 23
                    yield "      ";
                    $context["item_link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                    // line 24
                    yield "    ";
                } else {
                    // line 25
                    yield "      ";
                    $context["item_link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 25), "options", [], "any", false, false, true, 25), "attributes", [], "any", false, false, true, 25), 25, $this->source));
                    // line 26
                    yield "    ";
                }
                // line 27
                yield "
    ";
                // line 28
                $context["item_id"] = \Drupal\Component\Utility\Html::getUniqueId(("navigation-link--" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "original_link", [], "any", false, false, true, 28), "pluginId", [], "any", false, false, true, 28), 28, $this->source)));
                // line 29
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 30
                    yield "      ";
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 30))) {
                        // line 31
                        yield "        <li id=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 31, $this->source), "html", null, true);
                        yield "\" class=\"toolbar-block__list-item\">
          ";
                        // line 32
                        yield from                         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/templates/navigation-menu.html.twig", 32)->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 33
($context["item_link_attributes"] ?? null), "setAttribute", ["href", Twig\Extension\CoreExtension::default($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 33)), null)], "method", false, false, true, 33), "setAttribute", ["data-drupal-tooltip", CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 33)], "method", false, false, true, 33), "setAttribute", ["data-drupal-tooltip-class", "admin-toolbar__tooltip"], "method", false, false, true, 33), "icon" => \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,                         // line 34
$context["item"], "class", [], "any", false, false, true, 34)), "html_tag" =>                         // line 35
($context["item_link_tag"] ?? null), "text" => CoreExtension::getAttribute($this->env, $this->source,                         // line 36
$context["item"], "title", [], "any", false, false, true, 36), "extra_classes" => ("toolbar-button--collapsible " . (((                        // line 37
($context["item_link_tag"] ?? null) == "span")) ? ("toolbar-button--non-interactive") : ("")))]));
                        // line 39
                        yield "        </li>
      ";
                    } else {
                        // line 41
                        yield "        <li id=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 41, $this->source), "html", null, true);
                        yield "\" class=\"toolbar-block__list-item toolbar-popover\" data-toolbar-popover>
          ";
                        // line 42
                        yield from                         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/templates/navigation-menu.html.twig", 42)->unwrap()->yield(CoreExtension::toArray(["action" => true, "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "aria-controls" =>                         // line 44
($context["item_id"] ?? null), "data-toolbar-popover-control" => true]), "icon" => \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,                         // line 45
$context["item"], "class", [], "any", false, false, true, 45)), "text" => CoreExtension::getAttribute($this->env, $this->source,                         // line 46
$context["item"], "title", [], "any", false, false, true, 46), "extra_classes" => "toolbar-button--expand--side toolbar-button--collapsible toolbar-popover__control", "has_safe_triangle" => true]));
                        // line 50
                        yield "          <div class=\"toolbar-popover__wrapper\" data-toolbar-popover-wrapper inert>
            ";
                        // line 51
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 51)) {
                            // line 52
                            yield "              ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 52), 52, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), 52, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["item_link_attributes"] ?? null), "addClass", [["toolbar-popover__header", "toolbar-button", "toolbar-button--large", "toolbar-button--dark"]], "method", false, false, true, 52), 52, $this->source)), "html", null, true);
                            yield "
            ";
                        } else {
                            // line 54
                            yield "              <span class=\"toolbar-popover__header toolbar-button toolbar-button--large toolbar-button--dark toolbar-button--non-interactive\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                            yield "</span>
            ";
                        }
                        // line 56
                        yield "            <ul class=\"toolbar-menu toolbar-popover__menu\">
              ";
                        // line 57
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 57), ($context["attributes"] ?? null), 1], 57, $context, $this->getSourceContext()));
                        yield "
            </ul>
          </div>
        </li>
      ";
                    }
                    // line 62
                    yield "
    ";
                } elseif ((                // line 63
($context["menu_level"] ?? null) == 1)) {
                    // line 64
                    yield "      <li class=\"toolbar-menu__item toolbar-menu__item--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 64, $this->source), "html", null, true);
                    yield "\">
        ";
                    // line 65
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 65))) {
                        // line 66
                        yield "          ";
                        yield from                         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/templates/navigation-menu.html.twig", 66)->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,                         // line 67
($context["item_link_attributes"] ?? null), "setAttribute", ["href", Twig\Extension\CoreExtension::default($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 67)), null)], "method", false, false, true, 67), "text" => CoreExtension::getAttribute($this->env, $this->source,                         // line 68
$context["item"], "title", [], "any", false, false, true, 68), "html_tag" =>                         // line 69
($context["item_link_tag"] ?? null), "extra_classes" => (((                        // line 70
($context["item_link_tag"] ?? null) == "span")) ? ("toolbar-button--non-interactive") : (""))]));
                        // line 72
                        yield "        ";
                    } else {
                        // line 73
                        yield "          <button
            class=\"toolbar-button toolbar-button--expand--down\"
            data-toolbar-menu-trigger=\"";
                        // line 75
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 75, $this->source), "html", null, true);
                        yield "\"
            aria-expanded=\"false\"
            data-index-text=\"";
                        // line 77
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 77), 77, $this->source))), "html", null, true);
                        yield "\"
          >
            <span class=\"toolbar-menu__link-action visually-hidden\">";
                        // line 79
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                        yield "</span>
            <span class=\"toolbar-menu__link-title\">";
                        // line 80
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                        yield "</span>
          </button>
          <ul class=\"toolbar-menu toolbar-menu--level-";
                        // line 82
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                        yield "\" inert>
            ";
                        // line 83
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 83), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 83, $context, $this->getSourceContext()));
                        yield "
          </ul>
        ";
                    }
                    // line 86
                    yield "      </li>
    ";
                } else {
                    // line 88
                    yield "      <li class=\"toolbar-menu__item toolbar-menu__item--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 88, $this->source), "html", null, true);
                    yield "\">
        ";
                    // line 89
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 89))) {
                        // line 90
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 90), 90, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 90), 90, $this->source), ["class" => ["toolbar-menu__link", ("toolbar-menu__link--" . $this->sandbox->ensureToStringAllowed(                        // line 93
($context["menu_level"] ?? null), 93, $this->source))], "data-index-text" => Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,                         // line 95
$context["item"], "title", [], "any", false, false, true, 95), 95, $this->source)))]), "html", null, true);
                        // line 96
                        yield "
        ";
                    } else {
                        // line 98
                        yield "          <button
            class=\"toolbar-menu__link toolbar-menu__link--";
                        // line 99
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 99, $this->source), "html", null, true);
                        yield "\"
            data-toolbar-menu-trigger=\"";
                        // line 100
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 100, $this->source), "html", null, true);
                        yield "\"
            aria-expanded=\"false\"
            data-index-text=\"";
                        // line 102
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 102), 102, $this->source))), "html", null, true);
                        yield "\"
          >
            <span class=\"toolbar-menu__link-action visually-hidden\">";
                        // line 104
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                        yield "</span>
            <span class=\"toolbar-menu__link-title\">";
                        // line 105
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                        yield "</span>
          </button>
          <ul class=\"toolbar-menu toolbar-menu--level-";
                        // line 107
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                        yield "\" inert>
            ";
                        // line 108
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 108), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 108, $context, $this->getSourceContext()));
                        yield "
          </ul>
        ";
                    }
                    // line 111
                    yield "      </li>
    ";
                }
                // line 113
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/navigation/templates/navigation-menu.html.twig";
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
        return array (  309 => 113,  305 => 111,  299 => 108,  295 => 107,  290 => 105,  286 => 104,  281 => 102,  276 => 100,  272 => 99,  269 => 98,  265 => 96,  263 => 95,  262 => 93,  260 => 90,  258 => 89,  253 => 88,  249 => 86,  243 => 83,  239 => 82,  234 => 80,  230 => 79,  225 => 77,  220 => 75,  216 => 73,  213 => 72,  211 => 70,  210 => 69,  209 => 68,  208 => 67,  206 => 66,  204 => 65,  199 => 64,  197 => 63,  194 => 62,  186 => 57,  183 => 56,  177 => 54,  171 => 52,  169 => 51,  166 => 50,  164 => 46,  163 => 45,  162 => 44,  161 => 42,  156 => 41,  152 => 39,  150 => 37,  149 => 36,  148 => 35,  147 => 34,  146 => 33,  145 => 32,  140 => 31,  137 => 30,  134 => 29,  132 => 28,  129 => 27,  126 => 26,  123 => 25,  120 => 24,  117 => 23,  115 => 22,  112 => 21,  109 => 20,  106 => 19,  103 => 18,  100 => 17,  97 => 16,  94 => 15,  92 => 14,  89 => 13,  87 => 12,  84 => 11,  79 => 10,  65 => 9,  54 => 5,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/navigation/templates/navigation-menu.html.twig", "/var/www/html/public_html/core/modules/navigation/templates/navigation-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "macro" => 9, "for" => 10, "set" => 12, "if" => 14, "include" => 32);
        static $filters = array("escape" => 3, "clean_unique_id" => 28, "default" => 33, "render" => 33, "clean_class" => 34, "lower" => 77, "first" => 77, "t" => 79);
        static $functions = array("constant" => 16, "create_attribute" => 23, "link" => 52);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'for', 'set', 'if', 'include'],
                ['escape', 'clean_unique_id', 'default', 'render', 'clean_class', 'lower', 'first', 't'],
                ['constant', 'create_attribute', 'link'],
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
