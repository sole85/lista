<?php


namespace AppBundle\Repository;


use AppBundle\Domain\Tarea;
use AppBundle\Entity\Todo;

class EntityFactory
{


    /**
     * @param Tarea $tarea
     * @return Todo
     * @throws \Exception
     */
    public function createTareaEntityFromDomain(Tarea $tarea):Todo
    {
        return new Todo(
            $tarea->id(),
            $tarea->name(),
            $tarea->fechaCreacion(),
            $tarea->fechaLimite());
    }


}