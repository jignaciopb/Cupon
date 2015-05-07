<?php

/* OfertaBundle:Default:portada.html.twig */
class __TwigTemplate_37bbf6655c05cc487f0573e6e70288a4f6dba537b61a085c16f0a9bee3125d1f extends Twig_Template
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
        echo "<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>Portada | Cupon</title>
</head>
<body id=\"portada\"><div id=\"contenedor\">
    <header>
        <h1><a href=\"#\">CUPON</a></h1>
        <nav>
            <ul>
                <li><a href=\"#\">Oferta del día</a></li>
                <li><a href=\"#\">Ofertas recientes</a></li>
                <li><a href=\"#\">Mis ofertas</a></li>
            </ul>
        </nav>
    </header>
    <article class=\"oferta\">
        <section class=\"descripcion\">
            <h1><a href=\"#\"> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "nombre", array()), "html", null, true);
        echo " </a></h1>
            ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descripcion", array()), "html", null, true);
        echo "
            <a class=\"boton\" href=\"#\">Comprar</a>

        </section>
        <section class=\"galeria\">
            <img alt=\"Fotografía de la oferta\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "rutaFoto", array()))), "html", null, true);
        echo "\">
            <p class=\"precio\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "precio", array()), "html", null, true);
        echo " &euro;
                <span>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descuento", array()), "html", null, true);
        echo "</span></p>
            <p><strong>Condiciones: </strong>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "condiciones", array()), "html", null, true);
        echo "</p>
        </section>
        <section class=\"estado\">
            <div class=\"tiempo\">
                <strong>Faltan</strong>: ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array())), "html", null, true);
        echo "
            </div>
            <div class=\"compras\">
                <strong>Compras</strong>: ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "compras", array()), "html", null, true);
        echo "
            </div>
            <div class=\"faltan\">
                ";
        // line 38
        $context["faltan"] = ($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "umbral", array()) - $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "compras", array()));
        // line 39
        echo "                ";
        if (((isset($context["faltan"]) ? $context["faltan"] : $this->getContext($context, "faltan")) > 0)) {
            // line 40
            echo "
                ";
            // line 42
            echo "                Faltan <strong>";
            echo twig_escape_filter($this->env, (isset($context["faltan"]) ? $context["faltan"] : $this->getContext($context, "faltan")), "html", null, true);
            echo " compras</strong> <br/>
                para activar la oferta
               ";
        } else {
            // line 45
            echo "                ";
            // line 46
            echo "                <strong>Oferta activada</strong> por superar las
                <strong>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "umbral", array()), "html", null, true);
            echo "</strong> compras necesarias
                ";
        }
        // line 49
        echo "            </div>
        </section>
        <section class=\"direccion\">
            <h2>Disfruta de la oferta en</h2>
            <p>
                <a href=\"#\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "nombre", array()), "html", null, true);
        echo "</a>
                ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "direccion", array()), "html", null, true);
        echo "
            </p>
        </section>
        <section class=\"tienda\">
            <h2>Sobre la tienda</h2>
            ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "descripcion", array()), "html", null, true);
        echo "
        </section>
    </article>
    <aside>
        ## FORMULARIO DE LOGIN ##
        <section id=\"nosotros\">
            <h2>Sobre nosotros</h2>
            <p>Lorem ipsum dolor sit amet...</p>
        </section>
    </aside>
    <footer>
        &copy;";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "  - Cupon
        <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "ayuda"));
        echo "\">Ayuda</a>
        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "contacto"));
        echo "\">Contacto</a>
        <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "privacidad"));
        echo "\">Privacidad</a>
        <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "nosotros"));
        echo "\">Sobre nosotros</a>
    </footer>
</div></body>
</html>";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 75,  152 => 74,  148 => 73,  144 => 72,  140 => 71,  126 => 60,  118 => 55,  114 => 54,  107 => 49,  102 => 47,  99 => 46,  97 => 45,  90 => 42,  87 => 40,  84 => 39,  82 => 38,  76 => 35,  70 => 32,  63 => 28,  59 => 27,  55 => 26,  51 => 25,  43 => 20,  39 => 19,  19 => 1,);
    }
}
