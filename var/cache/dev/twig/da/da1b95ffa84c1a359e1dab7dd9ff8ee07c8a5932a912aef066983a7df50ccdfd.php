<?php

/* FormArmorBundle:Statuts:index.html.twig */
class __TwigTemplate_167dedba454378a4e8fdfab6bc21dc901106630dec795356699f0f120cd22c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::admin_layout.html.twig", "FormArmorBundle:Statuts:index.html.twig", 1);
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
        $__internal_0490fd16bf7869f95008591fb583b9deb822093cd8493151fa000ab5ca34348a = $this->env->getExtension("native_profiler");
        $__internal_0490fd16bf7869f95008591fb583b9deb822093cd8493151fa000ab5ca34348a->enter($__internal_0490fd16bf7869f95008591fb583b9deb822093cd8493151fa000ab5ca34348a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Statuts:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0490fd16bf7869f95008591fb583b9deb822093cd8493151fa000ab5ca34348a->leave($__internal_0490fd16bf7869f95008591fb583b9deb822093cd8493151fa000ab5ca34348a_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_dadde926ad222d73199bbcd4bc6860c1259d2e0dcf4474206a59b6f391b1d567 = $this->env->getExtension("native_profiler");
        $__internal_dadde926ad222d73199bbcd4bc6860c1259d2e0dcf4474206a59b6f391b1d567->enter($__internal_dadde926ad222d73199bbcd4bc6860c1259d2e0dcf4474206a59b6f391b1d567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h2>AFFICHAGE DES STATUTS</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Identifiant</th>
\t\t\t<th>Type</th>
\t\t\t<th>Taux Horaire</th>
\t\t\t<th>Option</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesStatuts"]) ? $context["lesStatuts"] : $this->getContext($context, "lesStatuts")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
            // line 15
            echo "\t\t\t\t<tr ";
            echo " ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                echo " class=\"success\" ";
            } else {
                echo " class=\"info\" ";
            }
            echo ">
\t\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["statut"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["statut"], "type", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["statut"], "tauxHoraire", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><a href=\"#\">Modifier</a></td>
\t\t\t\t\t<td><a href=\"#\">Supprimer</a></td>
\t\t\t\t</tr>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statut'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</tbody>
\t</table>
\t
\t<ul class=\"pagination\">
\t\t";
        // line 28
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 29
            echo "\t\t\t<li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_admin_statut", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t</ul>
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu1').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_dadde926ad222d73199bbcd4bc6860c1259d2e0dcf4474206a59b6f391b1d567->leave($__internal_dadde926ad222d73199bbcd4bc6860c1259d2e0dcf4474206a59b6f391b1d567_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Statuts:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 33,  125 => 30,  118 => 29,  113 => 28,  107 => 23,  88 => 18,  84 => 17,  80 => 16,  70 => 15,  53 => 14,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::admin_layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	<h2>AFFICHAGE DES STATUTS</h2>*/
/* 	<table class="table">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th>Identifiant</th>*/
/* 			<th>Type</th>*/
/* 			<th>Taux Horaire</th>*/
/* 			<th>Option</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 			{% for statut in lesStatuts %}*/
/* 				<tr {# si le nombre de passages dans la boucle est pair #} {% if loop.index is even %} class="success" {% else %} class="info" {% endif %}>*/
/* 					<td>{{statut.id}}</td>*/
/* 					<td>{{statut.type}}</td>*/
/* 					<td>{{statut.tauxHoraire}}</td>*/
/* 					<td><a href="#">Modifier</a></td>*/
/* 					<td><a href="#">Supprimer</a></td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* 	*/
/* 	<ul class="pagination">*/
/* 		{# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/* 		{% for p in range(1, nbPages) %}*/
/* 			<li{% if p == page %} class="active"{% endif %}>*/
/* 				<a href="{{ path('form_armor_admin_statut', {'page': p}) }}">{{ p }}</a>*/
/* 			</li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	*/
/* 	<script>*/
/* 		$(function() {*/
/* 			$('#menu1').attr('class', 'active');*/
/* 		});*/
/* 	</script>*/
/* 	*/
/* {% endblock %}*/
