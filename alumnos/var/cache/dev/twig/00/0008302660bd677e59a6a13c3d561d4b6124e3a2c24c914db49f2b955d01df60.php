<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f7d68b72380593f1a8296610b55958ad8202f98e5b8bac3b55c63b1278d25738 extends Twig_Template
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
        $__internal_104566289167ce09a5701acc5279848642b9a5cd5a3a350ca71776d12d7b68e8 = $this->env->getExtension("native_profiler");
        $__internal_104566289167ce09a5701acc5279848642b9a5cd5a3a350ca71776d12d7b68e8->enter($__internal_104566289167ce09a5701acc5279848642b9a5cd5a3a350ca71776d12d7b68e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_104566289167ce09a5701acc5279848642b9a5cd5a3a350ca71776d12d7b68e8->leave($__internal_104566289167ce09a5701acc5279848642b9a5cd5a3a350ca71776d12d7b68e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
