<?php

/* EcommerceBundle:Default:page2.html.twig */
class __TwigTemplate_5c6d90775c39360a0217efa6a4403951c8bdf4a050df3330998fe0ec61ef3325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:page2.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<br>
<br>
<br><br>
<br><br><br><br>

Formulaire: <br>
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "



";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:page2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{%  block body %}
<br>
<br>
<br><br>
<br><br><br><br>

Formulaire: <br>
{{ form(form) }}



{% endblock %}
", "EcommerceBundle:Default:page2.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/page2.html.twig");
    }
}
