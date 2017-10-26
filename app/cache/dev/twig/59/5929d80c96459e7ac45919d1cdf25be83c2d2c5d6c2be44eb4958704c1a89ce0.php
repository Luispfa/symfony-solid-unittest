<?php

/* base.html.twig */
class __TwigTemplate_af1204b3431f34e8cc94ea31d670993b6892ce142421e28b4433501ef2729a58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bdf03b740b05521dc8df35ea15668e6736e339c170b07899e9b602a3260b89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdf03b740b05521dc8df35ea15668e6736e339c170b07899e9b602a3260b89b->enter($__internal_9bdf03b740b05521dc8df35ea15668e6736e339c170b07899e9b602a3260b89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9bdf03b740b05521dc8df35ea15668e6736e339c170b07899e9b602a3260b89b->leave($__internal_9bdf03b740b05521dc8df35ea15668e6736e339c170b07899e9b602a3260b89b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc826813887588f1dfcea655102be249b8a7b47a077a987705b4edf799825b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc826813887588f1dfcea655102be249b8a7b47a077a987705b4edf799825b89->enter($__internal_dc826813887588f1dfcea655102be249b8a7b47a077a987705b4edf799825b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dc826813887588f1dfcea655102be249b8a7b47a077a987705b4edf799825b89->leave($__internal_dc826813887588f1dfcea655102be249b8a7b47a077a987705b4edf799825b89_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ddbe3e147aa8a6d9470d575a66eb10aa060150ba7162bf5597df4a9140ef13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ddbe3e147aa8a6d9470d575a66eb10aa060150ba7162bf5597df4a9140ef13e->enter($__internal_6ddbe3e147aa8a6d9470d575a66eb10aa060150ba7162bf5597df4a9140ef13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6ddbe3e147aa8a6d9470d575a66eb10aa060150ba7162bf5597df4a9140ef13e->leave($__internal_6ddbe3e147aa8a6d9470d575a66eb10aa060150ba7162bf5597df4a9140ef13e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_825087c97f2611883caa5ee9f7d1e18cf6f1205a277a1050f334e1b0055bfb9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825087c97f2611883caa5ee9f7d1e18cf6f1205a277a1050f334e1b0055bfb9b->enter($__internal_825087c97f2611883caa5ee9f7d1e18cf6f1205a277a1050f334e1b0055bfb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_825087c97f2611883caa5ee9f7d1e18cf6f1205a277a1050f334e1b0055bfb9b->leave($__internal_825087c97f2611883caa5ee9f7d1e18cf6f1205a277a1050f334e1b0055bfb9b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_864ab70e8d0de80819f54623c1c34b64252cea92e80b542a892b429d428da512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864ab70e8d0de80819f54623c1c34b64252cea92e80b542a892b429d428da512->enter($__internal_864ab70e8d0de80819f54623c1c34b64252cea92e80b542a892b429d428da512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_864ab70e8d0de80819f54623c1c34b64252cea92e80b542a892b429d428da512->leave($__internal_864ab70e8d0de80819f54623c1c34b64252cea92e80b542a892b429d428da512_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/solid2.8/app/Resources/views/base.html.twig");
    }
}
