<?php

namespace Drupal\test_module_2\Services;

use Symfony\Component\HttpFoundation\Response;

// Custom service

class ShoutGenerator {

  public function getShout($length) {
    return 'Y'.str_repeat('O', $length).'!!!!!';
  }

}