<?php

/* FormArmorBundle:Admin:accueil.html.twig */
class __TwigTemplate_9a7bcc5c79b0ed11fbbd0a46334394c334e5317cd87a8dab89142267505661e3 extends Twig_Template
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
        $__internal_296e9a1e4e1627b30b33bf953e298e20b914ea6d208b680363ff6613020a8460 = $this->env->getExtension("native_profiler");
        $__internal_296e9a1e4e1627b30b33bf953e298e20b914ea6d208b680363ff6613020a8460->enter($__internal_296e9a1e4e1627b30b33bf953e298e20b914ea6d208b680363ff6613020a8460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_296e9a1e4e1627b30b33bf953e298e20b914ea6d208b680363ff6613020a8460->leave($__internal_296e9a1e4e1627b30b33bf953e298e20b914ea6d208b680363ff6613020a8460_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_8a0d276a69784b68151f317fabf3fc1ac09567b5529e90a77313e69190615b23 = $this->env->getExtension("native_profiler");
        $__internal_8a0d276a69784b68151f317fabf3fc1ac09567b5529e90a77313e69190615b23->enter($__internal_8a0d276a69784b68151f317fabf3fc1ac09567b5529e90a77313e69190615b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h2>Gestion des donn&eacute;es</h2>
\t

";
        
        $__internal_8a0d276a69784b68151f317fabf3fc1ac09567b5529e90a77313e69190615b23->leave($__internal_8a0d276a69784b68151f317fabf3fc1ac09567b5529e90a77313e69190615b23_prof);

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
