<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7e6e1017abecae14822431df666f6a803021d5211019897e9ed1cfa02188f757 extends Twig_Template
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
        $__internal_70b921129778f018539f8dec3f05c3766d00937fffbcd908fd93fcb8cc91f558 = $this->env->getExtension("native_profiler");
        $__internal_70b921129778f018539f8dec3f05c3766d00937fffbcd908fd93fcb8cc91f558->enter($__internal_70b921129778f018539f8dec3f05c3766d00937fffbcd908fd93fcb8cc91f558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_70b921129778f018539f8dec3f05c3766d00937fffbcd908fd93fcb8cc91f558->leave($__internal_70b921129778f018539f8dec3f05c3766d00937fffbcd908fd93fcb8cc91f558_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
