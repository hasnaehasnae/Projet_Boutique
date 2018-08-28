<?php

/* EcommerceBundle:Default:produit/panier.html.twig */
class __TwigTemplate_e6f004f381a7c539b78a21272e28cd0996900de64e05b6667ca7ffe2cb59de0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:produit/panier.html.twig", 1);
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
        // line 2
        $context["totalHT"] = 0;
        // line 3
        $context["totalTTC"] = 0;
        // line 4
        $context["refTva"] = array();
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<br><br><br><br><br><br><br><br><br><br>
<div class=\"container\">
    <div class=\"row\">



        <div class=\"span9\">

            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
            <h2>Votre parnier</h2>
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
        // line 33
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 34
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    ";
        }
        // line 38
        echo "
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 40
            echo "                    <tr>
                        <form action=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "designationP", array()), "html", null, true);
            echo "</td>
                            <td>
                                <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 46
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                                </select>&nbsp;
                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                            </td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>
                        </form>
                    </tr>
                    ";
            // line 55
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 56
            echo "                    ";
            $context["totalTTC"] = 100;
            // line 57
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </tbody>
            </table>
            ";
        // line 61
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 62
            echo "            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo " €</dd>

                ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 66
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
            // line 68
            echo "
                <dt>Total TTC :</dt><dd>";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
            echo " €</dd>
            </dl>
            <div class=\"clearfix\"></div>
                <a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
            ";
        }
        // line 74
        echo "            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ecommerce_produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produit/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 74,  193 => 72,  187 => 69,  184 => 68,  173 => 66,  169 => 65,  164 => 63,  161 => 62,  159 => 61,  155 => 59,  148 => 57,  145 => 56,  143 => 55,  137 => 52,  133 => 51,  128 => 49,  125 => 48,  110 => 46,  106 => 45,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  86 => 38,  80 => 34,  78 => 33,  64 => 21,  55 => 18,  52 => 17,  48 => 16,  38 => 8,  35 => 7,  31 => 1,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
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
{% set totalHT = 0 %}
{% set totalTTC = 0%}
{% set refTva = {} %}


{% block body %}
<br><br><br><br><br><br><br><br><br><br>
<div class=\"container\">
    <div class=\"row\">



        <div class=\"span9\">

            {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ flashMessage }}
                </div>
            {% endfor %}

            <h2>Votre parnier</h2>
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
                            <td>{{  produit.designationP  }}</td>
                            <td>
                                <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    {% for i in 1..10 %}
                                        <option value=\"{{ i }}\" {% if i == panier[produit.id] %} selected=\"selected\" {% endif %}>{{ i }}</option>
                                    {% endfor %}
                                </select>&nbsp;
                                <a href=\"{{ path('supprimer', { 'id' : produit.id }) }}\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                            </td>
                            <td>{{ produit.prix }} €</td>
                            <td>{{ produit.prix * panier[produit.id] }} €</td>
                        </form>
                    </tr>
                    {% set totalHT = totalHT + (produit.prix * panier[produit.id]) %}
                    {% set totalTTC = 100 %}

                    {% endfor %}
                </tbody>
            </table>
            {% if produits|length != 0 %}
            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>{{ totalHT }} €</dd>

                {% for key, tva in refTva %}
                    <dt>TVA {{ key }} :</dt><dd>{{ tva }} €</dd>
                {% endfor %}

                <dt>Total TTC :</dt><dd>{{ totalTTC }} €</dd>
            </dl>
            <div class=\"clearfix\"></div>
                <a href=\"{{ path('livraison') }}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
            {% endif %}
            <a href=\"{{ path('ecommerce_produits') }}\" class=\"btn btn-primary\">Continuer mes achats</a>
        </div>

    </div>
</div>
{% endblock %}
", "EcommerceBundle:Default:produit/panier.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produit/panier.html.twig");
    }
}
