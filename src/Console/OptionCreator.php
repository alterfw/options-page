<?php

namespace Alter\Option\Console;

use Alter\Common\Console\TemplateCreator;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class OptionCreator extends TemplateCreator {

  protected function configure() {

    $this
      ->setName('create:option')
      ->setDescription('Create a option class')
      ->addArgument(
        'name',
        InputArgument::REQUIRED,
        'Name of the Option page'
      );

  }

  protected function execute(InputInterface $input, OutputInterface $output) {

    $name = ucfirst($input->getArgument('name'));

    $this->createDirectory('/option');
    $this->render(__DIR__.'/templates/Option', '/option/'.strtolower($name).'.php', ['name'=>$name]);

    $output->writeln('<info>Created</info> '.APPLICATION_PATH.'/option/'.strtolower($name).'.php');

  }

}
