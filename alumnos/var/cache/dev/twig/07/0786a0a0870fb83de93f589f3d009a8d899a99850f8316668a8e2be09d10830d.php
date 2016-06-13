<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4485448ce75087c56952629bebd61b28e6ffb77c48c595ccc554fdac23897ebe extends Twig_Template
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
        $__internal_f95ffafa4d8d798a7b0da43c0664495a74cf6343192bacbf53c7d20e0b13519c = $this->env->getExtension("native_profiler");
        $__internal_f95ffafa4d8d798a7b0da43c0664495a74cf6343192bacbf53c7d20e0b13519c->enter($__internal_f95ffafa4d8d798a7b0da43c0664495a74cf6343192bacbf53c7d20e0b13519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f95ffafa4d8d798a7b0da43c0664495a74cf6343192bacbf53c7d20e0b13519c->leave($__internal_f95ffafa4d8d798a7b0da43c0664495a74cf6343192bacbf53c7d20e0b13519c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
