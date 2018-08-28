<?php

/* FOSUserBundle::BoostrabForm.html.twig */
class __TwigTemplate_2384f93a719f7410547dfc1b00471a8dc4091d850e22f2d3ebebb7beca3f1a53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_widget', $context, $blocks);
        // line 9
        $this->displayBlock('form_widget_simple', $context, $blocks);
    }

    // line 1
    public function block_form_widget($context, array $blocks = array())
    {
        // line 2
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 3
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 5
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 9
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 10
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 11
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "range") || ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "color"))) {
            // line 13
            $context["required"] = false;
        }
        // line 15
        echo "<input  class=\"form-control\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::BoostrabForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  47 => 13,  45 => 11,  43 => 10,  40 => 9,  35 => 5,  32 => 3,  30 => 2,  27 => 1,  23 => 9,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    {%- if type == 'range' or type == 'color' -%}
        {# Attribute \"required\" is not supported #}
        {%- set required = false -%}
    {%- endif -%}
    <input  class=\"form-control\" type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}
", "FOSUserBundle::BoostrabForm.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\app/Resources/FOSUserBundle/views/BoostrabForm.html.twig");
    }
}
