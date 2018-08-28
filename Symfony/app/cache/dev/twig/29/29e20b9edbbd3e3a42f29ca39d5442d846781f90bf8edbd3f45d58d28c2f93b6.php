<?php

/* EcommerceBundle:Default:produit/test.html.twig */
class __TwigTemplate_135a04424fd715966245bc624b911020ad8b65f58471422c8d9bbd6d2e085e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:produit/test.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<br><br><br><br><br><br><br><br><br>
<div class=\"container\" >
   ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 6
            echo "
   ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 8
                echo "
                <div class=\"panel panel-default pn inline\">
<div class=\"panel-body\">  <h4>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "designationP", array()), "html", null, true);
                echo "</h4>
                                        <p>";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo " €</p>     </div>

                ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["produit"], "images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 14
                    echo "                   <p>image.url1 </p>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "
               <form action=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\" method=\"get\">

<div class=\"panel-footer\">
<select class=\"pn2\" name=\"qte\">
";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 22
                    echo "     <option>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo " </select>
          <button class=\"btn btn-info\">J'achéte</button>
                 </form>

</div>
</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "

                ";
        } else {
            // line 34
            echo "                    <h2>        Aucun produit trouvé  <h2>
              ";
        }
        // line 36
        echo "
        </div>
    </div>
</div>

<br><br>
<center>
<nav aria-label=\"Page navigation example\">
";
        // line 44
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()) > 0)) {
            // line 45
            echo "    <ul class=\"pagination\">
        ";
            // line 46
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) > 1)) {
                // line 47
                echo "            <li>
                <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => 1))), "html", null, true);
                echo "\">
                    <<
                </a>
            </li>
            <li>
                <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 54
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1)))), "html", null, true);
                echo "\">
                    <
                </a>
            </li>
        ";
            }
            // line 59
            echo "
        ";
            // line 61
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 4), 1), min(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 4), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 62
                echo "            <li ";
                if (($context["p"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => $context["p"]))), "html", null, true);
                echo "\">
                    ";
                // line 64
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
        ";
            // line 69
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()))) {
                // line 70
                echo "            <li>
                <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 72
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 1)))), "html", null, true);
                echo "\">
                    >
                </a>
            </li>
            <li>
                <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 78
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array())))), "html", null, true);
                echo "\">
                    >>
                </a>
            </li>
        ";
            }
            // line 83
            echo "    </ul>
";
        }
        // line 85
        echo "</nav>
</center>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produit/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 85,  204 => 83,  196 => 78,  195 => 77,  187 => 72,  186 => 71,  183 => 70,  181 => 69,  178 => 68,  168 => 64,  164 => 63,  157 => 62,  152 => 61,  149 => 59,  141 => 54,  140 => 53,  132 => 48,  129 => 47,  127 => 46,  124 => 45,  122 => 44,  112 => 36,  108 => 34,  103 => 31,  91 => 24,  82 => 22,  78 => 21,  71 => 17,  68 => 16,  61 => 14,  57 => 13,  52 => 11,  48 => 10,  44 => 8,  40 => 7,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
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
<br><br><br><br><br><br><br><br><br>
<div class=\"container\" >
   {% if produits|length != 0 %}

   {% for produit in produits %}

                <div class=\"panel panel-default pn inline\">
<div class=\"panel-body\">  <h4>{{ produit.designationP }}</h4>
                                        <p>{{ produit.prix }} €</p>     </div>

                {% for image in  produit.images %}
                   <p>image.url1 </p>
                {% endfor %}

               <form action=\"{{ path('ajouter', { 'id' : produit.id }) }}\" method=\"get\">

<div class=\"panel-footer\">
<select class=\"pn2\" name=\"qte\">
{% for i in 1..10 %}
     <option>{{ i }}</option>
{% endfor %}
 </select>
          <button class=\"btn btn-info\">J'achéte</button>
                 </form>

</div>
</div>
                {% endfor %}


                {% else %}
                    <h2>        Aucun produit trouvé  <h2>
              {% endif %}

        </div>
    </div>
</div>

<br><br>
<center>
<nav aria-label=\"Page navigation example\">
{% if pagination.nbPages > 0 %}
    <ul class=\"pagination\">
        {% if pagination.page > 1 %}
            <li>
                <a href=\"{{ path(pagination.nomRoute, pagination.paramsRoute|merge({'page': 1})) }}\">
                    <<
                </a>
            </li>
            <li>
                <a href=\"{{ path(pagination.nomRoute,
                pagination.paramsRoute|merge({'page': pagination.page-1})) }}\">
                    <
                </a>
            </li>
        {% endif %}

        {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}
        {% for p in range(max(pagination.page-4, 1), min(pagination.page+4, pagination.nbPages)) %}
            <li {% if p == pagination.page %}class=\"active\"{% endif %}>
                <a href=\"{{ path(pagination.nomRoute, pagination.paramsRoute|merge({'page': p})) }}\">
                    {{ p }}
                </a>
            </li>
        {% endfor %}

        {% if pagination.page < pagination.nbPages %}
            <li>
                <a href=\"{{ path(pagination.nomRoute,
                pagination.paramsRoute|merge({'page': pagination.page+1})) }}\">
                    >
                </a>
            </li>
            <li>
                <a href=\"{{ path(pagination.nomRoute,
                pagination.paramsRoute|merge({'page': pagination.nbPages})) }}\">
                    >>
                </a>
            </li>
        {% endif %}
    </ul>
{% endif %}
</nav>
</center>
{% endblock %}
", "EcommerceBundle:Default:produit/test.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produit/test.html.twig");
    }
}
