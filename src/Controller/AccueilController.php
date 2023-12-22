<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of AccueilController
 *
 * @author lucas
 */
class AccueilController {
    /**
     * @Route("/", name="acceuil")
     * @return Response
     */
    public function index(): Response{
        return new Response('Hello world');
    }
   
}
