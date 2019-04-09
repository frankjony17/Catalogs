<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_02954e988ac57b707b6c215a9fc6036f6866f1855bbf5a83861cc07438d7fc70 extends Twig_Template
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
        $__internal_4c97b8df6d5548137d5c14bfbdd2d8e4982cb0e621a4f2440c7d5995ad16d50a = $this->env->getExtension("native_profiler");
        $__internal_4c97b8df6d5548137d5c14bfbdd2d8e4982cb0e621a4f2440c7d5995ad16d50a->enter($__internal_4c97b8df6d5548137d5c14bfbdd2d8e4982cb0e621a4f2440c7d5995ad16d50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c97b8df6d5548137d5c14bfbdd2d8e4982cb0e621a4f2440c7d5995ad16d50a->leave($__internal_4c97b8df6d5548137d5c14bfbdd2d8e4982cb0e621a4f2440c7d5995ad16d50a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_30ffc7cad3af4626dc762261ffc774ef73b23c189ec84b81e174c3057fcdd6a2 = $this->env->getExtension("native_profiler");
        $__internal_30ffc7cad3af4626dc762261ffc774ef73b23c189ec84b81e174c3057fcdd6a2->enter($__internal_30ffc7cad3af4626dc762261ffc774ef73b23c189ec84b81e174c3057fcdd6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_30ffc7cad3af4626dc762261ffc774ef73b23c189ec84b81e174c3057fcdd6a2->leave($__internal_30ffc7cad3af4626dc762261ffc774ef73b23c189ec84b81e174c3057fcdd6a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef388fef8df34ebaddd6ffdf45e18a7f5d666260feba7cbcc91e90f68b2ffe7d = $this->env->getExtension("native_profiler");
        $__internal_ef388fef8df34ebaddd6ffdf45e18a7f5d666260feba7cbcc91e90f68b2ffe7d->enter($__internal_ef388fef8df34ebaddd6ffdf45e18a7f5d666260feba7cbcc91e90f68b2ffe7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ef388fef8df34ebaddd6ffdf45e18a7f5d666260feba7cbcc91e90f68b2ffe7d->leave($__internal_ef388fef8df34ebaddd6ffdf45e18a7f5d666260feba7cbcc91e90f68b2ffe7d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_79ec9637ccf663a7d367700b5a82decefe421f82dd5f3c5fdd7971590b437136 = $this->env->getExtension("native_profiler");
        $__internal_79ec9637ccf663a7d367700b5a82decefe421f82dd5f3c5fdd7971590b437136->enter($__internal_79ec9637ccf663a7d367700b5a82decefe421f82dd5f3c5fdd7971590b437136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_79ec9637ccf663a7d367700b5a82decefe421f82dd5f3c5fdd7971590b437136->leave($__internal_79ec9637ccf663a7d367700b5a82decefe421f82dd5f3c5fdd7971590b437136_prof);

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
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
