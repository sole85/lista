<?php


namespace AppBundle\Domain;


use AppBundle\Entity\Todo;

/**
 * Interface TodoInterface
 * @package AppBundle\Domain
 */
interface TodoInterface
{

    /**
     * @param Tarea $tarea
     * @return Tarea
     */
    public function addElement(Tarea $tarea): Tarea;


    /**
     * @return array
     */
    public function showListado(): array ;


    /**
     * @param int $id

     */
    public function findTareaById(int $id);

}