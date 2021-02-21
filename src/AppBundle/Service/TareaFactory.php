<?php


namespace AppBundle\Service;


use AppBundle\Domain\Tarea;
use AppBundle\Domain\TareaFactory as TareaFactoryAlias;
use AppBundle\Domain\TareaInterface;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\ClassMetadata;

class TareaFactory implements TareaFactoryAlias
{



    /**
     * @inheritDoc
     */
    public function crearTarea(string $name, \DateTime $fechaCreaccion, \DateTime $fechaTope, bool $estado, int $id ): Tarea
    {
        return new Tarea($name, $fechaCreaccion, $fechaTope, $estado, $id );
    }
}