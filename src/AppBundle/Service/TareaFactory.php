<?php


namespace AppBundle\Service;


use AppBundle\Domain\Tarea;
use AppBundle\Domain\TareaInterface;

class TareaFactory implements \AppBundle\Domain\TareaFactory
{

    /**
     * @inheritDoc
     */
    public function crearTarea(int $id, string $name, \DateTime $fechaCreaccion, \DateTime $fechaTope, bool $estado): Tarea
    {
        return new Tarea($id, $name, $fechaCreaccion, $fechaTope, $estado);
    }
}