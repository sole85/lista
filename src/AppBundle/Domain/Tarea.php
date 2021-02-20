<?php


namespace AppBundle\Domain;


/**
 * Class Tarea
 * @package AppBundle\Domain
 */
class Tarea implements TareaInterface
{


    protected $id;

    protected $name;

    protected $fechaCreacion;

    protected $fechaTope;

    protected $estado;


    /**
     * Tarea constructor.
     * @param int $id
     * @param string $name
     * @param \DateTime $fechaCreacion
     * @param \DateTime $fechaTope
     */
    public function __construct(int $id, string $name, \DateTime $fechaCreacion, \DateTime $fechaTope)
    {
        $this->id = $id;
        $this->name = $name;
        $this->fechaCreacion = $fechaCreacion;
        $this->fechaTope = $fechaTope;
        $this->estado = false;
    }


    /**
     * @inheritDoc
     */
    public function id(): int
    {

        return $this->id;

    }

    /**
     * @inheritDoc
     */
    public function name(): string
    {
            return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function fechaCreacion(): \DateTime
    {
        return $this->fechaCreacion;
    }

    /**
     * @inheritDoc
     */
    public function fechaLimite(): \DateTime
    {
       return $this->fechaTope;
    }

    /**
     * @inheritDoc
     */
    public function estado(): bool
    {
        return $this->estado;
    }
}