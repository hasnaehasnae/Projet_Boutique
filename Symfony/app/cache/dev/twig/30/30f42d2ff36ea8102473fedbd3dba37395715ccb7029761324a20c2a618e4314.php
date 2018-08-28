<?php

/* EcommerceBundle:Default:Produit/connexion.html.twig */
class __TwigTemplate_4c9e00fb4ce0f0fffc4a5bd4a76c272e9109ce9d640379f7c471a5009141a4d6 extends Twig_Template
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
        if (((isset($context["connecte"]) ? $context["connecte"] : $this->getContext($context, "connecte")) == 0)) {
            // line 2
            echo "<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"mn\" ><span class=\"glyphicon glyphicon-log-in\"></span> Se connecter/S'inscrire</a></li>
";
        } else {
            // line 4
            echo "
<li class=\"dropdown\">
       <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Utilisateur1
       <span class=\"caret\"></span></a>
       <ul class=\"dropdown-menu\">
         <li><a href=\"#\">Edition</a></li>
         <li><a href=\"#\">Profile</a></li>
  <li>  <a href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"mn\" > Se déconecter</a></li>
       </ul>
     </li>
";
        }
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Produit/connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 11,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  if connecte == 0 %}
<li><a href=\"{{ path(\"fos_user_security_login\") }}\" class=\"mn\" ><span class=\"glyphicon glyphicon-log-in\"></span> Se connecter/S'inscrire</a></li>
{% else %}

<li class=\"dropdown\">
       <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Utilisateur1
       <span class=\"caret\"></span></a>
       <ul class=\"dropdown-menu\">
         <li><a href=\"#\">Edition</a></li>
         <li><a href=\"#\">Profile</a></li>
  <li>  <a href=\"{{ path(\"fos_user_security_logout\") }}\" class=\"mn\" > Se déconecter</a></li>
       </ul>
     </li>
{% endif %}
", "EcommerceBundle:Default:Produit/connexion.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/Produit/connexion.html.twig");
    }
}
