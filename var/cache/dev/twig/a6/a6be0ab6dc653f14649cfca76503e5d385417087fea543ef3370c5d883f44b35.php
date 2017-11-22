<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1f974df6062efaa16853270227ddfecd040f79691586d1db45b26f67bbb932cc extends Twig_Template
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
        $__internal_16c34b014a4c8be782fdf47082d415d45865d0f0cef93395e608b3e14b850c74 = $this->env->getExtension("native_profiler");
        $__internal_16c34b014a4c8be782fdf47082d415d45865d0f0cef93395e608b3e14b850c74->enter($__internal_16c34b014a4c8be782fdf47082d415d45865d0f0cef93395e608b3e14b850c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c34b014a4c8be782fdf47082d415d45865d0f0cef93395e608b3e14b850c74->leave($__internal_16c34b014a4c8be782fdf47082d415d45865d0f0cef93395e608b3e14b850c74_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb29d044ce69eee89f93a0d5236e156e51ce808c95ff1b0d1e2a22ca88cbc2d9 = $this->env->getExtension("native_profiler");
        $__internal_fb29d044ce69eee89f93a0d5236e156e51ce808c95ff1b0d1e2a22ca88cbc2d9->enter($__internal_fb29d044ce69eee89f93a0d5236e156e51ce808c95ff1b0d1e2a22ca88cbc2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fb29d044ce69eee89f93a0d5236e156e51ce808c95ff1b0d1e2a22ca88cbc2d9->leave($__internal_fb29d044ce69eee89f93a0d5236e156e51ce808c95ff1b0d1e2a22ca88cbc2d9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_278943886433f3935a8f9df4f1a8419a4610534b0b18899a031b4495c33f101f = $this->env->getExtension("native_profiler");
        $__internal_278943886433f3935a8f9df4f1a8419a4610534b0b18899a031b4495c33f101f->enter($__internal_278943886433f3935a8f9df4f1a8419a4610534b0b18899a031b4495c33f101f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_278943886433f3935a8f9df4f1a8419a4610534b0b18899a031b4495c33f101f->leave($__internal_278943886433f3935a8f9df4f1a8419a4610534b0b18899a031b4495c33f101f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb1da5d9753360153681534fe40d542da3acbbe93c39b3884bc5296eced782af = $this->env->getExtension("native_profiler");
        $__internal_eb1da5d9753360153681534fe40d542da3acbbe93c39b3884bc5296eced782af->enter($__internal_eb1da5d9753360153681534fe40d542da3acbbe93c39b3884bc5296eced782af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_eb1da5d9753360153681534fe40d542da3acbbe93c39b3884bc5296eced782af->leave($__internal_eb1da5d9753360153681534fe40d542da3acbbe93c39b3884bc5296eced782af_prof);

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
