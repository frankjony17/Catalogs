<?php

/* CatalogBundle:Default:index.html.twig */
class __TwigTemplate_b96c4cba8856604c69bff0e3063ca3a247dc6641d9284c7b22b5794295a5d8f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CatalogBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f45629d2a0f6aa48a185c3b88d242527f9a2377b44b9c791a5aa1b92da1dacc3 = $this->env->getExtension("native_profiler");
        $__internal_f45629d2a0f6aa48a185c3b88d242527f9a2377b44b9c791a5aa1b92da1dacc3->enter($__internal_f45629d2a0f6aa48a185c3b88d242527f9a2377b44b9c791a5aa1b92da1dacc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CatalogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f45629d2a0f6aa48a185c3b88d242527f9a2377b44b9c791a5aa1b92da1dacc3->leave($__internal_f45629d2a0f6aa48a185c3b88d242527f9a2377b44b9c791a5aa1b92da1dacc3_prof);

    }

    public function getTemplateName()
    {
        return "CatalogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
