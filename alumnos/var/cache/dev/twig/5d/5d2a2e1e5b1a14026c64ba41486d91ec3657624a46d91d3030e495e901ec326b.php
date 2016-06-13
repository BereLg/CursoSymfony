<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_69d5a46d6baec0eb422fec61864f9b71ba72f3d98a19f4d4ec85386e5e46421e extends Twig_Template
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
        $__internal_8c7b20cb558674db68c2504bf0f99a9d3087e8119ac9ec14dc28fd0aa56d31aa = $this->env->getExtension("native_profiler");
        $__internal_8c7b20cb558674db68c2504bf0f99a9d3087e8119ac9ec14dc28fd0aa56d31aa->enter($__internal_8c7b20cb558674db68c2504bf0f99a9d3087e8119ac9ec14dc28fd0aa56d31aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_8c7b20cb558674db68c2504bf0f99a9d3087e8119ac9ec14dc28fd0aa56d31aa->leave($__internal_8c7b20cb558674db68c2504bf0f99a9d3087e8119ac9ec14dc28fd0aa56d31aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
