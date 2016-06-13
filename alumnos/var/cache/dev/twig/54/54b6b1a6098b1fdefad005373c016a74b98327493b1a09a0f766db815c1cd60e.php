<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7b169b9524fbcb09b1dfebe4523822dcbb474e788fd56fbf75dbaa18709c58b8 extends Twig_Template
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
        $__internal_55fd17c91d25df34bfee064a464f094a3eabd439f1be76a6e833ff37bf62d447 = $this->env->getExtension("native_profiler");
        $__internal_55fd17c91d25df34bfee064a464f094a3eabd439f1be76a6e833ff37bf62d447->enter($__internal_55fd17c91d25df34bfee064a464f094a3eabd439f1be76a6e833ff37bf62d447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_55fd17c91d25df34bfee064a464f094a3eabd439f1be76a6e833ff37bf62d447->leave($__internal_55fd17c91d25df34bfee064a464f094a3eabd439f1be76a6e833ff37bf62d447_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
