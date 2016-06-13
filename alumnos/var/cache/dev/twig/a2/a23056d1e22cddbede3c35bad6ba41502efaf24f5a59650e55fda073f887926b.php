<?php

/* default/ayuda.html.twig */
class __TwigTemplate_f8cfb91d16678f099711b2ce68bc285e827fe7dfb257894c39286e60deba62d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/ayuda.html.twig", 1);
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
        $__internal_c0c009755e1dc72f465c9c2fb0b816f1d329723b6120750021a55cd8deb91320 = $this->env->getExtension("native_profiler");
        $__internal_c0c009755e1dc72f465c9c2fb0b816f1d329723b6120750021a55cd8deb91320->enter($__internal_c0c009755e1dc72f465c9c2fb0b816f1d329723b6120750021a55cd8deb91320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/ayuda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0c009755e1dc72f465c9c2fb0b816f1d329723b6120750021a55cd8deb91320->leave($__internal_c0c009755e1dc72f465c9c2fb0b816f1d329723b6120750021a55cd8deb91320_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d45411cd0dbaff8961fb99db4f4c5be7f63df79c13c90305e17ec857b978c00 = $this->env->getExtension("native_profiler");
        $__internal_8d45411cd0dbaff8961fb99db4f4c5be7f63df79c13c90305e17ec857b978c00->enter($__internal_8d45411cd0dbaff8961fb99db4f4c5be7f63df79c13c90305e17ec857b978c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ayuda";
        
        $__internal_8d45411cd0dbaff8961fb99db4f4c5be7f63df79c13c90305e17ec857b978c00->leave($__internal_8d45411cd0dbaff8961fb99db4f4c5be7f63df79c13c90305e17ec857b978c00_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53600679888ee5f2ecf887759deddfd6392763b665a412ec04229dd2c487375b = $this->env->getExtension("native_profiler");
        $__internal_53600679888ee5f2ecf887759deddfd6392763b665a412ec04229dd2c487375b->enter($__internal_53600679888ee5f2ecf887759deddfd6392763b665a412ec04229dd2c487375b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"titulo\">Esta es una página de ";
        $this->displayBlock("title", $context, $blocks);
        echo "</div>
\t<h4>Incluir todo lo necesario para completar esta página</h4>
";
        
        $__internal_53600679888ee5f2ecf887759deddfd6392763b665a412ec04229dd2c487375b->leave($__internal_53600679888ee5f2ecf887759deddfd6392763b665a412ec04229dd2c487375b_prof);

    }

    public function getTemplateName()
    {
        return "default/ayuda.html.twig";
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
/* 	<div class="titulo">Esta es una página de {{ block('title') }}</div>*/
/* 	<h4>Incluir todo lo necesario para completar esta página</h4>*/
/* {% endblock %}*/
