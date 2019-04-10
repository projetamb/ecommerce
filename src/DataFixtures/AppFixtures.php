<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

use App\Entity\Product;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $products = [];

        for ($i = 1; $i < 100; $i++) {
            $product = new Product();
            $product->setNAme($faker->name);
            $product->setDescription($faker->description);
            $product->setPrice($faker->randomNumber(4) * 100);
            $product->setPhoto();
            $product->setCategory();
            $product->setQuantity();
            $product->setHeart();

            $manager->persist($product);
        }
        

        $manager->persist($product);

        $manager->flush();
    }
}
