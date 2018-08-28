<?php

/* ::base.html.twig */
class __TwigTemplate_4319bf97d30e134f1a984d97453d79bd86c4757d3874d188f225fe557545f79a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!-- saved from url=(0061)http://demo.mutationmedia.net/NEW/?storefront=envato-elements -->
<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

<meta name=\"author\" content=\"Benaissa Ghrib\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

<title>NEW : Creative One Page Template</title>


";
        // line 11
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 17
        echo "

";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "



</head>
    <body>

        ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 98
        echo "        <div   style=\"\">
        ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "      </div>
        ";
        // line 101
        $this->displayBlock('footer', $context, $blocks);
        // line 146
        echo "
    </body>
</html>
";
    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 12
        echo "
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/main2.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/main3.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
";
    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        // line 31
        echo "
        \t<!-- Preloader -->
        \t<div id=\"loader\" style=\"display: none;\">
        \t  <div id=\"loaderInner\" style=\"display: none;\"></div>
        \t</div>

        <!--Wrapper-->
        <div id=\"wrapper\">


        \t<!--Header-->
        \t<header id=\"header\">

        \t\t<!--Main header-->
            <div class=\"mainHeader\">


        \t\t\t\t<!--Container-->
        \t\t\t<div class=\"clearfix\">
        \t\t\t <div class=\"row\">
        \t\t\t <div class=\"col-xs-6 col-sm-3\" >
        \t<a href=\"#wrapper\"><div class=\"logo\" style=\"margin-left:2em;\"> <img  src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"  width=\"182\" height=\"67\" alt=\"\" ></a></div></div>

          <div class=\"col-xs-6 col-sm-3\">
        \t</div>
        \t<div class=\"col-xs-6 col-sm-3\">



        \t</div>
            <div class=\"col-xs-6 col-sm-3\" >

              ";
        // line 63
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Panier:menu"), array());
        // line 64
        echo "        \t</div>


             </div>

      <!-- nav header  -->
        \t\t\t<nav class=\"navbar navbar-inverse \">
          <div class=\"container-fluid\">

            <ul class=\"nav navbar-nav \">
              <li ><a href=\"#\" class=\"mn\" >Home</a></li>
              <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Produit_list");
        echo "\" class=\"mn\" >Catalogues</a></li>
              <li><a href=\"#\" class=\"mn\" >Promotions</a></li>
              <li><a href=\"#\" class=\"mn\" >Abonnements</a></li>
              <li class=\"dropdown\" >
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Categories <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\" >
              ";
        // line 81
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Produit:categories"), array());
        // line 82
        echo "            </ul>
                  </li>
            </ul>
                   ";
        // line 85
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Produit:recherche"), array());
        // line 86
        echo "
        \t <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"#\" class=\"mn\" ><span class=\"glyphicon glyphicon-user\"></span>Mon Compte </a></li>
               ";
        // line 89
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Produit:identification"), array());
        // line 90
        echo "                </ul>
          </div>
        </nav>
        \t\t<!--End nav  header-->

        \t\t\t</div>
        \t</header>
        ";
    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
    }

    // line 101
    public function block_footer($context, array $blocks = array())
    {
        // line 102
        echo "        <footer class=\"footer navbar-bottom\" >
        <div class=\"\">
        \t\t\t\t\t\t\t\t\t\t<center>
        \t\t\t\t\t<div class=\"panel panel-default\" >

        \t\t\t\t\t<div class=\"panel-body exemp2\">
        \t\t\t\t\t<br>
        \t\t\t\t\t<div class=\"row\">
        <div class=\"col-md-4\">

        <div class=\"text\"><p><span style=\"font-size:16px; font-weight:bold;color:#87CEFA;\"> Nos   Information </span><br>
                                   <div class=\"mj\">
              <a  style=\"font-family:Verdana; color:white;\"  href=\"http://demo.mutationmedia.net/NEW/?storefront=envato-elements#\">CGV</a><br>

              <a  style=\"font-family:Verdana; color:white;\"  href=\"http://demo.mutationmedia.net/NEW/?storefront=envato-elements#\">notre adresse </a><br>
                                       </div>
              </div>
        </div>
        <div class=\"col-md-4\">

        <div class=\"text\"><span style=\"font-size:17px; font-weight:bold;color:#87CEFA;\"> Nous appeler </span><br>
                                    <div class=\"mj\">
                        <span class=\"glyphicon glyphicon-phone\"></span>123-456-789-890 <br>
        \t\t\t\t<span class=\"glyphicon glyphicon-phone-alt\"></span> 123-456-789-456<br>
                                    </div>
        \t\t\t\t\t\t\t\t</div>
        </div>
        <div class=\"col-md-4\">

        <div class=\"text\"><span style=\"font-size:17px; font-weight:bold;color:#87CEFA;\">Nous contacter </span><br>
                                     <div class=\"mj\">
        \t\t\t\t<span class=\"glyphicon glyphicon-envelope\"></span>&nbsp<a  style=\"font-family:Verdana; color:white;\"  href=\"http://demo.mutationmedia.net/NEW/?storefront=envato-elements#\">compagny@gmail.com</a><br>
        \t\t\t\t<span style=\"color:#87CEFA;\">@\t</spn><a  style=\"font-family:Verdana; color:white;\"  href=\"http://demo.mutationmedia.net/NEW/?storefront=envato-elements#\">support@domainename.com</a><br>
                                    </div>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
        </div>


        </div>
        \t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t</div>
</footer>
         ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 102,  194 => 101,  189 => 99,  178 => 90,  176 => 89,  171 => 86,  169 => 85,  164 => 82,  162 => 81,  153 => 75,  140 => 64,  138 => 63,  124 => 52,  101 => 31,  98 => 30,  92 => 20,  89 => 19,  82 => 14,  78 => 13,  75 => 12,  72 => 11,  65 => 146,  63 => 101,  60 => 100,  58 => 99,  55 => 98,  53 => 30,  44 => 23,  42 => 19,  38 => 17,  36 => 11,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!-- saved from url=(0061)http://demo.mutationmedia.net/NEW/?storefront=envato-elements -->
<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

<meta name=\"author\" content=\"Benaissa Ghrib\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

<title>NEW : Creative One Page Template</title>


{% block stylesheet %}

<link href=\"{{ asset( 'css/main2.css') }}\"  rel=\"stylesheet\" type=\"text/css\">
<link href=\"{{ asset( 'css/main3.css') }}\"  rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
{% endblock %}


{%  block javascripts  %}
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
{% endblock %}




</head>
    <body>

        {%  block header %}

        \t<!-- Preloader -->
        \t<div id=\"loader\" style=\"display: none;\">
        \t  <div id=\"loaderInner\" style=\"display: none;\"></div>
        \t</div>

        <!--Wrapper-->
        <div id=\"wrapper\">


        \t<!--Header-->
        \t<header id=\"header\">

        \t\t<!--Main header-->
            <div class=\"mainHeader\">


        \t\t\t\t<!--Container-->
        \t\t\t<div class=\"clearfix\">
        \t\t\t <div class=\"row\">
        \t\t\t <div class=\"col-xs-6 col-sm-3\" >
        \t<a href=\"#wrapper\"><div class=\"logo\" style=\"margin-left:2em;\"> <img  src=\"{{ asset('images/logo.png') }}\"  width=\"182\" height=\"67\" alt=\"\" ></a></div></div>

          <div class=\"col-xs-6 col-sm-3\">
        \t</div>
        \t<div class=\"col-xs-6 col-sm-3\">



        \t</div>
            <div class=\"col-xs-6 col-sm-3\" >

              {% render(controller('EcommerceBundle:Panier:menu'))%}
        \t</div>


             </div>

      <!-- nav header  -->
        \t\t\t<nav class=\"navbar navbar-inverse \">
          <div class=\"container-fluid\">

            <ul class=\"nav navbar-nav \">
              <li ><a href=\"#\" class=\"mn\" >Home</a></li>
              <li><a href=\"{{ path('Produit_list')}}\" class=\"mn\" >Catalogues</a></li>
              <li><a href=\"#\" class=\"mn\" >Promotions</a></li>
              <li><a href=\"#\" class=\"mn\" >Abonnements</a></li>
              <li class=\"dropdown\" >
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Categories <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\" >
              {% render(controller('EcommerceBundle:Produit:categories')) %}
            </ul>
                  </li>
            </ul>
                   {% render(controller('EcommerceBundle:Produit:recherche'))%}

        \t <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"#\" class=\"mn\" ><span class=\"glyphicon glyphicon-user\"></span>Mon Compte </a></li>
               {% render(controller('EcommerceBundle:Produit:identification'))%}
                </ul>
          </div>
        </nav>
        \t\t<!--End nav  header-->

        \t\t\t</div>
        \t</header>
        {% endblock %}
        <div   style=\"\">
        {% block body %}{% endblock %}
      </div>
        {% block footer %}
        <footer class=\"footer navbar-bottom\" >
        <div class=\"\">
        \t\t\t\t\t\t\t\t\t\t<center>
        \t\t\t\t\t<div class=\"panel panel-default\" >

        \t\t\t\t\t<div class=\"panel-body exemp2\">
        \t\t\t\t\t<br>
        \t\t\t\t\t<div class=\"row\">
        <div class=\"col-md-4\">

        <div class=\"text\"><p><span style=\"font-size:16px; font-weight:bold;color:#87CEFA;\"> Nos   Information </span><br>
                                   <div class=\"mj\">
              <a  style=\"font-family:Verdana; color:white;\"  href=\"http://demo.mutationmedia.net/NEW/?storefront=envato-elements#\">CGV</a><br>

              <a  style=\"font-family:Verdana; color:white;\"  href=\"http://demo.mutationmedia.net/NEW/?storefront=envato-elements#\">notre adresse </a><br>
                                       </div>
              </div>
        </div>
        <div class=\"col-md-4\">

        <div class=\"text\"><span style=\"font-size:17px; font-weight:bold;color:#87CEFA;\"> Nous appeler </span><br>
                                    <div class=\"mj\">
                        <span class=\"glyphicon glyphicon-phone\"></span>123-456-789-890 <br>
        \t\t\t\t<span class=\"glyphicon glyphicon-phone-alt\"></span> 123-456-789-456<br>
                                    </div>
        \t\t\t\t\t\t\t\t</div>
        </div>
        <div class=\"col-md-4\">

        <div class=\"text\"><span style=\"font-size:17px; font-weight:bold;color:#87CEFA;\">Nous contacter </span><br>
                                     <div class=\"mj\">
        \t\t\t\t<span class=\"glyphicon glyphicon-envelope\"></span>&nbsp<a  style=\"font-family:Verdana; color:white;\"  href=\"http://demo.mutationmedia.net/NEW/?storefront=envato-elements#\">compagny@gmail.com</a><br>
        \t\t\t\t<span style=\"color:#87CEFA;\">@\t</spn><a  style=\"font-family:Verdana; color:white;\"  href=\"http://demo.mutationmedia.net/NEW/?storefront=envato-elements#\">support@domainename.com</a><br>
                                    </div>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
        </div>


        </div>
        \t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t</div>
</footer>
         {% endblock %}

    </body>
</html>
", "::base.html.twig", "C:\\wamp1\\www\\Projet_Boutique\\PFE\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
