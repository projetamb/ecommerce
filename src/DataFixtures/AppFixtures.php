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
            $product->setDescription($faker->text(50));
            $product->setPrice($faker->randomNumber(3) * 100);
            $product->setPhoto('1');
            $product->setCategory($faker->randomElement([
                'Lunette', 'Lingerie', 'Téléphone', 'Tondeuse', 'Parfum'
            ]));
            $product->setQuantity($faker->randomNumber(2) * 7);
            $product->setHeart('0');

            $manager->persist($product);
        }
        
        $manager->persist($product);

        $manager->flush();
    }
}
