<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AjExampleController extends AbstractController
{
    #[Route('/aj', name: 'aj')]
    public function index(Request $request): Response
    {
      //check si des données sont passées à l'objet request
      if(count($request->request)>1){
        //renvoi un un objet Response ou l'on passe un json
        return $this->json([
            'name' => $request->request->get('name'),
            'lastname' => $request->request->get('lastname'),
        ]);
      }
      //initialise avec un template html classique
      return $this->render('aj/aj.html.twig');
    }
}
