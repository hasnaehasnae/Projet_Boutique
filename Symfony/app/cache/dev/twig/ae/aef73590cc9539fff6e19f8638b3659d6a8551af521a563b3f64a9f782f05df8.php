<?php

/* EcommerceBundle:Default:Produit/navPanier.html.twig */
class __TwigTemplate_e763ea98a9fec8ccd0a0ef93a879c256be04a11291e4531bc1f849db6015da49 extends Twig_Template
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
        echo "<Table style=\"margin-top:1em;\">
  <tr>
    <td class=\"span1\">&nbsp
         <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">
<span class=\"glyphicon glyphicon-shopping-cart\"></span></a>

 &nbsp
 ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), "html", null, true);
        echo "
 article &nbsp</td>

 ";
        // line 11
        $context["totalHT"] = 0;
        // line 12
        echo " ";
        $context["total"] = 0;
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 14
            $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 15
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    <td class=\"span3\" >&nbsp ";
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo " DH &nbsp &nbsp</td>
<td class=\"span4\" >&nbsp  &nbsp  </td>
<td class=\"span5\" > <a href=\"#\"> &nbsp FR <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/france.png"), "html", null, true);
        echo "\" />&nbsp</a> <a href=\"#\"> -&nbsp AR <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/maroc.png"), "html", null, true);
        echo "\" />&nbsp</a></td>


  </tr>
</Table>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Produit/navPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  54 => 16,  48 => 15,  46 => 14,  42 => 13,  39 => 12,  37 => 11,  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<Table style=\"margin-top:1em;\">
  <tr>
    <td class=\"span1\">&nbsp
         <a href=\"{{ path('panier')}}\">
<span class=\"glyphicon glyphicon-shopping-cart\"></span></a>

 &nbsp
 {{ articles }}
 article &nbsp</td>

 {% set totalHT = 0 %}
 {% set total = 0  %}
{% for produit in produits %}
{% set total =  total + (produit.prix * panier[produit.id]) %}
 {% endfor %}
    <td class=\"span3\" >&nbsp {{ total }} DH &nbsp &nbsp</td>
<td class=\"span4\" >&nbsp  &nbsp  </td>
<td class=\"span5\" > <a href=\"#\"> &nbsp FR <img src=\"{{ asset('images/france.png') }}\" />&nbsp</a> <a href=\"#\"> -&nbsp AR <img src=\"{{ asset('images/maroc.png')}}\" />&nbsp</a></td>


  </tr>
</Table>
", "EcommerceBundle:Default:Produit/navPanier.html.twig", "C:\\wamp1\\www\\Projet_Boutique\\PFE\\Symfony\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Produit/navPanier.html.twig");
    }
}
