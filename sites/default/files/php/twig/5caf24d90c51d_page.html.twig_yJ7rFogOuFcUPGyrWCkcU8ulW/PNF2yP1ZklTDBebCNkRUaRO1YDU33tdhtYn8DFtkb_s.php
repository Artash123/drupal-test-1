<?php

/* themes/mytheme/templates/page.html.twig */
class __TwigTemplate_e8d43dcc648e7f4f8fbb1d0c742f18a5cfec9ef92f6e6bc5042b210e63e23678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("for" => 75, "if" => 95);
        $filters = array("length" => 75);
        $functions = array("range" => 75);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array('length'),
                array('range')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 48
        echo "<div class=\"layout-container\">

    <header role=\"banner\">
      ";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
    </header>

    ";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
    ";
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
        echo "

    ";
        // line 57
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "

    ";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

    ";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 65
        echo "    <div class=\"layout-content\" style=\"width: 800px;\">
      <div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <img width=\"100%\" src=\"";
        // line 70
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), 0, array(), "array"), "img_path", array(), "array"), "html", null, true));
        echo "\" alt=\"Los Angeles\">
            <div class=\"carousel-caption\">
              <p>";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), 0, array(), "array"), "desc", array(), "array"), "html", null, true));
        echo "</p>
            </div>
          </div>
          ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 76
            echo "            <div class=\"carousel-item\">
              <img width=\"100%\" src=\"";
            // line 77
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), $context["index"], array(), "array"), "img_path", array(), "array"), "html", null, true));
            echo "\" alt=\"Los Angeles\">
              <div class=\"carousel-caption\">
                <p>";
            // line 79
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), $context["index"], array(), "array"), "desc", array(), "array"), "html", null, true));
            echo "</p>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </div>
        <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\"></span>
        </a>
        <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\"></span>
        </a>
      </div>
    </div>";
        // line 92
        echo "
  </main>

  ";
        // line 95
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 96
            echo "    <footer role=\"contentinfo\">
      ";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 100
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/mytheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 100,  139 => 97,  136 => 96,  134 => 95,  129 => 92,  119 => 83,  109 => 79,  104 => 77,  101 => 76,  97 => 75,  91 => 72,  86 => 70,  79 => 65,  73 => 61,  68 => 59,  63 => 57,  58 => 55,  54 => 54,  48 => 51,  43 => 48,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
<div class=\"layout-container\">

    <header role=\"banner\">
      {{ page.header }}
    </header>

    {{ page.primary_menu }}
    {{ page.secondary_menu }}

    {{ page.breadcrumb }}

    {{ page.highlighted }}

    {{ page.help }}

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
    <div class=\"layout-content\" style=\"width: 800px;\">
      <div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <img width=\"100%\" src=\"{{ items[0]['img_path'] }}\" alt=\"Los Angeles\">
            <div class=\"carousel-caption\">
              <p>{{ items[0]['desc'] }}</p>
            </div>
          </div>
          {% for index in range(1, items|length-1) %}
            <div class=\"carousel-item\">
              <img width=\"100%\" src=\"{{ items[index]['img_path'] }}\" alt=\"Los Angeles\">
              <div class=\"carousel-caption\">
                <p>{{ items[index]['desc'] }}</p>
              </div>
            </div>
          {% endfor %}
        </div>
        <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\"></span>
        </a>
        <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\"></span>
        </a>
      </div>
    </div>{# /.layout-content #}

  </main>

  {% if page.footer %}
    <footer role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endif %}

</div>{# /.layout-container #}
";
    }
}
