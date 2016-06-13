<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e8ab2872ad1086babab2992fecfb87992985a487f9de79ecabfcbcf0b1824afb extends Twig_Template
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
        $__internal_de952e0542bcc24f60f0772811865dbffb42cbf3ced31280ba27bf515de0b9be = $this->env->getExtension("native_profiler");
        $__internal_de952e0542bcc24f60f0772811865dbffb42cbf3ced31280ba27bf515de0b9be->enter($__internal_de952e0542bcc24f60f0772811865dbffb42cbf3ced31280ba27bf515de0b9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_de952e0542bcc24f60f0772811865dbffb42cbf3ced31280ba27bf515de0b9be->leave($__internal_de952e0542bcc24f60f0772811865dbffb42cbf3ced31280ba27bf515de0b9be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
