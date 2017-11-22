<?php

/* FormArmorBundle::layout.html.twig */
class __TwigTemplate_46f608057db0491be1fbc6c247a1d810d87675f12b43e07c1655b655f0b5a556 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
            'FormArmor_body' => array($this, 'block_FormArmor_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e562c49c4bd5199370764ea65129eeb0d84f206dbded69b87ef925f4bb05a43 = $this->env->getExtension("native_profiler");
        $__internal_9e562c49c4bd5199370764ea65129eeb0d84f206dbded69b87ef925f4bb05a43->enter($__internal_9e562c49c4bd5199370764ea65129eeb0d84f206dbded69b87ef925f4bb05a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle::layout.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>FORM'ARMOR</title>
\t\t";
        // line 6
        echo "\t\t";
        $this->displayBlock('styles', $context, $blocks);
        // line 19
        echo "\t</head>
\t
\t";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_9e562c49c4bd5199370764ea65129eeb0d84f206dbded69b87ef925f4bb05a43->leave($__internal_9e562c49c4bd5199370764ea65129eeb0d84f206dbded69b87ef925f4bb05a43_prof);

    }

    // line 6
    public function block_styles($context, array $blocks = array())
    {
        $__internal_7937ec29b3ec554b55b3ce3aa2c71b8d4bc59088d06e4f257bb51b6ff4023d9b = $this->env->getExtension("native_profiler");
        $__internal_7937ec29b3ec554b55b3ce3aa2c71b8d4bc59088d06e4f257bb51b6ff4023d9b->enter($__internal_7937ec29b3ec554b55b3ce3aa2c71b8d4bc59088d06e4f257bb51b6ff4023d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 7
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t\t<style>
\t\t\t\t.carousel-inner > .item > img,
\t\t\t\t.carousel-inner > .item > a > img
\t\t\t\t{
\t\t\t\t\twidth: 70%;
\t\t\t\t\tmargin: auto;
\t\t\t\t}
\t\t\t</style>
\t\t";
        
        $__internal_7937ec29b3ec554b55b3ce3aa2c71b8d4bc59088d06e4f257bb51b6ff4023d9b->leave($__internal_7937ec29b3ec554b55b3ce3aa2c71b8d4bc59088d06e4f257bb51b6ff4023d9b_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_88ec5f31e1d4e23fe58ed4ecff09eb0bd0fd1d48f17d10b3e81aef2ab60f554c = $this->env->getExtension("native_profiler");
        $__internal_88ec5f31e1d4e23fe58ed4ecff09eb0bd0fd1d48f17d10b3e81aef2ab60f554c->enter($__internal_88ec5f31e1d4e23fe58ed4ecff09eb0bd0fd1d48f17d10b3e81aef2ab60f554c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "\t\t";
        // line 23
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\"> 
\t\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/banniere.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<nav class=\"navbar navbar-inverse\">
\t\t\t\t\t  <div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t  <a class=\"navbar-brand\" href=\"#\">FormArmor</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t  <li id='menu1'><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("form_armor_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t  <li id='menu2'><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("form_armor_formations");
        echo "\">Formations</a></li>
\t\t\t\t\t\t  <li id='menu3'><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("form_armor_admin");
        echo "\">Administration</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t  </div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t";
        // line 50
        echo "\t\t\t\t\t";
        $this->displayBlock('FormArmor_body', $context, $blocks);
        // line 53
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t  <h4>FormArmor c'est :</h4>
\t\t\t\t\t  <div class=\"list-group\">
\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t  <h4 class=\"list-group-item-heading\">Des personnes à votre service</h4>
\t\t\t\t\t\t  <p class=\"list-group-item-text\">4 conseillers en formation continue</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t  <h4 class=\"list-group-item-heading\">Une implantation sur tout le territoire</h4>
\t\t\t\t\t\t  <p class=\"list-group-item-text\">25 établissements adhérents</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t  <h4 class=\"list-group-item-heading\">Un savoir faire incomparable</h4>
\t\t\t\t\t\t  <p class=\"list-group-item-text\">2000 stagiaires formés chaque année</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t  </div>
\t\t\t\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/carte_Formarmor.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t
\t\t
\t";
        
        $__internal_88ec5f31e1d4e23fe58ed4ecff09eb0bd0fd1d48f17d10b3e81aef2ab60f554c->leave($__internal_88ec5f31e1d4e23fe58ed4ecff09eb0bd0fd1d48f17d10b3e81aef2ab60f554c_prof);

    }

    // line 50
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_e163b0544de4f7440ce64cbeb10b387ceab3baf0a10f79b27e611133a4d75050 = $this->env->getExtension("native_profiler");
        $__internal_e163b0544de4f7440ce64cbeb10b387ceab3baf0a10f79b27e611133a4d75050->enter($__internal_e163b0544de4f7440ce64cbeb10b387ceab3baf0a10f79b27e611133a4d75050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 51
        echo "\t\t\t\t\t\t
\t\t\t\t\t";
        
        $__internal_e163b0544de4f7440ce64cbeb10b387ceab3baf0a10f79b27e611133a4d75050->leave($__internal_e163b0544de4f7440ce64cbeb10b387ceab3baf0a10f79b27e611133a4d75050_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  167 => 51,  161 => 50,  147 => 70,  128 => 53,  125 => 50,  111 => 38,  107 => 37,  103 => 36,  89 => 25,  85 => 23,  83 => 22,  77 => 21,  60 => 9,  56 => 8,  51 => 7,  45 => 6,  38 => 21,  34 => 19,  31 => 6,  25 => 1,);
    }
}
/* <html>*/
/* 	<head>*/
/* 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* 		<title>FORM'ARMOR</title>*/
/* 		{# Bloc que l'on pourra éventuellement modifié dans les templates finaux #}*/
/* 		{% block styles %}*/
/* 			<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />*/
/* 			<script src="{{ asset('js/jquery.js') }}"></script>*/
/* 			<script src="{{ asset('js/bootstrap.js') }}"></script>*/
/* 			<style>*/
/* 				.carousel-inner > .item > img,*/
/* 				.carousel-inner > .item > a > img*/
/* 				{*/
/* 					width: 70%;*/
/* 					margin: auto;*/
/* 				}*/
/* 			</style>*/
/* 		{% endblock %}*/
/* 	</head>*/
/* 	*/
/* 	{% block body %}*/
/* 		{# Ici on va définir une banniere et un menu commun à toutes les pages du Bunble FormArmor #}*/
/* 			<div class="row">*/
/* 				<div class="col-md-12"> */
/* 					<img src="{{ asset('images/banniere.jpg') }}" class="img-responsive" />*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<nav class="navbar navbar-inverse">*/
/* 					  <div class="container-fluid">*/
/* 						<div class="navbar-header">*/
/* 						  <a class="navbar-brand" href="#">FormArmor</a>*/
/* 						</div>*/
/* 						<ul class="nav navbar-nav">*/
/* 						  <li id='menu1'><a href="{{ path('form_armor_homepage') }}">Accueil</a></li>*/
/* 						  <li id='menu2'><a href="{{ path('form_armor_formations') }}">Formations</a></li>*/
/* 						  <li id='menu3'><a href="{{ path('form_armor_admin') }}">Administration</a></li>*/
/* 						</ul>*/
/* 					  </div>*/
/* 					</nav>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				*/
/* 				<div class="col-md-1">*/
/* 				</div>*/
/* 				<div class="col-md-8">*/
/* 					{# Ici se trouve le bloc que les vues du bundle pourront remplir #}*/
/* 					{% block FormArmor_body %}*/
/* 						*/
/* 					{% endblock %}*/
/* 				</div>*/
/* 				<div class="col-md-3">*/
/* 					  <h4>FormArmor c'est :</h4>*/
/* 					  <div class="list-group">*/
/* 						<a href="#" class="list-group-item">*/
/* 						  <h4 class="list-group-item-heading">Des personnes à votre service</h4>*/
/* 						  <p class="list-group-item-text">4 conseillers en formation continue</p>*/
/* 						</a>*/
/* 						<a href="#" class="list-group-item">*/
/* 						  <h4 class="list-group-item-heading">Une implantation sur tout le territoire</h4>*/
/* 						  <p class="list-group-item-text">25 établissements adhérents</p>*/
/* 						</a>*/
/* 						<a href="#" class="list-group-item">*/
/* 						  <h4 class="list-group-item-heading">Un savoir faire incomparable</h4>*/
/* 						  <p class="list-group-item-text">2000 stagiaires formés chaque année</p>*/
/* 						</a>*/
/* 					  </div>*/
/* 						<img src="{{ asset('images/carte_Formarmor.jpg') }}" class="img-responsive" />*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 		*/
/* 		*/
/* 	{% endblock %}*/
/* */
