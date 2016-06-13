<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_c7025b2f8f72092fb2ab7786f463e05c9719fb5e8373c23f6401383cbb6a2595 extends Twig_Template
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
        $__internal_7f09d49ad495f2dbc39a44829c0006614801fd8b770810158a58e0ca4f36b144 = $this->env->getExtension("native_profiler");
        $__internal_7f09d49ad495f2dbc39a44829c0006614801fd8b770810158a58e0ca4f36b144->enter($__internal_7f09d49ad495f2dbc39a44829c0006614801fd8b770810158a58e0ca4f36b144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7f09d49ad495f2dbc39a44829c0006614801fd8b770810158a58e0ca4f36b144->leave($__internal_7f09d49ad495f2dbc39a44829c0006614801fd8b770810158a58e0ca4f36b144_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
