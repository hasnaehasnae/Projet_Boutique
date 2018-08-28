<?php

/* EcommerceBundle:Default:Produit/validation.html.twig */
class __TwigTemplate_a5fecce8c3ef346ed3c6dd8e7fbca7a568f50cd4cd5fc55ebf500328478fcbb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:Produit/validation.html.twig", 1);
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
        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<br><br><br><br><br><br><br><br>
<div class=\"container\">
    <div class=\"row\">

        <div class=\"span9\">

            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
            <h2>Valider mon panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                </thead>
                <tbody>
      ";
        // line 32
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 33
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    ";
        }
        // line 37
        echo "
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 39
            echo "                    <tr>
                        <form action=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "designationP", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>
                        </form>
                    </tr>
                    ";
            // line 49
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 50
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </tbody>
            </table>

            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
        echo " €</dd>

                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 59
            echo "                    <dt>TVA ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " :</dt><dd>";
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " €</dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                <dt>Total TTC :</dt><dd>";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
        echo " €</dd>
            </dl>

            <div class=\"span4 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dt>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "description", array()), "html", null, true);
        echo "</dt>
                    <dt> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "ville", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "pays", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "codePostal", array()), "html", null, true);
        echo " </dt>
              </dl>
            </div>

            <div class=\"clearfix\"></div>
            <a href=\"#\" class=\"btn btn-success pull-right\">Payer</a>
            <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-primary\">retour</a>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Produit/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 75,  169 => 69,  165 => 68,  156 => 62,  153 => 61,  142 => 59,  138 => 58,  133 => 56,  127 => 52,  120 => 50,  118 => 49,  112 => 46,  108 => 45,  103 => 43,  98 => 41,  94 => 40,  91 => 39,  87 => 38,  84 => 37,  78 => 33,  76 => 32,  62 => 20,  53 => 17,  50 => 16,  46 => 15,  38 => 9,  35 => 8,  31 => 1,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
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

{% set totalHT = 0    %}
{% set totalTTC = 0   %}
{% set refTva = {}    %}


{% block body %}
<br><br><br><br><br><br><br><br>
<div class=\"container\">
    <div class=\"row\">

        <div class=\"span9\">

            {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ flashMessage }}
                </div>
            {% endfor %}

            <h2>Valider mon panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                </thead>
                <tbody>
      {% if produits|length == 0 %}
                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    {% endif %}

                    {% for produit in produits %}
                    <tr>
                        <form action=\"{{ path('ajouter', { 'id' : produit.id }) }}\" method=\"get\">
                            <td>{{ produit.designationP}}</td>
                            <td>
                                {{ panier[produit.id] }}
                            </td>
                            <td>{{ produit.prix }} €</td>
                            <td>{{ produit.prix * panier[produit.id] }} €</td>
                        </form>
                    </tr>
                    {% set totalHT = totalHT + (produit.prix * panier[produit.id]) %}

                    {% endfor %}
                </tbody>
            </table>

            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>{{ totalHT }} €</dd>

                {% for key, tva in refTva %}
                    <dt>TVA {{ key }} :</dt><dd>{{ tva }} €</dd>
                {% endfor %}

                <dt>Total TTC :</dt><dd>{{ totalTTC }} €</dd>
            </dl>

            <div class=\"span4 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dt>{{ livraison.description }}</dt>
                    <dt> {{ livraison.ville }}-{{ livraison.pays}}-{{ livraison.codePostal }} </dt>
              </dl>
            </div>

            <div class=\"clearfix\"></div>
            <a href=\"#\" class=\"btn btn-success pull-right\">Payer</a>
            <a href=\"{{ path('livraison') }}\" class=\"btn btn-primary\">retour</a>
        </div>

    </div>
</div>
{% endblock %}
", "EcommerceBundle:Default:Produit/validation.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Produit/validation.html.twig");
    }
}
