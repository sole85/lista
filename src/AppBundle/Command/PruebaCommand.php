<?php

namespace AppBundle\Command;

use AppBundle\Domain\Tarea;
use AppBundle\Repository\TodoRepository;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PruebaCommand extends ContainerAwareCommand
{

    /** @var TodoRepository  */
    private $repository;

    /**
     * @param TodoRepository $container
     */
    public function __construct(TodoRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    protected function configure()
    {

        $this
            ->setName('demo:tarea')
            ->setDescription('add tarea')
            ->addArgument(
                'name',
                InputArgument::REQUIRED,
                'Who do you want to greet?'
            )
            ->addArgument(
                'FechaFinalizacion',
                InputArgument::REQUIRED,
                'Who do you want to greet?'
            )

        ;
    }

    /**
     * Executes the current command.
     *
     * This method is not abstract because you can use this class
     * as a concrete class. In this case, instead of defining the
     * execute() method, you set the code to execute by passing
     * a Closure to the setCode() method.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void null or 0 if everything went fine, or an error code
     *
     * @throws \Exception
     * @see setCode()
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $salida = $input->getArguments();

        $date = new \DateTime($salida['FechaFinalizacion']);

        $tarea = new Tarea($salida['name'],  new \DateTime(), $date);
        $this->repository->addElement($tarea);

        $output->writeln("tarea introudcida");
    }



}
