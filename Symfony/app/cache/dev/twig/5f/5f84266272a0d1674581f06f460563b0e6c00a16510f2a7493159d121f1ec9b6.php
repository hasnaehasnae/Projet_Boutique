<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_6141cfa4ea554eeadabc8c2a083adddf6502542a77ada68e30671c71d2de4461 extends Twig_Template
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
        echo "
";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "FOSUserBundle::BoostrabForm.html.twig"));
        // line 4
        echo "<div class=\"container\">
<center><h1  style=\"font-weight:bold;\"> INSCRIVEZ-VOUS EN 1 MINUTE ! </h1> </center>
<form  action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <br>
    <div>
  <center>
  <div style=\"width:360px;\">
  <input  class=\"btn btn-primary btn-block\" type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /> <center><br>
            </div>
    </div>
</form>
<div>
<br>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  34 => 7,  28 => 6,  24 => 4,  22 => 3,  19 => 2,);
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

{%  form_theme form \"FOSUserBundle::BoostrabForm.html.twig\" %}
<div class=\"container\">
<center><h1  style=\"font-weight:bold;\"> INSCRIVEZ-VOUS EN 1 MINUTE ! </h1> </center>
<form  action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\">
    {{ form_widget(form) }}
    <br>
    <div>
  <center>
  <div style=\"width:360px;\">
  <input  class=\"btn btn-primary btn-block\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" /> <center><br>
            </div>
    </div>
</form>
<div>
<br>
", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
