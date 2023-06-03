<?php

namespace App\Controller;

use App\Entity\Marque;
use App\Repository\MarqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarqueController extends AbstractController
{
    // Create Read (tous & 1) Update Delete

    #[Route('/marque', name: 'marque_index', methods: ['GET'])]
    public function index(MarqueRepository $marqueRepository): Response
    {
        return $this->render('marque/index.html.twig', [
            'marques' => $marqueRepository->findAll(),
        ]);
    }
    
    #[Route('/marque/{id}', name: 'marque_show', requirements:['id' => '\d+'], methods: ['GET'])]
    public function show(Marque $marque) : Response
    {
        return $this->render('marque/show.html.twig', [
            'marque' => $marque,
        ]);
    }

    #[Route('/marque/create', name: 'marque_create', priority: 0, methods: ['GET', 'POST'])]
    public function create() : Response
    {
        dd(__METHOD__);
    }

    #[Route('/marque/{id}/edit', name: 'marque_edit', requirements:['id' => '\d+'], methods: ['GET', 'POST'])]
    public function update() : Response
    {
        dd(__METHOD__);
    }

    #[Route('/marque/{id}/delete', name: 'marque_delete', requirements:['id' => '\d+'], methods: ['GET'])]
    public function delete() : Response
    {
        dd(__METHOD__);
    }
}
