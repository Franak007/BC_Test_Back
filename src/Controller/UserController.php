<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

//#[Route('/api/user')]
class UserController extends AbstractController
{
    public function __construct(
        private Security $security,
    )
    {
    }

    public function index(UserRepository $userRepository): Response
    {
        $user = $userRepository->findAll();
        return $this->json($user, 200, [], ['groups' => 'user:read']);
    }

    #[Route('/api/user/whoami', name: 'user_whoami', methods: ['GET'])]

    public function whoAmI():JsonResponse
    {
        $user = $this->security->getUser();

        return $this->json($user);

    }
}
