<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3d954b3bf1189d9c1cfb7a3880dedacc2c19b3b3da92ca3773317e5ca9452636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aac66f13b56b6be5925fb42e039948fdf5ed7d91f1335425919005008ff20fb = $this->env->getExtension("native_profiler");
        $__internal_3aac66f13b56b6be5925fb42e039948fdf5ed7d91f1335425919005008ff20fb->enter($__internal_3aac66f13b56b6be5925fb42e039948fdf5ed7d91f1335425919005008ff20fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3aac66f13b56b6be5925fb42e039948fdf5ed7d91f1335425919005008ff20fb->leave($__internal_3aac66f13b56b6be5925fb42e039948fdf5ed7d91f1335425919005008ff20fb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7419535d52629abecbb0a2ab478f5608baf4dde1a36d121cf7848b7ece25aca = $this->env->getExtension("native_profiler");
        $__internal_a7419535d52629abecbb0a2ab478f5608baf4dde1a36d121cf7848b7ece25aca->enter($__internal_a7419535d52629abecbb0a2ab478f5608baf4dde1a36d121cf7848b7ece25aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a7419535d52629abecbb0a2ab478f5608baf4dde1a36d121cf7848b7ece25aca->leave($__internal_a7419535d52629abecbb0a2ab478f5608baf4dde1a36d121cf7848b7ece25aca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
