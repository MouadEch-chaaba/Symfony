<?php

namespace Developech\Bundle\PharmaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    public function defaultAction($id)
    {
        return new JsonResponse(array("ID" => $id));
    }
}
