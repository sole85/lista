<?php


namespace AppBundle\Service;



use AppBundle\Repository\TodoRepository;


/**
 * Class TareaService
 * @package AppBundle\Service
 */
class TareaService
{

    /** @var TodoRepository  */
    private $entityManager;


    /**
     * Initializes a new <tt>EntityRepository</tt>.
     * @param TodoRepository $em
     */
    public function __construct(TodoRepository $em)
  {
      $this->entityManager = $em;
  }


    /**
     * @return array
     */
    public function tareas(): array
    {
        return $this->entityManager->showListado();
    }


    /**
     * @param int $tarea
     * @return array
     * @throws \Exception
     */
    public function markToDo(int $tarea): array
    {
        $tarea = $this->entityManager->findTareaById($tarea);

        $tarea->changeEstado(true);
        $this->entityManager->addElement($tarea);

        return $this->entityManager->showListado();
    }

}