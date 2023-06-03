<?php

namespace App\DataFixtures;

use App\Entity\Marque;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $marque1 = new Marque();
        $marque1->setLibelle('KTM');
        $manager->persist($marque1);

        $marque2 = new Marque();
        $marque2->setLibelle('Kawasaki');
        $manager->persist($marque2);


        $manager->flush();
    }
}
