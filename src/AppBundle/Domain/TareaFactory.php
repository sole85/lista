<?php


namespace AppBundle\Domain;


interface TareaFactory
{

    /**
     * @param int $id
     * @param string $name
     * @param \DateTime $fechaCreaccion
     * @param \DateTime $fechaTope
     * @param bool $estado
     * @return Tarea
     */
    public function crearTarea(int $id, string $name, \DateTime $fechaCreaccion, \DateTime $fechaTope, bool $estado): Tarea;

}