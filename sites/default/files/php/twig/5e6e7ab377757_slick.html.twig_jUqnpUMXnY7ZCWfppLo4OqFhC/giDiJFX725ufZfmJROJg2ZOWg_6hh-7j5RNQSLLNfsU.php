<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/slick/templates/slick.html.twig */
class __TwigTemplate_3bd37f17d7a6c6ce63f39f81643888621f2da388d61cc81e1e2615e2436ba342 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'slick_content' => [$this, 'block_slick_content'],
            'slick_arrow' => [$this, 'block_slick_arrow'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 31, "if" => 56, "block" => 60];
        $filters = ["join" => 35, "clean_class" => 36, "escape" => 55, "t" => 68];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['join', 'clean_class', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 31
        $context["classes"] = [0 => (($this->getAttribute(        // line 32
($context["settings"] ?? null), "unslick", [])) ? ("unslick") : ("")), 1 => ((((        // line 33
($context["display"] ?? null) == "main") && $this->getAttribute(($context["settings"] ?? null), "blazy", []))) ? ("blazy") : ("")), 2 => (($this->getAttribute(        // line 34
($context["settings"] ?? null), "vertical", [])) ? ("slick--vertical") : ("")), 3 => (($this->getAttribute($this->getAttribute(        // line 35
($context["settings"] ?? null), "attributes", []), "class", [])) ? (twig_join_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "attributes", []), "class", [])), " ")) : ("")), 4 => (($this->getAttribute(        // line 36
($context["settings"] ?? null), "skin", [])) ? (("slick--skin--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin", []))))) : ("")), 5 => ((twig_in_filter("boxed", $this->getAttribute(        // line 37
($context["settings"] ?? null), "skin", []))) ? ("slick--skin--boxed") : ("")), 6 => ((twig_in_filter("split", $this->getAttribute(        // line 38
($context["settings"] ?? null), "skin", []))) ? ("slick--skin--split") : ("")), 7 => (($this->getAttribute(        // line 39
($context["settings"] ?? null), "optionset", [])) ? (("slick--optionset--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "optionset", []))))) : ("")), 8 => ((        // line 40
(isset($context["arrow_down_attributes"]) || array_key_exists("arrow_down_attributes", $context))) ? ("slick--has-arrow-down") : ("")), 9 => (($this->getAttribute(        // line 41
($context["settings"] ?? null), "asNavFor", [])) ? (("slick--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["display"] ?? null))))) : ("")), 10 => ((($this->getAttribute(        // line 42
($context["settings"] ?? null), "slidesToShow", []) > 1)) ? ("slick--multiple-view") : ("")), 11 => ((($this->getAttribute(        // line 43
($context["settings"] ?? null), "count", []) <= $this->getAttribute(($context["settings"] ?? null), "slidesToShow", []))) ? ("slick--less") : ("")), 12 => ((((        // line 44
($context["display"] ?? null) == "main") && $this->getAttribute(($context["settings"] ?? null), "media_switch", []))) ? (("slick--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "media_switch", []))))) : ("")), 13 => ((((        // line 45
($context["display"] ?? null) == "thumbnail") && $this->getAttribute(($context["settings"] ?? null), "thumbnail_caption", []))) ? ("slick--has-caption") : (""))];
        // line 49
        $context["arrow_classes"] = [0 => "slick__arrow", 1 => (($this->getAttribute(        // line 51
($context["settings"] ?? null), "vertical", [])) ? ("slick__arrow--v") : ("")), 2 => (($this->getAttribute(        // line 52
($context["settings"] ?? null), "skin_arrows", [])) ? (("slick__arrow--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "skin_arrows", []))))) : (""))];
        // line 55
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 56
        if ( !$this->getAttribute(($context["settings"] ?? null), "unslick", [])) {
            // line 57
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "slick__slider"], "method")), "html", null, true);
            echo ">
  ";
        }
        // line 59
        echo "
  ";
        // line 60
        $this->displayBlock('slick_content', $context, $blocks);
        // line 63
        echo "
  ";
        // line 64
        if ( !$this->getAttribute(($context["settings"] ?? null), "unslick", [])) {
            // line 65
            echo "    </div>
    ";
            // line 66
            $this->displayBlock('slick_arrow', $context, $blocks);
            // line 79
            echo "  ";
        }
        // line 80
        echo "</div>
";
    }

    // line 60
    public function block_slick_content($context, array $blocks = [])
    {
        // line 61
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null)), "html", null, true);
        echo "
  ";
    }

    // line 66
    public function block_slick_arrow($context, array $blocks = [])
    {
        // line 67
        echo "      <nav";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["arrow_attributes"] ?? null), "addClass", [0 => ($context["arrow_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        <button type=\"button\" data-role=\"none\" class=\"slick-prev\" aria-label=\"";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "prevArrow", []))));
        echo "\" tabindex=\"0\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "prevArrow", []))));
        echo "</button>
        ";
        // line 69
        if ((isset($context["arrow_down_attributes"]) || array_key_exists("arrow_down_attributes", $context))) {
            // line 70
            echo "          <button";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["arrow_down_attributes"] ?? null), "addClass", [0 => "slick-down"], "method"), "setAttribute", [0 => "type", 1 => "button"], "method"), "setAttribute", [0 => "data-role", 1 => "none"], "method"), "setAttribute", [0 => "data-target", 1 => $this->getAttribute(            // line 73
($context["settings"] ?? null), "downArrowTarget", [])], "method"), "setAttribute", [0 => "data-offset", 1 => $this->getAttribute(            // line 74
($context["settings"] ?? null), "downArrowOffset", [])], "method")), "html", null, true);
            echo "></button>
        ";
        }
        // line 76
        echo "        <button type=\"button\" data-role=\"none\" class=\"slick-next\" aria-label=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "nextArrow", []))));
        echo "\" tabindex=\"0\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "nextArrow", []))));
        echo "</button>
      </nav>
    ";
    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 76,  142 => 74,  141 => 73,  139 => 70,  137 => 69,  131 => 68,  126 => 67,  123 => 66,  116 => 61,  113 => 60,  108 => 80,  105 => 79,  103 => 66,  100 => 65,  98 => 64,  95 => 63,  93 => 60,  90 => 59,  84 => 57,  82 => 56,  77 => 55,  75 => 52,  74 => 51,  73 => 49,  71 => 45,  70 => 44,  69 => 43,  68 => 42,  67 => 41,  66 => 40,  65 => 39,  64 => 38,  63 => 37,  62 => 36,  61 => 35,  60 => 34,  59 => 33,  58 => 32,  57 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the Slick carousel template.
 *
 * This template holds 3 displays: main, thumbnail and overlay slicks in one.
 * Arrows are enforced, but toggled by JS accordingly. This allows responsive
 * object to enable and disable it as needed without losing context.
 *
 * Available variables:
 * - items: The array of items containing main image/video/audio, optional
 *     image/video/audio overlay and captions, and optional thumbnail
 *     texts/images.
 * - settings: A cherry-picked settings that mostly defines the slide HTML or
 *     layout, and none of JS settings/options which are defined at data-slick.
 * - attributes: The array of attributes to hold the main container classes, id.
 * - content_attributes: The array of attributes to hold optional RTL, id and
 *     data-slick containing JSON object aka JS settings the Slick expects to
 *     override default options. We don't store these JS settings in the normal
 *     <head>, but inline within data-slick attribute instead.
 *
 * Debug:
 * @see https://www.drupal.org/node/1906780
 * @see https://www.drupal.org/node/1903374
 * Use Kint: {{ kint(variable) }}
 * Dump all available variables and their contents: {{ dump() }}
 * Dump only the available variable keys: {{ dump(_context|keys) }}
 */
#}
{%
  set classes = [
    settings.unslick ? 'unslick',
    display == 'main' and settings.blazy ? 'blazy',
    settings.vertical ? 'slick--vertical',
    settings.attributes.class ? settings.attributes.class|join(' '),
    settings.skin ? 'slick--skin--' ~ settings.skin|clean_class,
    'boxed' in settings.skin ? 'slick--skin--boxed',
    'split' in settings.skin ? 'slick--skin--split',
    settings.optionset ? 'slick--optionset--' ~ settings.optionset|clean_class,
    arrow_down_attributes is defined ? 'slick--has-arrow-down',
    settings.asNavFor ? 'slick--' ~ display|clean_class,
    settings.slidesToShow > 1 ? 'slick--multiple-view',
    settings.count <= settings.slidesToShow ? 'slick--less',
    display == 'main' and settings.media_switch ? 'slick--' ~ settings.media_switch|clean_class,
    display == 'thumbnail' and settings.thumbnail_caption ? 'slick--has-caption'
  ]
%}
{%
  set arrow_classes = [
    'slick__arrow',
    settings.vertical ? 'slick__arrow--v',
    settings.skin_arrows ? 'slick__arrow--' ~ settings.skin_arrows|clean_class
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {% if not settings.unslick %}
    <div{{ content_attributes.addClass('slick__slider') }}>
  {% endif %}

  {% block slick_content %}
    {{ items }}
  {% endblock %}

  {% if not settings.unslick %}
    </div>
    {% block slick_arrow %}
      <nav{{ arrow_attributes.addClass(arrow_classes) }}>
        <button type=\"button\" data-role=\"none\" class=\"slick-prev\" aria-label=\"{{ settings.prevArrow|t }}\" tabindex=\"0\">{{ settings.prevArrow|t }}</button>
        {% if arrow_down_attributes is defined %}
          <button{{ arrow_down_attributes.addClass('slick-down')
            .setAttribute('type', 'button')
            .setAttribute('data-role', 'none')
            .setAttribute('data-target', settings.downArrowTarget)
            .setAttribute('data-offset', settings.downArrowOffset) }}></button>
        {% endif %}
        <button type=\"button\" data-role=\"none\" class=\"slick-next\" aria-label=\"{{ settings.nextArrow|t }}\" tabindex=\"0\">{{ settings.nextArrow|t }}</button>
      </nav>
    {% endblock %}
  {% endif %}
</div>
", "modules/slick/templates/slick.html.twig", "E:\\xampp\\htdocs\\gawadar_jobs\\modules\\slick\\templates\\slick.html.twig");
    }
}
