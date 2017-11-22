<?php

/* FormArmorBundle:Admin:accueil.html.twig */
class __TwigTemplate_128d5a6ce6667da7e7ebfdd384accb2a93113367ede9b46cb423bb3e4d208327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::admin_layout.html.twig", "FormArmorBundle:Admin:accueil.html.twig", 1);
        $this->blocks = array(
            'FormArmor_body' => array($this, 'block_FormArmor_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FormArmorBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_533d3a0911d467440b26dad23417b112d61fe673e9331a8e53450d7584fca31d = $this->env->getExtension("native_profiler");
        $__internal_533d3a0911d467440b26dad23417b112d61fe673e9331a8e53450d7584fca31d->enter($__internal_533d3a0911d467440b26dad23417b112d61fe673e9331a8e53450d7584fca31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_533d3a0911d467440b26dad23417b112d61fe673e9331a8e53450d7584fca31d->leave($__internal_533d3a0911d467440b26dad23417b112d61fe673e9331a8e53450d7584fca31d_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_d5151c15f95212eff382884befc15af60e0d693bae5d8973c186013cfda9a703 = $this->env->getExtension("native_profiler");
        $__internal_d5151c15f95212eff382884befc15af60e0d693bae5d8973c186013cfda9a703->enter($__internal_d5151c15f95212eff382884befc15af60e0d693bae5d8973c186013cfda9a703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h2>Gestion des donn&eacute;es</h2>
\t

";
        
        $__internal_d5151c15f95212eff382884befc15af60e0d693bae5d8973c186013cfda9a703->leave($__internal_d5151c15f95212eff382884befc15af60e0d693bae5d8973c186013cfda9a703_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Admin:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::admin_layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	<h2>Gestion des donn&eacute;es</h2>*/
/* 	*/
/* */
/* {% endblock %}*/
