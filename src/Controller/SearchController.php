<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class SearchController extends AbstractController
{
  public function __construct(private ProductRepository $productRepository)
  {
      
  }

    /**
     * @Route("/search", name="search")
     */

     public function index(Request $request)
    {   
      $searchValue = $request->request->get('search');
/*       dd($this->productRepository->search('product1'));  */
      $search = $this->productRepository->search($searchValue);

        return $this->render('search/index.html.twig', [
          'search' => $search
        ]);
    }
}

