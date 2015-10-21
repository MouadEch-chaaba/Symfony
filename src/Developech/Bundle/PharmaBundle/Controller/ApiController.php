<?php

namespace Developech\Bundle\PharmaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    public function defaultAction($id)
    {
        return new Response(json_encode(array("ID" => $id)),200,array("Content-type" => "application/json"));
    }
}
