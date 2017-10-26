<?php

/* base.html.twig */
class __TwigTemplate_51850e4a83fb9d52729cb605b026ab594d37136a46d574f6c4b813636e86e497 extends Twig_Template
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
        $__internal_b71ade8a329d5d92927bc41c978050cb553cbd29b46f85d9a3525f3703126dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71ade8a329d5d92927bc41c978050cb553cbd29b46f85d9a3525f3703126dd4->enter($__internal_b71ade8a329d5d92927bc41c978050cb553cbd29b46f85d9a3525f3703126dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b71ade8a329d5d92927bc41c978050cb553cbd29b46f85d9a3525f3703126dd4->leave($__internal_b71ade8a329d5d92927bc41c978050cb553cbd29b46f85d9a3525f3703126dd4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_00b9d166cfde6016a07548296f5ce533cc7e00a30cb03fea4412992ceb67f9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b9d166cfde6016a07548296f5ce533cc7e00a30cb03fea4412992ceb67f9df->enter($__internal_00b9d166cfde6016a07548296f5ce533cc7e00a30cb03fea4412992ceb67f9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_00b9d166cfde6016a07548296f5ce533cc7e00a30cb03fea4412992ceb67f9df->leave($__internal_00b9d166cfde6016a07548296f5ce533cc7e00a30cb03fea4412992ceb67f9df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a6aba77e85d15273ae76ed52c6f91223884628184839532ef35124e2746e3484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6aba77e85d15273ae76ed52c6f91223884628184839532ef35124e2746e3484->enter($__internal_a6aba77e85d15273ae76ed52c6f91223884628184839532ef35124e2746e3484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a6aba77e85d15273ae76ed52c6f91223884628184839532ef35124e2746e3484->leave($__internal_a6aba77e85d15273ae76ed52c6f91223884628184839532ef35124e2746e3484_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf2290bedc101968462cc45d21f9f846035d11f6bb7e5e4d87ccfcfec312e78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2290bedc101968462cc45d21f9f846035d11f6bb7e5e4d87ccfcfec312e78f->enter($__internal_bf2290bedc101968462cc45d21f9f846035d11f6bb7e5e4d87ccfcfec312e78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bf2290bedc101968462cc45d21f9f846035d11f6bb7e5e4d87ccfcfec312e78f->leave($__internal_bf2290bedc101968462cc45d21f9f846035d11f6bb7e5e4d87ccfcfec312e78f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0114a82ba472b7943da0a84186d17adf0fa6d9f949500a1e1a50fac8a6887b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0114a82ba472b7943da0a84186d17adf0fa6d9f949500a1e1a50fac8a6887b83->enter($__internal_0114a82ba472b7943da0a84186d17adf0fa6d9f949500a1e1a50fac8a6887b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0114a82ba472b7943da0a84186d17adf0fa6d9f949500a1e1a50fac8a6887b83->leave($__internal_0114a82ba472b7943da0a84186d17adf0fa6d9f949500a1e1a50fac8a6887b83_prof);

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
", "base.html.twig", "/var/www/html/symfony2.8-solid/app/Resources/views/base.html.twig");
    }
}
