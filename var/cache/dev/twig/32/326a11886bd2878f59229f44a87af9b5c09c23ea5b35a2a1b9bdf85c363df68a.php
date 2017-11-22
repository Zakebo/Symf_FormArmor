<?php

/* FormArmorBundle:Admin:connection.html.twig */
class __TwigTemplate_408f31685179f168335b6d77832209491cda57328586479d44f95a425abc9243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::layout.html.twig", "FormArmorBundle:Admin:connection.html.twig", 1);
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
        $__internal_07b0fee270ecb3764e9fed47796a42ed37edf7a65d4e27a8f90ccfd06c8d7d16 = $this->env->getExtension("native_profiler");
        $__internal_07b0fee270ecb3764e9fed47796a42ed37edf7a65d4e27a8f90ccfd06c8d7d16->enter($__internal_07b0fee270ecb3764e9fed47796a42ed37edf7a65d4e27a8f90ccfd06c8d7d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:connection.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07b0fee270ecb3764e9fed47796a42ed37edf7a65d4e27a8f90ccfd06c8d7d16->leave($__internal_07b0fee270ecb3764e9fed47796a42ed37edf7a65d4e27a8f90ccfd06c8d7d16_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_2acf8f953ee6245c147043fdff1fd8ad91d2565aaacbcf7438ccb6f6af882566 = $this->env->getExtension("native_profiler");
        $__internal_2acf8f953ee6245c147043fdff1fd8ad91d2565aaacbcf7438ccb6f6af882566->enter($__internal_2acf8f953ee6245c147043fdff1fd8ad91d2565aaacbcf7438ccb6f6af882566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h3>Formulaire d'authentification</h3>


\t<div class=\"well\">
\t  ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t  ";
        // line 10
        echo "\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t  ";
        // line 13
        echo "\t\t  ";
        // line 14
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Nom : "));
        echo "
\t\t  ";
        // line 16
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t  ";
        // line 18
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  
\t  ";
        // line 21
        echo "\t\t  ";
        // line 22
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Mot de passe : "));
        echo "
\t\t  ";
        // line 24
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
\t\t  ";
        // line 26
        echo "\t\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t  <br/>
\t  ";
        // line 29
        echo "\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Envoyer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

\t  ";
        // line 34
        echo "\t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t  ";
        // line 37
        echo "\t  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
\t";
        // line 40
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "connection"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 41
            echo "\t\t<div class=\"flash-notice\">
\t\t\t<script>alert('";
            // line 42
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "');</script>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t<script>
\t\t\$(function() {
\t\t\t\$('#menu3').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_2acf8f953ee6245c147043fdff1fd8ad91d2565aaacbcf7438ccb6f6af882566->leave($__internal_2acf8f953ee6245c147043fdff1fd8ad91d2565aaacbcf7438ccb6f6af882566_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Admin:connection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 45,  119 => 42,  116 => 41,  111 => 40,  105 => 37,  99 => 34,  93 => 29,  87 => 26,  82 => 24,  77 => 22,  75 => 21,  69 => 18,  64 => 16,  59 => 14,  57 => 13,  51 => 10,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	<h3>Formulaire d'authentification</h3>*/
/* */
/* */
/* 	<div class="well">*/
/* 	  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/* 	  {# Les erreurs générales du formulaire. #}*/
/* 	  {{ form_errors(form) }}*/
/* */
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.nom, "Nom : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.nom) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}*/
/* 	  */
/* 	  {# Génération du controle de façon détaillée pour l'exemple #}*/
/* 		  {# Génération du label. #}*/
/* 		  {{ form_label(form.password, "Mot de passe : ", {'label_attr': {'class': 'form-label'}}) }}*/
/* 		  {# Affichage des erreurs pour ce champ précis. #}*/
/* 		  {{ form_errors(form.password) }}*/
/* 		  {# Génération de l'input. #}*/
/* 		  {{ form_widget(form.password, {'attr': {'class': 'form-control'}}) }}*/
/* 	  <br/>*/
/* 	  {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/* 	  {{ form_widget(form.Envoyer, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/* 	  {# Génération automatique des champs pas encore écrits.*/
/* 		 Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/* 		 et tous les champs cachés (type « hidden »). #}*/
/* 	  {{ form_rest(form) }}*/
/* */
/* 	  {# Fermeture de la balise <form> du formulaire HTML #}*/
/* 	  {{ form_end(form) }}*/
/* 	</div>*/
/* 	{# Affichage des messages éventuels. Par exemple après une insertion via un formulaire #}*/
/* 	{% for flash_message in app.session.flashBag.get('connection') %}*/
/* 		<div class="flash-notice">*/
/* 			<script>alert('{{ flash_message }}');</script>*/
/* 		</div>*/
/* 	{% endfor %}*/
/* 	<script>*/
/* 		$(function() {*/
/* 			$('#menu3').attr('class', 'active');*/
/* 		});*/
/* 	</script>*/
/* 	*/
/* {% endblock %}*/
