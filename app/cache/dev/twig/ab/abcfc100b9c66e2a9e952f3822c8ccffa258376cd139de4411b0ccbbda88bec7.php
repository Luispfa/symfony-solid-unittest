<?php

/* base.html.twig */
class __TwigTemplate_e702b27fe64c7c895e0a9a9bf7e583786ee6a49a6bfc56fb1ac8ab9e301a236e extends Twig_Template
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
        $__internal_18e0536c510b3b0d9fc950dc62ba92c81b1e27ec4f2e4e1b12c52d3abaa51b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e0536c510b3b0d9fc950dc62ba92c81b1e27ec4f2e4e1b12c52d3abaa51b7d->enter($__internal_18e0536c510b3b0d9fc950dc62ba92c81b1e27ec4f2e4e1b12c52d3abaa51b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_18e0536c510b3b0d9fc950dc62ba92c81b1e27ec4f2e4e1b12c52d3abaa51b7d->leave($__internal_18e0536c510b3b0d9fc950dc62ba92c81b1e27ec4f2e4e1b12c52d3abaa51b7d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_435a39fa27338cb2a9dddd8465d56071c5ad7e268ed109df589fbf3652c467b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435a39fa27338cb2a9dddd8465d56071c5ad7e268ed109df589fbf3652c467b2->enter($__internal_435a39fa27338cb2a9dddd8465d56071c5ad7e268ed109df589fbf3652c467b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_435a39fa27338cb2a9dddd8465d56071c5ad7e268ed109df589fbf3652c467b2->leave($__internal_435a39fa27338cb2a9dddd8465d56071c5ad7e268ed109df589fbf3652c467b2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c878ef9ba53b1380025fd718d9a9688601ea60a5870c394c21029eefe058c195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c878ef9ba53b1380025fd718d9a9688601ea60a5870c394c21029eefe058c195->enter($__internal_c878ef9ba53b1380025fd718d9a9688601ea60a5870c394c21029eefe058c195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c878ef9ba53b1380025fd718d9a9688601ea60a5870c394c21029eefe058c195->leave($__internal_c878ef9ba53b1380025fd718d9a9688601ea60a5870c394c21029eefe058c195_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_96b6d232300e5ab28896129107fc493c81fa337ce9b0cd97d988cd60aefa5432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b6d232300e5ab28896129107fc493c81fa337ce9b0cd97d988cd60aefa5432->enter($__internal_96b6d232300e5ab28896129107fc493c81fa337ce9b0cd97d988cd60aefa5432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96b6d232300e5ab28896129107fc493c81fa337ce9b0cd97d988cd60aefa5432->leave($__internal_96b6d232300e5ab28896129107fc493c81fa337ce9b0cd97d988cd60aefa5432_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e1d5c7d1fc724f6f9fdc1a9fa4ad569d951c29c062f407b425740a1d2990872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1d5c7d1fc724f6f9fdc1a9fa4ad569d951c29c062f407b425740a1d2990872->enter($__internal_7e1d5c7d1fc724f6f9fdc1a9fa4ad569d951c29c062f407b425740a1d2990872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7e1d5c7d1fc724f6f9fdc1a9fa4ad569d951c29c062f407b425740a1d2990872->leave($__internal_7e1d5c7d1fc724f6f9fdc1a9fa4ad569d951c29c062f407b425740a1d2990872_prof);

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
", "base.html.twig", "/var/www/html/symfony-solid-unittest/app/Resources/views/base.html.twig");
    }
}
