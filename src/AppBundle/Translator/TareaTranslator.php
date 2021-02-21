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
     */
    public function toDomain($tareaEntity)
    {



        /** @var Todo| $item */
        foreach ($tareaEntity as $item) {

            $tareas[] =  $this->tareaFactory->crearTarea(
                $item->getName(),
                $item->getFechaCreacion(),
                $item->getFechaTope(),
                $item->getEstado(),
                $item->getId()
            );
        }

      return $tareas;
    }

}