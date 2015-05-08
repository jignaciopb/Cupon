<?php

/* OfertaBundle:Default:portada.html.twig */
class __TwigTemplate_37bbf6655c05cc487f0573e6e70288a4f6dba537b61a085c16f0a9bee3125d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::frontend.html.twig", "OfertaBundle:Default:portada.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Cupon, cada día ofertas increíbles en tu
    ciudad con descuentos de hasta el 90%";
    }

    // line 5
    public function block_id($context, array $blocks = array())
    {
        echo "portada";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "        <section class=\"descripcion\">
        <h1><a href=\"#\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "nombre", array()), "html", null, true);
        echo "</a></h1>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descripcion", array()), "html", null, true);
        echo "
        <a class=\"boton\" href=\"#\">Comprar</a>
        </section>
        <section class=\"galeria\">
            <img alt=\"Fotografía de la oferta\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute(        // line 14
(isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "rutaFoto", array()))), "html", null, true);
        echo "\">
            <p class=\"precio\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "precio", array()), "html", null, true);
        echo " &euro; <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descuento", array()), "html", null, true);
        // line 16
        echo "</span></p>
            <p><strong>Condiciones:</strong> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "condiciones", array()), "html", null, true);
        echo "</p>
        </section>
        <section class=\"estado\">
            <div class=\"tiempo\">
                <strong>Faltan</strong>: ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array())), "html", null, true);
        echo "
            </div>
            <div class=\"compras\">
                <strong>Compras</strong>: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "compras", array()), "html", null, true);
        echo "
            </div>
            <div class=\"faltan\">
                ";
        // line 27
        $context["faltan"] = ($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "umbral", array()) - $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "compras", array()));
        // line 28
        echo "                ";
        if (((isset($context["faltan"]) ? $context["faltan"] : $this->getContext($context, "faltan")) > 0)) {
            // line 29
            echo "                    Faltan <strong>";
            echo twig_escape_filter($this->env, (isset($context["faltan"]) ? $context["faltan"] : $this->getContext($context, "faltan")), "html", null, true);
            echo " compras</strong> <br/> para activar
                    la oferta
                ";
        } else {
            // line 32
            echo "                    <strong>Oferta activada</strong> por superar las <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 33
(isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "umbral", array()), "html", null, true);
            echo "</strong> compras necesarias
                ";
        }
        // line 35
        echo "            </div>
        </section>
        <section class=\"direccion\">
            <h2>Disfruta de la oferta en</h2>
            <p>
                <a href=\"#\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "nombre", array()), "html", null, true);
        echo "</a>
                ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "direccion", array()), "html", null, true);
        echo "
            </p>
        </section>
        <section class=\"tienda\">
            <h2>Sobre la tienda</h2>
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "descripcion", array()), "html", null, true);
        echo "
        </section>
    ";
    }

    // line 50
    public function block_aside($context, array $blocks = array())
    {
        // line 51
        echo "        ## FORMULARIO DE LOGIN ##
        <section id=\"nosotros\">
            <h2>Sobre nosotros</h2>
            <p>Lorem ipsum dolor sit amet...</p>
        </section>
    ";
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
        return array (  140 => 51,  137 => 50,  130 => 46,  122 => 41,  118 => 40,  111 => 35,  106 => 33,  104 => 32,  97 => 29,  94 => 28,  92 => 27,  86 => 24,  80 => 21,  73 => 17,  70 => 16,  66 => 15,  62 => 14,  61 => 13,  54 => 9,  50 => 8,  47 => 7,  44 => 6,  38 => 5,  31 => 3,  11 => 2,);
    }
}
