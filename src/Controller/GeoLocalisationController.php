<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeoLocalisationController extends AbstractController
{
    /**
     * @Route("/geolocalisation", name="geo_localisation")
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function index(Request $request):Response
    {
        $form = $this->createFormBuilder()
            ->add('ip', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
            ->getForm();
        $query = $request->request->get('form')['ip'];
        if($query)
        {
            //Your BIN database file path
            $db = new \IP2Location\Database ('../src/Database/IP2LOCATION.BIN', \IP2Location\Database::FILE_IO);
            $records = $db->lookup($query, \IP2Location\Database::ALL);
            return $this->render('geo_localisation/index.html.twig', [
                'form' => $form->createView(),
                'records' => $records
            ]);
        }
        return $this->render('geo_localisation/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("map", name="map-index")
     */
    public function map()
        {
            // https://developers.google.com/maps/documentation/javascript/examples/map-simple#all
            return $this->render('maps/map.html.twig');
        }
}
