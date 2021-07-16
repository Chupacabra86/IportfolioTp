<?php

namespace App\Controller;

use App\Repository\TextesRepository;
use App\Repository\LangagesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(LangagesRepository $LangagesRepository, TextesRepository $TextesRepository): Response
    {
        $langages            = $LangagesRepository->findAll();
        // $textes = $TextesRepository->findAll();
        $texteHeader            = $TextesRepository->findOneBy(array('zone'=>'header'));
        $texteInformations_1    = $TextesRepository->findOneBy(array('zone'=>'informations_1'));
        $texteInformations_2    = $TextesRepository->findOneBy(array('zone'=>'informations_2'));
        $texteInformations_3    = $TextesRepository->findOneBy(array('zone'=>'informations_3'));
        $texteLangages          = $TextesRepository->findOneBy(array('zone'=>'langages'));
        $texteCurriculum_vitae  = $TextesRepository->findOneBy(array('zone'=>'curriculum_vitae'));
        $texteRealisations      = $TextesRepository->findOneBy(array('zone'=>'realisations'));
        $texteCompetences       = $TextesRepository->findOneBy(array('zone'=>'competences'));
        $texteTemoignages       = $TextesRepository->findOneBy(array('zone'=>'temoignages'));
        $texteMe_contacter      = $TextesRepository->findOneBy(array('zone'=>'me_contacter'));

        
        return $this->render('home/index.html.twig', [
            'langages'                  => $langages,
            'texteHeader'               => $texteHeader,
            'texteInformations_1'       => $texteInformations_1,
            'texteInformations_2'       => $texteInformations_2,
            'texteInformations_3'       => $texteInformations_3,
            'texteLangages'             => $texteLangages,
            'texteCurriculum_vitae'     => $texteCurriculum_vitae,
            'texteRealisations'         => $texteRealisations,
            'texteCompetences'          => $texteCompetences,
            'texteTemoignages'          => $texteTemoignages,
            'texteMe_contacter'         => $texteMe_contacter
            
        ]);
    }
}
