<?php

namespace App\Controller\Admin;

use App\Entity\Type;
use App\Service\TypeService;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeController extends AbstractController
{

    public $typeService;


    public function __construct(TypeService $typeService)
    {
        $this->typeService = $typeService;
    }

    #[Route('/add_type', name: 'add_type')]
    public function index(): Response
    {
        return $this->render('admin/type/add_type.html.twig');
    }


    #[Route('/create_type', name: 'create_type', methods: ['post'])]
    public function create(Request $request)
    {
        $type = $this->typeService->create($request);
        $this->addFlash('message', 'Add Type Successfully');
        return $this->redirectToRoute('show_type');
    }

    #[Route('/edit_type/{id}', name: 'edit_type')]
    public function edit($id): Response
    {
        $type = $this->typeService->find_type_byID($id);
        return $this->render('admin/type/edit_type.html.twig', ['type' => $type]);
    }

    #[Route('/show_type', name: 'show_type')]
    public function show_type(): Response
    {
        $type = $this->typeService->show_type();
        return $this->render('admin/type/all_type.html.twig', ['data' => $type]);
    }

    #[Route('/update_type/{id}', name: 'update_type', methods: ['post'])]
    public function update(Request $request, $id): Response
    {

        $type = $this->typeService->update($request, $id);
        $this->addFlash('message', 'Edit Type Successfully');
        return $this->redirectToRoute('show_type');
    }

    #[Route('/delete_type/{id}', name: 'delete_type')]
    public function delete(int $id): Response
    {
        $this->typeService->delete($id);
        $this->addFlash('message', 'Delete Type Successfully');
        return $this->redirectToRoute('show_type');
    }
}
