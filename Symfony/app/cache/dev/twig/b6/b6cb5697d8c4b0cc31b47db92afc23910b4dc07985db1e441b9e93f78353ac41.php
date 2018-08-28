<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_bcc064645012959a30302320d30e5960d8cd0cd544e2a50a1a2b41ebe583dcb8 extends Twig_Template
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
<div class=\"container\">

<div class=\"row\">
<div class=\"col-sm-6\">

    <label style=\"font-size:19px;\" > Récupération du mot de passe ?  </label> <br>
Il vous suffit de Compléter le formulaire,et votre mot de passe sera <br>
alors réinitialiser.<br>

<br>Une fois validé, vous alliez utiliser le nouveau mot de passe que<br> vous avez choisi
</div>
<div class=\"col-sm-6\">
<br>
<form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input  class=\"btn btn-primary \" type=\"submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
</div>
</div>



</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 19,  41 => 17,  35 => 16,  19 => 2,);
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

<div class=\"row\">
<div class=\"col-sm-6\">

    <label style=\"font-size:19px;\" > Récupération du mot de passe ?  </label> <br>
Il vous suffit de Compléter le formulaire,et votre mot de passe sera <br>
alors réinitialiser.<br>

<br>Une fois validé, vous alliez utiliser le nouveau mot de passe que<br> vous avez choisi
</div>
<div class=\"col-sm-6\">
<br>
<form action=\"{{ path('fos_user_resetting_reset', {'token': token}) }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_resetting_reset\">
    {{ form_widget(form) }}
    <div>
        <input  class=\"btn btn-primary \" type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
</form>
</div>
</div>



</div>
", "FOSUserBundle:Resetting:reset_content.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
