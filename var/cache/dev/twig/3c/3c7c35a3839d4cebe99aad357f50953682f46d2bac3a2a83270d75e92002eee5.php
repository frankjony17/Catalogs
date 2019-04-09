<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8d8d042d023c773914b1727351e398634d37ef013adae0ba97253225e5c0532b extends Twig_Template
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
        $__internal_2c02da0016ad786cfeb8b124504116c1038572a1223a217848ff80f5356ce2e4 = $this->env->getExtension("native_profiler");
        $__internal_2c02da0016ad786cfeb8b124504116c1038572a1223a217848ff80f5356ce2e4->enter($__internal_2c02da0016ad786cfeb8b124504116c1038572a1223a217848ff80f5356ce2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c02da0016ad786cfeb8b124504116c1038572a1223a217848ff80f5356ce2e4->leave($__internal_2c02da0016ad786cfeb8b124504116c1038572a1223a217848ff80f5356ce2e4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18ea7776f5a8f4f78ce57a82426ed669010330a9cf37d7b2ee85a093c9d1bdf5 = $this->env->getExtension("native_profiler");
        $__internal_18ea7776f5a8f4f78ce57a82426ed669010330a9cf37d7b2ee85a093c9d1bdf5->enter($__internal_18ea7776f5a8f4f78ce57a82426ed669010330a9cf37d7b2ee85a093c9d1bdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18ea7776f5a8f4f78ce57a82426ed669010330a9cf37d7b2ee85a093c9d1bdf5->leave($__internal_18ea7776f5a8f4f78ce57a82426ed669010330a9cf37d7b2ee85a093c9d1bdf5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30d350a4631c4afce145d48c459bdc82092e9516f20ca9d98c673e5d6d4c2eae = $this->env->getExtension("native_profiler");
        $__internal_30d350a4631c4afce145d48c459bdc82092e9516f20ca9d98c673e5d6d4c2eae->enter($__internal_30d350a4631c4afce145d48c459bdc82092e9516f20ca9d98c673e5d6d4c2eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30d350a4631c4afce145d48c459bdc82092e9516f20ca9d98c673e5d6d4c2eae->leave($__internal_30d350a4631c4afce145d48c459bdc82092e9516f20ca9d98c673e5d6d4c2eae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b6664c478b26816aaceac4bded33b0eeb3879ea13ae625f46b98e9ae571159c = $this->env->getExtension("native_profiler");
        $__internal_6b6664c478b26816aaceac4bded33b0eeb3879ea13ae625f46b98e9ae571159c->enter($__internal_6b6664c478b26816aaceac4bded33b0eeb3879ea13ae625f46b98e9ae571159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b6664c478b26816aaceac4bded33b0eeb3879ea13ae625f46b98e9ae571159c->leave($__internal_6b6664c478b26816aaceac4bded33b0eeb3879ea13ae625f46b98e9ae571159c_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
