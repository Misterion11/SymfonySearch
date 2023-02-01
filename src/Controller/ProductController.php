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

    /**
     * @Route("/products", name="products")
     */

    public function index()
    {
        $products = [
            [
                'name' => 'product1',
                'description' => 'This is product1',
                'price' => 19.99,
                'image' => 'product1.jpg'
            ],
            [
                'name' => 'product2',
                'description' => 'This is product2',
                'price' => 29.99,
                'image' => 'product2.jpg'
            ],
        ];

        return $this->render('products/index.html.twig', [
            'products' => $products
        ]);
    }
}
