<?php

namespace App\DataFixtures;

use App\Entity\Textes;
use App\Entity\Competences;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $competence1 = new Competences();
         $competence1->setTitle('HTML');
         $competence1->setNiveau(80);
         $manager->persist($competence1);

         $competence2 = new Competences();
         $competence2->setTitle('CSS');
         $competence2->setNiveau(65);
         $manager->persist($competence2);

         $competence3 = new Competences();
         $competence3->setTitle('Bootstrap');
         $competence3->setNiveau(60);
         $manager->persist($competence3);

         $competence4 = new Competences();
         $competence4->setTitle('SQL');
         $competence4->setNiveau(60);
         $manager->persist($competence4);

         $competence5 = new Competences();
         $competence5->setTitle('PHP');
         $competence5->setNiveau(60);
         $manager->persist($competence5);

         $texte1 = new Textes();
         $texte1->setZone(1);
         $texte1->setTexte("t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum (injected humour and the like).");
         $manager->persist($texte1);

         $texte2 = new Textes();
         $texte2->setZone(2);
         $texte2->setTexte("Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 from a line in section 1.10.32.");
         $manager->persist($texte2);

         $texte3 = new Textes();
         $texte3->setZone(3);
         $texte3->setTexte("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or non-characteristic words etc.");
         $manager->persist($texte3);

        $manager->flush();
    }
}

