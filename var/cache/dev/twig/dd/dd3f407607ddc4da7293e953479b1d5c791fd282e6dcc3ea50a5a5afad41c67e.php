<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_474f64f81a009966e883ebe395adfd16392d15b21414113e6b8fcbaa82caa818 extends Twig_Template
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
        $__internal_5d56b41f71eb1d480fb580464813966f64d787ec4deeb706509ea36542d5c604 = $this->env->getExtension("native_profiler");
        $__internal_5d56b41f71eb1d480fb580464813966f64d787ec4deeb706509ea36542d5c604->enter($__internal_5d56b41f71eb1d480fb580464813966f64d787ec4deeb706509ea36542d5c604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d56b41f71eb1d480fb580464813966f64d787ec4deeb706509ea36542d5c604->leave($__internal_5d56b41f71eb1d480fb580464813966f64d787ec4deeb706509ea36542d5c604_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3bab7286467b3eb0ccb7a086436456e9baa05abeee0ad00dff51494313bbf5a = $this->env->getExtension("native_profiler");
        $__internal_d3bab7286467b3eb0ccb7a086436456e9baa05abeee0ad00dff51494313bbf5a->enter($__internal_d3bab7286467b3eb0ccb7a086436456e9baa05abeee0ad00dff51494313bbf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d3bab7286467b3eb0ccb7a086436456e9baa05abeee0ad00dff51494313bbf5a->leave($__internal_d3bab7286467b3eb0ccb7a086436456e9baa05abeee0ad00dff51494313bbf5a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bdefa86d1558304d873e0bbc8803c9eac1559a7f2ad25668b2f1182bc7cf745b = $this->env->getExtension("native_profiler");
        $__internal_bdefa86d1558304d873e0bbc8803c9eac1559a7f2ad25668b2f1182bc7cf745b->enter($__internal_bdefa86d1558304d873e0bbc8803c9eac1559a7f2ad25668b2f1182bc7cf745b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bdefa86d1558304d873e0bbc8803c9eac1559a7f2ad25668b2f1182bc7cf745b->leave($__internal_bdefa86d1558304d873e0bbc8803c9eac1559a7f2ad25668b2f1182bc7cf745b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3eff483daf73dad49cba2d67805985f1785492e0d2607461ee41445088d6c2f4 = $this->env->getExtension("native_profiler");
        $__internal_3eff483daf73dad49cba2d67805985f1785492e0d2607461ee41445088d6c2f4->enter($__internal_3eff483daf73dad49cba2d67805985f1785492e0d2607461ee41445088d6c2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3eff483daf73dad49cba2d67805985f1785492e0d2607461ee41445088d6c2f4->leave($__internal_3eff483daf73dad49cba2d67805985f1785492e0d2607461ee41445088d6c2f4_prof);

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
