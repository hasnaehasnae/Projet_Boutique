<?php

/* EcommerceBundle:Default:Produit/Categorie.html.twig */
class __TwigTemplate_207510f09375751ec0b6257d15aedc283ac2ee02609f633b67781fa5dca6eae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 2
            echo "    <li class=\"dropdown-item\">
        <a  href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorieProduits", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "getDesignationC", array(), "method"), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Produit/Categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for categorie in categories %}
    <li class=\"dropdown-item\">
        <a  href=\"{{ path('categorieProduits', { 'categorie' : categorie.id }) }}\">{{ categorie.getDesignationC() }}</a>
    </li>
{% endfor %}
", "EcommerceBundle:Default:Produit/Categorie.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Produit/Categorie.html.twig");
    }
}
