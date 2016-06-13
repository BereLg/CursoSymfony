<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8b94248aa147e15870f04880bc3a01332698c99752d14dc1600be76557de8b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_2b6fc79269fb4bc04b0f17e56d59b305fc182ab8b8444cc78d9edabd6e0597b9 = $this->env->getExtension("native_profiler");
        $__internal_2b6fc79269fb4bc04b0f17e56d59b305fc182ab8b8444cc78d9edabd6e0597b9->enter($__internal_2b6fc79269fb4bc04b0f17e56d59b305fc182ab8b8444cc78d9edabd6e0597b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6fc79269fb4bc04b0f17e56d59b305fc182ab8b8444cc78d9edabd6e0597b9->leave($__internal_2b6fc79269fb4bc04b0f17e56d59b305fc182ab8b8444cc78d9edabd6e0597b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_625b8d1944e1fad765e8c1641674b0de85f79d18750c54a4b47db7804a1aa460 = $this->env->getExtension("native_profiler");
        $__internal_625b8d1944e1fad765e8c1641674b0de85f79d18750c54a4b47db7804a1aa460->enter($__internal_625b8d1944e1fad765e8c1641674b0de85f79d18750c54a4b47db7804a1aa460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_625b8d1944e1fad765e8c1641674b0de85f79d18750c54a4b47db7804a1aa460->leave($__internal_625b8d1944e1fad765e8c1641674b0de85f79d18750c54a4b47db7804a1aa460_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c355e3f0d6beeaf9dc5c216b6730f0f004ee4c48fb74a5f431a5e30ad648981 = $this->env->getExtension("native_profiler");
        $__internal_6c355e3f0d6beeaf9dc5c216b6730f0f004ee4c48fb74a5f431a5e30ad648981->enter($__internal_6c355e3f0d6beeaf9dc5c216b6730f0f004ee4c48fb74a5f431a5e30ad648981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c355e3f0d6beeaf9dc5c216b6730f0f004ee4c48fb74a5f431a5e30ad648981->leave($__internal_6c355e3f0d6beeaf9dc5c216b6730f0f004ee4c48fb74a5f431a5e30ad648981_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6108bbfcc473b06113a357394f75e9cb58e808a4ea2927a4786f3044615f017 = $this->env->getExtension("native_profiler");
        $__internal_b6108bbfcc473b06113a357394f75e9cb58e808a4ea2927a4786f3044615f017->enter($__internal_b6108bbfcc473b06113a357394f75e9cb58e808a4ea2927a4786f3044615f017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b6108bbfcc473b06113a357394f75e9cb58e808a4ea2927a4786f3044615f017->leave($__internal_b6108bbfcc473b06113a357394f75e9cb58e808a4ea2927a4786f3044615f017_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
