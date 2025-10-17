<?php

namespace App\Controller\API;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/user', name: 'api_user_')]
class UserApiController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    
    #[Route('/update', name: 'update', methods: ['POST'])]
    public function apiUpdate(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $authHeader = $request->headers->get('Authorization');

        if (!$authHeader || !str_starts_with($authHeader, 'Bearer ')) {
            return $this->json(['error' => 'Token manquant ou invalide'], 401);
        }

        $token = substr($authHeader, 7); // Remove 'Bearer ' prefix

        // Decode and validate the token (assuming JWT)
        try {
            $decodedToken = JWT::decode($token, new Key('your_secret_key', 'HS256'));
        } catch (Exception $e) {
            return $this->json(['error' => 'Token invalide'], 401);
        }

        $userId = $decodedToken->sub ?? null;
        if (!$userId) {
            return $this->json(['error' => 'Utilisateur non authentifié'], 401);
        }

        /** @var Users $user */
        $user = $em->getRepository(Users::class)->find($userId);

        if (!$user) {
            return $this->json(['error' => 'Utilisateur non trouvé'], 404);
        }

        $data = json_decode($request->getContent(), true);
        if (!$data) {
            return $this->json(['error' => 'Données JSON invalides'], 400);
        }

        if (empty($data['username']) || empty($data['email'])) {
            return $this->json(['error' => 'Champs obligatoires manquants'], 400);
        }

        $user->setUsername($data['username']);
        $user->setEmail($data['email']);
        $user->setAddress($data['address'] ?? null);
        $user->setCountry($data['country'] ?? null);
        $user->setContact($data['contact'] ?? null);

        $em->flush();

        return $this->json([
            'message' => 'Profil mis à jour avec succès',
            'user' => [
                'id_user' => $user->getId(),
                'username' => $user->getUsername(),
                'email' => $user->getEmail(),
                'address' => $user->getAddress(),
                'country' => $user->getCountry(),
                'contact' => $user->getContact(),
                'image' => $user->getImages(),
            ]
        ]);
    }

    #[Route('/{id}', name: 'get_by_id', methods: ['GET'])]
    public function getUserById(int $id, EntityManagerInterface $em): JsonResponse
    {
        /** @var Users $user */
        $user = $em->getRepository(Users::class)->find($id);

        if (!$user) {
            return $this->json(['error' => 'Utilisateur non trouvé'], 404);
        }

        return $this->json([
            'id_user' => $user->getId(),
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'address' => $user->getAddress(),
            'country' => $user->getCountry(),
            'contact' => $user->getContact(),
            'image' => $user->getImages(),
        ]);
    }

}