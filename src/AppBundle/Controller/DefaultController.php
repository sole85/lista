<?php

namespace AppBundle\Controller;

use AppBundle\Domain\Tarea;
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

       $a = $repositoriy->tareas();


        // replace this example code with whatever you need
    return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        'articles' => $a
        ]);
    }


    /**
     * @Route("/add", name="tarea_add")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function addAction(Request $request)
    {

      die("aaaaaaaaaaa");
    }

    /**
     * @Route("/edit/{id}", name="tarea_edit")
     * @param TareaService $repositoriy
     * @param $id
     */
    public function editAction(TareaService $repositoriy ,$id)
    {
        $a = $repositoriy->markToDo($id);



        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'articles' => $a
        ]);


    }

}
