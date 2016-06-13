<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6b5260b863525683e70bb9eeb1920582b079146e2a49fb6abc9fbb1259536c69 extends Twig_Template
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
        $__internal_32917694a138ed9db9bfa9317514858ea79be27908999d9391f3f076703803e9 = $this->env->getExtension("native_profiler");
        $__internal_32917694a138ed9db9bfa9317514858ea79be27908999d9391f3f076703803e9->enter($__internal_32917694a138ed9db9bfa9317514858ea79be27908999d9391f3f076703803e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_32917694a138ed9db9bfa9317514858ea79be27908999d9391f3f076703803e9->leave($__internal_32917694a138ed9db9bfa9317514858ea79be27908999d9391f3f076703803e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
