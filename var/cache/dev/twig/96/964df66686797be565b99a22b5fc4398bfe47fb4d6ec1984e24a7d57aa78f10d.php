<?php

/* FormArmorBundle:Admin:formStatut.html.twig */
class __TwigTemplate_a8700e8d85e88e9d688c1cde3e2a08c031385db9b379717d71eec15369030bf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::admin_layout.html.twig", "FormArmorBundle:Admin:formStatut.html.twig", 1);
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
        $__internal_ef13de813817f8f349da61ec6de593030064fa03a2c326d26bd7a77ac86b66f4 = $this->env->getExtension("native_profiler");
        $__internal_ef13de813817f8f349da61ec6de593030064fa03a2c326d26bd7a77ac86b66f4->enter($__internal_ef13de813817f8f349da61ec6de593030064fa03a2c326d26bd7a77ac86b66f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:formStatut.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef13de813817f8f349da61ec6de593030064fa03a2c326d26bd7a77ac86b66f4->leave($__internal_ef13de813817f8f349da61ec6de593030064fa03a2c326d26bd7a77ac86b66f4_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_b2e358e866513e66e266d3cfff49606ccd8addb7dddeba1f46701e5cab62ce31 = $this->env->getExtension("native_profiler");
        $__internal_b2e358e866513e66e266d3cfff49606ccd8addb7dddeba1f46701e5cab62ce31->enter($__internal_b2e358e866513e66e266d3cfff49606ccd8addb7dddeba1f46701e5cab62ce31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h3>Formulaire de ";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo " du statut</h3>

\t<div class=\"well\">
\t  ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t  ";
        // line 9
        echo "\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t  ";
        // line 12
        echo "\t\t  ";
        // line 13
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Type : "));
        echo "
\t\t  ";
        // line 15
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
\t\t  ";
        // line 17
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  
\t  ";
        // line 20
        echo "\t\t  ";
        // line 21
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tauxHoraire", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Taux horaire : "));
        echo "
\t\t  ";
        // line 23
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tauxHoraire", array()), 'errors');
        echo "
\t\t  ";
        // line 25
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tauxHoraire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  <br/>
\t  ";
        // line 28
        echo "\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
\t  
\t  ";
        // line 31
        echo "\t  <input type=\"button\" value=\"Retour\" class = \"btn btn-primary\" onClick=\"history.go(-1)\" />

\t  ";
        // line 36
        echo "\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t  ";
        // line 39
        echo "\t  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu1').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_b2e358e866513e66e266d3cfff49606ccd8addb7dddeba1f46701e5cab62ce31->leave($__internal_b2e358e866513e66e266d3cfff49606ccd8addb7dddeba1f46701e5cab62ce31_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Admin:formStatut.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  104 => 36,  100 => 31,  94 => 28,  88 => 25,  83 => 23,  78 => 21,  76 => 20,  70 => 17,  65 => 15,  60 => 13,  58 => 12,  52 => 9,  47 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::admin_layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	<h3>Formulaire de {{ action }} du statut</h3>*/
/* */
/* 	<div class="well">*/
/* 	  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/* 	  {# Les erreurs générales du formulaire. #}*/
/* 	  {{ form_errors(form) }}*/
/* */
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.type, "Type : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.type) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.type, {'attr': {'class': 'form-control'}}) }}*/
/* 	  */
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.tauxHoraire, "Taux horaire : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.tauxHoraire) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.tauxHoraire, {'attr': {'class': 'form-control'}}) }}*/
/* 	  <br/>*/
/* 	  {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/* 	  {{ form_widget(form.Valider, {'attr': {'class': 'btn btn-danger'}}) }}*/
/* 	  */
/* 	  {# Bouton permettant de revenir à la page précédente sans valider #}*/
/* 	  <input type="button" value="Retour" class = "btn btn-primary" onClick="history.go(-1)" />*/
/* */
/* 	  {# Génération automatique des champs pas encore écrits.*/
/* 		 Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/* 		 et tous les champs cachés (type « hidden »). #}*/
/* 	  {{ form_rest(form) }}*/
/* */
/* 	  {# Fermeture de la balise <form> du formulaire HTML #}*/
/* 	  {{ form_end(form) }}*/
/* 	</div>*/
/* 	<script>*/
/* 		$(function() {*/
/* 			$('#menu1').attr('class', 'active');*/
/* 		});*/
/* 	</script>*/
/* 	*/
/* {% endblock %}*/
