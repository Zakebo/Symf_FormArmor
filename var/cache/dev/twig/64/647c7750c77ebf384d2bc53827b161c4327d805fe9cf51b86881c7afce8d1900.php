<?php

/* FormArmorBundle:Formations:index.html.twig */
class __TwigTemplate_d99c679b69a98271af00d68c269965d72331f2168b4b211198354115605a5156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::layout.html.twig", "FormArmorBundle:Formations:index.html.twig", 1);
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
        $__internal_c59513ae4a971ad9d04f93b0123e5d8af44229ecdfd52e11f6e34580be03dd18 = $this->env->getExtension("native_profiler");
        $__internal_c59513ae4a971ad9d04f93b0123e5d8af44229ecdfd52e11f6e34580be03dd18->enter($__internal_c59513ae4a971ad9d04f93b0123e5d8af44229ecdfd52e11f6e34580be03dd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Formations:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c59513ae4a971ad9d04f93b0123e5d8af44229ecdfd52e11f6e34580be03dd18->leave($__internal_c59513ae4a971ad9d04f93b0123e5d8af44229ecdfd52e11f6e34580be03dd18_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_62676572a6bff1628aff062ceb9b8ef51c1d4bd00ef4be9b16636d2a80a26fef = $this->env->getExtension("native_profiler");
        $__internal_62676572a6bff1628aff062ceb9b8ef51c1d4bd00ef4be9b16636d2a80a26fef->enter($__internal_62676572a6bff1628aff062ceb9b8ef51c1d4bd00ef4be9b16636d2a80a26fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h2>TABLEAU DES FORMATIONS</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Libell&eacute;</th>
\t\t\t<th>Niveau</th>
\t\t\t<th>Type</th>
\t\t\t<th>Description</th>
\t\t\t<th>Diplomante</th>
\t\t\t<th>Dur&eacute;e</th>
\t\t\t<th>Cout</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 17
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
            // line 18
            echo "\t\t\t\t<tr ";
            echo " ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                echo " class=\"success\" ";
            } else {
                echo " class=\"info\" ";
            }
            echo ">
\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "typeform", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t";
            // line 23
            if (($this->getAttribute($context["formation"], "diplomante", array()) == 0)) {
                // line 24
                echo "\t\t\t\t\t\t<td>Non</td>
\t\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t\t<td>Oui</td>
\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "duree", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "coutrevient", array()), "html", null, true);
            echo "</td>
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
        // line 32
        echo "\t\t</tbody>
\t</table>
\t
\t<ul class=\"pagination\">
\t\t";
        // line 37
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 38
            echo "\t\t\t<li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_formations", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t</ul>
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu2').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_62676572a6bff1628aff062ceb9b8ef51c1d4bd00ef4be9b16636d2a80a26fef->leave($__internal_62676572a6bff1628aff062ceb9b8ef51c1d4bd00ef4be9b16636d2a80a26fef_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Formations:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 42,  149 => 39,  142 => 38,  137 => 37,  131 => 32,  114 => 29,  109 => 28,  105 => 26,  101 => 24,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  73 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	<h2>TABLEAU DES FORMATIONS</h2>*/
/* 	<table class="table">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th>Libell&eacute;</th>*/
/* 			<th>Niveau</th>*/
/* 			<th>Type</th>*/
/* 			<th>Description</th>*/
/* 			<th>Diplomante</th>*/
/* 			<th>Dur&eacute;e</th>*/
/* 			<th>Cout</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 			{% for formation in lesFormations %}*/
/* 				<tr {# si le nombre de passages dans la boucle est pair #} {% if loop.index is even %} class="success" {% else %} class="info" {% endif %}>*/
/* 					<td>{{formation.libelle}}</td>*/
/* 					<td>{{formation.niveau}}</td>*/
/* 					<td>{{formation.typeform}}</td>*/
/* 					<td>{{formation.description}}</td>*/
/* 					{% if formation.diplomante == 0 %}*/
/* 						<td>Non</td>*/
/* 					{% else %}*/
/* 						<td>Oui</td>*/
/* 					{% endif %}*/
/* 					<td>{{formation.duree}}</td>*/
/* 					<td>{{formation.coutrevient}}</td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* 	*/
/* 	<ul class="pagination">*/
/* 		{# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/* 		{% for p in range(1, nbPages) %}*/
/* 			<li{% if p == page %} class="active"{% endif %}>*/
/* 				<a href="{{ path('form_armor_formations', {'page': p}) }}">{{ p }}</a>*/
/* 			</li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	*/
/* 	<script>*/
/* 		$(function() {*/
/* 			$('#menu2').attr('class', 'active');*/
/* 		});*/
/* 	</script>*/
/* 	*/
/* {% endblock %}*/
