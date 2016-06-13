<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1cb650cb92cfa3af04dab8d5adc4bd5cf78e53d8c173547b089e9f673fa42ef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae14f928e27548a3882bafa5e484d93405351b0eaa052aaf3afa6a882d3f380f = $this->env->getExtension("native_profiler");
        $__internal_ae14f928e27548a3882bafa5e484d93405351b0eaa052aaf3afa6a882d3f380f->enter($__internal_ae14f928e27548a3882bafa5e484d93405351b0eaa052aaf3afa6a882d3f380f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae14f928e27548a3882bafa5e484d93405351b0eaa052aaf3afa6a882d3f380f->leave($__internal_ae14f928e27548a3882bafa5e484d93405351b0eaa052aaf3afa6a882d3f380f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c42d5f8c7a710071e984c424726b775ad1ee7c0f6ff45230c7f65d6edcd2ae6 = $this->env->getExtension("native_profiler");
        $__internal_2c42d5f8c7a710071e984c424726b775ad1ee7c0f6ff45230c7f65d6edcd2ae6->enter($__internal_2c42d5f8c7a710071e984c424726b775ad1ee7c0f6ff45230c7f65d6edcd2ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c42d5f8c7a710071e984c424726b775ad1ee7c0f6ff45230c7f65d6edcd2ae6->leave($__internal_2c42d5f8c7a710071e984c424726b775ad1ee7c0f6ff45230c7f65d6edcd2ae6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0f66353114764556e32c80871c956b084e449a1ec68f9cb1bfc1e2cbb8470c2 = $this->env->getExtension("native_profiler");
        $__internal_f0f66353114764556e32c80871c956b084e449a1ec68f9cb1bfc1e2cbb8470c2->enter($__internal_f0f66353114764556e32c80871c956b084e449a1ec68f9cb1bfc1e2cbb8470c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f0f66353114764556e32c80871c956b084e449a1ec68f9cb1bfc1e2cbb8470c2->leave($__internal_f0f66353114764556e32c80871c956b084e449a1ec68f9cb1bfc1e2cbb8470c2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59b8584bd663b19f580e0c759734ad6a813003fe51b0ffacd35ccce7aeb90471 = $this->env->getExtension("native_profiler");
        $__internal_59b8584bd663b19f580e0c759734ad6a813003fe51b0ffacd35ccce7aeb90471->enter($__internal_59b8584bd663b19f580e0c759734ad6a813003fe51b0ffacd35ccce7aeb90471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_59b8584bd663b19f580e0c759734ad6a813003fe51b0ffacd35ccce7aeb90471->leave($__internal_59b8584bd663b19f580e0c759734ad6a813003fe51b0ffacd35ccce7aeb90471_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
