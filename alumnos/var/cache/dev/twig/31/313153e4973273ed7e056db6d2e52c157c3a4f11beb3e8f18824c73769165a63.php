<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f91f53de97a25c04923d8a1594f7b5d96299bcb2720ce87e3e7ac1b8ada552aa extends Twig_Template
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
        $__internal_d4a01e10a0680aca022faabb6a4aac32f199d2eaf6126700654478fcad7e0f7d = $this->env->getExtension("native_profiler");
        $__internal_d4a01e10a0680aca022faabb6a4aac32f199d2eaf6126700654478fcad7e0f7d->enter($__internal_d4a01e10a0680aca022faabb6a4aac32f199d2eaf6126700654478fcad7e0f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d4a01e10a0680aca022faabb6a4aac32f199d2eaf6126700654478fcad7e0f7d->leave($__internal_d4a01e10a0680aca022faabb6a4aac32f199d2eaf6126700654478fcad7e0f7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
