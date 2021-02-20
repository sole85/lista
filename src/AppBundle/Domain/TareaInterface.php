<?php


namespace AppBundle\Domain;


/**
 * Interface TareaInterface
 * @package AppBundle\Domain
 */
interface TareaInterface
{


    /**
     * @return int
     */
    public function id(): int;


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