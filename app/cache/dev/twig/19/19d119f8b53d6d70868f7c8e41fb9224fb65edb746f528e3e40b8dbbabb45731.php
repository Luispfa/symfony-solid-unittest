<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d2df22eed2686c1bd4c0fb1242b11006404566fd412cb00ad6f6b76226df90a8 extends Twig_Template
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
        $__internal_1b634d7f8ee0abd3711f6f4c27913b5b61ee359e2645b9b69307a3e5c8a55e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b634d7f8ee0abd3711f6f4c27913b5b61ee359e2645b9b69307a3e5c8a55e91->enter($__internal_1b634d7f8ee0abd3711f6f4c27913b5b61ee359e2645b9b69307a3e5c8a55e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b634d7f8ee0abd3711f6f4c27913b5b61ee359e2645b9b69307a3e5c8a55e91->leave($__internal_1b634d7f8ee0abd3711f6f4c27913b5b61ee359e2645b9b69307a3e5c8a55e91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1cb67da512cc333bc9791e3861f89b6de31b5945cc24c29af827bdae49c23b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb67da512cc333bc9791e3861f89b6de31b5945cc24c29af827bdae49c23b51->enter($__internal_1cb67da512cc333bc9791e3861f89b6de31b5945cc24c29af827bdae49c23b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1cb67da512cc333bc9791e3861f89b6de31b5945cc24c29af827bdae49c23b51->leave($__internal_1cb67da512cc333bc9791e3861f89b6de31b5945cc24c29af827bdae49c23b51_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e57dc8771a879f19509e9b369aa530f13c85ec6f72ded716d26967d51fdc1004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57dc8771a879f19509e9b369aa530f13c85ec6f72ded716d26967d51fdc1004->enter($__internal_e57dc8771a879f19509e9b369aa530f13c85ec6f72ded716d26967d51fdc1004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_e57dc8771a879f19509e9b369aa530f13c85ec6f72ded716d26967d51fdc1004->leave($__internal_e57dc8771a879f19509e9b369aa530f13c85ec6f72ded716d26967d51fdc1004_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_715c1c42d90c1200b9fe1ba1e0c17ad91881978bef228941539895d31a5ed4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715c1c42d90c1200b9fe1ba1e0c17ad91881978bef228941539895d31a5ed4d0->enter($__internal_715c1c42d90c1200b9fe1ba1e0c17ad91881978bef228941539895d31a5ed4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_715c1c42d90c1200b9fe1ba1e0c17ad91881978bef228941539895d31a5ed4d0->leave($__internal_715c1c42d90c1200b9fe1ba1e0c17ad91881978bef228941539895d31a5ed4d0_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/solid2.8/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
