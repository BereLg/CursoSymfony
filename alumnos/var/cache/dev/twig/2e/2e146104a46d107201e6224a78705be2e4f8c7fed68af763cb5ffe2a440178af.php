<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bb9e1b708fa6b112bf32130bbddc1af7455bf178311b634d332db4f2a25b0865 extends Twig_Template
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
        $__internal_770a60d94a0015a7405f99d91c38984e0e945cdd630222564a0bcf22adcbf431 = $this->env->getExtension("native_profiler");
        $__internal_770a60d94a0015a7405f99d91c38984e0e945cdd630222564a0bcf22adcbf431->enter($__internal_770a60d94a0015a7405f99d91c38984e0e945cdd630222564a0bcf22adcbf431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_770a60d94a0015a7405f99d91c38984e0e945cdd630222564a0bcf22adcbf431->leave($__internal_770a60d94a0015a7405f99d91c38984e0e945cdd630222564a0bcf22adcbf431_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
