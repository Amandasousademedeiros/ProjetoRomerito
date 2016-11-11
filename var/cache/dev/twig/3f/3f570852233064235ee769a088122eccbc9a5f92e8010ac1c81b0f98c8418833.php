<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fe788c26a417b0d614737f7eeb4f4fcb74e2a329290beb630b7a3c78ce271046 extends Twig_Template
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
        $__internal_8fba7f9e595727216fa3ce9b667df85d3e633f6294ae895aa3bc8160d3b54ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fba7f9e595727216fa3ce9b667df85d3e633f6294ae895aa3bc8160d3b54ef0->enter($__internal_8fba7f9e595727216fa3ce9b667df85d3e633f6294ae895aa3bc8160d3b54ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fba7f9e595727216fa3ce9b667df85d3e633f6294ae895aa3bc8160d3b54ef0->leave($__internal_8fba7f9e595727216fa3ce9b667df85d3e633f6294ae895aa3bc8160d3b54ef0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ad78f28fccf29166bf7a4d21c5c5e68eedd10f7bba74c257238087ceff17265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad78f28fccf29166bf7a4d21c5c5e68eedd10f7bba74c257238087ceff17265->enter($__internal_4ad78f28fccf29166bf7a4d21c5c5e68eedd10f7bba74c257238087ceff17265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_4ad78f28fccf29166bf7a4d21c5c5e68eedd10f7bba74c257238087ceff17265->leave($__internal_4ad78f28fccf29166bf7a4d21c5c5e68eedd10f7bba74c257238087ceff17265_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d0725a867196b3b9cb3795a6e57119f08862ec654cd0cc06b87d18cdbd18d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0725a867196b3b9cb3795a6e57119f08862ec654cd0cc06b87d18cdbd18d44->enter($__internal_8d0725a867196b3b9cb3795a6e57119f08862ec654cd0cc06b87d18cdbd18d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8d0725a867196b3b9cb3795a6e57119f08862ec654cd0cc06b87d18cdbd18d44->leave($__internal_8d0725a867196b3b9cb3795a6e57119f08862ec654cd0cc06b87d18cdbd18d44_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2637cf1f26de11e9deb7bd51aaaa3a9c57abe2451fa86d17b0eda8e8edcf387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2637cf1f26de11e9deb7bd51aaaa3a9c57abe2451fa86d17b0eda8e8edcf387->enter($__internal_d2637cf1f26de11e9deb7bd51aaaa3a9c57abe2451fa86d17b0eda8e8edcf387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d2637cf1f26de11e9deb7bd51aaaa3a9c57abe2451fa86d17b0eda8e8edcf387->leave($__internal_d2637cf1f26de11e9deb7bd51aaaa3a9c57abe2451fa86d17b0eda8e8edcf387_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\AmandaSousa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
