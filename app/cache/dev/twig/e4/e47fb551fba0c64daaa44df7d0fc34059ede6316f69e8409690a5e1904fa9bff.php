<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9623a0ca5a8cdc7e7b3d4dc261d68b7114938f950d60798c3e201c94b35c1bb7 extends Twig_Template
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
        $__internal_57fedf5c591e9fe5acffa086eaafd5ab1b29b4ce5e3ee86d62e9edb62b333f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fedf5c591e9fe5acffa086eaafd5ab1b29b4ce5e3ee86d62e9edb62b333f29->enter($__internal_57fedf5c591e9fe5acffa086eaafd5ab1b29b4ce5e3ee86d62e9edb62b333f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57fedf5c591e9fe5acffa086eaafd5ab1b29b4ce5e3ee86d62e9edb62b333f29->leave($__internal_57fedf5c591e9fe5acffa086eaafd5ab1b29b4ce5e3ee86d62e9edb62b333f29_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c6c2b0fe0ae31bea249fb0f64374b24f749853451dc0c75660ea1dd5b063ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6c2b0fe0ae31bea249fb0f64374b24f749853451dc0c75660ea1dd5b063ee4->enter($__internal_1c6c2b0fe0ae31bea249fb0f64374b24f749853451dc0c75660ea1dd5b063ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1c6c2b0fe0ae31bea249fb0f64374b24f749853451dc0c75660ea1dd5b063ee4->leave($__internal_1c6c2b0fe0ae31bea249fb0f64374b24f749853451dc0c75660ea1dd5b063ee4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5042475c45673d5b8da268a04bd3539a8859b955f77839124818481af8b1c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5042475c45673d5b8da268a04bd3539a8859b955f77839124818481af8b1c14->enter($__internal_c5042475c45673d5b8da268a04bd3539a8859b955f77839124818481af8b1c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c5042475c45673d5b8da268a04bd3539a8859b955f77839124818481af8b1c14->leave($__internal_c5042475c45673d5b8da268a04bd3539a8859b955f77839124818481af8b1c14_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7288c1de734dc70a6678051cb4b03ec8fbdac5f112411ff6b0747556a64aba07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7288c1de734dc70a6678051cb4b03ec8fbdac5f112411ff6b0747556a64aba07->enter($__internal_7288c1de734dc70a6678051cb4b03ec8fbdac5f112411ff6b0747556a64aba07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7288c1de734dc70a6678051cb4b03ec8fbdac5f112411ff6b0747556a64aba07->leave($__internal_7288c1de734dc70a6678051cb4b03ec8fbdac5f112411ff6b0747556a64aba07_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfony-solid-unittest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
