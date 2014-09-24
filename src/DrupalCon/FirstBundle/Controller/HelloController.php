<?php

namespace DrupalCon\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
  public function indexAction()
  {
    return new Response('<html><body><h1>Hello World</h1></body></html>');
  }

  public function templateAction()
  {
    return $this->render('FirstBundle:Hello:template.html.twig');
  }

  public function nameAction($name)
  {
    return $this->render(
      'FirstBundle:Hello:name.html.twig',
      [ 'name' => $name ]
    );
  }
}
