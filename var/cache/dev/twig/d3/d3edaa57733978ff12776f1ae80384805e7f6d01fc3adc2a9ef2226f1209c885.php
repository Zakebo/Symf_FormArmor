<?php

/* FormArmorBundle:Accueil:index.html.twig */
class __TwigTemplate_20d02a451a729ca9e4e2b3293c1e2a9705e64a4c6fdb584c55a67ffac5837b74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::layout.html.twig", "FormArmorBundle:Accueil:index.html.twig", 1);
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
        $__internal_6723418a9ae016e0365906ba1407ee81ab72b80ee630dda5b689bcd443d68244 = $this->env->getExtension("native_profiler");
        $__internal_6723418a9ae016e0365906ba1407ee81ab72b80ee630dda5b689bcd443d68244->enter($__internal_6723418a9ae016e0365906ba1407ee81ab72b80ee630dda5b689bcd443d68244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6723418a9ae016e0365906ba1407ee81ab72b80ee630dda5b689bcd443d68244->leave($__internal_6723418a9ae016e0365906ba1407ee81ab72b80ee630dda5b689bcd443d68244_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_b56daaf5fa144dd2ffb962d7a07b8e56d6264462e1ae73e91435def7e3713703 = $this->env->getExtension("native_profiler");
        $__internal_b56daaf5fa144dd2ffb962d7a07b8e56d6264462e1ae73e91435def7e3713703->enter($__internal_b56daaf5fa144dd2ffb962d7a07b8e56d6264462e1ae73e91435def7e3713703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t
\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t  <!-- Indicators -->
\t  <ol class=\"carousel-indicators\">
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
\t\t<li data-target=\"#myCarousel\" data-slide-to=\"4\"></li>
\t  </ol>

\t  <!-- Wrapper for slides -->
\t  <div class=\"carousel-inner\" role=\"listbox\">
\t\t<div class=\"item active\">
\t\t  <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/formation1.jpg"), "html", null, true);
        echo "\" alt=\"Image1 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>Des formateurs à votre service.</p>
\t\t  </div>
\t\t</div>

\t\t<div class=\"item\">
\t\t  <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/formation2.jpg"), "html", null, true);
        echo "\" alt=\"Image2 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>Un équipement de qualité et à disposition.</p>
\t\t  </div>
\t\t</div>

\t\t<div class=\"item\">
\t\t  <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/formation3.jpg"), "html", null, true);
        echo "\" alt=\"Image3 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>De multiples formations diplomantes.</p>
\t\t  </div>
\t\t</div>

\t\t<div class=\"item\">
\t\t  <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/formation4.jpg"), "html", null, true);
        echo "\" alt=\"Image4 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>L'accompagnement de vos projets professionnels</p>
\t\t  </div>
\t\t</div>
\t\t
\t\t<div class=\"item\">
\t\t  <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/formation5.jpg"), "html", null, true);
        echo "\" alt=\"Image5 FormArmor\">
\t\t  <div class=\"carousel-caption\">
\t\t\t<h2>FORMARMOR</h2>
\t\t\t<p>Une formation à proximité et dans une ambiance chaleureuse.</p>
\t\t  </div>
\t\t</div>
\t  </div>

\t  <!-- Left and right controls -->
\t  <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t<span class=\"sr-only\">Previous</span>
\t  </a>
\t  <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t<span class=\"sr-only\">Next</span>
\t  </a>
\t</div>
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu1').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_b56daaf5fa144dd2ffb962d7a07b8e56d6264462e1ae73e91435def7e3713703->leave($__internal_b56daaf5fa144dd2ffb962d7a07b8e56d6264462e1ae73e91435def7e3713703_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 49,  89 => 41,  78 => 33,  67 => 25,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	*/
/* 	<div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/* 	  <!-- Indicators -->*/
/* 	  <ol class="carousel-indicators">*/
/* 		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/* 		<li data-target="#myCarousel" data-slide-to="1"></li>*/
/* 		<li data-target="#myCarousel" data-slide-to="2"></li>*/
/* 		<li data-target="#myCarousel" data-slide-to="3"></li>*/
/* 		<li data-target="#myCarousel" data-slide-to="4"></li>*/
/* 	  </ol>*/
/* */
/* 	  <!-- Wrapper for slides -->*/
/* 	  <div class="carousel-inner" role="listbox">*/
/* 		<div class="item active">*/
/* 		  <img src="{{asset('images/formation1.jpg')}}" alt="Image1 FormArmor">*/
/* 		  <div class="carousel-caption">*/
/* 			<h2>FORMARMOR</h2>*/
/* 			<p>Des formateurs à votre service.</p>*/
/* 		  </div>*/
/* 		</div>*/
/* */
/* 		<div class="item">*/
/* 		  <img src="{{asset('images/formation2.jpg') }}" alt="Image2 FormArmor">*/
/* 		  <div class="carousel-caption">*/
/* 			<h2>FORMARMOR</h2>*/
/* 			<p>Un équipement de qualité et à disposition.</p>*/
/* 		  </div>*/
/* 		</div>*/
/* */
/* 		<div class="item">*/
/* 		  <img src="{{asset('images/formation3.jpg') }}" alt="Image3 FormArmor">*/
/* 		  <div class="carousel-caption">*/
/* 			<h2>FORMARMOR</h2>*/
/* 			<p>De multiples formations diplomantes.</p>*/
/* 		  </div>*/
/* 		</div>*/
/* */
/* 		<div class="item">*/
/* 		  <img src="{{asset('images/formation4.jpg') }}" alt="Image4 FormArmor">*/
/* 		  <div class="carousel-caption">*/
/* 			<h2>FORMARMOR</h2>*/
/* 			<p>L'accompagnement de vos projets professionnels</p>*/
/* 		  </div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="item">*/
/* 		  <img src="{{asset('images/formation5.jpg') }}" alt="Image5 FormArmor">*/
/* 		  <div class="carousel-caption">*/
/* 			<h2>FORMARMOR</h2>*/
/* 			<p>Une formation à proximité et dans une ambiance chaleureuse.</p>*/
/* 		  </div>*/
/* 		</div>*/
/* 	  </div>*/
/* */
/* 	  <!-- Left and right controls -->*/
/* 	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/* 		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/* 		<span class="sr-only">Previous</span>*/
/* 	  </a>*/
/* 	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/* 		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/* 		<span class="sr-only">Next</span>*/
/* 	  </a>*/
/* 	</div>*/
/* 	*/
/* 	<script>*/
/* 		$(function() {*/
/* 			$('#menu1').attr('class', 'active');*/
/* 		});*/
/* 	</script>*/
/* 	*/
/* {% endblock %}*/
