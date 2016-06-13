<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2e08176aefc2582878b18d8d255d2a7dada33158c37a4708fac63bfa02d34646 extends Twig_Template
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
        $__internal_d6f30771aa67502c76c19a17b6a22a9dcbde6c7fcf2d55a0491377659ac33945 = $this->env->getExtension("native_profiler");
        $__internal_d6f30771aa67502c76c19a17b6a22a9dcbde6c7fcf2d55a0491377659ac33945->enter($__internal_d6f30771aa67502c76c19a17b6a22a9dcbde6c7fcf2d55a0491377659ac33945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d6f30771aa67502c76c19a17b6a22a9dcbde6c7fcf2d55a0491377659ac33945->leave($__internal_d6f30771aa67502c76c19a17b6a22a9dcbde6c7fcf2d55a0491377659ac33945_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
