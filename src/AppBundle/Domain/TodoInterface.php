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
     * @return array
     */
    public function showListado(): array ;

}