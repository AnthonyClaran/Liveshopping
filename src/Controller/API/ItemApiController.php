<?php

namespace App\Controller\API;

use App\Entity\Item;
use App\Repository\ItemRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/item', name: 'api_item_')]
class ItemApiController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('', name: 'list', methods: ['GET'])]
    public function list(ItemRepository $itemRepository): JsonResponse
    {
        $items = $itemRepository->findAll();
        $data = array_map(fn(Item $item) => [
            'id' => $item->getId(),
            'name' => $item->getNameItem(),
            'description' => $item->getDescription(),
            'price' => $item->getPriceItems()->last() ? $item->getPriceItems()->last()->getPrice() : null,
            'images' => $item->getImages(),
            'category' => $item->getCategory()->getNameCategory(),
            'seller' => $item->getSeller()->getId(),
        ], $items);

        return $this->json($data);
    }

    #[Route('', name: 'create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $item = new Item();
        $item->setNameItem($data['name'] ?? '')
             ->setDescription($data['description'] ?? null)
             ->setImages($data['images'] ?? null);

        // Assuming category and seller are passed as IDs
        $category = $this->entityManager->getRepository(Category::class)->find($data['category_id']);
        $seller = $this->entityManager->getRepository(Users::class)->find($data['seller_id']);

        if (!$category || !$seller) {
            return $this->json(['error' => 'Invalid category or seller ID'], 400);
        }

        $item->setCategory($category)
             ->setSeller($seller);

        $this->entityManager->persist($item);
        $this->entityManager->flush();

        return $this->json(['message' => 'Item created', 'id' => $item->getId()], 201);
    }

    #[Route('/{id}', name: 'read', methods: ['GET'])]
    public function read(Item $item): JsonResponse
    {
        return $this->json([
            'id' => $item->getId(),
            'name' => $item->getNameItem(),
            'description' => $item->getDescription(),
            'images' => $item->getImages(),
            'category' => $item->getCategory()->getNameCategory(),
            'seller' => $item->getSeller()->getId(),
        ]);
    }

    #[Route('/{id}', name: 'update', methods: ['PUT'])]
    public function update(Request $request, Item $item): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $item->setNameItem($data['name'] ?? $item->getNameItem())
             ->setDescription($data['description'] ?? $item->getDescription())
             ->setImages($data['images'] ?? $item->getImages());

        if (isset($data['category_id'])) {
            $category = $this->entityManager->getRepository(Category::class)->find($data['category_id']);
            if (!$category) {
                return $this->json(['error' => 'Invalid category ID'], 400);
            }
            $item->setCategory($category);
        }

        if (isset($data['seller_id'])) {
            $seller = $this->entityManager->getRepository(Users::class)->find($data['seller_id']);
            if (!$seller) {
                return $this->json(['error' => 'Invalid seller ID'], 400);
            }
            $item->setSeller($seller);
        }

        $this->entityManager->flush();

        return $this->json(['message' => 'Item updated']);
    }

    #[Route('/{id}', name: 'delete', methods: ['DELETE'])]
    public function delete(Item $item): JsonResponse
    {
        $this->entityManager->remove($item);
        $this->entityManager->flush();

        return $this->json(['message' => 'Item deleted']);
    }

    #[Route('/category/{categoryId}', name: 'get_by_category', methods: ['GET'])]
    public function getByCategory(int $categoryId, ItemRepository $itemRepository): JsonResponse
    {
        $items = $itemRepository->findBy(['category' => $categoryId]);

        if (!$items) {
            return $this->json(['error' => 'No items found for this category'], 404);
        }

        $data = array_map(fn(Item $item) => [
            'id' => $item->getId(),
            'name' => $item->getNameItem(),
            'description' => $item->getDescription(),
            'images' => $item->getImages(),
            'category' => $item->getCategory()->getNameCategory(),
            'seller' => $item->getSeller()->getId(),
        ], $items);

        return $this->json($data);
    }
}