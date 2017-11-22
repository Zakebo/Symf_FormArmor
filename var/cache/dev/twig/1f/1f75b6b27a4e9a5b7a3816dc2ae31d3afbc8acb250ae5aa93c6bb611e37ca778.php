<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d34bbf0fd119bf0ff654d1c3d8abd8b124dc2f8684b5d5e59481f8be2b0ffe2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_015f3950735e3e5d0ba63ada0bba21adebd318424920e48dff973d76b16814d8 = $this->env->getExtension("native_profiler");
        $__internal_015f3950735e3e5d0ba63ada0bba21adebd318424920e48dff973d76b16814d8->enter($__internal_015f3950735e3e5d0ba63ada0bba21adebd318424920e48dff973d76b16814d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_015f3950735e3e5d0ba63ada0bba21adebd318424920e48dff973d76b16814d8->leave($__internal_015f3950735e3e5d0ba63ada0bba21adebd318424920e48dff973d76b16814d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_328fa0e433971eabcf4110086389916890fd761b3f27bcb9437c4f0c95124d66 = $this->env->getExtension("native_profiler");
        $__internal_328fa0e433971eabcf4110086389916890fd761b3f27bcb9437c4f0c95124d66->enter($__internal_328fa0e433971eabcf4110086389916890fd761b3f27bcb9437c4f0c95124d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_328fa0e433971eabcf4110086389916890fd761b3f27bcb9437c4f0c95124d66->leave($__internal_328fa0e433971eabcf4110086389916890fd761b3f27bcb9437c4f0c95124d66_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f75c7c6f4120e8c847429f79fcf74a8739f07d1872b241d72b74c67c068eb9d4 = $this->env->getExtension("native_profiler");
        $__internal_f75c7c6f4120e8c847429f79fcf74a8739f07d1872b241d72b74c67c068eb9d4->enter($__internal_f75c7c6f4120e8c847429f79fcf74a8739f07d1872b241d72b74c67c068eb9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f75c7c6f4120e8c847429f79fcf74a8739f07d1872b241d72b74c67c068eb9d4->leave($__internal_f75c7c6f4120e8c847429f79fcf74a8739f07d1872b241d72b74c67c068eb9d4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db447e5e20bff8dbb3a95f52e1bbcfda30fb392f60d6b82cb8a266b39e96aecf = $this->env->getExtension("native_profiler");
        $__internal_db447e5e20bff8dbb3a95f52e1bbcfda30fb392f60d6b82cb8a266b39e96aecf->enter($__internal_db447e5e20bff8dbb3a95f52e1bbcfda30fb392f60d6b82cb8a266b39e96aecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db447e5e20bff8dbb3a95f52e1bbcfda30fb392f60d6b82cb8a266b39e96aecf->leave($__internal_db447e5e20bff8dbb3a95f52e1bbcfda30fb392f60d6b82cb8a266b39e96aecf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
