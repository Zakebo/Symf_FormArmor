<?php

/* FormArmorBundle:Admin:session.html.twig */
class __TwigTemplate_d82255b89efd46d83b574176878f4d5e8246294ff1b8e7f3a379c3d96bf891a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::admin_layout.html.twig", "FormArmorBundle:Admin:session.html.twig", 1);
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
        $__internal_e13d9e05762e042196740982549542b34a0e927b8395170170b22f4f42e3de25 = $this->env->getExtension("native_profiler");
        $__internal_e13d9e05762e042196740982549542b34a0e927b8395170170b22f4f42e3de25->enter($__internal_e13d9e05762e042196740982549542b34a0e927b8395170170b22f4f42e3de25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:session.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e13d9e05762e042196740982549542b34a0e927b8395170170b22f4f42e3de25->leave($__internal_e13d9e05762e042196740982549542b34a0e927b8395170170b22f4f42e3de25_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_19aae839388f173f7142fe66bfa25445c8d29d33fb2d80cbc40d29d26dfa9da3 = $this->env->getExtension("native_profiler");
        $__internal_19aae839388f173f7142fe66bfa25445c8d29d33fb2d80cbc40d29d26dfa9da3->enter($__internal_19aae839388f173f7142fe66bfa25445c8d29d33fb2d80cbc40d29d26dfa9da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h2>AFFICHAGE DES SESSIONS DE FORMATION</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<th>Formation</th>
\t\t\t<th>Date debut</th>
\t\t\t<th>Nombre de places</th>
\t\t\t<th>Nombre d'inscrits</th>
\t\t\t<th>Close</th>
\t\t\t<th colspan=\"2\">Option</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesSessions"]) ? $context["lesSessions"] : $this->getContext($context, "lesSessions")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["session"], "formation", array()), "libelle", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["session"], "formation", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "dateDebut", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "nbPlaces", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "nbInscrits", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t";
            // line 24
            if (($this->getAttribute($context["session"], "close", array()) == 1)) {
                // line 25
                echo "\t\t\t\t\t\t<td>Oui</td>
\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t\t<td>Non</td>
\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_admin_session_modif", array("id" => $this->getAttribute($context["session"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_admin_session_supp", array("id" => $this->getAttribute($context["session"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t</tbody>
\t</table>
\t
\t<ul class=\"pagination\">
\t\t";
        // line 38
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 39
            echo "\t\t\t<li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_admin_session", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t</ul>
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu4').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_19aae839388f173f7142fe66bfa25445c8d29d33fb2d80cbc40d29d26dfa9da3->leave($__internal_19aae839388f173f7142fe66bfa25445c8d29d33fb2d80cbc40d29d26dfa9da3_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Admin:session.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 43,  155 => 40,  148 => 39,  143 => 38,  137 => 33,  120 => 30,  115 => 29,  111 => 27,  107 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  87 => 20,  83 => 19,  73 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::admin_layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	<h2>AFFICHAGE DES SESSIONS DE FORMATION</h2>*/
/* 	<table class="table">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th>Id</th>*/
/* 			<th>Formation</th>*/
/* 			<th>Date debut</th>*/
/* 			<th>Nombre de places</th>*/
/* 			<th>Nombre d'inscrits</th>*/
/* 			<th>Close</th>*/
/* 			<th colspan="2">Option</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 			{% for session in lesSessions %}*/
/* 				<tr {# si le nombre de passages dans la boucle est pair #} {% if loop.index is even %} class="success" {% else %} class="info" {% endif %}>*/
/* 					<td>{{session.id}}</td>*/
/* 					<td>{{session.formation.libelle}}-{{session.formation.niveau}}</td>*/
/* 					<td>{{session.dateDebut|date('Y-m-d')}}</td>*/
/* 					<td>{{session.nbPlaces}}</td>*/
/* 					<td>{{session.nbInscrits}}</td>*/
/* 					{% if (session.close == 1) %}*/
/* 						<td>Oui</td>*/
/* 					{% else %}*/
/* 						<td>Non</td>*/
/* 					{% endif %}*/
/* 					<td><a href="{{ path('form_armor_admin_session_modif', {'id': session.id}) }}">Modifier</a></td>*/
/* 					<td><a href="{{ path('form_armor_admin_session_supp', {'id': session.id}) }}">Supprimer</a></td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* 	*/
/* 	<ul class="pagination">*/
/* 		{# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/* 		{% for p in range(1, nbPages) %}*/
/* 			<li{% if p == page %} class="active"{% endif %}>*/
/* 				<a href="{{ path('form_armor_admin_session', {'page': p}) }}">{{ p }}</a>*/
/* 			</li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	*/
/* 	<script>*/
/* 		$(function() {*/
/* 			$('#menu4').attr('class', 'active');*/
/* 		});*/
/* 	</script>*/
/* 	*/
/* {% endblock %}*/
