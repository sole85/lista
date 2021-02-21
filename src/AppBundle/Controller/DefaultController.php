<?php

namespace AppBundle\Controller;

use AppBundle\Repository\TodoRepository;
use AppBundle\Service\TareaService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{




    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(TareaService $repositoriy)
    {

       $a = $repositoriy->hola();
       var_dump($a);
       die();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
