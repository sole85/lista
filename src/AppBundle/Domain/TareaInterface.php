<?php


namespace AppBundle\Domain;


/**
 * Interface TareaInterface
 * @package AppBundle\Domain
 */
interface TareaInterface
{



    /**
     * @return string
     */
    public function name(): string ;

    /**
     * @return \DateTime
     */
    public function fechaCreacion(): \DateTime;

    /**
     * @return \DateTime
     */
    public function fechaLimite(): \DateTime;

    /**
     * @return bool
     */
    public function estado(): bool ;


}