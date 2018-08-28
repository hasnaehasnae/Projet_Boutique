<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c6fe9a676075447ba4505b076ae884d15a43fd6f8e93f51c961c938c8948695c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        echo "
<section id=\"connexion\"   style=\"margin-top:14em;\" >
\t\t<div class=\"container\">
    ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 14
        echo "
\t\t\t<div class=\"row\">
  <div class=\"col-sm-4\">
  <h3> Pas encore inscrit ? </h3>

nous vous invitons à vous inscrire<br>
afin de faire votre shopping facilement <br> <br><br>
<form action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"post\">
  <div style=\"width:120px;\">
<button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire </button>
</div>
</form>

  </div>
  <div class=\"col-sm-8\">
  <div class=\"log-form\">

  <h3>Connexion :</h3>
  <form action=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

      <label for=\"username\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
      <input   class=\"form-control\"  type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

      <label for=\"password\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
      <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

      <input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
      <label for=\"remember_me\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label><br>


      <input  class=\"btn btn-primary \" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /> 
      <a class=\"forgot\" href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" style=\"font-weight:bold; margin-left:5em;\" >
    Mot de pass oublié? </a>
  </form>


</div><!--end log form -->

  </div>

  </div>

</div>
\t\t\t</div>
      <section id=\"connexion\"   style=\"margin-top:8em;\" >
      \t\t<div class=\"container\">
          ";
        // line 63
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 64
            echo "              <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
          ";
        }
        // line 66
        echo "
\t</section>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 66,  134 => 64,  132 => 63,  114 => 48,  110 => 47,  104 => 44,  97 => 40,  92 => 38,  88 => 37,  83 => 35,  78 => 33,  74 => 32,  60 => 21,  51 => 14,  45 => 12,  43 => 11,  38 => 8,  32 => 7,  29 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}


{% trans_default_domain 'FOSUserBundle' %}

{% block body %}
{% block fos_user_content %}

<section id=\"connexion\"   style=\"margin-top:14em;\" >
\t\t<div class=\"container\">
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

\t\t\t<div class=\"row\">
  <div class=\"col-sm-4\">
  <h3> Pas encore inscrit ? </h3>

nous vous invitons à vous inscrire<br>
afin de faire votre shopping facilement <br> <br><br>
<form action=\"{{ path(\"fos_user_registration_register\") }}\" method=\"post\">
  <div style=\"width:120px;\">
<button type=\"submit\" class=\"btn btn-primary btn-block\">S'inscrire </button>
</div>
</form>

  </div>
  <div class=\"col-sm-8\">
  <div class=\"log-form\">

  <h3>Connexion :</h3>
  <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

      <label for=\"username\">{{ 'security.login.username'|trans }}</label>
      <input   class=\"form-control\"  type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

      <label for=\"password\">{{ 'security.login.password'|trans }}</label>
      <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

      <input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
      <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label><br>


      <input  class=\"btn btn-primary \" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" /> 
      <a class=\"forgot\" href=\"{{ path('fos_user_resetting_request')}}\" style=\"font-weight:bold; margin-left:5em;\" >
    Mot de pass oublié? </a>
  </form>


</div><!--end log form -->

  </div>

  </div>

</div>
\t\t\t</div>
      <section id=\"connexion\"   style=\"margin-top:8em;\" >
      \t\t<div class=\"container\">
          {% if error %}
              <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
          {% endif %}

\t</section>
{% endblock fos_user_content %}
{%  endblock %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
