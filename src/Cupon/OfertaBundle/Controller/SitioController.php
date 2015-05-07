<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SitioController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OfertaBundle:Default:index.html.twig', array('name' => $name));
    }

    public function estaticaAction($pagina)
    {
        //return new response ('Lagundu');
        return $this->render('OfertaBundle:Sitio:'.$pagina.'.html.twig' ,array('pagina'=>$pagina));
    }
}
