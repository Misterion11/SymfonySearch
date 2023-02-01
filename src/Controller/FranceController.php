<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\France;

class FranceController extends AbstractController
{
    public function show()
    {
        $france = new France();
        $france->setName("France");
        $france->setCurrency("Euro");
        $france->setPopulation(67000000);
        $flagUrl = "https://upload.wikimedia.org/wikipedia/en/c/c3/Flag_of_France.svg";

        return $this->render('france/show.html.twig', [
            'name' => $france->getName(),
            'currency' => $france->getCurrency(),
            'population' => $france->getPopulation(),
            'capital' => France::capital,
            'flagUrl' => $flagUrl
        ]);
    }
}
