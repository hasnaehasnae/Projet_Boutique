<?php

/* EcommerceBundle:Default:Produit/produits.html.twig */
class __TwigTemplate_7ca60df84a610b4ef3cb1a1a53f58e999465772c1d45b620d09673b8ec23b7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:Produit/produits.html.twig", 1);
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
        echo "
<br><br><br><br><br><br><br><br>
<div class=\"container\" >
   ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 7
            echo "
   ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 9
                echo "
                <div class=\"panel panel-default pn inline\">
<div class=\"panel-body\">  <h4>";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "designationP", array()), "html", null, true);
                echo "</h4>
                                        <p>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo " €</p>     </div>

                ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["produit"], "images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 15
                    echo "                   <p>image.url1 </p>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "
               <form action=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\" method=\"get\">

<div class=\"panel-footer\">
<select class=\"pn2\" name=\"qte\">
";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 23
                    echo "     <option>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
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
            // line 32
            echo "

                ";
        } else {
            // line 35
            echo "                    <h2>        Aucun produit trouvé  <h2>
              ";
        }
        // line 37
        echo "
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Produit/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  109 => 35,  104 => 32,  92 => 25,  83 => 23,  79 => 22,  72 => 18,  69 => 17,  62 => 15,  58 => 14,  53 => 12,  49 => 11,  45 => 9,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
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

<br><br><br><br><br><br><br><br>
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


{% endblock %}
", "EcommerceBundle:Default:Produit/produits.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Produit/produits.html.twig");
    }
}
