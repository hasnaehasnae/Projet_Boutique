<?php

/* EcommerceBundle:Default:Produit/recherche.html.twig */
class __TwigTemplate_56b3a3e2cdc44fa4421ee6c42b9d5d2f0541446e9cba9ad39b2f90af42e733be extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rechercheProduits");
        echo "\" method=\"POST\" class=\"navbar-form navbar-left\">
  <div class=\"input-group\">
      ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget');
        echo "
  <div class=\"input-group-btn\">
        <button class=\"btn btn-default\" type=\"submit\">
          <i class=\"glyphicon glyphicon-search\"></i>
        </button>
      </div>

      ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Produit/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 10,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('rechercheProduits') }}\" method=\"POST\" class=\"navbar-form navbar-left\">
  <div class=\"input-group\">
      {{ form_widget(form.recherche) }}
  <div class=\"input-group-btn\">
        <button class=\"btn btn-default\" type=\"submit\">
          <i class=\"glyphicon glyphicon-search\"></i>
        </button>
      </div>

      {{ form_widget(form) }}
  </div>
</form>
", "EcommerceBundle:Default:Produit/recherche.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Produit/recherche.html.twig");
    }
}
