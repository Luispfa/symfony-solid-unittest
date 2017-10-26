<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_880e27358a3bba6bac9fce1b1fead1bc79242955ae78605436fdc437eae8d563 extends Twig_Template
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
        $__internal_255650843648941d3dfd74e3e9f461b3c55788cbf4bef89aca39a7033469cf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255650843648941d3dfd74e3e9f461b3c55788cbf4bef89aca39a7033469cf89->enter($__internal_255650843648941d3dfd74e3e9f461b3c55788cbf4bef89aca39a7033469cf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_255650843648941d3dfd74e3e9f461b3c55788cbf4bef89aca39a7033469cf89->leave($__internal_255650843648941d3dfd74e3e9f461b3c55788cbf4bef89aca39a7033469cf89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83baa44c7647d3941ae53ee7c258aa611932061302529ef833638d5a56f91081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83baa44c7647d3941ae53ee7c258aa611932061302529ef833638d5a56f91081->enter($__internal_83baa44c7647d3941ae53ee7c258aa611932061302529ef833638d5a56f91081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_83baa44c7647d3941ae53ee7c258aa611932061302529ef833638d5a56f91081->leave($__internal_83baa44c7647d3941ae53ee7c258aa611932061302529ef833638d5a56f91081_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4728a582ed504f5172b41036ac8b32c42d7016042b4d03f1aa8bce58862bc7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4728a582ed504f5172b41036ac8b32c42d7016042b4d03f1aa8bce58862bc7ce->enter($__internal_4728a582ed504f5172b41036ac8b32c42d7016042b4d03f1aa8bce58862bc7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4728a582ed504f5172b41036ac8b32c42d7016042b4d03f1aa8bce58862bc7ce->leave($__internal_4728a582ed504f5172b41036ac8b32c42d7016042b4d03f1aa8bce58862bc7ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62a5352131a3e1c429571e341685a6d281687971b1c73eae839d038fe361348d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a5352131a3e1c429571e341685a6d281687971b1c73eae839d038fe361348d->enter($__internal_62a5352131a3e1c429571e341685a6d281687971b1c73eae839d038fe361348d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_62a5352131a3e1c429571e341685a6d281687971b1c73eae839d038fe361348d->leave($__internal_62a5352131a3e1c429571e341685a6d281687971b1c73eae839d038fe361348d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/solid2.8/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
