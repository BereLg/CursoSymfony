<?php

/* base.html.twig */
class __TwigTemplate_302b34c25fc655fd2dfa63bdd6bc1f8dc7881c2624ed168329fe1bf4cb2bf688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55c61676b16bbe3428eeb015fdd2156e7fd3b265104fc145ff234b3391b2a74b = $this->env->getExtension("native_profiler");
        $__internal_55c61676b16bbe3428eeb015fdd2156e7fd3b265104fc145ff234b3391b2a74b->enter($__internal_55c61676b16bbe3428eeb015fdd2156e7fd3b265104fc145ff234b3391b2a74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | Alumnos</title>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\"  media=\"screen,projection\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t</head>
\t<body>
\t\t<header class=\"logo\">
\t\t\t<div class=\"center\">Gestión de Alumnos</div>
\t\t</header>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ayuda");
        echo "\">Ayuda</a></li>
\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("perfil");
        echo "\">Mi perfil</a></li>
\t\t\t</ul>\t\t\t\t
\t\t</nav>
\t\t<br/>
\t\t";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "\t</body>
</html>
";
        
        $__internal_55c61676b16bbe3428eeb015fdd2156e7fd3b265104fc145ff234b3391b2a74b->leave($__internal_55c61676b16bbe3428eeb015fdd2156e7fd3b265104fc145ff234b3391b2a74b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a546f624c503347f085bfb963b91dc1b1dfeea2711144560ebb15675fed6a83 = $this->env->getExtension("native_profiler");
        $__internal_4a546f624c503347f085bfb963b91dc1b1dfeea2711144560ebb15675fed6a83->enter($__internal_4a546f624c503347f085bfb963b91dc1b1dfeea2711144560ebb15675fed6a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4a546f624c503347f085bfb963b91dc1b1dfeea2711144560ebb15675fed6a83->leave($__internal_4a546f624c503347f085bfb963b91dc1b1dfeea2711144560ebb15675fed6a83_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09ebf40374aef21d5a6eb76d3aa48280fbc0bdeb42f0f45f9011955a3edd5a01 = $this->env->getExtension("native_profiler");
        $__internal_09ebf40374aef21d5a6eb76d3aa48280fbc0bdeb42f0f45f9011955a3edd5a01->enter($__internal_09ebf40374aef21d5a6eb76d3aa48280fbc0bdeb42f0f45f9011955a3edd5a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_09ebf40374aef21d5a6eb76d3aa48280fbc0bdeb42f0f45f9011955a3edd5a01->leave($__internal_09ebf40374aef21d5a6eb76d3aa48280fbc0bdeb42f0f45f9011955a3edd5a01_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_20f61d5614f63869c2d47ef77a66fb9f39f3e2ca83d39f7de61ba22ec8ad2889 = $this->env->getExtension("native_profiler");
        $__internal_20f61d5614f63869c2d47ef77a66fb9f39f3e2ca83d39f7de61ba22ec8ad2889->enter($__internal_20f61d5614f63869c2d47ef77a66fb9f39f3e2ca83d39f7de61ba22ec8ad2889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20f61d5614f63869c2d47ef77a66fb9f39f3e2ca83d39f7de61ba22ec8ad2889->leave($__internal_20f61d5614f63869c2d47ef77a66fb9f39f3e2ca83d39f7de61ba22ec8ad2889_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_73b4c92ae90c212ed15db4d108af00ad2f48837487af8c1d05efbf6931e111b1 = $this->env->getExtension("native_profiler");
        $__internal_73b4c92ae90c212ed15db4d108af00ad2f48837487af8c1d05efbf6931e111b1->enter($__internal_73b4c92ae90c212ed15db4d108af00ad2f48837487af8c1d05efbf6931e111b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_73b4c92ae90c212ed15db4d108af00ad2f48837487af8c1d05efbf6931e111b1->leave($__internal_73b4c92ae90c212ed15db4d108af00ad2f48837487af8c1d05efbf6931e111b1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 23,  102 => 22,  91 => 6,  80 => 5,  71 => 24,  68 => 23,  66 => 22,  59 => 18,  55 => 17,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8" />*/
/* 		<title>{% block title %}{% endblock %} | Alumnos</title>*/
/* 		{% block stylesheets %}{% endblock %}*/
/* 		<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* 		<link type="text/css" rel="stylesheet" href="{{ asset('css/estilos.css') }}"  media="screen,projection"/>*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/* 	</head>*/
/* 	<body>*/
/* 		<header class="logo">*/
/* 			<div class="center">Gestión de Alumnos</div>*/
/* 		</header>*/
/* 		<nav>*/
/* 			<ul>*/
/* 				<li><a href="{{ path('ayuda') }}">Ayuda</a></li>*/
/* 				<li><a href="{{ path('perfil') }}">Mi perfil</a></li>*/
/* 			</ul>				*/
/* 		</nav>*/
/* 		<br/>*/
/* 		{% block body %}{% endblock %}*/
/* 		{% block javascripts %}{% endblock %}*/
/* 	</body>*/
/* </html>*/
/* */
