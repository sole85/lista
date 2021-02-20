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
     * @param array $tareaEntity
     * @return array
     */
    public function toDomain(array $tareaEntity): array
    {
        $tareas = [];

        if(empty($tareaEntity))
        {
            return  $tareas;
        }

        /** @var Tarea| $item */
        foreach ($tareaEntity as $item) {

            $tareas[$item->id()] =  $this->tareaFactory->crearTarea(
                $item->getId(),
                $item->getName(),
                $item->getFechaCreacion(),
                $item->getFechaTope(),
                $item->getEstado()
            );
        }

      return $tareas;
    }

}