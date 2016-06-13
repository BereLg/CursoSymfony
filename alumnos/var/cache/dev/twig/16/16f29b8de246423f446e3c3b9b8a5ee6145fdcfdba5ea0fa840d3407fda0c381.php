<?php

/* tabla.html.twig */
class __TwigTemplate_7b53c6bbbfb14e79f5636843952a7e006f4af24cbef69c0539daa8ed89521f74 extends Twig_Template
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
        $__internal_bea84c6ffe258f3b551e45702ec7ae130c6042225d0214d21a029e45c48123d2 = $this->env->getExtension("native_profiler");
        $__internal_bea84c6ffe258f3b551e45702ec7ae130c6042225d0214d21a029e45c48123d2->enter($__internal_bea84c6ffe258f3b551e45702ec7ae130c6042225d0214d21a029e45c48123d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tabla.html.twig"));

        // line 1
        echo "<table>
\t<thead>
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cabeceras"]) ? $context["cabeceras"] : $this->getContext($context, "cabeceras")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 4
            echo "\t\t<th>";
            echo twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo "</th>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contenido"]) ? $context["contenido"] : $this->getContext($context, "contenido")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 10
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo "</td>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t</tr>
\t</tbody>
</table>";
        
        $__internal_bea84c6ffe258f3b551e45702ec7ae130c6042225d0214d21a029e45c48123d2->leave($__internal_bea84c6ffe258f3b551e45702ec7ae130c6042225d0214d21a029e45c48123d2_prof);

    }

    public function getTemplateName()
    {
        return "tabla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  48 => 10,  44 => 9,  39 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <table>*/
/* 	<thead>*/
/* 	{% for c in cabeceras %}*/
/* 		<th>{{c}}</th>*/
/* 	{% endfor %}*/
/* 	</thead>*/
/* 	<tbody>*/
/* 		<tr>*/
/* 			{% for c in contenido %}*/
/* 			<td>{{ c }}</td>*/
/* 			{% endfor %}*/
/* 		</tr>*/
/* 	</tbody>*/
/* </table>*/
