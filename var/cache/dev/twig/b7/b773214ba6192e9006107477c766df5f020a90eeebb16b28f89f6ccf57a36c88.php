<?php

/* FormArmorBundle:Admin:formSession.html.twig */
class __TwigTemplate_13ff0c68306ad314396055779bd5fbaabaf670546f79fad2cfc64a1ec7ba5a1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::admin_layout.html.twig", "FormArmorBundle:Admin:formSession.html.twig", 1);
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
        $__internal_01d54bd25f78ca52b540335b553c407463591367c4367cae395d6bb59d582cbe = $this->env->getExtension("native_profiler");
        $__internal_01d54bd25f78ca52b540335b553c407463591367c4367cae395d6bb59d582cbe->enter($__internal_01d54bd25f78ca52b540335b553c407463591367c4367cae395d6bb59d582cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:formSession.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01d54bd25f78ca52b540335b553c407463591367c4367cae395d6bb59d582cbe->leave($__internal_01d54bd25f78ca52b540335b553c407463591367c4367cae395d6bb59d582cbe_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_1cc62a6edbfd1212ba00e1366f08bbf527df3276a8b57323172c755cac0de457 = $this->env->getExtension("native_profiler");
        $__internal_1cc62a6edbfd1212ba00e1366f08bbf527df3276a8b57323172c755cac0de457->enter($__internal_1cc62a6edbfd1212ba00e1366f08bbf527df3276a8b57323172c755cac0de457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h3>Formulaire de ";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo " de la session de formation</h3>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formation", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Formation : "));
        echo "
\t\t  ";
        // line 15
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formation", array()), 'errors');
        echo "
\t\t  ";
        // line 17
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 19
        echo "\t\t  ";
        // line 20
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Date debut : "));
        echo "
\t\t  ";
        // line 22
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'errors');
        echo "
\t\t  ";
        // line 24
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 26
        echo "\t\t  ";
        // line 27
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPlaces", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Nombre de places : "));
        echo "
\t\t  ";
        // line 29
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPlaces", array()), 'errors');
        echo "
\t\t  ";
        // line 31
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPlaces", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 33
        echo "\t\t  ";
        // line 34
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbInscrits", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Nombre d'inscrits : "));
        echo "
\t\t  ";
        // line 36
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbInscrits", array()), 'errors');
        echo "
\t\t  ";
        // line 38
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbInscrits", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 40
        echo "\t\t  ";
        // line 41
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "close", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Close : "));
        echo "
\t\t  ";
        // line 43
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "close", array()), 'errors');
        echo "
\t\t  ";
        // line 45
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "close", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  <br/>
\t  ";
        // line 48
        echo "\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
\t  
\t  ";
        // line 51
        echo "\t  <input type=\"button\" value=\"Retour\" class = \"btn btn-primary\" onClick=\"history.go(-1)\" />

\t  ";
        // line 56
        echo "\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t  ";
        // line 59
        echo "\t  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu4').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_1cc62a6edbfd1212ba00e1366f08bbf527df3276a8b57323172c755cac0de457->leave($__internal_1cc62a6edbfd1212ba00e1366f08bbf527df3276a8b57323172c755cac0de457_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Admin:formSession.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 59,  154 => 56,  150 => 51,  144 => 48,  138 => 45,  133 => 43,  128 => 41,  126 => 40,  121 => 38,  116 => 36,  111 => 34,  109 => 33,  104 => 31,  99 => 29,  94 => 27,  92 => 26,  87 => 24,  82 => 22,  77 => 20,  75 => 19,  70 => 17,  65 => 15,  60 => 13,  58 => 12,  52 => 9,  47 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::admin_layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	<h3>Formulaire de {{ action }} de la session de formation</h3>*/
/* */
/* 	<div class="well">*/
/* 	  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/* 	  {# Les erreurs générales du formulaire. #}*/
/* 	  {{ form_errors(form) }}*/
/* */
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.formation, "Formation : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.formation) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.formation, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.dateDebut, "Date debut : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.dateDebut) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.dateDebut, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.nbPlaces, "Nombre de places : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.nbPlaces) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.nbPlaces, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.nbInscrits, "Nombre d'inscrits : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.nbInscrits) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.nbInscrits, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.close, "Close : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.close) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.close, {'attr': {'class': 'form-control'}}) }}*/
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
/* 			$('#menu4').attr('class', 'active');*/
/* 		});*/
/* 	</script>*/
/* 	*/
/* {% endblock %}*/
