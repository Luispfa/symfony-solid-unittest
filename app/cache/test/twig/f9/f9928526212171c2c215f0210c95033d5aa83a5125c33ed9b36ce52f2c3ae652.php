<?php

/* base.html.twig */
class __TwigTemplate_9bad2a0e52d795e884490c0ceb61fabeb1fc6b3612201b9498f1c2d17134f0a9 extends Twig_Template
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
        $__internal_945a1846529076e19c49cac2d94836be5bdfb664bc5cfb587ad6375d701f246b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945a1846529076e19c49cac2d94836be5bdfb664bc5cfb587ad6375d701f246b->enter($__internal_945a1846529076e19c49cac2d94836be5bdfb664bc5cfb587ad6375d701f246b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_945a1846529076e19c49cac2d94836be5bdfb664bc5cfb587ad6375d701f246b->leave($__internal_945a1846529076e19c49cac2d94836be5bdfb664bc5cfb587ad6375d701f246b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc398dcc1e67272255d4f1fa7927ba63e0abac549559390b9d1ce540bd8c0c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc398dcc1e67272255d4f1fa7927ba63e0abac549559390b9d1ce540bd8c0c92->enter($__internal_bc398dcc1e67272255d4f1fa7927ba63e0abac549559390b9d1ce540bd8c0c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bc398dcc1e67272255d4f1fa7927ba63e0abac549559390b9d1ce540bd8c0c92->leave($__internal_bc398dcc1e67272255d4f1fa7927ba63e0abac549559390b9d1ce540bd8c0c92_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1977d28020363ba2ba938e2b7082fa3b84982df2f628d56ad7f31a1925fb1110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1977d28020363ba2ba938e2b7082fa3b84982df2f628d56ad7f31a1925fb1110->enter($__internal_1977d28020363ba2ba938e2b7082fa3b84982df2f628d56ad7f31a1925fb1110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1977d28020363ba2ba938e2b7082fa3b84982df2f628d56ad7f31a1925fb1110->leave($__internal_1977d28020363ba2ba938e2b7082fa3b84982df2f628d56ad7f31a1925fb1110_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2f45c98e3eb309a0a6170d40d3291cf9421977a2bfcc9c02321479fdde1a1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f45c98e3eb309a0a6170d40d3291cf9421977a2bfcc9c02321479fdde1a1d4->enter($__internal_e2f45c98e3eb309a0a6170d40d3291cf9421977a2bfcc9c02321479fdde1a1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e2f45c98e3eb309a0a6170d40d3291cf9421977a2bfcc9c02321479fdde1a1d4->leave($__internal_e2f45c98e3eb309a0a6170d40d3291cf9421977a2bfcc9c02321479fdde1a1d4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc54241e00b0484532d729064713eedfb6faa0ed4618c4691011cd826a987761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc54241e00b0484532d729064713eedfb6faa0ed4618c4691011cd826a987761->enter($__internal_cc54241e00b0484532d729064713eedfb6faa0ed4618c4691011cd826a987761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cc54241e00b0484532d729064713eedfb6faa0ed4618c4691011cd826a987761->leave($__internal_cc54241e00b0484532d729064713eedfb6faa0ed4618c4691011cd826a987761_prof);

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
