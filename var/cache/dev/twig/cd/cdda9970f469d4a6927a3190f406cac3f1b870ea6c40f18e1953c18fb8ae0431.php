<?php

/* FormArmorBundle:Admin:formClient.html.twig */
class __TwigTemplate_9d0256a93d7da992c68d6b4a4287e07f372bb958e5d24b53dc1a5b7954d33e3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::admin_layout.html.twig", "FormArmorBundle:Admin:formClient.html.twig", 1);
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
        $__internal_9f6f3407ad041ee6449a83cc8b497f7ea0148b47aeea3341ac0b875a790cca14 = $this->env->getExtension("native_profiler");
        $__internal_9f6f3407ad041ee6449a83cc8b497f7ea0148b47aeea3341ac0b875a790cca14->enter($__internal_9f6f3407ad041ee6449a83cc8b497f7ea0148b47aeea3341ac0b875a790cca14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:formClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f6f3407ad041ee6449a83cc8b497f7ea0148b47aeea3341ac0b875a790cca14->leave($__internal_9f6f3407ad041ee6449a83cc8b497f7ea0148b47aeea3341ac0b875a790cca14_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_cc66be983aed2a06178fddc255712799e2ac52268f1aaf9632fb8676267ba0cc = $this->env->getExtension("native_profiler");
        $__internal_cc66be983aed2a06178fddc255712799e2ac52268f1aaf9632fb8676267ba0cc->enter($__internal_cc66be983aed2a06178fddc255712799e2ac52268f1aaf9632fb8676267ba0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h3>Formulaire de ";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo " du client</h3>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statut", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Statut : "));
        echo "
\t\t  ";
        // line 15
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statut", array()), 'errors');
        echo "
\t\t  ";
        // line 17
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statut", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 19
        echo "\t\t  ";
        // line 20
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Nom : "));
        echo "
\t\t  ";
        // line 22
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t  ";
        // line 24
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 26
        echo "\t\t  ";
        // line 27
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Adresse : "));
        echo "
\t\t  ";
        // line 29
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
\t\t  ";
        // line 31
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 33
        echo "\t\t  ";
        // line 34
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Code postal : "));
        echo "
\t\t  ";
        // line 36
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'errors');
        echo "
\t\t  ";
        // line 38
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 40
        echo "\t\t  ";
        // line 41
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Ville : "));
        echo "
\t\t  ";
        // line 43
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
\t\t  ";
        // line 45
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 47
        echo "\t\t  ";
        // line 48
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "E Mail : "));
        echo "
\t\t  ";
        // line 50
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t  ";
        // line 52
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 54
        echo "\t\t  ";
        // line 55
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbhcpta", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Nombre d'heures compta : "));
        echo "
\t\t  ";
        // line 57
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbhcpta", array()), 'errors');
        echo "
\t\t  ";
        // line 59
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbhcpta", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  ";
        // line 61
        echo "\t\t  ";
        // line 62
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbhbur", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Nombre d'heures bureautique : "));
        echo "
\t\t  ";
        // line 64
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbhbur", array()), 'errors');
        echo "
\t\t  ";
        // line 66
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbhbur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  <br/>
\t  ";
        // line 69
        echo "\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
\t  
\t  ";
        // line 72
        echo "\t  <input type=\"button\" value=\"Retour\" class = \"btn btn-primary\" onClick=\"history.go(-1)\" />

\t  ";
        // line 77
        echo "\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t  ";
        // line 80
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
        
        $__internal_cc66be983aed2a06178fddc255712799e2ac52268f1aaf9632fb8676267ba0cc->leave($__internal_cc66be983aed2a06178fddc255712799e2ac52268f1aaf9632fb8676267ba0cc_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Admin:formClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 80,  205 => 77,  201 => 72,  195 => 69,  189 => 66,  184 => 64,  179 => 62,  177 => 61,  172 => 59,  167 => 57,  162 => 55,  160 => 54,  155 => 52,  150 => 50,  145 => 48,  143 => 47,  138 => 45,  133 => 43,  128 => 41,  126 => 40,  121 => 38,  116 => 36,  111 => 34,  109 => 33,  104 => 31,  99 => 29,  94 => 27,  92 => 26,  87 => 24,  82 => 22,  77 => 20,  75 => 19,  70 => 17,  65 => 15,  60 => 13,  58 => 12,  52 => 9,  47 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::admin_layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	<h3>Formulaire de {{ action }} du client</h3>*/
/* */
/* 	<div class="well">*/
/* 	  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/* 	  {# Les erreurs générales du formulaire. #}*/
/* 	  {{ form_errors(form) }}*/
/* */
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.statut, "Statut : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.statut) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.statut, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.nom, "Nom : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.nom) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.adresse, "Adresse : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.adresse) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.cp, "Code postal : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.cp) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.cp, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.ville, "Ville : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.ville) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.ville, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.email, "E Mail : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.email) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.nbhcpta, "Nombre d'heures compta : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.nbhcpta) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.nbhcpta, {'attr': {'class': 'form-control'}}) }}*/
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.nbhbur, "Nombre d'heures bureautique : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.nbhbur) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.nbhbur, {'attr': {'class': 'form-control'}}) }}*/
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
