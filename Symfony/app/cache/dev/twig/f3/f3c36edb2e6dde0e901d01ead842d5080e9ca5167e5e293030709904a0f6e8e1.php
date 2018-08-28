<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_ce4aacee91d67289052836089edb704489524345466eb852a57c4e3602e90e26 extends Twig_Template
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
        // line 2
        echo "<div class=\"container\">
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label style=\"font-size:19px;\" >   Mot de passe oublié ? </label> <br>
        Veuillez saisir l'adresse e-mail de votre compte. Un code de vérification va vous être envoyé. Dès que vous le recevrez,<br>
         vous pourrez choisir un nouveau mot de passe<br> <br>
        <label for=\"username\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label> <br>
        <input  class=\"form-control\" type=\"text\" id=\"username\" name=\"username\" required=\"required\" /> <br>
    </div>
    <div>
        <input   class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  40 => 11,  35 => 8,  29 => 6,  27 => 5,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"container\">
<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        {% if invalid_username is defined %}
            <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>
        {% endif %}
        <label style=\"font-size:19px;\" >   Mot de passe oublié ? </label> <br>
        Veuillez saisir l'adresse e-mail de votre compte. Un code de vérification va vous être envoyé. Dès que vous le recevrez,<br>
         vous pourrez choisir un nouveau mot de passe<br> <br>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label> <br>
        <input  class=\"form-control\" type=\"text\" id=\"username\" name=\"username\" required=\"required\" /> <br>
    </div>
    <div>
        <input   class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
</div>
", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
