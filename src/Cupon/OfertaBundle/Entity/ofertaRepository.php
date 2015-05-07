<?php
// src/Cupon/OfertaBundle/Entity/ofertaRepository.php

namespace Cupon\OfertaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ofertaRepository extends EntityRepository
{
    public function findOfertaDelDia($ciudad)
    {
        //$fechaPublicacion = new \DateTime('today');
        //$fechaPublicacion = setTime(00,00,00);

        $em = $this->getEntityManager();

        $dql = 'SELECT o, c, t FROM OfertaBundle:oferta o
                JOIN o.ciudad c JOIN o.tienda t
                WHERE o.revisada = TRUE
                AND c.slug = :ciudad
                AND o.fechaPublicacion = :fecha
                ORDER BY o.fechaPublicacion DESC';

        $consulta = $em ->createQuery($dql);
        $consulta ->setParameter('fecha', new \DateTime('today'));
        $consulta ->setParameter('ciudad', $ciudad);
        $consulta ->setMaxResults(1);

        return $consulta->getOneOrNullResult();

    }
}