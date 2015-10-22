<?php

namespace Developech\Bundle\PharmaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($name,Request $request)
    {
        $age = $request->get("age");
        dump($age);
        return $this->render('DevelopechPharmaBundle:Default:index.html.twig', array(
            'name' => $name,
            'age' => $age
        ));
    }
}
