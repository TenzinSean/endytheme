<?php

/* themes/custom/endymion/page.html.twig */
class __TwigTemplate_fdbb3ef7f9dbbcb66609c103817c093965836e27e29b6ef2a653549bf191ab8e extends Twig_Template
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
        $tags = array("include" => 54, "if" => 72);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 53
        echo "
";
        // line 54
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "themes/custom/endymion/page.html.twig", 54)->display($context);
        // line 55
        echo "
<div class=\"container\">
  ";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "
  ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
        echo "

  ";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "

  ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "

  ";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 68
        echo "    <div class=\"layout-content\">
      ";
        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 71
        echo "
    ";
        // line 72
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 73
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 77
        echo "
    ";
        // line 78
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 79
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 83
        echo "
  </main>
</div>";
        // line 86
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 87
            echo "  <footer role=\"contentinfo\">
    ";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/endymion/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 88,  118 => 87,  116 => 86,  112 => 83,  106 => 80,  103 => 79,  101 => 78,  98 => 77,  92 => 74,  89 => 73,  87 => 72,  84 => 71,  80 => 69,  77 => 68,  71 => 64,  66 => 62,  61 => 60,  56 => 58,  52 => 57,  48 => 55,  46 => 54,  43 => 53,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/endymion/page.html.twig", "/Applications/MAMP/htdocs/theme_drupal/themes/custom/endymion/page.html.twig");
    }
}
