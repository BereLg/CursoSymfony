<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_72395cfda11c0e2e44871b6061afc4d41eede6a17acbfb0cbc0386b440932c54 extends Twig_Template
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
        $__internal_25f48b81b639222887252951b033cb3c97e7685eb028cd95dbb20952a0b09ec2 = $this->env->getExtension("native_profiler");
        $__internal_25f48b81b639222887252951b033cb3c97e7685eb028cd95dbb20952a0b09ec2->enter($__internal_25f48b81b639222887252951b033cb3c97e7685eb028cd95dbb20952a0b09ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_25f48b81b639222887252951b033cb3c97e7685eb028cd95dbb20952a0b09ec2->leave($__internal_25f48b81b639222887252951b033cb3c97e7685eb028cd95dbb20952a0b09ec2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
