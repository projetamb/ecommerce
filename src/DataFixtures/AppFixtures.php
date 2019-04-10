<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

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

        }

        $product = new Product();
        $manager->persist($product);

        $manager->flush();
    }
}
