<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b8c490da8d6952ded29c6faadbfa156b9c8ccaf0bf379be37cf70e40585e6ed9 extends Twig_Template
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
        $__internal_350f2a93d155d45dae74a8f3356833222d728979e24bfcf98e0ae97f62e7e6a1 = $this->env->getExtension("native_profiler");
        $__internal_350f2a93d155d45dae74a8f3356833222d728979e24bfcf98e0ae97f62e7e6a1->enter($__internal_350f2a93d155d45dae74a8f3356833222d728979e24bfcf98e0ae97f62e7e6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_350f2a93d155d45dae74a8f3356833222d728979e24bfcf98e0ae97f62e7e6a1->leave($__internal_350f2a93d155d45dae74a8f3356833222d728979e24bfcf98e0ae97f62e7e6a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
