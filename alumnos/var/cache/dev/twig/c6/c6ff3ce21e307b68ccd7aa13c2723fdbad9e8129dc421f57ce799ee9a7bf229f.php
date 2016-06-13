<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cad9eed2d74ca3c7c50334ede6431749ea36c9c0d906eaa4257133be2fbff2ba extends Twig_Template
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
        $__internal_e9bf261c1100a5d37fc914a65bebed3ac927841fb253bef153521f33a88b625b = $this->env->getExtension("native_profiler");
        $__internal_e9bf261c1100a5d37fc914a65bebed3ac927841fb253bef153521f33a88b625b->enter($__internal_e9bf261c1100a5d37fc914a65bebed3ac927841fb253bef153521f33a88b625b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e9bf261c1100a5d37fc914a65bebed3ac927841fb253bef153521f33a88b625b->leave($__internal_e9bf261c1100a5d37fc914a65bebed3ac927841fb253bef153521f33a88b625b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
