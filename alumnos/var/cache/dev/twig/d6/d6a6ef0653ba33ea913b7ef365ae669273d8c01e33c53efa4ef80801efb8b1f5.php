<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_080d7beec8cbbc450ed0cccb66a704ade0661e915a59108f5417a8045f2a76c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_8d46e9b650051ed0cc0dba04d8c16e21d0a61c5430fc15ff518790f85d041bbb = $this->env->getExtension("native_profiler");
        $__internal_8d46e9b650051ed0cc0dba04d8c16e21d0a61c5430fc15ff518790f85d041bbb->enter($__internal_8d46e9b650051ed0cc0dba04d8c16e21d0a61c5430fc15ff518790f85d041bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d46e9b650051ed0cc0dba04d8c16e21d0a61c5430fc15ff518790f85d041bbb->leave($__internal_8d46e9b650051ed0cc0dba04d8c16e21d0a61c5430fc15ff518790f85d041bbb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_044932b0c2b07adca6ef3bd0dbf8b51f9fa953f5c1c0e5170e1586280d72f26d = $this->env->getExtension("native_profiler");
        $__internal_044932b0c2b07adca6ef3bd0dbf8b51f9fa953f5c1c0e5170e1586280d72f26d->enter($__internal_044932b0c2b07adca6ef3bd0dbf8b51f9fa953f5c1c0e5170e1586280d72f26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_044932b0c2b07adca6ef3bd0dbf8b51f9fa953f5c1c0e5170e1586280d72f26d->leave($__internal_044932b0c2b07adca6ef3bd0dbf8b51f9fa953f5c1c0e5170e1586280d72f26d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_190ac6cd679ca63e1423d64a3640c12ea6ea62f169afa7d08ad85722f2c4fc76 = $this->env->getExtension("native_profiler");
        $__internal_190ac6cd679ca63e1423d64a3640c12ea6ea62f169afa7d08ad85722f2c4fc76->enter($__internal_190ac6cd679ca63e1423d64a3640c12ea6ea62f169afa7d08ad85722f2c4fc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_190ac6cd679ca63e1423d64a3640c12ea6ea62f169afa7d08ad85722f2c4fc76->leave($__internal_190ac6cd679ca63e1423d64a3640c12ea6ea62f169afa7d08ad85722f2c4fc76_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac786627b90ed5a1d03f336aa539013bd4754d576b53417b9b008dc9c448a651 = $this->env->getExtension("native_profiler");
        $__internal_ac786627b90ed5a1d03f336aa539013bd4754d576b53417b9b008dc9c448a651->enter($__internal_ac786627b90ed5a1d03f336aa539013bd4754d576b53417b9b008dc9c448a651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ac786627b90ed5a1d03f336aa539013bd4754d576b53417b9b008dc9c448a651->leave($__internal_ac786627b90ed5a1d03f336aa539013bd4754d576b53417b9b008dc9c448a651_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
