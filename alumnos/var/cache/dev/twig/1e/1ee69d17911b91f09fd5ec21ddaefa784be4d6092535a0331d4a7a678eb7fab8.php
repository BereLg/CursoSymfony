<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0f99f4199691ffb357ae6f463c74ece6af980c6a185494f7cb345aa0a8ae94a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_3223cf46be0ddb31ac2170c68e7cd3792366d7c17581fe74e480aee411680f0c = $this->env->getExtension("native_profiler");
        $__internal_3223cf46be0ddb31ac2170c68e7cd3792366d7c17581fe74e480aee411680f0c->enter($__internal_3223cf46be0ddb31ac2170c68e7cd3792366d7c17581fe74e480aee411680f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3223cf46be0ddb31ac2170c68e7cd3792366d7c17581fe74e480aee411680f0c->leave($__internal_3223cf46be0ddb31ac2170c68e7cd3792366d7c17581fe74e480aee411680f0c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5aaf00f4c2fbd798b327f4af398244d1d6d3d9355088f1ae53650764ad73ebd3 = $this->env->getExtension("native_profiler");
        $__internal_5aaf00f4c2fbd798b327f4af398244d1d6d3d9355088f1ae53650764ad73ebd3->enter($__internal_5aaf00f4c2fbd798b327f4af398244d1d6d3d9355088f1ae53650764ad73ebd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5aaf00f4c2fbd798b327f4af398244d1d6d3d9355088f1ae53650764ad73ebd3->leave($__internal_5aaf00f4c2fbd798b327f4af398244d1d6d3d9355088f1ae53650764ad73ebd3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_afb39d9f7a753c9260a5ff6b845061cdf30617899328b5ff42429ac2e850c9ea = $this->env->getExtension("native_profiler");
        $__internal_afb39d9f7a753c9260a5ff6b845061cdf30617899328b5ff42429ac2e850c9ea->enter($__internal_afb39d9f7a753c9260a5ff6b845061cdf30617899328b5ff42429ac2e850c9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_afb39d9f7a753c9260a5ff6b845061cdf30617899328b5ff42429ac2e850c9ea->leave($__internal_afb39d9f7a753c9260a5ff6b845061cdf30617899328b5ff42429ac2e850c9ea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
