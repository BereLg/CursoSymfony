<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f6b8da81bfa465eee124a56cffbeacd2365180f94d79062262a0bc7964250c82 extends Twig_Template
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
        $__internal_1e55618df9ac592edcd4319aac7318301e15293b8c85a472ca5565fa74b4fa5c = $this->env->getExtension("native_profiler");
        $__internal_1e55618df9ac592edcd4319aac7318301e15293b8c85a472ca5565fa74b4fa5c->enter($__internal_1e55618df9ac592edcd4319aac7318301e15293b8c85a472ca5565fa74b4fa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1e55618df9ac592edcd4319aac7318301e15293b8c85a472ca5565fa74b4fa5c->leave($__internal_1e55618df9ac592edcd4319aac7318301e15293b8c85a472ca5565fa74b4fa5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
