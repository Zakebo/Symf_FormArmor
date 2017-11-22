<?php

/* FormArmorBundle:Admin:client.html.twig */
class __TwigTemplate_2e3a67eb344ed34c9112c5d2eed63788d5cef479459d2bb0bdb37c003ba854b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FormArmorBundle::admin_layout.html.twig", "FormArmorBundle:Admin:client.html.twig", 1);
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
        $__internal_be12f43de4cce25a8b60b575f6b05e41be08697176764b4593fab8d351262c70 = $this->env->getExtension("native_profiler");
        $__internal_be12f43de4cce25a8b60b575f6b05e41be08697176764b4593fab8d351262c70->enter($__internal_be12f43de4cce25a8b60b575f6b05e41be08697176764b4593fab8d351262c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormArmorBundle:Admin:client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be12f43de4cce25a8b60b575f6b05e41be08697176764b4593fab8d351262c70->leave($__internal_be12f43de4cce25a8b60b575f6b05e41be08697176764b4593fab8d351262c70_prof);

    }

    // line 2
    public function block_FormArmor_body($context, array $blocks = array())
    {
        $__internal_3847bc7b1576685ed2b876d58913246e0f97a51e6d0bd2b1578eda98a1ea3aba = $this->env->getExtension("native_profiler");
        $__internal_3847bc7b1576685ed2b876d58913246e0f97a51e6d0bd2b1578eda98a1ea3aba->enter($__internal_3847bc7b1576685ed2b876d58913246e0f97a51e6d0bd2b1578eda98a1ea3aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        echo "\t<h2>AFFICHAGE DES CLIENTS</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<th>Statut</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Adresse</th>
\t\t\t<th>Code postal</th>
\t\t\t<th>Ville</th>
\t\t\t<th>Compta</th>
\t\t\t<th>Bureautique</th>
\t\t\t<th colspan =\"2\">Option</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesClients"]) ? $context["lesClients"] : $this->getContext($context, "lesClients")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 20
            echo "\t\t\t\t<tr ";
            echo " ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                echo " class=\"success\" ";
            } else {
                echo " class=\"info\" ";
            }
            echo ">
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "statut", array()), "type", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "adresse", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cp", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "ville", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nbhcpta", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nbhbur", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_admin_client_modif", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_admin_client_supp", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_armor_admin_client", array("page" => $context["p"])), "html", null, true);
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
\t\t\t\$('#menu2').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_3847bc7b1576685ed2b876d58913246e0f97a51e6d0bd2b1578eda98a1ea3aba->leave($__internal_3847bc7b1576685ed2b876d58913246e0f97a51e6d0bd2b1578eda98a1ea3aba_prof);

    }

    public function getTemplateName()
    {
        return "FormArmorBundle:Admin:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 43,  156 => 40,  149 => 39,  144 => 38,  138 => 33,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  75 => 20,  58 => 19,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FormArmorBundle::admin_layout.html.twig" %}*/
/* {% block FormArmor_body %}*/
/* 	<h2>AFFICHAGE DES CLIENTS</h2>*/
/* 	<table class="table">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th>Id</th>*/
/* 			<th>Statut</th>*/
/* 			<th>Nom</th>*/
/* 			<th>Adresse</th>*/
/* 			<th>Code postal</th>*/
/* 			<th>Ville</th>*/
/* 			<th>Compta</th>*/
/* 			<th>Bureautique</th>*/
/* 			<th colspan ="2">Option</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 			{% for client in lesClients %}*/
/* 				<tr {# si le nombre de passages dans la boucle est pair #} {% if loop.index is even %} class="success" {% else %} class="info" {% endif %}>*/
/* 					<td>{{client.id}}</td>*/
/* 					<td>{{client.statut.type}}</td>*/
/* 					<td>{{client.nom}}</td>*/
/* 					<td>{{client.adresse}}</td>*/
/* 					<td>{{client.cp}}</td>*/
/* 					<td>{{client.ville}}</td>*/
/* 					<td>{{client.nbhcpta}}</td>*/
/* 					<td>{{client.nbhbur}}</td>*/
/* 					<td><a href="{{ path('form_armor_admin_client_modif', {'id': client.id}) }}">Modifier</a></td>*/
/* 					<td><a href="{{ path('form_armor_admin_client_supp', {'id': client.id}) }}">Supprimer</a></td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* 	*/
/* 	<ul class="pagination">*/
/* 		{# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/* 		{% for p in range(1, nbPages) %}*/
/* 			<li{% if p == page %} class="active"{% endif %}>*/
/* 				<a href="{{ path('form_armor_admin_client', {'page': p}) }}">{{ p }}</a>*/
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
