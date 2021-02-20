<?php


namespace AppBundle\Domain;


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
     * @param int $id
     * @return Tarea
     */
    public function showListado(int $id): Tarea;

}