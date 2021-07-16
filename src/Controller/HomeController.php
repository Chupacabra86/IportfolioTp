<?php

namespace App\Controller;

use App\Repository\TextesRepository;
use App\Repository\LangagesRepository;
use App\Repository\RealisationsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(LangagesRepository $LangagesRepository, TextesRepository $TextesRepository, RealisationsRepository $RealisationsRepository): Response
    {
        $langages               = $LangagesRepository->findAll();
        $realisations           = $RealisationsRepository->findAll();
        // $textes = $TextesRepository->findAll();
        $texteHeader            = $TextesRepository->findOneBy(array('zone'=>'texteHeader'));
        $texteInformations_1    = $TextesRepository->findOneBy(array('zone'=>'texteInformations_1'));
        $texteInformations_2    = $TextesRepository->findOneBy(array('zone'=>'texteInformations_2'));
        $texteInformations_3    = $TextesRepository->findOneBy(array('zone'=>'texteInformations_3'));
        $texteLangages          = $TextesRepository->findOneBy(array('zone'=>'texteLangages'));
        $texteCurriculum_vitae  = $TextesRepository->findOneBy(array('zone'=>'texteCurriculum_vitae'));
        $texteRealisations      = $TextesRepository->findOneBy(array('zone'=>'texteRealisations'));
        $texteCompetences       = $TextesRepository->findOneBy(array('zone'=>'texteCompetences'));
        $texteTemoignages       = $TextesRepository->findOneBy(array('zone'=>'texteTemoignages'));
        $texteMe_contacter      = $TextesRepository->findOneBy(array('zone'=>'texteMe_contacter'));

        
        return $this->render('home/index.html.twig', [
            'langages'                  => $langages,
            'realisations'              => $realisations,
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
