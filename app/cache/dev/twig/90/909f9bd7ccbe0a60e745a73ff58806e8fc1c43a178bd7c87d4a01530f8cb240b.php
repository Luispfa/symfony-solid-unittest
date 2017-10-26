<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c63a989c7a612bab9291fa8db3221d2cac69b6ec1b7bb0377cb1b910463e6851 extends Twig_Template
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
        $__internal_28d37a79e5dd95d50dd01d08619ba5101cbd318828fd3fe627b955add2c952db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d37a79e5dd95d50dd01d08619ba5101cbd318828fd3fe627b955add2c952db->enter($__internal_28d37a79e5dd95d50dd01d08619ba5101cbd318828fd3fe627b955add2c952db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28d37a79e5dd95d50dd01d08619ba5101cbd318828fd3fe627b955add2c952db->leave($__internal_28d37a79e5dd95d50dd01d08619ba5101cbd318828fd3fe627b955add2c952db_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4041d86a3c05800a0ff9f015b3e3a422c70de0160ac2fac9d90a140f211d7a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4041d86a3c05800a0ff9f015b3e3a422c70de0160ac2fac9d90a140f211d7a50->enter($__internal_4041d86a3c05800a0ff9f015b3e3a422c70de0160ac2fac9d90a140f211d7a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4041d86a3c05800a0ff9f015b3e3a422c70de0160ac2fac9d90a140f211d7a50->leave($__internal_4041d86a3c05800a0ff9f015b3e3a422c70de0160ac2fac9d90a140f211d7a50_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec18325a127065664e63f0e5c61e01ba66976c9a273d977887f924ab7976cbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec18325a127065664e63f0e5c61e01ba66976c9a273d977887f924ab7976cbf2->enter($__internal_ec18325a127065664e63f0e5c61e01ba66976c9a273d977887f924ab7976cbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec18325a127065664e63f0e5c61e01ba66976c9a273d977887f924ab7976cbf2->leave($__internal_ec18325a127065664e63f0e5c61e01ba66976c9a273d977887f924ab7976cbf2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a987ee703177f1fa7e4e1fa3dd45d03f8eabdfa8113b5dba41989043dcf59693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a987ee703177f1fa7e4e1fa3dd45d03f8eabdfa8113b5dba41989043dcf59693->enter($__internal_a987ee703177f1fa7e4e1fa3dd45d03f8eabdfa8113b5dba41989043dcf59693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a987ee703177f1fa7e4e1fa3dd45d03f8eabdfa8113b5dba41989043dcf59693->leave($__internal_a987ee703177f1fa7e4e1fa3dd45d03f8eabdfa8113b5dba41989043dcf59693_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfony2.8-solid/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
