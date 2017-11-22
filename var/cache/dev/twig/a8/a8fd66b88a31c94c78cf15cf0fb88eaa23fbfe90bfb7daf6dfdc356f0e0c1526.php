<?php

/* FormArmorBundle:Admin:formFormation.html.twig */
class __TwigTemplate_7fa2ca0533cbee2462e795bb7e35da54e2ee43468e13fa19e62a2a27d2116215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::admin_layout.html.twig", "FormArmorBundle:Admin:formFormation.html.twig", 1);
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
        $__internal_5a20cb8e7a861e997044139910f1011361908d21e2fe11621034d7fabad198ba = $this->env->getExtension("native_profiler");
        $__internal_5a20cb8e7a861e997044139910f1011361908d21e2fe11621034d7fabad198ba->enter($__internal_5a20cb8e7a861e997044139910f1011361908d21e2fe11621034d7fabad198ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:formFormation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a20cb8e7a861e997044139910f1011361908d21e2fe11621034d7fabad198ba->leave($__internal_5a20cb8e7a861e997044139910f1011361908d21e2fe11621034d7fabad198ba_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_3d3e47fc88222f45002901a10152d01262268a367413db8c0043ea1eaa4829f1 = $this->env->getExtension("native_profiler");
        $__internal_3d3e47fc88222f45002901a10152d01262268a367413db8c0043ea1eaa4829f1->enter($__internal_3d3e47fc88222f45002901a10152d01262268a367413db8c0043ea1eaa4829f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h3>Formulaire de ";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo " de la formation</h3>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Libell&eacute; : "));
        echo "
\t\t  ";
        // line 15
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'errors');
        echo "
\t\t  ";
        // line 17
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 19
        echo "\t\t  ";
        // line 20
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Niveau : "));
        echo "
\t\t  ";
        // line 22
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'errors');
        echo "
\t\t  ";
        // line 24
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 26
        echo "\t\t  ";
        // line 27
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeForm", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Type de formation : "));
        echo "
\t\t  ";
        // line 29
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeForm", array()), 'errors');
        echo "
\t\t  ";
        // line 31
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeForm", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 33
        echo "\t\t  ";
        // line 34
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Description : "));
        echo "
\t\t  ";
        // line 36
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
\t\t  ";
        // line 38
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 40
        echo "\t\t  ";
        // line 41
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomante", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Diplomante : "));
        echo "
\t\t  ";
        // line 43
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomante", array()), 'errors');
        echo "
\t\t  ";
        // line 45
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplomante", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 47
        echo "\t\t  ";
        // line 48
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Duree : "));
        echo "
\t\t  ";
        // line 50
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", array()), 'errors');
        echo "
\t\t  ";
        // line 52
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 54
        echo "\t\t  ";
        // line 55
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coutrevient", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Cout de revient : "));
        echo "
\t\t  ";
        // line 57
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coutrevient", array()), 'errors');
        echo "
\t\t  ";
        // line 59
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coutrevient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  <br/>
\t  ";
        // line 62
        echo "\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
\t  
\t  ";
        // line 65
        echo "\t  <input type=\"button\" value=\"Retour\" class = \"btn btn-primary\" onClick=\"history.go(-1)\" />

\t  ";
        // line 70
        echo "\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t  ";
        // line 73
        echo "\t  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu3').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_3d3e47fc88222f45002901a10152d01262268a367413db8c0043ea1eaa4829f1->leave($__internal_3d3e47fc88222f45002901a10152d01262268a367413db8c0043ea1eaa4829f1_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Admin:formFormation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 73,  188 => 70,  184 => 65,  178 => 62,  172 => 59,  167 => 57,  162 => 55,  160 => 54,  155 => 52,  150 => 50,  145 => 48,  143 => 47,  138 => 45,  133 => 43,  128 => 41,  126 => 40,  121 => 38,  116 => 36,  111 => 34,  109 => 33,  104 => 31,  99 => 29,  94 => 27,  92 => 26,  87 => 24,  82 => 22,  77 => 20,  75 => 19,  70 => 17,  65 => 15,  60 => 13,  58 => 12,  52 => 9,  47 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::admin_layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	<h3>Formulaire de {{ action }} de la formation</h3>*/
/* */
/* 	<div class="well">*/
/* 	  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/* 	  {# Les erreurs générales du formulaire. #}*/
/* 	  {{ form_errors(form) }}*/
/* */
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.libelle, "Libell&eacute; : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.libelle) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.libelle, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.niveau, "Niveau : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.niveau) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.niveau, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.typeForm, "Type de formation : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.typeForm) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.typeForm, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.description, "Description : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.description) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.diplomante, "Diplomante : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.diplomante) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.diplomante, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.duree, "Duree : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.duree) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.duree, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.coutrevient, "Cout de revient : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.coutrevient) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.coutrevient, {'attr': {'class': 'form-control'}}) }}*/
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
/* 			$('#menu3').attr('class', 'active');*/
/* 		});*/
/* 	</script>*/
/* 	*/
/* {% endblock %}*/
