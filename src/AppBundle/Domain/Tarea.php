<?php


namespace AppBundle\Domain;


use Symfony\Component\Uid\NilUuid;
use Symfony\Component\Uid\Uuid;
/**
 * Class Tarea
 * @package AppBundle\Domain
 */
class Tarea implements TareaInterface
{

    protected  $id;

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
     * @param bool $estado
     */
    public function __construct( string $name, \DateTime $fechaCreacion, \DateTime $fechaTope, bool $estado = false, ?int $id = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->fechaCreacion = $fechaCreacion;
        $this->fechaTope = $fechaTope;
        $this->estado = $estado;
    }

    /**
     * @inheritDoc
     */
    public function getid(): int
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

    /**
     * @inheritDoc
     */
    public function changeEstado(bool $estado): Tarea
    {
        $this->estado = $estado;

        return $this;
    }
}