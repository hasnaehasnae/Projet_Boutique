<?php

/* EcommerceBundle:Default:produit/livraison.html.twig */
class __TwigTemplate_9929bf3c76b1efd60024a98a99673686c5b7894d1dcfbc52f57183fa954f263e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:produit/livraison.html.twig", 1);
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
        echo "<br><br><br><br><br><br><br><br><br><br>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">

                        <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
        echo "\" method=\"POST\">

                            <h4>Adresse de livraison</h4>

                            <label class=\"radio\">

                            </label>


                            <br /><br />

                          
                    </div>



                </div>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produit/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
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

{% block body %}
<br><br><br><br><br><br><br><br><br><br>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">

                        <form action=\"{{ path('validation') }}\" method=\"POST\">

                            <h4>Adresse de livraison</h4>

                            <label class=\"radio\">

                            </label>


                            <br /><br />

                          
                    </div>



                </div>
            </div>

        </div>
    </div>
{% endblock %}
", "EcommerceBundle:Default:produit/livraison.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produit/livraison.html.twig");
    }
}
