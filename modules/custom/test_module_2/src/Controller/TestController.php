<?php

namespace Drupal\test_module_2\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\test_module_2\Services\ShoutGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

class TestController extends ControllerBase {

  private $shoutGenerator;

  public function __construct(ShoutGenerator $shoutGenerator) {
    $this->shoutGenerator = $shoutGenerator;
  }

  public function shout($count) {
    // $shoutGenerator = new ShoutGenerator();
    // $shout = 'Y'.str_repeat('O', $count).'!!!!!';
    
    $shout = $this->shoutGenerator->getShout($count);
    
    return new Response($shout);
  }

  public static function create(ContainerInterface $container) {
    $shoutGenerator = $container->get('test_module_2.shout_generator');
    return new static($shoutGenerator);
  }

}