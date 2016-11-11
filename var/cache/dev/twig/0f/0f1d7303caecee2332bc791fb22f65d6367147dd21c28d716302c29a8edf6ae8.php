<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7d4fd5b15d109cf14753b9ea220a90b29507093a74e5af56f32cd45cf4281f08 extends Twig_Template
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
        $__internal_525f09a3e3c9be81e181df559302f467c571fea2dc7ca0eb13c7464731c486b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525f09a3e3c9be81e181df559302f467c571fea2dc7ca0eb13c7464731c486b6->enter($__internal_525f09a3e3c9be81e181df559302f467c571fea2dc7ca0eb13c7464731c486b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_525f09a3e3c9be81e181df559302f467c571fea2dc7ca0eb13c7464731c486b6->leave($__internal_525f09a3e3c9be81e181df559302f467c571fea2dc7ca0eb13c7464731c486b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_382f35a210d19291a567b3d620dac6879d72252695096acd99b1965a29d48803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382f35a210d19291a567b3d620dac6879d72252695096acd99b1965a29d48803->enter($__internal_382f35a210d19291a567b3d620dac6879d72252695096acd99b1965a29d48803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_382f35a210d19291a567b3d620dac6879d72252695096acd99b1965a29d48803->leave($__internal_382f35a210d19291a567b3d620dac6879d72252695096acd99b1965a29d48803_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3b326602b7487ee1cd02eabe61cb79da2cc8cfd2e01f82d08e0a0c22a935228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b326602b7487ee1cd02eabe61cb79da2cc8cfd2e01f82d08e0a0c22a935228->enter($__internal_f3b326602b7487ee1cd02eabe61cb79da2cc8cfd2e01f82d08e0a0c22a935228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3b326602b7487ee1cd02eabe61cb79da2cc8cfd2e01f82d08e0a0c22a935228->leave($__internal_f3b326602b7487ee1cd02eabe61cb79da2cc8cfd2e01f82d08e0a0c22a935228_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f1bc0c4e5667c1685241a863745147615864d816b9f9861f1e0b0fb58a52530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1bc0c4e5667c1685241a863745147615864d816b9f9861f1e0b0fb58a52530->enter($__internal_5f1bc0c4e5667c1685241a863745147615864d816b9f9861f1e0b0fb58a52530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5f1bc0c4e5667c1685241a863745147615864d816b9f9861f1e0b0fb58a52530->leave($__internal_5f1bc0c4e5667c1685241a863745147615864d816b9f9861f1e0b0fb58a52530_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\AmandaSousa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
