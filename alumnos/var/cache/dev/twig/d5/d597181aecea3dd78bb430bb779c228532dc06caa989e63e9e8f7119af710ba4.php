<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_33b804e046c4d8a57f820acc308214534e79d878278fdc2b6ff4ba7b6a0f44f0 extends Twig_Template
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
        $__internal_7eed2db3a974b569b09326b566803009a0f509197fee4524e0a934d9863448a9 = $this->env->getExtension("native_profiler");
        $__internal_7eed2db3a974b569b09326b566803009a0f509197fee4524e0a934d9863448a9->enter($__internal_7eed2db3a974b569b09326b566803009a0f509197fee4524e0a934d9863448a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7eed2db3a974b569b09326b566803009a0f509197fee4524e0a934d9863448a9->leave($__internal_7eed2db3a974b569b09326b566803009a0f509197fee4524e0a934d9863448a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
