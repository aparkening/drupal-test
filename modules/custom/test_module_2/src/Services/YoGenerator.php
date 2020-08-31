<?php

namespace Drupal\test_module_2\Services;

use Symfony\Component\HttpFoundation\Response;

// Custom service

class YoGenerator {

  public function getShout($length) {
    return 'Y'.str_repeat('O', $length).'!!!!!';
  }

}