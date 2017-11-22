<?php

/* FormArmorBundle:Admin:provisoire.html.twig */
class __TwigTemplate_bbdbc6f3ac58f03d5666d49e91cb9abf58c2d81d9cb0c73609a555f4c4c30a6a extends Twig_Template
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
        $__internal_c1da0dbaf15a7c9169262df9cb59751a8eda0cec61a3ed15ecc5b51d70184411 = $this->env->getExtension("native_profiler");
        $__internal_c1da0dbaf15a7c9169262df9cb59751a8eda0cec61a3ed15ecc5b51d70184411->enter($__internal_c1da0dbaf15a7c9169262df9cb59751a8eda0cec61a3ed15ecc5b51d70184411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:provisoire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1da0dbaf15a7c9169262df9cb59751a8eda0cec61a3ed15ecc5b51d70184411->leave($__internal_c1da0dbaf15a7c9169262df9cb59751a8eda0cec61a3ed15ecc5b51d70184411_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_1b81d72228fd52f13e5fd178cd4f698dce2b00a5ee75dd3528a36a5b72f11818 = $this->env->getExtension("native_profiler");
        $__internal_1b81d72228fd52f13e5fd178cd4f698dce2b00a5ee75dd3528a36a5b72f11818->enter($__internal_1b81d72228fd52f13e5fd178cd4f698dce2b00a5ee75dd3528a36a5b72f11818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

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
        
        $__internal_1b81d72228fd52f13e5fd178cd4f698dce2b00a5ee75dd3528a36a5b72f11818->leave($__internal_1b81d72228fd52f13e5fd178cd4f698dce2b00a5ee75dd3528a36a5b72f11818_prof);

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
