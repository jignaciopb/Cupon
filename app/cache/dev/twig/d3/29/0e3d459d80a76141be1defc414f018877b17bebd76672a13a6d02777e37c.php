<?php

/* ::base.html.twig */
class __TwigTemplate_d3290e3d459d80a76141be1defc414f018877b17bebd76672a13a6d02777e37c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'id' => array($this, 'block_id'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " | Cupon</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "</head>
<body id=\"";
        // line 9
        $this->displayBlock('id', $context, $blocks);
        echo "\"><div id=\"contenedor\">
    ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "    <footer>
        &copy; ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Cupon
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "ayuda"));
        echo "\">Ayuda</a>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "contacto"));
        // line 15
        echo "\">Contacto</a>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "privacidad"));
        // line 17
        echo "\">Privacidad</a>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "sobre-nosotros"));
        // line 19
        echo "\">Sobre nosotros</a>
    </footer>
    ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "</div></body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 9
    public function block_id($context, array $blocks = array())
    {
        echo "";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 21,  95 => 10,  89 => 9,  84 => 7,  79 => 6,  74 => 22,  72 => 21,  68 => 19,  66 => 18,  63 => 17,  61 => 16,  58 => 15,  56 => 14,  52 => 13,  48 => 12,  45 => 11,  43 => 10,  39 => 9,  36 => 8,  34 => 7,  30 => 6,  24 => 2,);
    }
}
