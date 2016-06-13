<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_8011a88cebc264087dad108b047ca0e039b77d8ad19dc162b7baa482c7e2517c extends Twig_Template
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
        $__internal_73a3e3e949ac448c1daef633ed209d2a161005a1655d54c90f147e6d2fee90fc = $this->env->getExtension("native_profiler");
        $__internal_73a3e3e949ac448c1daef633ed209d2a161005a1655d54c90f147e6d2fee90fc->enter($__internal_73a3e3e949ac448c1daef633ed209d2a161005a1655d54c90f147e6d2fee90fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_73a3e3e949ac448c1daef633ed209d2a161005a1655d54c90f147e6d2fee90fc->leave($__internal_73a3e3e949ac448c1daef633ed209d2a161005a1655d54c90f147e6d2fee90fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
