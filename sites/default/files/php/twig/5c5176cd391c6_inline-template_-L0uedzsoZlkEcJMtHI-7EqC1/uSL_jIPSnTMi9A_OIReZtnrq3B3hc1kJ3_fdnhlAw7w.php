<?php

/* {# inline_template_start #}  <article class="movie">
    <header>
      {{ title }}
    </header>

    <div class="image">
      {{ field_movie_ }}
    </div>

    <div class="movie-content">
      {{ view_node }}
    </div>
  </article> */
class __TwigTemplate_b3bf331620ab9931eeb13c78dea6dab7b44b6a8e487f0b92e9c8877a0f8662f2 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo "  <article class=\"movie\">
    <header>
      ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "
    </header>

    <div class=\"image\">
      ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_movie_"] ?? null), "html", null, true));
        echo "
    </div>

    <div class=\"movie-content\">
      ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "
    </div>
  </article>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}  <article class=\"movie\">
    <header>
      {{ title }}
    </header>

    <div class=\"image\">
      {{ field_movie_ }}
    </div>

    <div class=\"movie-content\">
      {{ view_node }}
    </div>
  </article>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  66 => 7,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}  <article class=\"movie\">
    <header>
      {{ title }}
    </header>

    <div class=\"image\">
      {{ field_movie_ }}
    </div>

    <div class=\"movie-content\">
      {{ view_node }}
    </div>
  </article>", "");
    }
}
