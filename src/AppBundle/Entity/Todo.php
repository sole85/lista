<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Todo
 *
 * @ORM\Table(name="todo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TodoRepository")
 */
class Todo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="datetime")
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaTope", type="datetime")
     */
    private $fechaTope;

    /**
     * @var bool
     *
     * @ORM\Column(name="estado", type="boolean")
     */
    private $estado;


    /**
     * Todo constructor.
     * @param int $id
     * @param string $name
     * @param \DateTime $fechaCreacion
     * @param \DateTime $fechaTope
     * @throws \Exception
     */
    public function __construct(int $id, string $name, \DateTime $fechaCreacion, \DateTime $fechaTope)
    {
        $this->id= $id;
        $this->name = $name;
        $this->fechaCreacion = new \DateTime();
        $this->fechaTope = $fechaTope;
        $this->estado = false;
    }


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Todo
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set fechaCreacion.
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Todo
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion.
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaTope.
     *
     * @param \DateTime $fechaTope
     *
     * @return Todo
     */
    public function setFechaTope($fechaTope)
    {
        $this->fechaTope = $fechaTope;

        return $this;
    }

    /**
     * Get fechaTope.
     *
     * @return \DateTime
     */
    public function getFechaTope()
    {
        return $this->fechaTope;
    }

    /**
     * Set estado.
     *
     * @param bool $estado
     *
     * @return Todo
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado.
     *
     * @return bool
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
