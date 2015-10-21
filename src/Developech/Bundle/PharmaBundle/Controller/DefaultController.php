<?php

namespace Developech\Bundle\PharmaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DevelopechPharmaBundle:Default:index.html.twig', array('name' => $name));
    }
}
