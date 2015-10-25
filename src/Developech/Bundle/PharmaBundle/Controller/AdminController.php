<?php

namespace Developech\Bundle\PharmaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminController extends Controller
{
    public function homeAction()
    {
        return $this.$this->render("DevelopechPharmaBundle:Admin:home.html.twig");
    }
}
