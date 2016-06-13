<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e8e5698a58f71afd571723e0814b45518b4638211c3a10b62702912e928339f2 extends Twig_Template
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
        $__internal_e78f61bf607f531365213e5100a7f04b92b408cdb4bdc9e44eaec185707be49e = $this->env->getExtension("native_profiler");
        $__internal_e78f61bf607f531365213e5100a7f04b92b408cdb4bdc9e44eaec185707be49e->enter($__internal_e78f61bf607f531365213e5100a7f04b92b408cdb4bdc9e44eaec185707be49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e78f61bf607f531365213e5100a7f04b92b408cdb4bdc9e44eaec185707be49e->leave($__internal_e78f61bf607f531365213e5100a7f04b92b408cdb4bdc9e44eaec185707be49e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
