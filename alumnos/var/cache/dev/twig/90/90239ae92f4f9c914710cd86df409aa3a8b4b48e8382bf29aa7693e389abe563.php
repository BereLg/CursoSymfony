<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_64eeb37197314ad298173d36b7d2aad171025ea4c049f068019ca75f085ac347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c9a4c95819567c4171cd21ea0b9d02b7badfee263b99f1b9ae01dfbd2789d6c5 = $this->env->getExtension("native_profiler");
        $__internal_c9a4c95819567c4171cd21ea0b9d02b7badfee263b99f1b9ae01dfbd2789d6c5->enter($__internal_c9a4c95819567c4171cd21ea0b9d02b7badfee263b99f1b9ae01dfbd2789d6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9a4c95819567c4171cd21ea0b9d02b7badfee263b99f1b9ae01dfbd2789d6c5->leave($__internal_c9a4c95819567c4171cd21ea0b9d02b7badfee263b99f1b9ae01dfbd2789d6c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbb34e0e0afba4c91030422210255280d92d6f29178ec04b1f41212a20fd7d9c = $this->env->getExtension("native_profiler");
        $__internal_fbb34e0e0afba4c91030422210255280d92d6f29178ec04b1f41212a20fd7d9c->enter($__internal_fbb34e0e0afba4c91030422210255280d92d6f29178ec04b1f41212a20fd7d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fbb34e0e0afba4c91030422210255280d92d6f29178ec04b1f41212a20fd7d9c->leave($__internal_fbb34e0e0afba4c91030422210255280d92d6f29178ec04b1f41212a20fd7d9c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d47d5714d7f9aec600e276d29c2cb072794e23d7d8c98729641eaf949db1d83 = $this->env->getExtension("native_profiler");
        $__internal_9d47d5714d7f9aec600e276d29c2cb072794e23d7d8c98729641eaf949db1d83->enter($__internal_9d47d5714d7f9aec600e276d29c2cb072794e23d7d8c98729641eaf949db1d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9d47d5714d7f9aec600e276d29c2cb072794e23d7d8c98729641eaf949db1d83->leave($__internal_9d47d5714d7f9aec600e276d29c2cb072794e23d7d8c98729641eaf949db1d83_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9912cea9b61afe998ef7c1cf83e3ccf574cebb20e49150f06f4506c4ec1d3171 = $this->env->getExtension("native_profiler");
        $__internal_9912cea9b61afe998ef7c1cf83e3ccf574cebb20e49150f06f4506c4ec1d3171->enter($__internal_9912cea9b61afe998ef7c1cf83e3ccf574cebb20e49150f06f4506c4ec1d3171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9912cea9b61afe998ef7c1cf83e3ccf574cebb20e49150f06f4506c4ec1d3171->leave($__internal_9912cea9b61afe998ef7c1cf83e3ccf574cebb20e49150f06f4506c4ec1d3171_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
