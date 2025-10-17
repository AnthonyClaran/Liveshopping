<?php

namespace App\Controller\API;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/category', name: 'api_category_')]
class CategoryApiController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('', name: 'list', methods: ['GET'])]
    public function list(CategoryRepository $categoryRepository): JsonResponse
    {
        $categories = $categoryRepository->findAll();
        $data = array_map(fn(Category $category) => [
            'id' => $category->getId(),
            'name' => $category->getNameCategory(),
            'description' => $category->getDescription(),
        ], $categories);

        return $this->json($data);
    }

    #[Route('', name: 'create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $category = new Category();
        $category->setNameCategory($data['name'] ?? '')
                 ->setDescription($data['description'] ?? null);

        $this->entityManager->persist($category);
        $this->entityManager->flush();

        return $this->json(['message' => 'Category created', 'id' => $category->getId()], 201);
    }

    #[Route('/{id}', name: 'read', methods: ['GET'])]
    public function read(Category $category): JsonResponse
    {
        return $this->json([
            'id' => $category->getId(),
            'name' => $category->getNameCategory(),
            'description' => $category->getDescription(),
        ]);
    }

    #[Route('/{id}', name: 'update', methods: ['PUT'])]
    public function update(Request $request, Category $category): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $category->setNameCategory($data['name'] ?? $category->getNameCategory())
                 ->setDescription($data['description'] ?? $category->getDescription());

        $this->entityManager->flush();

        return $this->json(['message' => 'Category updated']);
    }

    #[Route('/{id}', name: 'delete', methods: ['DELETE'])]
    public function delete(Category $category): JsonResponse
    {
        $this->entityManager->remove($category);
        $this->entityManager->flush();

        return $this->json(['message' => 'Category deleted']);
    }
}