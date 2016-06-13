<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_6c5eb1feb3cde421a84ab70df2fceb43cbc5043084a0cb114245d68f637795e0 extends Twig_Template
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
        $__internal_461b620597cfe737fa8facfd77729516f027ae233bdca16cacccfff454544f9c = $this->env->getExtension("native_profiler");
        $__internal_461b620597cfe737fa8facfd77729516f027ae233bdca16cacccfff454544f9c->enter($__internal_461b620597cfe737fa8facfd77729516f027ae233bdca16cacccfff454544f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_461b620597cfe737fa8facfd77729516f027ae233bdca16cacccfff454544f9c->leave($__internal_461b620597cfe737fa8facfd77729516f027ae233bdca16cacccfff454544f9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
