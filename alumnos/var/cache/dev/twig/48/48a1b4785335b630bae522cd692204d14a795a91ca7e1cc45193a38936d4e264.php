<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_73606483a2afbca4f0429159889ee1f713d5d7f2c5f7579c2c80748f3bbecf7e extends Twig_Template
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
        $__internal_b69b89ca79a910266cce75f286141c7e26d4e7d2203481d7227ea1c0a7eb1f32 = $this->env->getExtension("native_profiler");
        $__internal_b69b89ca79a910266cce75f286141c7e26d4e7d2203481d7227ea1c0a7eb1f32->enter($__internal_b69b89ca79a910266cce75f286141c7e26d4e7d2203481d7227ea1c0a7eb1f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b69b89ca79a910266cce75f286141c7e26d4e7d2203481d7227ea1c0a7eb1f32->leave($__internal_b69b89ca79a910266cce75f286141c7e26d4e7d2203481d7227ea1c0a7eb1f32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
