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
        $tags = array("include" => 1, "if" => 11);
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
        echo "<div class=\"container\">
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 5
        echo "    <div class=\"layout-content\">
      <div class=\"article-list\">
        ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
      </div>
    </div>";
        // line 10
        echo "
    ";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", array())) {
            // line 12
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar", array()), "html", null, true));
            echo "
        ";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "latest_movies", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 17
        echo "  </main>
  <article class=\"movie\">
    <header>
      ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "
    </header>

    <div class=\"image\">
      ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_movie_"] ?? null), "html", null, true));
        echo "
    </div>

    <div class=\"movie-content\">
      ";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "
    </div>
  </article>

</div>";
        // line 33
        echo "
";
        // line 34
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 35
            echo "  <footer role=\"contentinfo\">
    this is footer
    ";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
  </footer>
";
        }
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
        return array (  111 => 37,  107 => 35,  105 => 34,  102 => 33,  95 => 28,  88 => 24,  81 => 20,  76 => 17,  70 => 14,  66 => 13,  63 => 12,  61 => 11,  58 => 10,  53 => 7,  49 => 5,  45 => 2,  43 => 1,);
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
