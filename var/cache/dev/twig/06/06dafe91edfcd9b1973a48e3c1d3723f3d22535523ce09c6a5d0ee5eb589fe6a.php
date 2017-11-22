<?php

/* FormArmorBundle:Admin:accueil.html.twig */
class __TwigTemplate_d6d386f048000d26b5467c83f6af5b8fd2c038cfd52afa752ad2fa1ebf627b8d extends Twig_Template
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
        $__internal_fb8fda07830f7e68571c22fe4778ce37eb6a39e77efcc9043abe0e670e6eefc2 = $this->env->getExtension("native_profiler");
        $__internal_fb8fda07830f7e68571c22fe4778ce37eb6a39e77efcc9043abe0e670e6eefc2->enter($__internal_fb8fda07830f7e68571c22fe4778ce37eb6a39e77efcc9043abe0e670e6eefc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb8fda07830f7e68571c22fe4778ce37eb6a39e77efcc9043abe0e670e6eefc2->leave($__internal_fb8fda07830f7e68571c22fe4778ce37eb6a39e77efcc9043abe0e670e6eefc2_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_bb122da747c79fa44b0ccaabfaa57ef3de29e9602c22d921e627dfd90be00342 = $this->env->getExtension("native_profiler");
        $__internal_bb122da747c79fa44b0ccaabfaa57ef3de29e9602c22d921e627dfd90be00342->enter($__internal_bb122da747c79fa44b0ccaabfaa57ef3de29e9602c22d921e627dfd90be00342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h2>Gestion des donn&eacute;es</h2>
\t

";
        
        $__internal_bb122da747c79fa44b0ccaabfaa57ef3de29e9602c22d921e627dfd90be00342->leave($__internal_bb122da747c79fa44b0ccaabfaa57ef3de29e9602c22d921e627dfd90be00342_prof);

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
