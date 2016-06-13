<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_41a793ed404163268f2dcd0b1a81c067d122332d73d86f7e7ad2e1990023dc06 extends Twig_Template
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
        $__internal_c6d94bd4a512a0f0098618f11400d7632dd4504b3ed77388eaf79b721a6856f8 = $this->env->getExtension("native_profiler");
        $__internal_c6d94bd4a512a0f0098618f11400d7632dd4504b3ed77388eaf79b721a6856f8->enter($__internal_c6d94bd4a512a0f0098618f11400d7632dd4504b3ed77388eaf79b721a6856f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c6d94bd4a512a0f0098618f11400d7632dd4504b3ed77388eaf79b721a6856f8->leave($__internal_c6d94bd4a512a0f0098618f11400d7632dd4504b3ed77388eaf79b721a6856f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
