<?php

/* FormArmorBundle::layout.html.twig */
class __TwigTemplate_d4dd0d3a69b129d8555cc462e39cc27064c862181cadd98dc4908d70594fbabc extends Twig_Template
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
        $__internal_e4bdd20991d48ac47666360e2d196e5ad717105557cfdf0df4f0665391e58ca9 = $this->env->getExtension("native_profiler");
        $__internal_e4bdd20991d48ac47666360e2d196e5ad717105557cfdf0df4f0665391e58ca9->enter($__internal_e4bdd20991d48ac47666360e2d196e5ad717105557cfdf0df4f0665391e58ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle::layout.html.twig"));

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
        
        $__internal_e4bdd20991d48ac47666360e2d196e5ad717105557cfdf0df4f0665391e58ca9->leave($__internal_e4bdd20991d48ac47666360e2d196e5ad717105557cfdf0df4f0665391e58ca9_prof);

    }

    // line 6
    public function block_styles($context, array $blocks = array())
    {
        $__internal_bb4e3ccc299b17936a5d0c5810dd50cf0a0fe872f02f276946d1965d03c61ab9 = $this->env->getExtension("native_profiler");
        $__internal_bb4e3ccc299b17936a5d0c5810dd50cf0a0fe872f02f276946d1965d03c61ab9->enter($__internal_bb4e3ccc299b17936a5d0c5810dd50cf0a0fe872f02f276946d1965d03c61ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
        
        $__internal_bb4e3ccc299b17936a5d0c5810dd50cf0a0fe872f02f276946d1965d03c61ab9->leave($__internal_bb4e3ccc299b17936a5d0c5810dd50cf0a0fe872f02f276946d1965d03c61ab9_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cf9952b11a92a6a2acc69134d10fc7e3ff2c99ff1e9d928e2566124f1b42530 = $this->env->getExtension("native_profiler");
        $__internal_2cf9952b11a92a6a2acc69134d10fc7e3ff2c99ff1e9d928e2566124f1b42530->enter($__internal_2cf9952b11a92a6a2acc69134d10fc7e3ff2c99ff1e9d928e2566124f1b42530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t  <li id='menu3'><a href=\"#\">Administration</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t  </div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t";
        // line 50
        echo "\t\t\t\t\t";
        $this->displayBlock('FormArmor_body', $context, $blocks);
        // line 53
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
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
        
        $__internal_2cf9952b11a92a6a2acc69134d10fc7e3ff2c99ff1e9d928e2566124f1b42530->leave($__internal_2cf9952b11a92a6a2acc69134d10fc7e3ff2c99ff1e9d928e2566124f1b42530_prof);

    }

    // line 50
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_da7754cc049c1913fc6a2c4489c59272107da58efac369e114fe79d096db925f = $this->env->getExtension("native_profiler");
        $__internal_da7754cc049c1913fc6a2c4489c59272107da58efac369e114fe79d096db925f->enter($__internal_da7754cc049c1913fc6a2c4489c59272107da58efac369e114fe79d096db925f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 51
        echo "\t\t\t\t\t\t
\t\t\t\t\t";
        
        $__internal_da7754cc049c1913fc6a2c4489c59272107da58efac369e114fe79d096db925f->leave($__internal_da7754cc049c1913fc6a2c4489c59272107da58efac369e114fe79d096db925f_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  164 => 51,  158 => 50,  144 => 70,  125 => 53,  122 => 50,  107 => 37,  103 => 36,  89 => 25,  85 => 23,  83 => 22,  77 => 21,  60 => 9,  56 => 8,  51 => 7,  45 => 6,  38 => 21,  34 => 19,  31 => 6,  25 => 1,);
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
/* 						  <li id='menu3'><a href="#">Administration</a></li>*/
/* 						</ul>*/
/* 					  </div>*/
/* 					</nav>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				*/
/* 				<div class="col-md-1">*/
/* 				</div>*/
/* 				<div class="col-md-7">*/
/* 					{# Ici se trouve le bloc que les vues du bundle pourront remplir #}*/
/* 					{% block FormArmor_body %}*/
/* 						*/
/* 					{% endblock %}*/
/* 				</div>*/
/* 				<div class="col-md-4">*/
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
