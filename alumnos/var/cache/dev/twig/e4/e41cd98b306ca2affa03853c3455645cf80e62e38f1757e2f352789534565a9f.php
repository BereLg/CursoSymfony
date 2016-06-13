<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_513c3df0fc647379ee56e6caf94a16e311132d613ddb237cf2a320b732cbfc4d extends Twig_Template
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
        $__internal_dcca672ce5646bc3f0e1396c9d42af069532c45c95ff8ce66fb3bd559d404190 = $this->env->getExtension("native_profiler");
        $__internal_dcca672ce5646bc3f0e1396c9d42af069532c45c95ff8ce66fb3bd559d404190->enter($__internal_dcca672ce5646bc3f0e1396c9d42af069532c45c95ff8ce66fb3bd559d404190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_dcca672ce5646bc3f0e1396c9d42af069532c45c95ff8ce66fb3bd559d404190->leave($__internal_dcca672ce5646bc3f0e1396c9d42af069532c45c95ff8ce66fb3bd559d404190_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
