<?php

namespace DrupalCon\FirstBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
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

  /**
   * @Template()
   */
  public function helloAction($name, $times)
  {
    return [
      'name'=>$name,
      'times' => $times
    ];
  }
}
