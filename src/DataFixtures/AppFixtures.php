<?php

namespace App\DataFixtures;

use App\Entity\Textes;
use App\Entity\Langages;
use App\Entity\Realisations;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $langage1 = new Langages();
         $langage1->setTitle('HTML');
         $langage1->setNiveau(80);
         $manager->persist($langage1);

         $langage2 = new Langages();
         $langage2->setTitle('CSS');
         $langage2->setNiveau(65);
         $manager->persist($langage2);

         $langage3 = new Langages();
         $langage3->setTitle('Bootstrap');
         $langage3->setNiveau(60);
         $manager->persist($langage3);

         $langage4 = new Langages();
         $langage4->setTitle('SQL');
         $langage4->setNiveau(60);
         $manager->persist($langage4);

         $langage5 = new Langages();
         $langage5->setTitle('PHP / Symfony');
         $langage5->setNiveau(60);
         $manager->persist($langage5);

         $langage6 = new Langages();
         $langage6->setTitle('Javascript / React');
         $langage6->setNiveau(40);
         $manager->persist($langage6);

         $texte1 = new Textes();
         $texte1->setZone('texteHeader');
         $texte1->setTexte("t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum (injected humour and the like).");
         $manager->persist($texte1);

         $texte2 = new Textes();
         $texte2->setZone('texteInformations_1');
         $texte2->setTexte("Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 from a line in section 1.10.32.");
         $manager->persist($texte2);

         $texte3 = new Textes();
         $texte3->setZone('texteInformations_2');
         $texte3->setTexte("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or non-characteristic words etc.");
         $manager->persist($texte3);

         $texte4 = new Textes();
         $texte4->setZone('texteInformations_3');
         $texte4->setTexte("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or non-characteristic words etc.");
         $manager->persist($texte4);

         $texte5 = new Textes();
         $texte5->setZone('texteLangages');
         $texte5->setTexte("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or non-characteristic words etc.");
         $manager->persist($texte5);

         $texte6 = new Textes();
         $texte6->setZone('texteCurriculum_vitae');
         $texte6->setTexte("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or non-characteristic words etc.");
         $manager->persist($texte6);

         $texte7 = new Textes();
         $texte7->setZone('texteRealisations');
         $texte7->setTexte("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or non-characteristic words etc.");
         $manager->persist($texte7);

         $texte8 = new Textes();
         $texte8->setZone('texteCompetences');
         $texte8->setTexte("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or non-characteristic words etc.");
         $manager->persist($texte8);

         $texte9 = new Textes();
         $texte9->setZone('texteTemoignages');
         $texte9->setTexte("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or non-characteristic words etc.");
         $manager->persist($texte9);

         $texte10 = new Textes();
         $texte10->setZone('texteMe_contacter');
         $texte10->setTexte("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or non-characteristic words etc.");
         $manager->persist($texte10);

         $realisation1 = new Realisations();
         $realisation1->setTitre('titre1');
         $realisation1->setDescription('description1');
         $realisation1->setImage('image1');
         $realisation1->setCategorie('categorie1');
         $manager->persist($realisation1);

         $realisation2 = new Realisations();
         $realisation2->setTitre('titre2');
         $realisation2->setDescription('description2');
         $realisation2->setImage('image2');
         $realisation2->setCategorie('categorie2');
         $manager->persist($realisation2);

         $realisation3 = new Realisations();
         $realisation3->setTitre('titre3');
         $realisation3->setDescription('description3');
         $realisation3->setImage('image3');
         $realisation3->setCategorie('categorie3');
         $manager->persist($realisation3);


        $manager->flush();
    }
}

