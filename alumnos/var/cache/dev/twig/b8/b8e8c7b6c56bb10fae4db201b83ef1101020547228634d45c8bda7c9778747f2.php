<?php

/* default/perfil.html.twig */
class __TwigTemplate_da02966e142619f6476cceb82399805112789bb485149837c7bd2f35476f1475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/perfil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9af8bbbefaf935248438f8faad6cde49626b3b1d71c685136a9b23d282e0749 = $this->env->getExtension("native_profiler");
        $__internal_a9af8bbbefaf935248438f8faad6cde49626b3b1d71c685136a9b23d282e0749->enter($__internal_a9af8bbbefaf935248438f8faad6cde49626b3b1d71c685136a9b23d282e0749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/perfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9af8bbbefaf935248438f8faad6cde49626b3b1d71c685136a9b23d282e0749->leave($__internal_a9af8bbbefaf935248438f8faad6cde49626b3b1d71c685136a9b23d282e0749_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9a49799c5bf300f59ce603216b25a0fc476e00261a110678776b04bdf98d89a = $this->env->getExtension("native_profiler");
        $__internal_a9a49799c5bf300f59ce603216b25a0fc476e00261a110678776b04bdf98d89a->enter($__internal_a9a49799c5bf300f59ce603216b25a0fc476e00261a110678776b04bdf98d89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Perfil";
        
        $__internal_a9a49799c5bf300f59ce603216b25a0fc476e00261a110678776b04bdf98d89a->leave($__internal_a9a49799c5bf300f59ce603216b25a0fc476e00261a110678776b04bdf98d89a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cad3f820de68c39711832ce33d76eef7f6e2e3cb67a1d9a4fe0705ba5c56b4b = $this->env->getExtension("native_profiler");
        $__internal_3cad3f820de68c39711832ce33d76eef7f6e2e3cb67a1d9a4fe0705ba5c56b4b->enter($__internal_3cad3f820de68c39711832ce33d76eef7f6e2e3cb67a1d9a4fe0705ba5c56b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"titulo\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre", array()), "html", null, true);
        echo " | Mi ";
        $this->displayBlock("title", $context, $blocks);
        echo "</div>
\t<br/>
\t<div class=\"tabla\">
\t\t<table>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Nombre</th>\t\t
\t\t\t\t<td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Apellido</th>\t\t
\t\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "apellido", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Edad</th>\t\t
\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "edad", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_3cad3f820de68c39711832ce33d76eef7f6e2e3cb67a1d9a4fe0705ba5c56b4b->leave($__internal_3cad3f820de68c39711832ce33d76eef7f6e2e3cb67a1d9a4fe0705ba5c56b4b_prof);

    }

    public function getTemplateName()
    {
        return "default/perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  73 => 15,  66 => 11,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig'%}*/
/* {% block title %}Perfil{% endblock %}*/
/* {% block body %}*/
/* 	<div class="titulo">{{user.nombre}} | Mi {{ block('title') }}</div>*/
/* 	<br/>*/
/* 	<div class="tabla">*/
/* 		<table>*/
/* 		<tbody>*/
/* 			<tr>*/
/* 				<th>Nombre</th>		*/
/* 				<td>{{ user.nombre }}</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<th>Apellido</th>		*/
/* 				<td>{{ user.apellido }}</td>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<th>Edad</th>		*/
/* 				<td>{{ user.edad }}</td>*/
/* 			</tr>*/
/* 		</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
