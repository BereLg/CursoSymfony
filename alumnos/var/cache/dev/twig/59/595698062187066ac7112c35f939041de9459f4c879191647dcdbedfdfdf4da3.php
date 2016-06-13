<?php

/* ::base.html.twig */
class __TwigTemplate_d66530da6738eb7450370aa8dd3980b5d185de63c31a13b94480541f6611aa48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae72b5d5b53ca6e83855dafc5848ef632b052860d65fc2e4f24e13f7464fdd5b = $this->env->getExtension("native_profiler");
        $__internal_ae72b5d5b53ca6e83855dafc5848ef632b052860d65fc2e4f24e13f7464fdd5b->enter($__internal_ae72b5d5b53ca6e83855dafc5848ef632b052860d65fc2e4f24e13f7464fdd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | Alumnos</title>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"web/css/estilos.css\"  media=\"screen,projection\"/>
\t</head>
\t<body>
\t\t";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "\t</body>
</html>
";
        
        $__internal_ae72b5d5b53ca6e83855dafc5848ef632b052860d65fc2e4f24e13f7464fdd5b->leave($__internal_ae72b5d5b53ca6e83855dafc5848ef632b052860d65fc2e4f24e13f7464fdd5b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7b6c545506f6435a9dabb1cce336e7e96c15732a078ff47fd92d429a599ab5c = $this->env->getExtension("native_profiler");
        $__internal_b7b6c545506f6435a9dabb1cce336e7e96c15732a078ff47fd92d429a599ab5c->enter($__internal_b7b6c545506f6435a9dabb1cce336e7e96c15732a078ff47fd92d429a599ab5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b7b6c545506f6435a9dabb1cce336e7e96c15732a078ff47fd92d429a599ab5c->leave($__internal_b7b6c545506f6435a9dabb1cce336e7e96c15732a078ff47fd92d429a599ab5c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb9a6c067c3c32b9534623fcd6a39d28b71675dc02bf77f0fc8f7b7582a81509 = $this->env->getExtension("native_profiler");
        $__internal_cb9a6c067c3c32b9534623fcd6a39d28b71675dc02bf77f0fc8f7b7582a81509->enter($__internal_cb9a6c067c3c32b9534623fcd6a39d28b71675dc02bf77f0fc8f7b7582a81509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cb9a6c067c3c32b9534623fcd6a39d28b71675dc02bf77f0fc8f7b7582a81509->leave($__internal_cb9a6c067c3c32b9534623fcd6a39d28b71675dc02bf77f0fc8f7b7582a81509_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b234854fb71214fa86e4bcbd08224d732c43d23978fffb4cd099b831dde1b11 = $this->env->getExtension("native_profiler");
        $__internal_9b234854fb71214fa86e4bcbd08224d732c43d23978fffb4cd099b831dde1b11->enter($__internal_9b234854fb71214fa86e4bcbd08224d732c43d23978fffb4cd099b831dde1b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b234854fb71214fa86e4bcbd08224d732c43d23978fffb4cd099b831dde1b11->leave($__internal_9b234854fb71214fa86e4bcbd08224d732c43d23978fffb4cd099b831dde1b11_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e23ca79d0beccf324c2fcda58615cb1581e34f72af8a1c4778fc2636aa0989cc = $this->env->getExtension("native_profiler");
        $__internal_e23ca79d0beccf324c2fcda58615cb1581e34f72af8a1c4778fc2636aa0989cc->enter($__internal_e23ca79d0beccf324c2fcda58615cb1581e34f72af8a1c4778fc2636aa0989cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e23ca79d0beccf324c2fcda58615cb1581e34f72af8a1c4778fc2636aa0989cc->leave($__internal_e23ca79d0beccf324c2fcda58615cb1581e34f72af8a1c4778fc2636aa0989cc_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 12,  82 => 11,  71 => 6,  60 => 5,  51 => 13,  48 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8" />*/
/* 		<title>{% block title %}{% endblock %} | Alumnos</title>*/
/* 		{% block stylesheets %}{% endblock %}*/
/* 		<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* 		<link type="text/css" rel="stylesheet" href="web/css/estilos.css"  media="screen,projection"/>*/
/* 	</head>*/
/* 	<body>*/
/* 		{% block body %}{% endblock %}*/
/* 		{% block javascripts %}{% endblock %}*/
/* 	</body>*/
/* </html>*/
/* */
