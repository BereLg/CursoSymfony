<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_995f926fde706ba0b56ca7185d09368bb2d5a7c29ec50f27a3d03a30a424b1ca extends Twig_Template
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
        $__internal_b3a8b0e8b5435df69a2bbecdc09598a08e1e7f599261d61d28804c3b81b9e909 = $this->env->getExtension("native_profiler");
        $__internal_b3a8b0e8b5435df69a2bbecdc09598a08e1e7f599261d61d28804c3b81b9e909->enter($__internal_b3a8b0e8b5435df69a2bbecdc09598a08e1e7f599261d61d28804c3b81b9e909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b3a8b0e8b5435df69a2bbecdc09598a08e1e7f599261d61d28804c3b81b9e909->leave($__internal_b3a8b0e8b5435df69a2bbecdc09598a08e1e7f599261d61d28804c3b81b9e909_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
