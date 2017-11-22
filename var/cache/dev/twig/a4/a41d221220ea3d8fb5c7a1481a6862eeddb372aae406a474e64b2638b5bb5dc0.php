<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_60ef8a00e99541c8e3230c1284b259fc152b84b6af42815e9913ac5cd5382738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbd9dcbba4cb05e4331feec3a4c95d23d3ded555901edd7dc26fa63923f35846 = $this->env->getExtension("native_profiler");
        $__internal_dbd9dcbba4cb05e4331feec3a4c95d23d3ded555901edd7dc26fa63923f35846->enter($__internal_dbd9dcbba4cb05e4331feec3a4c95d23d3ded555901edd7dc26fa63923f35846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd9dcbba4cb05e4331feec3a4c95d23d3ded555901edd7dc26fa63923f35846->leave($__internal_dbd9dcbba4cb05e4331feec3a4c95d23d3ded555901edd7dc26fa63923f35846_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d40c81eb5b41caa6d9735c897c0ed129f62c0a975d6b449b1162071c46ddb64 = $this->env->getExtension("native_profiler");
        $__internal_2d40c81eb5b41caa6d9735c897c0ed129f62c0a975d6b449b1162071c46ddb64->enter($__internal_2d40c81eb5b41caa6d9735c897c0ed129f62c0a975d6b449b1162071c46ddb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2d40c81eb5b41caa6d9735c897c0ed129f62c0a975d6b449b1162071c46ddb64->leave($__internal_2d40c81eb5b41caa6d9735c897c0ed129f62c0a975d6b449b1162071c46ddb64_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c8dd798e9dd47da5d2f46e3cbff35690d29f449a7a482edc7b550a73d4540d5 = $this->env->getExtension("native_profiler");
        $__internal_5c8dd798e9dd47da5d2f46e3cbff35690d29f449a7a482edc7b550a73d4540d5->enter($__internal_5c8dd798e9dd47da5d2f46e3cbff35690d29f449a7a482edc7b550a73d4540d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c8dd798e9dd47da5d2f46e3cbff35690d29f449a7a482edc7b550a73d4540d5->leave($__internal_5c8dd798e9dd47da5d2f46e3cbff35690d29f449a7a482edc7b550a73d4540d5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1af9ca441a9e8ef0ae61c7473fd6b1bd1f5c2c6f9822d937a66a30e3138c5df5 = $this->env->getExtension("native_profiler");
        $__internal_1af9ca441a9e8ef0ae61c7473fd6b1bd1f5c2c6f9822d937a66a30e3138c5df5->enter($__internal_1af9ca441a9e8ef0ae61c7473fd6b1bd1f5c2c6f9822d937a66a30e3138c5df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1af9ca441a9e8ef0ae61c7473fd6b1bd1f5c2c6f9822d937a66a30e3138c5df5->leave($__internal_1af9ca441a9e8ef0ae61c7473fd6b1bd1f5c2c6f9822d937a66a30e3138c5df5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
