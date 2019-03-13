<?php
/**
 * Created by PhpStorm.
 * User: peterfisher
 * Date: 13/03/2019
 * Time: 20:32
 */
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class TestCommand
 */
class TestCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'app:test';

    protected function configure()
    {
        $this->setDescription('This is a test command');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('This command does nothing');
    }
}