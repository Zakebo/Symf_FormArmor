<?php

/* FormArmorBundle:Admin:formation.html.twig */
class __TwigTemplate_05a00f435ccfc7b41907d141710e836ef3253de57b39279ad30616145a73a3ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::admin_layout.html.twig", "FormArmorBundle:Admin:formation.html.twig", 1);
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
        $__internal_6a1222ad1fd95c9f9645a9d66c14c0d6c331e0c4fcd16fd0477f1fc0d0ef859a = $this->env->getExtension("native_profiler");
        $__internal_6a1222ad1fd95c9f9645a9d66c14c0d6c331e0c4fcd16fd0477f1fc0d0ef859a->enter($__internal_6a1222ad1fd95c9f9645a9d66c14c0d6c331e0c4fcd16fd0477f1fc0d0ef859a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:formation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a1222ad1fd95c9f9645a9d66c14c0d6c331e0c4fcd16fd0477f1fc0d0ef859a->leave($__internal_6a1222ad1fd95c9f9645a9d66c14c0d6c331e0c4fcd16fd0477f1fc0d0ef859a_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_230d31f16d9092d1018d6b571eee2624fb83801922e63021a011ea4c2c14e85f = $this->env->getExtension("native_profiler");
        $__internal_230d31f16d9092d1018d6b571eee2624fb83801922e63021a011ea4c2c14e85f->enter($__internal_230d31f16d9092d1018d6b571eee2624fb83801922e63021a011ea4c2c14e85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h2>AFFICHAGE DES FORMATIONS</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<th>Libelle</th>
\t\t\t<th>Niveau</th>
\t\t\t<th>Type</th>
\t\t\t<th>Diplomante</th>
\t\t\t<th>Dur&eacute;e</th>
\t\t\t<th>Cout de revient</th>
\t\t\t<th colspan=\"2\">Option</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesFormations"]) ? $context["lesFormations"] : $this->getContext($context, "lesFormations")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 19
            echo "\t\t\t\t<tr ";
            echo " ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                echo " class=\"success\" ";
            } else {
                echo " class=\"info\" ";
            }
            echo ">
\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "typeForm", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t";
            // line 24
            if (($this->getAttribute($context["formation"], "diplomante", array()) == 1)) {
                // line 25
                echo "\t\t\t\t\t\t<td>Oui</td>
\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t\t<td>Non</td>
\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "duree", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "coutrevient", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_admin_formation_modif", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_admin_formation_supp", array("id" => $this->getAttribute($context["formation"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t</tbody>
\t</table>
\t
\t<ul class=\"pagination\">
\t\t";
        // line 40
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 41
            echo "\t\t\t<li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
\t\t\t\t<a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_admin_formation", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t</ul>
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu3').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_230d31f16d9092d1018d6b571eee2624fb83801922e63021a011ea4c2c14e85f->leave($__internal_230d31f16d9092d1018d6b571eee2624fb83801922e63021a011ea4c2c14e85f_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Admin:formation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 45,  158 => 42,  151 => 41,  146 => 40,  140 => 35,  123 => 32,  119 => 31,  115 => 30,  110 => 29,  106 => 27,  102 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  74 => 19,  57 => 18,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::admin_layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	<h2>AFFICHAGE DES FORMATIONS</h2>*/
/* 	<table class="table">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th>Id</th>*/
/* 			<th>Libelle</th>*/
/* 			<th>Niveau</th>*/
/* 			<th>Type</th>*/
/* 			<th>Diplomante</th>*/
/* 			<th>Dur&eacute;e</th>*/
/* 			<th>Cout de revient</th>*/
/* 			<th colspan="2">Option</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 			{% for formation in lesFormations %}*/
/* 				<tr {# si le nombre de passages dans la boucle est pair #} {% if loop.index is even %} class="success" {% else %} class="info" {% endif %}>*/
/* 					<td>{{formation.id}}</td>*/
/* 					<td>{{formation.libelle}}</td>*/
/* 					<td>{{formation.niveau}}</td>*/
/* 					<td>{{formation.typeForm}}</td>*/
/* 					{% if (formation.diplomante == 1) %}*/
/* 						<td>Oui</td>*/
/* 					{% else %}*/
/* 						<td>Non</td>*/
/* 					{% endif %}*/
/* 					<td>{{formation.duree}}</td>*/
/* 					<td>{{formation.coutrevient}}</td>*/
/* 					<td><a href="{{ path('form_armor_admin_formation_modif', {'id': formation.id}) }}">Modifier</a></td>*/
/* 					<td><a href="{{ path('form_armor_admin_formation_supp', {'id': formation.id}) }}">Supprimer</a></td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* 	*/
/* 	<ul class="pagination">*/
/* 		{# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/* 		{% for p in range(1, nbPages) %}*/
/* 			<li{% if p == page %} class="active"{% endif %}>*/
/* 				<a href="{{ path('form_armor_admin_formation', {'page': p}) }}">{{ p }}</a>*/
/* 			</li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	*/
/* 	<script>*/
/* 		$(function() {*/
/* 			$('#menu3').attr('class', 'active');*/
/* 		});*/
/* 	</script>*/
/* 	*/
/* {% endblock %}*/
