<?php

/* :default:perfil.html.twig */
class __TwigTemplate_48533c3bcd9a2bf700b19ed2b2719c350f960180068a4608cb76a10d8f77e41d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:perfil.html.twig", 1);
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
        $__internal_b075ef8ef6ad669f10e7324ff6e964688a9ac693dafd1c17dfb406e9e3ab3cfa = $this->env->getExtension("native_profiler");
        $__internal_b075ef8ef6ad669f10e7324ff6e964688a9ac693dafd1c17dfb406e9e3ab3cfa->enter($__internal_b075ef8ef6ad669f10e7324ff6e964688a9ac693dafd1c17dfb406e9e3ab3cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:perfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b075ef8ef6ad669f10e7324ff6e964688a9ac693dafd1c17dfb406e9e3ab3cfa->leave($__internal_b075ef8ef6ad669f10e7324ff6e964688a9ac693dafd1c17dfb406e9e3ab3cfa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_30412a8a6c2217cb4be10a76e5724317f961eb540abdb14785a4b570d5f2d66d = $this->env->getExtension("native_profiler");
        $__internal_30412a8a6c2217cb4be10a76e5724317f961eb540abdb14785a4b570d5f2d66d->enter($__internal_30412a8a6c2217cb4be10a76e5724317f961eb540abdb14785a4b570d5f2d66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Perfil";
        
        $__internal_30412a8a6c2217cb4be10a76e5724317f961eb540abdb14785a4b570d5f2d66d->leave($__internal_30412a8a6c2217cb4be10a76e5724317f961eb540abdb14785a4b570d5f2d66d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c87bd85088d3319e7d0c3ec98ff7ec3092f0562c3091cced39aac5fb9a09c4bd = $this->env->getExtension("native_profiler");
        $__internal_c87bd85088d3319e7d0c3ec98ff7ec3092f0562c3091cced39aac5fb9a09c4bd->enter($__internal_c87bd85088d3319e7d0c3ec98ff7ec3092f0562c3091cced39aac5fb9a09c4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h3>user.nombre | ";
        $this->displayBlock("title", $context, $blocks);
        echo "</h3>
\t<div class=\"\">
\t\t";
        // line 7
        echo "\t\t<table>
\t\t\t<thead>
\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cabeceras"]) ? $context["cabeceras"] : $this->getContext($context, "cabeceras")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 10
            echo "\t\t\t\t\t<th>";
            echo twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo "</th>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["prop"]) {
            // line 15
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $context["prop"], "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_c87bd85088d3319e7d0c3ec98ff7ec3092f0562c3091cced39aac5fb9a09c4bd->leave($__internal_c87bd85088d3319e7d0c3ec98ff7ec3092f0562c3091cced39aac5fb9a09c4bd_prof);

    }

    public function getTemplateName()
    {
        return ":default:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  87 => 16,  84 => 15,  80 => 14,  76 => 12,  67 => 10,  63 => 9,  59 => 7,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig'%}*/
/* {% block title %}Perfil{% endblock %}*/
/* {% block body %}*/
/* 	<h3>user.nombre | {{ block('title') }}</h3>*/
/* 	<div class="">*/
/* 		{# include 'tabla.html.twig' #}*/
/* 		<table>*/
/* 			<thead>*/
/* 				{% for c in cabeceras %}*/
/* 					<th>{{c}}</th>*/
/* 				{% endfor %}*/
/* 			</thead>*/
/* 			<tbody>*/
/* 				{% for prop in user %}*/
/* 				<tr>*/
/* 					<td>{{ prop }}</td>*/
/* 				</tr>*/
/* 				{% endfor %}*/
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* {% endblock %}*/
