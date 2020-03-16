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

/* modules/blazy/templates/blazy.html.twig */
class __TwigTemplate_6363004146af6e51b4ba13952b0624720d1f0164eace67a8b136f5ac849ddb83 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'blazy_player' => [$this, 'block_blazy_player'],
            'blazy_media' => [$this, 'block_blazy_media'],
            'blazy_content' => [$this, 'block_blazy_content'],
            'blazy_caption' => [$this, 'block_blazy_caption'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "block" => 58, "if" => 99, "for" => 102];
        $filters = ["clean_class" => 45, "join" => 53, "escape" => 111];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'join', 'escape'],
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
        // line 42
        $context["classes"] = [0 => "media", 1 => ((        // line 44
($context["content"] ?? null)) ? ("media--rendered") : ("")), 2 => (($this->getAttribute(        // line 45
($context["settings"] ?? null), "bundle", [])) ? (("media--bundle--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "bundle", []))))) : ("")), 3 => (($this->getAttribute(        // line 46
($context["settings"] ?? null), "namespace", [])) ? (("media--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "namespace", [])))) : ("")), 4 => ((($this->getAttribute(        // line 47
($context["settings"] ?? null), "lazy", []) && $this->getAttribute(($context["settings"] ?? null), "use_loading", []))) ? ("media--loading") : ("")), 5 => (($this->getAttribute(        // line 48
($context["settings"] ?? null), "media_switch", [])) ? (("media--switch media--switch--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "media_switch", []))))) : ("")), 6 => (($this->getAttribute(        // line 49
($context["settings"] ?? null), "player", [])) ? ("media--player") : ("")), 7 => (($this->getAttribute(        // line 50
($context["settings"] ?? null), "ratio", [])) ? (("media--ratio media--ratio--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "ratio", [])))) : ("")), 8 => (($this->getAttribute(        // line 51
($context["settings"] ?? null), "responsive_image_style_id", [])) ? ("media--responsive") : ("")), 9 => (($this->getAttribute(        // line 52
($context["settings"] ?? null), "type", [])) ? (("media--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "type", [])))) : ("")), 10 => (($this->getAttribute(        // line 53
($context["settings"] ?? null), "classes", [])) ? (\Drupal\Component\Utility\Html::getClass(twig_join_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "classes", [])), " "))) : (""))];
        // line 56
        echo "
";
        // line 57
        ob_start();
        // line 58
        echo "  ";
        $this->displayBlock('blazy_player', $context, $blocks);
        $context["player"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "
";
        // line 68
        ob_start();
        // line 69
        echo "  ";
        $this->displayBlock('blazy_media', $context, $blocks);
        $context["media"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "
";
        // line 80
        ob_start();
        // line 81
        echo "  ";
        $this->displayBlock('blazy_content', $context, $blocks);
        // line 98
        echo "
  ";
        // line 99
        if ((($context["captions"] ?? null) && $this->getAttribute(($context["captions"] ?? null), "inline", [], "any", true, true))) {
            // line 100
            echo "    ";
            $this->displayBlock('blazy_caption', $context, $blocks);
            // line 109
            echo "  ";
        }
        // line 110
        echo "
  ";
        // line 111
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["postscript"] ?? null)), "html", null, true);
        echo "

";
        $context["blazy"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        echo "
";
        // line 115
        if (($context["wrapper_attributes"] ?? null)) {
            // line 116
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null)), "html", null, true);
            echo ">
    ";
            // line 117
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blazy"] ?? null)), "html", null, true);
            echo "
  </div>
";
        } else {
            // line 120
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blazy"] ?? null)), "html", null, true);
            echo "
";
        }
    }

    // line 58
    public function block_blazy_player($context, array $blocks = [])
    {
        // line 59
        echo "    ";
        if ($this->getAttribute(($context["settings"] ?? null), "player", [])) {
            // line 60
            echo "      <span class=\"media__icon media__icon--close\"></span>
      <span class=\"media__icon media__icon--play\" data-url=\"";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "embed_url", [])), "html", null, true);
            echo "\"></span>
    ";
        } else {
            // line 63
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["iframe"] ?? null)), "html", null, true);
            echo "
    ";
        }
        // line 65
        echo "  ";
    }

    // line 69
    public function block_blazy_media($context, array $blocks = [])
    {
        // line 70
        echo "    <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
      ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["noscript"] ?? null)), "html", null, true);
        echo "
      ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
      ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null)), "html", null, true);
        echo "
      ";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["player"] ?? null)), "html", null, true);
        echo "
      ";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "icon", [])), "html", null, true);
        echo "
    </div>
  ";
    }

    // line 81
    public function block_blazy_content($context, array $blocks = [])
    {
        // line 82
        echo "    ";
        if (($context["media_attributes"] ?? null)) {
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_attributes"] ?? null)), "html", null, true);
            echo ">";
        }
        // line 83
        echo "      ";
        if ((($context["url"] ?? null) &&  !$this->getAttribute(($context["settings"] ?? null), "player", []))) {
            // line 84
            echo "        <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media"] ?? null)), "html", null, true);
            echo "</a>

        ";
            // line 87
            echo "        ";
            if ((($context["captions"] ?? null) &&  !twig_test_empty($this->getAttribute(($context["captions"] ?? null), "lightbox", [])))) {
                // line 88
                echo "          <div class=\"litebox-caption visually-hidden\">";
                // line 89
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["captions"] ?? null), "lightbox", [])), "html", null, true);
                // line 90
                echo "</div>
        ";
            }
            // line 92
            echo "
      ";
        } else {
            // line 94
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media"] ?? null)), "html", null, true);
        }
        // line 96
        echo "    ";
        if (($context["media_attributes"] ?? null)) {
            echo "</div>";
        }
        // line 97
        echo "  ";
    }

    // line 100
    public function block_blazy_caption($context, array $blocks = [])
    {
        // line 101
        echo "      <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption_attributes"] ?? null)), "html", null, true);
        echo ">
        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["captions"] ?? null), "inline", []));
        foreach ($context['_seq'] as $context["_key"] => $context["caption"]) {
            // line 103
            echo "          ";
            if ($this->getAttribute($context["caption"], "content", [])) {
                // line 104
                echo "            <";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["caption"], "tag", [])), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["caption"], "attributes", [])), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["caption"], "content", [])), "html", null, true);
                echo "</";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["caption"], "tag", [])), "html", null, true);
                echo ">
          ";
            }
            // line 106
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/blazy/templates/blazy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 107,  273 => 106,  261 => 104,  258 => 103,  254 => 102,  249 => 101,  246 => 100,  242 => 97,  237 => 96,  234 => 94,  230 => 92,  226 => 90,  224 => 89,  222 => 88,  219 => 87,  209 => 84,  206 => 83,  199 => 82,  196 => 81,  189 => 75,  185 => 74,  181 => 73,  177 => 72,  173 => 71,  168 => 70,  165 => 69,  161 => 65,  155 => 63,  150 => 61,  147 => 60,  144 => 59,  141 => 58,  133 => 120,  127 => 117,  122 => 116,  120 => 115,  117 => 114,  111 => 111,  108 => 110,  105 => 109,  102 => 100,  100 => 99,  97 => 98,  94 => 81,  92 => 80,  89 => 79,  85 => 69,  83 => 68,  80 => 67,  76 => 58,  74 => 57,  71 => 56,  69 => 53,  68 => 52,  67 => 51,  66 => 50,  65 => 49,  64 => 48,  63 => 47,  62 => 46,  61 => 45,  60 => 44,  59 => 42,);
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
 * Default theme implementation to display a formatted blazy image/media field.
 *
 * The Blazy supports core image, responsive image and media entity.
 * If iframe switcher is enabled, audio/video iframe will be hidden below image
 * overlay, and only visible when toggled. Otherwise iframe only, and image is
 * emptied.
 *
 * Available variables:
 *   - captions: An optional renderable array of inline or lightbox captions.
 *   - image: A collection of image data.
 *   - attributes: An array of attributes applied to .media container.
 *   - iframe: A renderable array of iframe with its attributes and SRC.
 *   - settings: An array containing the given settings.
 *   - url: An optional URL the image can be linked to, can be any of
 *       audio/video, or entity URLs, when using Colorbox/Photobox, or Link to
 *       content options.
 *   - url_attributes: An array of URL attributes, lightbox or content links.
 *   - noscript: The fallback image for non-js users.
 *   - postscript: Any extra content to put into blazy goes here. Use keyed or
 *       indexed array to not conflict with or nullify other providers, e.g.:
 *       postscript.cta, or postscript.widget. Avoid postscript = cta.
 *   - content: Various Media entities like Facebook, Instagram, local Video,
 *       etc. Basically content is the replacement for (Responsive) image
 *       and oEmbed video. This makes it possible to have a mix of Media
 *       entities, image and videos on a Blazy Grid, Slick, GridStack, etc.
 *       Regular Blazy features are still disabled by default at
 *       \\Drupal\\blazy\\BlazyDefault::richSettings() to avoid complication.
 *       However you can override them accordingly as needed, such as lightbox
 *       for local Video with/o a pre-configured poster image. The #settings
 *       are provided under content variables for more work. Originally
 *       content is a theme_field() output, trimmed down to bare minimum.
 *
 * @see template_preprocess_blazy()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'media',
    content ? 'media--rendered',
    settings.bundle ? 'media--bundle--' ~ settings.bundle|clean_class,
    settings.namespace ? 'media--' ~ settings.namespace,
    settings.lazy and settings.use_loading ? 'media--loading',
    settings.media_switch ? 'media--switch media--switch--' ~ settings.media_switch|clean_class,
    settings.player ? 'media--player',
    settings.ratio ? 'media--ratio media--ratio--' ~ settings.ratio,
    settings.responsive_image_style_id ? 'media--responsive',
    settings.type ? 'media--' ~ settings.type,
    settings.classes ? settings.classes|join(' ')|clean_class,
  ]
%}

{% set player %}
  {% block blazy_player %}
    {% if settings.player %}
      <span class=\"media__icon media__icon--close\"></span>
      <span class=\"media__icon media__icon--play\" data-url=\"{{ settings.embed_url }}\"></span>
    {% else %}
      {{ iframe }}
    {% endif %}
  {% endblock %}
{% endset %}

{% set media %}
  {% block blazy_media %}
    <div{{ attributes.addClass(classes) }}>
      {{ noscript }}
      {{ content }}
      {{ image }}
      {{ player }}
      {{ settings.icon }}
    </div>
  {% endblock %}
{% endset %}

{% set blazy %}
  {% block blazy_content %}
    {% if media_attributes %}<div{{ media_attributes }}>{% endif %}
      {% if url and not settings.player %}
        <a href=\"{{ url }}\"{{ url_attributes }}>{{ media }}</a>

        {# Allows fieldable captions with A tag, such as social share. #}
        {% if captions and captions.lightbox is not empty %}
          <div class=\"litebox-caption visually-hidden\">
            {{- captions.lightbox -}}
          </div>
        {% endif %}

      {% else %}
        {{- media -}}
      {% endif %}
    {% if media_attributes %}</div>{% endif %}
  {% endblock %}

  {% if captions and captions.inline is defined %}
    {% block blazy_caption %}
      <div{{ caption_attributes }}>
        {% for caption in captions.inline %}
          {% if caption.content %}
            <{{ caption.tag }} {{ caption.attributes }}>{{ caption.content }}</{{ caption.tag }}>
          {% endif %}
        {% endfor %}
      </div>
    {% endblock %}
  {% endif %}

  {{ postscript }}

{% endset %}

{% if wrapper_attributes %}
  <div{{ wrapper_attributes }}>
    {{ blazy }}
  </div>
{% else %}
  {{ blazy }}
{% endif %}
", "modules/blazy/templates/blazy.html.twig", "E:\\xampp\\htdocs\\gawadar_jobs\\modules\\blazy\\templates\\blazy.html.twig");
    }
}
