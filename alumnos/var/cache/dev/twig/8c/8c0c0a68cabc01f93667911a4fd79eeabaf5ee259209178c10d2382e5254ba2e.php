<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_04e287b2c6817e920d1eac93eedc666f3bd6eca12668570c21742b9c029ad824 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d83b94e6a4dc2633e8b242c64bd67f3cedb3452c8050e800e4cc7071242c57e = $this->env->getExtension("native_profiler");
        $__internal_4d83b94e6a4dc2633e8b242c64bd67f3cedb3452c8050e800e4cc7071242c57e->enter($__internal_4d83b94e6a4dc2633e8b242c64bd67f3cedb3452c8050e800e4cc7071242c57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d83b94e6a4dc2633e8b242c64bd67f3cedb3452c8050e800e4cc7071242c57e->leave($__internal_4d83b94e6a4dc2633e8b242c64bd67f3cedb3452c8050e800e4cc7071242c57e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e4dc0a07944fca196de94f0aa9e12673d6361591d5d43bcf12dff4e641ebad6 = $this->env->getExtension("native_profiler");
        $__internal_2e4dc0a07944fca196de94f0aa9e12673d6361591d5d43bcf12dff4e641ebad6->enter($__internal_2e4dc0a07944fca196de94f0aa9e12673d6361591d5d43bcf12dff4e641ebad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2e4dc0a07944fca196de94f0aa9e12673d6361591d5d43bcf12dff4e641ebad6->leave($__internal_2e4dc0a07944fca196de94f0aa9e12673d6361591d5d43bcf12dff4e641ebad6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b80df6b2557627a48c71a51f859074d9cfddea5c43d2a49b156bd0f3b57b43c9 = $this->env->getExtension("native_profiler");
        $__internal_b80df6b2557627a48c71a51f859074d9cfddea5c43d2a49b156bd0f3b57b43c9->enter($__internal_b80df6b2557627a48c71a51f859074d9cfddea5c43d2a49b156bd0f3b57b43c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b80df6b2557627a48c71a51f859074d9cfddea5c43d2a49b156bd0f3b57b43c9->leave($__internal_b80df6b2557627a48c71a51f859074d9cfddea5c43d2a49b156bd0f3b57b43c9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
