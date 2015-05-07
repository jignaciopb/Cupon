<?php

namespace Cupon\OfertaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * oferta
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Cupon\OfertaBundle\Entity\ofertaRepository")
 */
class oferta
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @ORM\Column(name="condiciones", type="text")
     */
    private $condiciones;

    /**
     * @ORM\Column(name="ruta_foto", type="string", length=255)
     */
    private $rutaFoto;

    /**
     * @ORM\Column(name="precio", type="decimal")
     */
    private $precio;

    /**
     * @ORM\Column(name="descuento", type="decimal")
     */
    private $descuento;

    /**
     * @ORM\Column(name="fecha_publicacion", type="datetime")
     */
    private $fechaPublicacion;

    /**
     * @ORM\Column(name="fecha_expiracion", type="datetime")
     */
    private $fechaExpiracion;

    /**
     * @ORM\Column(name="compras", type="integer")
     */
    private $compras;

    /**
     * @ORM\Column(name="umbral", type="integer")
     */
    private $umbral;

    /**
     * @ORM\Column(name="revisada", type="boolean")
     */
    private $revisada;

    /**
     * @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\ciudad")
     */
    private $ciudad;

    /**
     * @ORM\ManyToOne(targetEntity="Cupon\TiendaBundle\Entity\tienda")
     */
    private $tienda;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return oferta
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return oferta
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return oferta
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set condiciones
     *
     * @param string $condiciones
     * @return oferta
     */
    public function setCondiciones($condiciones)
    {
        $this->condiciones = $condiciones;

        return $this;
    }

    /**
     * Get condiciones
     *
     * @return string 
     */
    public function getCondiciones()
    {
        return $this->condiciones;
    }

    /**
     * Set rutaFoto
     *
     * @param string $rutaFoto
     * @return oferta
     */
    public function setRutaFoto($rutaFoto)
    {
        $this->rutaFoto = $rutaFoto;

        return $this;
    }

    /**
     * Get rutaFoto
     *
     * @return string 
     */
    public function getRutaFoto()
    {
        return $this->rutaFoto;
    }

    /**
     * Set precio
     *
     * @param string $precio
     * @return oferta
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     * @return oferta
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set fechaPublicacion
     *
     * @param \DateTime $fechaPublicacion
     * @return oferta
     */
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;

        return $this;
    }

    /**
     * Get fechaPublicacion
     *
     * @return \DateTime 
     */
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    /**
     * Set fechaExpiracion
     *
     * @param \DateTime $fechaExpiracion
     * @return oferta
     */
    public function setFechaExpiracion($fechaExpiracion)
    {
        $this->fechaExpiracion = $fechaExpiracion;

        return $this;
    }

    /**
     * Get fechaExpiracion
     *
     * @return \DateTime 
     */
    public function getFechaExpiracion()
    {
        return $this->fechaExpiracion;
    }

    /**
     * Set compras
     *
     * @param integer $compras
     * @return oferta
     */
    public function setCompras($compras)
    {
        $this->compras = $compras;

        return $this;
    }

    /**
     * Get compras
     *
     * @return integer 
     */
    public function getCompras()
    {
        return $this->compras;
    }

    /**
     * Set umbral
     *
     * @param integer $umbral
     * @return oferta
     */
    public function setUmbral($umbral)
    {
        $this->umbral = $umbral;

        return $this;
    }

    /**
     * Get umbral
     *
     * @return integer 
     */
    public function getUmbral()
    {
        return $this->umbral;
    }

    /**
     * Set revisada
     *
     * @param boolean $revisada
     * @return oferta
     */
    public function setRevisada($revisada)
    {
        $this->revisada = $revisada;

        return $this;
    }

    /**
     * Get revisada
     *
     * @return boolean 
     */
    public function getRevisada()
    {
        return $this->revisada;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return oferta
     */
    public function setCiudad(\Cupon\CiudadBundle\Entity\ciudad $ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set tienda
     *
     * @param string $tienda
     * @return oferta
     */
    public function setTienda(\Cupon\TiendaBundle\Entity\tienda $tienda)
    {
        $this->tienda = $tienda;

        return $this;
    }

    /**
     * Get tienda
     *
     * @return string 
     */
    public function getTienda()
    {
        return $this->tienda;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
}
