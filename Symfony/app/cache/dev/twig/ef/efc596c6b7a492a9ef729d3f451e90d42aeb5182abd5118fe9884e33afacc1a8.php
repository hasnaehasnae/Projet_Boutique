<?php

/* ::base.html.twig */
class __TwigTemplate_93248320bb1983228eacf834055b20f10a5c23b7d099730da61296dc5e8dfa57 extends Twig_Template
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
        // line 15
        echo "

";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "



</head>
    <body>
        ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 125
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 167
        echo "
    </body>
</html>
";
    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 12
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/main2.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
";
    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        // line 28
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
        \t\t\t<div class=\"mainHeader\">


        \t\t\t\t<!--Container-->
        \t\t\t<div class=\"container clearfix\">
        \t\t\t <div class=\"row\">
        \t\t\t <div class=\"col-xs-6 col-sm-3\" >
        \t<a href=\"#wrapper\"><div class=\"logo\"> <img  src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"  width=\"182\" height=\"72\" alt=\"\" ></a></div></div>

          <div class=\"col-xs-6 col-sm-3\">
        \t</div>
        \t<div class=\"col-xs-6 col-sm-3\">




        \t</div>
            <div class=\"col-xs-6 col-sm-3\" >

        \t\t\t\t\t\t  <table >
        \t\t\t\t\t\t\t\t       <tr>
        \t<td rowspan=2> <a href=\"https://www.w3schools.com\" >

        \t\t\t <img  src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/panier3.png"), "html", null, true);
        echo "\"  width=\"50\" height=\"72\" alt=\"\" ></a>
        \t\t\t <td>   <label for=\"article\" style=\"margin-left:15px;\">
         <div class=\"dropdown\">
            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">PANIER:
            <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
              <li>HTM</li>
              <li>CSS</li>
              <li><span class=\"btn btn-primary bt\" ><a href=\"#\" style=\"font-family:Verdana; color:white;\" > Passer Commande </a></li></span>
            </ul>

          </div>
        \t\t\t  0 article </label> <td>
        \t\t\t\t\t\t\t\t<td> \t<button  style=\"margin-left:20px;\"type=\"button\" class=\"btn btn-default\">Arabe</button></td>
        \t\t\t\t\t\t\t\t</tr>


        \t\t\t\t\t\t\t</table>


        \t</div>


             </div>

        \t\t\t<!--End container-->

        \t\t\t</div>

        \t\t\t<nav class=\"navbar navbar-default\">
          <div class=\"container-fluid\">

            <ul class=\"nav navbar-nav\">
              <li ><a href=\"#\" class=\"mn\" >Home</a></li>
              <li><a href=\"#\" class=\"mn\" >Catalogues</a></li>
              <li><a href=\"#\" class=\"mn\" >Promotions</a></li>
              <li><a href=\"#\" class=\"mn\" >Abonnements</a></li>
            </ul>

        \t<form class=\"navbar-form navbar-left\" action=\"/action_page.php\">
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Chercher votre produit\">
            <div class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"submit\">
                <i class=\"glyphicon glyphicon-search\"></i>
              </button>
            </div>
          </div>
        </form>
        \t <ul class=\"nav navbar-nav navbar-right\">
              <li><a href=\"#\" class=\"mn\" ><span class=\"glyphicon glyphicon-user\"></span> S'inscrire</a></li>
              <li><a href=\"#\" class=\"mn\" ><span class=\"glyphicon glyphicon-log-in\"></span> se connecter</a></li>
            </ul>
          </div>
        </nav>
        \t\t<!--End main header-->

        \t\t\t</div>
        \t</header>
        ";
    }

    // line 125
    public function block_body($context, array $blocks = array())
    {
    }

    // line 126
    public function block_footer($context, array $blocks = array())
    {
        // line 127
        echo "        <footer class=\"footer navbar-bottom\" >
        <div class=\"\">
        \t\t\t\t\t\t\t\t\t\t<center>
        \t\t\t\t\t<div class=\"panel panel-default marjin\" >

        \t\t\t\t\t<div class=\"panel-body exemp\">
        \t\t\t\t\t<br>
        \t\t\t\t\t<div class=\"row\">
        <div class=\"col-md-4\">

        <div class=\"text\"><p><span style=\"font-size:17px; font-weight:bold;color:black;\"> Notre Adresse: </span><br>
        The Company Name Inc.<br>
        1234 Street Road,City Name,<br>
        \t\tIN 567 890.</p></div>
        </div>
        <div class=\"col-md-4\">

        <div class=\"text\"><p><span style=\"font-size:17px; font-weight:bold;color:black;\"> Nous appeler? </span><br><ul>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\t+ 123-456-789-890</li>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\t+ 123-456-789-456</li></ul>

        \t\t\t\t\t\t\t\t</p></div>
        </div>
        <div class=\"col-md-4\">

        <div class=\"text\"><ul><p> <span style=\"font-size:17px; font-weight:bold;color:black;\">Nous contacter? </span><br>
        \t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a  style=\"font-family:Verdana; color:white;\"  href=\"http://demo.mutationmedia.net/NEW/?storefront=envato-elements#\">compagny@gmail.com</a></li>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a  style=\"font-family:Verdana; color:white;\"  href=\"http://demo.mutationmedia.net/NEW/?storefront=envato-elements#\">support@domainename.com</a></li>

        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul> </p></div>
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
        return array (  204 => 127,  201 => 126,  196 => 125,  132 => 65,  113 => 49,  90 => 28,  87 => 27,  81 => 18,  78 => 17,  70 => 12,  67 => 11,  60 => 167,  57 => 126,  54 => 125,  52 => 27,  44 => 21,  42 => 17,  38 => 15,  36 => 11,  24 => 1,);
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
        \t\t\t<div class=\"mainHeader\">


        \t\t\t\t<!--Container-->
        \t\t\t<div class=\"container clearfix\">
        \t\t\t <div class=\"row\">
        \t\t\t <div class=\"col-xs-6 col-sm-3\" >
        \t<a href=\"#wrapper\"><div class=\"logo\"> <img  src=\"{{ asset('images/logo.png') }}\"  width=\"182\" height=\"72\" alt=\"\" ></a></div></div>

          <div class=\"col-xs-6 col-sm-3\">
        \t</div>
        \t<div class=\"col-xs-6 col-sm-3\">




        \t</div>
            <div class=\"col-xs-6 col-sm-3\" >

        \t\t\t\t\t\t  <table >
        \t\t\t\t\t\t\t\t       <tr>
        \t<td rowspan=2> <a href=\"https://www.w3schools.com\" >

        \t\t\t <img  src=\"{{ asset('images/panier3.png') }}\"  width=\"50\" height=\"72\" alt=\"\" ></a>
        \t\t\t <td>   <label for=\"article\" style=\"margin-left:15px;\">
         <div class=\"dropdown\">
            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">PANIER:
            <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
              <li>HTM</li>
              <li>CSS</li>
              <li><span class=\"btn btn-primary bt\" ><a href=\"#\" style=\"font-family:Verdana; color:white;\" > Passer Commande </a></li></span>
            </ul>

          </div>
        \t\t\t  0 article </label> <td>
        \t\t\t\t\t\t\t\t<td> \t<button  style=\"margin-left:20px;\"type=\"button\" class=\"btn btn-default\">Arabe</button></td>
        \t\t\t\t\t\t\t\t</tr>


        \t\t\t\t\t\t\t</table>


        \t</div>


             </div>

        \t\t\t<!--End container-->

        \t\t\t</div>

        \t\t\t<nav class=\"navbar navbar-default\">
          <div class=\"container-fluid\">

            <ul class=\"nav navbar-nav\">
              <li ><a href=\"#\" class=\"mn\" >Home</a></li>
              <li><a href=\"#\" class=\"mn\" >Catalogues</a></li>
              <li><a href=\"#\" class=\"mn\" >Promotions</a></li>
              <li><a href=\"#\" class=\"mn\" >Abonnements</a></li>
            </ul>

        \t<form class=\"navbar-form navbar-left\" action=\"/action_page.php\">
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Chercher votre produit\">
            <div class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"submit\">
                <i class=\"glyphicon glyphicon-search\"></i>
              </button>
            </div>
          </div>
        </form>
        \t <ul class=\"nav navbar-nav navbar-right\">
              <li><a href=\"#\" class=\"mn\" ><span class=\"glyphicon glyphicon-user\"></span> S'inscrire</a></li>
              <li><a href=\"#\" class=\"mn\" ><span class=\"glyphicon glyphicon-log-in\"></span> se connecter</a></li>
            </ul>
          </div>
        </nav>
        \t\t<!--End main header-->

        \t\t\t</div>
        \t</header>
        {% endblock %}
        {% block body %}{% endblock %}
        {% block footer %}
        <footer class=\"footer navbar-bottom\" >
        <div class=\"\">
        \t\t\t\t\t\t\t\t\t\t<center>
        \t\t\t\t\t<div class=\"panel panel-default marjin\" >

        \t\t\t\t\t<div class=\"panel-body exemp\">
        \t\t\t\t\t<br>
        \t\t\t\t\t<div class=\"row\">
        <div class=\"col-md-4\">

        <div class=\"text\"><p><span style=\"font-size:17px; font-weight:bold;color:black;\"> Notre Adresse: </span><br>
        The Company Name Inc.<br>
        1234 Street Road,City Name,<br>
        \t\tIN 567 890.</p></div>
        </div>
        <div class=\"col-md-4\">

        <div class=\"text\"><p><span style=\"font-size:17px; font-weight:bold;color:black;\"> Nous appeler? </span><br><ul>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\t+ 123-456-789-890</li>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\t+ 123-456-789-456</li></ul>

        \t\t\t\t\t\t\t\t</p></div>
        </div>
        <div class=\"col-md-4\">

        <div class=\"text\"><ul><p> <span style=\"font-size:17px; font-weight:bold;color:black;\">Nous contacter? </span><br>
        \t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a  style=\"font-family:Verdana; color:white;\"  href=\"http://demo.mutationmedia.net/NEW/?storefront=envato-elements#\">compagny@gmail.com</a></li>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a  style=\"font-family:Verdana; color:white;\"  href=\"http://demo.mutationmedia.net/NEW/?storefront=envato-elements#\">support@domainename.com</a></li>

        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul> </p></div>
        </div>


        </div>
        \t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t\t</div>
</footer>
         {% endblock %}

    </body>
</html>
", "::base.html.twig", "C:\\wamp1\\www\\PFE\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
