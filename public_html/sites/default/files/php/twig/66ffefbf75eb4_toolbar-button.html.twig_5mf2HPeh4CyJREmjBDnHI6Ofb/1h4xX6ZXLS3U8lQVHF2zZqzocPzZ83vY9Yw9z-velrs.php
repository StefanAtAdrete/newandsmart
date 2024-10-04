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

/* @navigation/toolbar-button.html.twig */
class __TwigTemplate_be409b49be1e7d31f8edc7fb75f2d359 extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["classes"] = ["toolbar-button", ((        // line 6
($context["icon"] ?? null)) ? (("toolbar-button--icon--" . $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 6, $this->source))) : ("")),         // line 7
($context["extra_classes"] ?? null)];
        // line 10
        yield "<";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("html_tag", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null), 10, $this->source), "button")) : ("button")), "html", null, true);
        yield "
  ";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        yield "
  data-index-text=\"";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 12, $this->source))), "html", null, true);
        yield "\"
  data-icon-text=\"";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 13, $this->source))), 0, 2), ""), "html", null, true);
        yield "\"
>
  ";
        // line 15
        if (($context["avatar"] ?? null)) {
            // line 16
            yield "    <span class=\"toolbar-button__avatar\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["avatar"] ?? null), 16, $this->source), "html", null, true);
            yield "</span>
  ";
        }
        // line 18
        yield "  ";
        if (($context["action"] ?? null)) {
            // line 19
            yield "    <span data-toolbar-action class=\"visually-hidden\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
            yield "</span>
  ";
        }
        // line 21
        yield "  ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 26
        yield "
  ";
        // line 29
        yield "  ";
        if (($context["has_safe_triangle"] ?? null)) {
            // line 30
            yield "    <div data-toolbar-popover-safe-triangle></div>
  ";
        }
        // line 32
        yield "
</";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("html_tag", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null), 33, $this->source), "button")) : ("button")), "html", null, true);
        yield ">
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icon", "extra_classes", "html_tag", "attributes", "text", "avatar", "action", "has_safe_triangle", "label_classes"]);        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "    ";
        if (($context["text"] ?? null)) {
            // line 23
            yield "      <span class=\"toolbar-button__label ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label_classes"] ?? null), 23, $this->source), "html", null, true);
            yield "\" data-text>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 23, $this->source), "html", null, true);
            yield "</span>
    ";
        }
        // line 25
        yield "  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@navigation/toolbar-button.html.twig";
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
        return array (  126 => 25,  118 => 23,  115 => 22,  108 => 21,  100 => 33,  97 => 32,  93 => 30,  90 => 29,  87 => 26,  84 => 21,  78 => 19,  75 => 18,  69 => 16,  67 => 15,  62 => 13,  58 => 12,  54 => 11,  49 => 10,  47 => 7,  46 => 6,  45 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@navigation/toolbar-button.html.twig", "/var/www/html/public_html/core/modules/navigation/templates/toolbar-button.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 15, "block" => 21);
        static $filters = array("escape" => 10, "default" => 10, "lower" => 12, "first" => 12, "join" => 13, "slice" => 13, "trim" => 13, "render" => 13, "t" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'default', 'lower', 'first', 'join', 'slice', 'trim', 'render', 't'],
                [],
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
