<?php

/* :default:ayuda.html.twig */
class __TwigTemplate_b5053fea8f94902303d58da5ee27b7248eeda4b6d9436c99141c575a939c7e9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:ayuda.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_696a6e9ea35efb5508e3304075ce6fffdf50b28a790e676bc1d0e6342ed0451f = $this->env->getExtension("native_profiler");
        $__internal_696a6e9ea35efb5508e3304075ce6fffdf50b28a790e676bc1d0e6342ed0451f->enter($__internal_696a6e9ea35efb5508e3304075ce6fffdf50b28a790e676bc1d0e6342ed0451f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:ayuda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_696a6e9ea35efb5508e3304075ce6fffdf50b28a790e676bc1d0e6342ed0451f->leave($__internal_696a6e9ea35efb5508e3304075ce6fffdf50b28a790e676bc1d0e6342ed0451f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bc829bf926f7631b63550df3696822cffae857108ff9066f324875a5b52cd60 = $this->env->getExtension("native_profiler");
        $__internal_1bc829bf926f7631b63550df3696822cffae857108ff9066f324875a5b52cd60->enter($__internal_1bc829bf926f7631b63550df3696822cffae857108ff9066f324875a5b52cd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ayuda";
        
        $__internal_1bc829bf926f7631b63550df3696822cffae857108ff9066f324875a5b52cd60->leave($__internal_1bc829bf926f7631b63550df3696822cffae857108ff9066f324875a5b52cd60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_88e7a20b70a5ba56c55422dd358fb9339341bb8cc005f6adfe4259381a619536 = $this->env->getExtension("native_profiler");
        $__internal_88e7a20b70a5ba56c55422dd358fb9339341bb8cc005f6adfe4259381a619536->enter($__internal_88e7a20b70a5ba56c55422dd358fb9339341bb8cc005f6adfe4259381a619536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h3>Esta es una página de ";
        $this->displayBlock("title", $context, $blocks);
        echo "</h3>
\t<h4>Incluir todo lo necesario para completar esta página</h4>
";
        
        $__internal_88e7a20b70a5ba56c55422dd358fb9339341bb8cc005f6adfe4259381a619536->leave($__internal_88e7a20b70a5ba56c55422dd358fb9339341bb8cc005f6adfe4259381a619536_prof);

    }

    public function getTemplateName()
    {
        return ":default:ayuda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig'%}*/
/* {% block title %}Ayuda{% endblock %}*/
/* {% block body %}*/
/* 	<h3>Esta es una página de {{ block('title') }}</h3>*/
/* 	<h4>Incluir todo lo necesario para completar esta página</h4>*/
/* {% endblock %}*/
