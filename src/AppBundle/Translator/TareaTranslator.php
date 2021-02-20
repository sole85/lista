<?php


namespace AppBundle\Translator;


use AppBundle\Domain\Tarea;
use AppBundle\Domain\TareaFactory;
use AppBundle\Entity\Todo;

/**
 * Class TareaTranslator
 * @package AppBundle\Translator
 */
class TareaTranslator
{
    /** @var TareaFactory  */
    protected $tareaFactory;

    /**
     * TareaTranslator constructor.
     * @param TareaFactory $tareaFactory
     */
    public function __construct(TareaFactory $tareaFactory)
    {
        $this->tareaFactory = $tareaFactory;
    }


    /**
     * @param Todo $tareaEntity
     * @return Tarea
     */
    public function toDomain(Todo $tareaEntity): Tarea
    {
        return $this->tareaFactory->crearTarea(
                    $tareaEntity->getId(),
                    $tareaEntity->getName(),
                    $tareaEntity->getFechaCreacion(),
                    $tareaEntity->getFechaTope(),
                    $tareaEntity->getEstado()
                    );

    }

}