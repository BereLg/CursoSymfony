<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3610dfe10b5d8ceffc30540c1b8730e29cd72a10737c7c6b0e65fcc32741a41e extends Twig_Template
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
        $__internal_033a1c81675b401466d5ced50ee9295ea86ce11e89fe21e438fe675560fe6cd5 = $this->env->getExtension("native_profiler");
        $__internal_033a1c81675b401466d5ced50ee9295ea86ce11e89fe21e438fe675560fe6cd5->enter($__internal_033a1c81675b401466d5ced50ee9295ea86ce11e89fe21e438fe675560fe6cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_033a1c81675b401466d5ced50ee9295ea86ce11e89fe21e438fe675560fe6cd5->leave($__internal_033a1c81675b401466d5ced50ee9295ea86ce11e89fe21e438fe675560fe6cd5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
