<?php

namespace App\Controller;

use App\Entity\User;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class RegistrationController extends AbstractController
{
//    #[Route('/api/users', name: 'app_registration', methods: ['POST'])]
//    public function register(
//        Request $request,
//        UserPasswordHasherInterface $userPasswordHasher,
//        UserAuthenticatorInterface $userAuthenticator,
//        EntityManagerInterface $entityManager): Response
//    {
//        $data = json_decode($request->getContent(), true);
//
//        if (!isset($data['firstName']) || !isset($data['lastName']) || !isset($data['username'])
//            || !isset($data['email']) || !isset($data['password']) || !isset($data['plainPassword']))
//        {
//            return new Response('Tous les champs doivent être remplis');
//        }
//        if ($data['password'] !== $data['plainPassword']){
//            return new Response('Vos 2 saisies ne sont pas identiques');
//        } else {
//            $user = new User();
//            $user->setFirstName($data['firstName']);
//            $user->setLastName($data['lastName']);
//            $user->setUsername($data['username']);
//            $birth = $data['birthDate'];
//            $user->setBirthDate(new DateTime($birth));
//            $user->setEmail($data['email']);
//            $user->setPassword(
//                $userPasswordHasher->hashPassword(
//                    $user,
//                    $data['plainPassword'])
//                );
//
//            $entityManager->persist($user);
//            $entityManager->flush();
//
//            return new Response(json_encode('Utilisateur créé'));
//
//        }
//    }
}
