<?php

/* FormArmorBundle:Admin:provisoire.html.twig */
class __TwigTemplate_ad3166ec93cb4f202405c4a19402949aec2bc56216e3e40bf9bd2a8a24551bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::layout.html.twig", "FormArmorBundle:Admin:provisoire.html.twig", 1);
        $this->blocks = array(
            'FormArmor_body' => array($this, 'block_FormArmor_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FormArmorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d561a320e1d7fb516a968ce035d37f8b13babc7b5803c6ebbae2fa1223460495 = $this->env->getExtension("native_profiler");
        $__internal_d561a320e1d7fb516a968ce035d37f8b13babc7b5803c6ebbae2fa1223460495->enter($__internal_d561a320e1d7fb516a968ce035d37f8b13babc7b5803c6ebbae2fa1223460495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:provisoire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d561a320e1d7fb516a968ce035d37f8b13babc7b5803c6ebbae2fa1223460495->leave($__internal_d561a320e1d7fb516a968ce035d37f8b13babc7b5803c6ebbae2fa1223460495_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_c21935325e7c6d7dc77a887eb97aa96f3304fa515ded55f4a7427435c551b9d4 = $this->env->getExtension("native_profiler");
        $__internal_c21935325e7c6d7dc77a887eb97aa96f3304fa515ded55f4a7427435c551b9d4->enter($__internal_c21935325e7c6d7dc77a887eb97aa96f3304fa515ded55f4a7427435c551b9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h3>Controle de saisie</h3>


\tNombre de clients : ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb")), "html", null, true);
        echo "
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu3').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_c21935325e7c6d7dc77a887eb97aa96f3304fa515ded55f4a7427435c551b9d4->leave($__internal_c21935325e7c6d7dc77a887eb97aa96f3304fa515ded55f4a7427435c551b9d4_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Admin:provisoire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	<h3>Controle de saisie</h3>*/
/* */
/* */
/* 	Nombre de clients : {{ nb }}*/
/* 	<script>*/
/* 		$(function() {*/
/* 			$('#menu3').attr('class', 'active');*/
/* 		});*/
/* 	</script>*/
/* 	*/
/* {% endblock %}*/
