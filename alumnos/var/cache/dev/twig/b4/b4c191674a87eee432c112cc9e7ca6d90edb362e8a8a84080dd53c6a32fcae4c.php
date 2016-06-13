<?php

/* ::tabla.html.twig */
class __TwigTemplate_bd81f4a1672544df8551b319cc4d6699cbddb8ded67b11bea8e750bbd5e1f37f extends Twig_Template
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
        $__internal_42df3adf18aec2d07ca3bf84676d931e5b8025d52455ad41a26171004407c3e1 = $this->env->getExtension("native_profiler");
        $__internal_42df3adf18aec2d07ca3bf84676d931e5b8025d52455ad41a26171004407c3e1->enter($__internal_42df3adf18aec2d07ca3bf84676d931e5b8025d52455ad41a26171004407c3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::tabla.html.twig"));

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
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["prop"]) {
            // line 9
            echo "\t\t<tr>
\t\t\t<td>";
            // line 10
            echo twig_escape_filter($this->env, $context["prop"], "html", null, true);
            echo "</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</tbody>
</table>";
        
        $__internal_42df3adf18aec2d07ca3bf84676d931e5b8025d52455ad41a26171004407c3e1->leave($__internal_42df3adf18aec2d07ca3bf84676d931e5b8025d52455ad41a26171004407c3e1_prof);

    }

    public function getTemplateName()
    {
        return "::tabla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  50 => 10,  47 => 9,  43 => 8,  39 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <table>*/
/* 	<thead>*/
/* 	{% for c in cabeceras %}*/
/* 		<th>{{c}}</th>*/
/* 	{% endfor %}*/
/* 	</thead>*/
/* 	<tbody>*/
/* 		{% for prop in user %}*/
/* 		<tr>*/
/* 			<td>{{ prop }}</td>*/
/* 		</tr>*/
/* 		{% endfor %}*/
/* 	</tbody>*/
/* </table>*/
