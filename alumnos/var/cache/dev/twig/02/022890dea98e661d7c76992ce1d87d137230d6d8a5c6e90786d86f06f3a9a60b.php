<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_08b85d37659744533e852c1d8173934d1eb23eb9295b565fb7a43cad4ea66ecf extends Twig_Template
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
        $__internal_b3e3620dda7c389f426ae65ed6be87cbbf9ff900eea8a281732065591916c0a6 = $this->env->getExtension("native_profiler");
        $__internal_b3e3620dda7c389f426ae65ed6be87cbbf9ff900eea8a281732065591916c0a6->enter($__internal_b3e3620dda7c389f426ae65ed6be87cbbf9ff900eea8a281732065591916c0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b3e3620dda7c389f426ae65ed6be87cbbf9ff900eea8a281732065591916c0a6->leave($__internal_b3e3620dda7c389f426ae65ed6be87cbbf9ff900eea8a281732065591916c0a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
