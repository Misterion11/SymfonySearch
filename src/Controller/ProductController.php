<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productName}", name="product_detail")
     */

    public function detail($productName)
    {
        $products = [
            'product1' => [
                'name' => 'product1',
                'description' => 'This is product1'
            ],
            'product2' => [
                'name' => 'product2',
                'description' => 'This is product2'
            ],
        ];

        $product = $products[$productName];

        return $this->render('product/detail.html.twig', [
            'product' => $product
        ]);
    }
}
