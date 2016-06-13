<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6d0b13d6f5eaf75b4322ed4803b4770033448b1769c4b864642d57cde7a5b49a extends Twig_Template
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
        $__internal_09d1ef73ba6c837d5082c2d81f4083719c602bbaabb475b5e9a91103996edb05 = $this->env->getExtension("native_profiler");
        $__internal_09d1ef73ba6c837d5082c2d81f4083719c602bbaabb475b5e9a91103996edb05->enter($__internal_09d1ef73ba6c837d5082c2d81f4083719c602bbaabb475b5e9a91103996edb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_09d1ef73ba6c837d5082c2d81f4083719c602bbaabb475b5e9a91103996edb05->leave($__internal_09d1ef73ba6c837d5082c2d81f4083719c602bbaabb475b5e9a91103996edb05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
