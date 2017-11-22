<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2f86cb27305ed51ebef5543e70a7d67d223c86d987b5524a5f654b93148389cb extends Twig_Template
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
        $__internal_583dcd758e0b7bea79753f51af485fd35036a91351efa718885000864afec760 = $this->env->getExtension("native_profiler");
        $__internal_583dcd758e0b7bea79753f51af485fd35036a91351efa718885000864afec760->enter($__internal_583dcd758e0b7bea79753f51af485fd35036a91351efa718885000864afec760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_583dcd758e0b7bea79753f51af485fd35036a91351efa718885000864afec760->leave($__internal_583dcd758e0b7bea79753f51af485fd35036a91351efa718885000864afec760_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57bcb6a567f8d6c2f79afdffeea68968b963f6696a7c4c2faecc31ee69248ca3 = $this->env->getExtension("native_profiler");
        $__internal_57bcb6a567f8d6c2f79afdffeea68968b963f6696a7c4c2faecc31ee69248ca3->enter($__internal_57bcb6a567f8d6c2f79afdffeea68968b963f6696a7c4c2faecc31ee69248ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57bcb6a567f8d6c2f79afdffeea68968b963f6696a7c4c2faecc31ee69248ca3->leave($__internal_57bcb6a567f8d6c2f79afdffeea68968b963f6696a7c4c2faecc31ee69248ca3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b7e9b08eaad451fcdcce6aa70857ced0ae571db33dec4e77a97d6d3b5de833e = $this->env->getExtension("native_profiler");
        $__internal_1b7e9b08eaad451fcdcce6aa70857ced0ae571db33dec4e77a97d6d3b5de833e->enter($__internal_1b7e9b08eaad451fcdcce6aa70857ced0ae571db33dec4e77a97d6d3b5de833e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1b7e9b08eaad451fcdcce6aa70857ced0ae571db33dec4e77a97d6d3b5de833e->leave($__internal_1b7e9b08eaad451fcdcce6aa70857ced0ae571db33dec4e77a97d6d3b5de833e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a2b7eb27841094b78ddaa236d8d0f3000fb4bf2010b45d136a9c4b89a0959a5 = $this->env->getExtension("native_profiler");
        $__internal_9a2b7eb27841094b78ddaa236d8d0f3000fb4bf2010b45d136a9c4b89a0959a5->enter($__internal_9a2b7eb27841094b78ddaa236d8d0f3000fb4bf2010b45d136a9c4b89a0959a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a2b7eb27841094b78ddaa236d8d0f3000fb4bf2010b45d136a9c4b89a0959a5->leave($__internal_9a2b7eb27841094b78ddaa236d8d0f3000fb4bf2010b45d136a9c4b89a0959a5_prof);

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
