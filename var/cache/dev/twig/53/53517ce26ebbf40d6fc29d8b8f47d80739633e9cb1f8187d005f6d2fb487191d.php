<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_678817c4834e2a8d7e647580669f229a9c17b2825be743c6bd55fc153e9b3ec2 extends Twig_Template
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
        $__internal_d7a7be455e5c305f4ee41444b65c93eb50a28db6bb5484d6e19e650c222e9206 = $this->env->getExtension("native_profiler");
        $__internal_d7a7be455e5c305f4ee41444b65c93eb50a28db6bb5484d6e19e650c222e9206->enter($__internal_d7a7be455e5c305f4ee41444b65c93eb50a28db6bb5484d6e19e650c222e9206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a7be455e5c305f4ee41444b65c93eb50a28db6bb5484d6e19e650c222e9206->leave($__internal_d7a7be455e5c305f4ee41444b65c93eb50a28db6bb5484d6e19e650c222e9206_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e04629cb2d6ab3ca4ef2fd9b59cbfef6c438160e32d83ea27aca6e8aa6cf5675 = $this->env->getExtension("native_profiler");
        $__internal_e04629cb2d6ab3ca4ef2fd9b59cbfef6c438160e32d83ea27aca6e8aa6cf5675->enter($__internal_e04629cb2d6ab3ca4ef2fd9b59cbfef6c438160e32d83ea27aca6e8aa6cf5675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e04629cb2d6ab3ca4ef2fd9b59cbfef6c438160e32d83ea27aca6e8aa6cf5675->leave($__internal_e04629cb2d6ab3ca4ef2fd9b59cbfef6c438160e32d83ea27aca6e8aa6cf5675_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8a998caf633ac009630a282f21663400428c431d5ecad2d6a82179926ef5682 = $this->env->getExtension("native_profiler");
        $__internal_f8a998caf633ac009630a282f21663400428c431d5ecad2d6a82179926ef5682->enter($__internal_f8a998caf633ac009630a282f21663400428c431d5ecad2d6a82179926ef5682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f8a998caf633ac009630a282f21663400428c431d5ecad2d6a82179926ef5682->leave($__internal_f8a998caf633ac009630a282f21663400428c431d5ecad2d6a82179926ef5682_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7a25c1fd4be44392e960f8310a7a6142ffb4c3cf37b7f7727bc46813add34fe = $this->env->getExtension("native_profiler");
        $__internal_f7a25c1fd4be44392e960f8310a7a6142ffb4c3cf37b7f7727bc46813add34fe->enter($__internal_f7a25c1fd4be44392e960f8310a7a6142ffb4c3cf37b7f7727bc46813add34fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f7a25c1fd4be44392e960f8310a7a6142ffb4c3cf37b7f7727bc46813add34fe->leave($__internal_f7a25c1fd4be44392e960f8310a7a6142ffb4c3cf37b7f7727bc46813add34fe_prof);

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
