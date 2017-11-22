<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_91687b77e2ded421cfb58bdffdbf17f1cc4032a7c05b38b1ebe8d92517b3b91c extends Twig_Template
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
        $__internal_0ebe772a716798b35ab9c9000bc5caba86945949e544118e52ec5c0ab31f2ec8 = $this->env->getExtension("native_profiler");
        $__internal_0ebe772a716798b35ab9c9000bc5caba86945949e544118e52ec5c0ab31f2ec8->enter($__internal_0ebe772a716798b35ab9c9000bc5caba86945949e544118e52ec5c0ab31f2ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ebe772a716798b35ab9c9000bc5caba86945949e544118e52ec5c0ab31f2ec8->leave($__internal_0ebe772a716798b35ab9c9000bc5caba86945949e544118e52ec5c0ab31f2ec8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6924a26469f39c35ffd1c7e10931458ea973748cdaebc009acdc4e97c3edc34d = $this->env->getExtension("native_profiler");
        $__internal_6924a26469f39c35ffd1c7e10931458ea973748cdaebc009acdc4e97c3edc34d->enter($__internal_6924a26469f39c35ffd1c7e10931458ea973748cdaebc009acdc4e97c3edc34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6924a26469f39c35ffd1c7e10931458ea973748cdaebc009acdc4e97c3edc34d->leave($__internal_6924a26469f39c35ffd1c7e10931458ea973748cdaebc009acdc4e97c3edc34d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25068d9bf33812ab9c1d4b20aa428a4a5c490be176728c178a816eb9beb5c690 = $this->env->getExtension("native_profiler");
        $__internal_25068d9bf33812ab9c1d4b20aa428a4a5c490be176728c178a816eb9beb5c690->enter($__internal_25068d9bf33812ab9c1d4b20aa428a4a5c490be176728c178a816eb9beb5c690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25068d9bf33812ab9c1d4b20aa428a4a5c490be176728c178a816eb9beb5c690->leave($__internal_25068d9bf33812ab9c1d4b20aa428a4a5c490be176728c178a816eb9beb5c690_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71f9b39d87c8100596c9c813039fa2308662a0dff819090902c3172663e13cf2 = $this->env->getExtension("native_profiler");
        $__internal_71f9b39d87c8100596c9c813039fa2308662a0dff819090902c3172663e13cf2->enter($__internal_71f9b39d87c8100596c9c813039fa2308662a0dff819090902c3172663e13cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_71f9b39d87c8100596c9c813039fa2308662a0dff819090902c3172663e13cf2->leave($__internal_71f9b39d87c8100596c9c813039fa2308662a0dff819090902c3172663e13cf2_prof);

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
