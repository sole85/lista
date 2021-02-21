<?php


namespace AppBundle\Service;


use AppBundle\Entity\Todo;
use AppBundle\Repository\EntityFactory;
use AppBundle\Repository\TodoRepository;
use AppBundle\Translator\TareaTranslator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\EventManager;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Tests\Fixtures\User;

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

    public  function hs()
    {
        return $this->entityManager->showListado();

    }


    public function hola()
    {


        return $this->entityManager->showListado();




        return "xcaca";
        return $this->entityManager->getRepository(Todo::class);
        return $this->findAll();
        $a = $this->em->getRepository(Todo::class)->findAll();
        return "holssssssaaaaaaaaa";
    }
}