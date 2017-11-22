<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_482ef1609ce7a7ee4b0f9d543e0c7e648a3fc835a3da3aaa7bf05660647060f2 extends Twig_Template
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
        $__internal_5a14f43677fe45c58225b3740f7c3835f1c9fcbc6b1f692e10764cd78943b764 = $this->env->getExtension("native_profiler");
        $__internal_5a14f43677fe45c58225b3740f7c3835f1c9fcbc6b1f692e10764cd78943b764->enter($__internal_5a14f43677fe45c58225b3740f7c3835f1c9fcbc6b1f692e10764cd78943b764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a14f43677fe45c58225b3740f7c3835f1c9fcbc6b1f692e10764cd78943b764->leave($__internal_5a14f43677fe45c58225b3740f7c3835f1c9fcbc6b1f692e10764cd78943b764_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa62208abbe94a1914bdff7ac905d93a2b264244c569e03c4b50d53d028e6182 = $this->env->getExtension("native_profiler");
        $__internal_aa62208abbe94a1914bdff7ac905d93a2b264244c569e03c4b50d53d028e6182->enter($__internal_aa62208abbe94a1914bdff7ac905d93a2b264244c569e03c4b50d53d028e6182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aa62208abbe94a1914bdff7ac905d93a2b264244c569e03c4b50d53d028e6182->leave($__internal_aa62208abbe94a1914bdff7ac905d93a2b264244c569e03c4b50d53d028e6182_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6daf445644b63ddafdf99b4b8aba87e4c8adcb54e777c1f82801f974495a763b = $this->env->getExtension("native_profiler");
        $__internal_6daf445644b63ddafdf99b4b8aba87e4c8adcb54e777c1f82801f974495a763b->enter($__internal_6daf445644b63ddafdf99b4b8aba87e4c8adcb54e777c1f82801f974495a763b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6daf445644b63ddafdf99b4b8aba87e4c8adcb54e777c1f82801f974495a763b->leave($__internal_6daf445644b63ddafdf99b4b8aba87e4c8adcb54e777c1f82801f974495a763b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_44ff9bd48f2f584961ec71c5b54e456c7893bf002e2975f5ffaa33cd77ad9762 = $this->env->getExtension("native_profiler");
        $__internal_44ff9bd48f2f584961ec71c5b54e456c7893bf002e2975f5ffaa33cd77ad9762->enter($__internal_44ff9bd48f2f584961ec71c5b54e456c7893bf002e2975f5ffaa33cd77ad9762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_44ff9bd48f2f584961ec71c5b54e456c7893bf002e2975f5ffaa33cd77ad9762->leave($__internal_44ff9bd48f2f584961ec71c5b54e456c7893bf002e2975f5ffaa33cd77ad9762_prof);

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
