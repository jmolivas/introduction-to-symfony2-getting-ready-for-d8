<?php

namespace DrupalCon\FirstBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
  public function indexAction()
  {
    return new Response('<html><body><h1>Hello World</h1></body></html>');
  }
}
