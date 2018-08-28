<?php

/* EcommerceBundle:Default:Produit/livraison.html.twig */
class __TwigTemplate_cd5f0fdb2663824b4a30753ffc252bd21e6fa2a2c7832dc288f0ed7e80165cdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:Produit/livraison.html.twig", 1);
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "FOSUserBundle::BoostrabForm.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<br><br><br><br><br><br><br><br>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6\">

                      ";
        // line 9
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array())) != 0)) {
            // line 10
            echo "                        <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
            echo "\" method=\"POST\">

                            <h3>Adresse de livraison</h3>
                            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 14
                echo "                            <label class=\"radio\">
                                <input type=\"radio\" name=\"livraison\" value=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "description", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "codePostal", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppression", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                                <br />
                            </label>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
                            <br /><br />
                            <button class=\"btn btn-primary\">Valider mes adresses</button>
                        </form>
                        ";
        }
        // line 25
        echo "                    </div>
          <div class=\"col-sm-6\">
                        <h3>Ajouter une nouvelle adresse</h3>
                        <form action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" method=\"POST\">
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <br>
                            <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>


";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Produit/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 29,  116 => 28,  111 => 25,  104 => 20,  78 => 16,  70 => 15,  67 => 14,  50 => 13,  43 => 10,  41 => 9,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
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
{%  form_theme form \"FOSUserBundle::BoostrabForm.html.twig\" %}
{% block body %}
<br><br><br><br><br><br><br><br>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6\">

                      {% if utilisateur.adresses|length != 0 %}
                        <form action=\"{{ path('validation') }}\" method=\"POST\">

                            <h3>Adresse de livraison</h3>
                            {% for adresse in utilisateur.adresses %}
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"livraison\" value=\"{{ adresse.id }}\" {% if loop.index0 == 0 %}checked=\"checked\"{% endif %}>
                                {{ adresse.description }}, {{ adresse.ville }} {{ adresse.pays }} - {{ adresse.codePostal }} <a href=\"{{ path('suppression', { 'id' : adresse.id})}}\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                                <br />
                            </label>
                            {% endfor %}

                            <br /><br />
                            <button class=\"btn btn-primary\">Valider mes adresses</button>
                        </form>
                        {% endif %}
                    </div>
          <div class=\"col-sm-6\">
                        <h3>Ajouter une nouvelle adresse</h3>
                        <form action=\"{{ path('livraison') }}\" method=\"POST\">
                            {{ form_widget(form) }}
                            <br>
                            <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>


{% endblock %}
", "EcommerceBundle:Default:Produit/livraison.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Produit/livraison.html.twig");
    }
}
