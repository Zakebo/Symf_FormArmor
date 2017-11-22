<?php

/* FormArmorBundle:Admin:plan.html.twig */
class __TwigTemplate_519df535879c9330e3afe0fd2c529b60d4a3d32fcbdd9380cd9fbd56bce16eec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::admin_layout.html.twig", "FormArmorBundle:Admin:plan.html.twig", 1);
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
        $__internal_24bc5856a9005e30e062b103c274772616d964b814949f29901670a68de30162 = $this->env->getExtension("native_profiler");
        $__internal_24bc5856a9005e30e062b103c274772616d964b814949f29901670a68de30162->enter($__internal_24bc5856a9005e30e062b103c274772616d964b814949f29901670a68de30162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:plan.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24bc5856a9005e30e062b103c274772616d964b814949f29901670a68de30162->leave($__internal_24bc5856a9005e30e062b103c274772616d964b814949f29901670a68de30162_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_d534eab4f7ac728634c34ca46a2c478300cc94821bc1508357416410669782fa = $this->env->getExtension("native_profiler");
        $__internal_d534eab4f7ac728634c34ca46a2c478300cc94821bc1508357416410669782fa->enter($__internal_d534eab4f7ac728634c34ca46a2c478300cc94821bc1508357416410669782fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h2>AFFICHAGE DES PLANS DE FORMATION</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<th>Client</th>
\t\t\t<th>Formation</th>
\t\t\t<th>Effectué</th>
\t\t\t<th colspan=\"2\">Option</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesPlans"]) ? $context["lesPlans"] : $this->getContext($context, "lesPlans")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 16
            echo "\t\t\t\t<tr ";
            echo " ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                echo " class=\"success\" ";
            } else {
                echo " class=\"info\" ";
            }
            echo ">
\t\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plan"], "client", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plan"], "formation", array()), "libelle", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plan"], "formation", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t";
            // line 20
            if (($this->getAttribute($context["plan"], "effectue", array()) == 1)) {
                // line 21
                echo "\t\t\t\t\t\t<td>Oui</td>
\t\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t\t<td>Non</td>
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_admin_planformation_modif", array("id" => $this->getAttribute($context["plan"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_admin_planformation_supp", array("id" => $this->getAttribute($context["plan"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t</tbody>
\t</table>
\t
\t<ul class=\"pagination\">
\t\t";
        // line 34
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 35
            echo "\t\t\t<li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_admin_planformation", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t</ul>
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu5').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_d534eab4f7ac728634c34ca46a2c478300cc94821bc1508357416410669782fa->leave($__internal_d534eab4f7ac728634c34ca46a2c478300cc94821bc1508357416410669782fa_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Admin:plan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 39,  145 => 36,  138 => 35,  133 => 34,  127 => 29,  110 => 26,  105 => 25,  101 => 23,  97 => 21,  95 => 20,  89 => 19,  85 => 18,  81 => 17,  71 => 16,  54 => 15,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::admin_layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	<h2>AFFICHAGE DES PLANS DE FORMATION</h2>*/
/* 	<table class="table">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th>Id</th>*/
/* 			<th>Client</th>*/
/* 			<th>Formation</th>*/
/* 			<th>Effectué</th>*/
/* 			<th colspan="2">Option</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 			{% for plan in lesPlans %}*/
/* 				<tr {# si le nombre de passages dans la boucle est pair #} {% if loop.index is even %} class="success" {% else %} class="info" {% endif %}>*/
/* 					<td>{{plan.id}}</td>*/
/* 					<td>{{plan.client.nom}}</td>*/
/* 					<td>{{plan.formation.libelle}}-{{plan.formation.niveau}}</td>*/
/* 					{% if (plan.effectue == 1) %}*/
/* 						<td>Oui</td>*/
/* 					{% else %}*/
/* 						<td>Non</td>*/
/* 					{% endif %}*/
/* 					<td><a href="{{ path('form_armor_admin_planformation_modif', {'id': plan.id}) }}">Modifier</a></td>*/
/* 					<td><a href="{{ path('form_armor_admin_planformation_supp', {'id': plan.id}) }}">Supprimer</a></td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* 	*/
/* 	<ul class="pagination">*/
/* 		{# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/* 		{% for p in range(1, nbPages) %}*/
/* 			<li{% if p == page %} class="active"{% endif %}>*/
/* 				<a href="{{ path('form_armor_admin_planformation', {'page': p}) }}">{{ p }}</a>*/
/* 			</li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	*/
/* 	<script>*/
/* 		$(function() {*/
/* 			$('#menu5').attr('class', 'active');*/
/* 		});*/
/* 	</script>*/
/* 	*/
/* {% endblock %}*/
