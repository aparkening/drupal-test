<?php

namespace Drupal\test_module_2\Controller;

use Drupal\test_module_2\Services\YoGenerator;
use Symfony\Component\HttpFoundation\Response;

class TestController {

  public function shout($count) {
    $yoGenerator = new YoGenerator();
    
    // $shout = 'Y'.str_repeat('O', $count).'!!!!!';
    $shout = $yoGenerator->getShout($count);
    
    return new Response($shout);
  }

}