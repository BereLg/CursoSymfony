<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_22ce1dd5d3d574c454087e42cb00bd107454c8a51995b756f558de72285af957 extends Twig_Template
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
        $__internal_dd5cda0a119df3a74cdf9f4b6aa1d4f69e2331087780b3bd56c8d0ee58d4249f = $this->env->getExtension("native_profiler");
        $__internal_dd5cda0a119df3a74cdf9f4b6aa1d4f69e2331087780b3bd56c8d0ee58d4249f->enter($__internal_dd5cda0a119df3a74cdf9f4b6aa1d4f69e2331087780b3bd56c8d0ee58d4249f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dd5cda0a119df3a74cdf9f4b6aa1d4f69e2331087780b3bd56c8d0ee58d4249f->leave($__internal_dd5cda0a119df3a74cdf9f4b6aa1d4f69e2331087780b3bd56c8d0ee58d4249f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
