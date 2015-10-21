<?php

namespace Developech\Bundle\PharmaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends Controller
{
    /**
     * @param $id
     * @return JsonResponse
     */
    public function defaultAction($id)
    {
        return new JsonResponse(array("ID" => $id));
    }
}
