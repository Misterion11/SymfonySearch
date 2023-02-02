<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;
use Doctrine\Orm\Query;

class MyEntityFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i <50; $i ++ ) {
            $entity = new Product();
            $entity ->setName("product$i")
            ->setPrice(random_int(0, 500))
            ;
            $manager->persist($entity);
        }

        $manager->flush();
    }
    
}
