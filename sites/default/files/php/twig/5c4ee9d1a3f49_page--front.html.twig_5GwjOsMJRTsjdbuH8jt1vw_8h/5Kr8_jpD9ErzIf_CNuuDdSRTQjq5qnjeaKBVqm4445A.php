<?php

/* themes/custom/endymion/page--front.html.twig */
class __TwigTemplate_5d1340322b0eee8982aca90605d5509bbf4da0054e0ff5be7b5caa67c1689c93 extends Twig_Template
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
        $tags = array("include" => 1, "if" => 13);
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

        // line 1
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "themes/custom/endymion/page--front.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"container\">
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 6
        echo "
    <div class=\"layout-content\">
      <div class=\"article-list\">
        ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
      </div>
    </div>";
        // line 12
        echo "
    ";
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", array())) {
            // line 14
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 18
        echo "
  </main>

  ";
        // line 21
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 22
            echo "    <footer role=\"contentinfo\">
      ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 26
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/endymion/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  84 => 23,  81 => 22,  79 => 21,  74 => 18,  68 => 15,  65 => 14,  63 => 13,  60 => 12,  55 => 9,  50 => 6,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/endymion/page--front.html.twig", "/Applications/MAMP/htdocs/theme_drupal/themes/custom/endymion/page--front.html.twig");
    }
}
