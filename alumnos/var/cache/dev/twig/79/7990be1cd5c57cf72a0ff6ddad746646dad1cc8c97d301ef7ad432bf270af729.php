<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b6983e59fbcc21dca22daff82c2737a3b6c6e7af2560b1654a5e44b163f48fb5 extends Twig_Template
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
        $__internal_f89707b64d3aa511ad37262ed6db109ba0fd58e45c752a410282d7846a470a2c = $this->env->getExtension("native_profiler");
        $__internal_f89707b64d3aa511ad37262ed6db109ba0fd58e45c752a410282d7846a470a2c->enter($__internal_f89707b64d3aa511ad37262ed6db109ba0fd58e45c752a410282d7846a470a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f89707b64d3aa511ad37262ed6db109ba0fd58e45c752a410282d7846a470a2c->leave($__internal_f89707b64d3aa511ad37262ed6db109ba0fd58e45c752a410282d7846a470a2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
