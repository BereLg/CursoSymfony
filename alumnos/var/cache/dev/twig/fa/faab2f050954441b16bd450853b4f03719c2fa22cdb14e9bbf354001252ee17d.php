<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c473948bc99f54644efc7b808e1dbbd25fb1f7d0787dc0dcedde60b39d2ea403 extends Twig_Template
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
        $__internal_a689431d0fda92a05c8555b0601e56d20401601c62ed1c643345b11808381e86 = $this->env->getExtension("native_profiler");
        $__internal_a689431d0fda92a05c8555b0601e56d20401601c62ed1c643345b11808381e86->enter($__internal_a689431d0fda92a05c8555b0601e56d20401601c62ed1c643345b11808381e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a689431d0fda92a05c8555b0601e56d20401601c62ed1c643345b11808381e86->leave($__internal_a689431d0fda92a05c8555b0601e56d20401601c62ed1c643345b11808381e86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
