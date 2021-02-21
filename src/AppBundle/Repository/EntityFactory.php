<?php


namespace AppBundle\Repository;


use AppBundle\Domain\Tarea;
use AppBundle\Entity\Todo;

class EntityFactory
{

    /**
     * @param Tarea $tarea
     * @param Todo|null $tareaEdit
     * @return Todo
     * @throws \Exception
     */
    public function createTareaEntityFromDomain(
        Tarea $tarea,
        ?Todo $tareaEdit = null
    ):Todo
    {

         $tareaEntity = $tareaEdit ??  new Todo(
                                            $tarea->getid(),
                                            $tarea->name(),
                                            $tarea->fechaCreacion(),
                                            $tarea->fechaLimite());

         $tareaEntity->setEstado($tarea->estado());

        return $tareaEntity;
    }
    /**
     * @param Tarea $tarea
     * @param Todo|null $tareaEdit
     * @return Todo
     * @throws \Exception
     */
    public function createTareaEntityFromArray(
        Tarea $tarea,
        ?Todo $tareaEdit = null
    ):Todo
    {

        $tareaEntity = $tareaEdit ??  new Todo(
                $tarea->getid(),
                $tarea->name(),
                $tarea->fechaCreacion(),
                $tarea->fechaLimite());

        $tareaEntity->setEstado($tarea->estado());

        return $tareaEntity;
    }

}