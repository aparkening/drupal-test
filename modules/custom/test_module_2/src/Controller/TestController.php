<?php

namespace Drupal\test_module_2\Controller;

use Symfony\Component\HttpFoundation\Response;

class TestController {

  public function shout($count) {
    $shout = 'Y'.str_repeat('O', $count).'!!!!!';
    return new Response($shout);
  }

}