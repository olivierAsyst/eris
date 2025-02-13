<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $em, UserPasswordHasherInterface $up): Response
    {
        // $user = new User();
        // $user->setEmail('bonixbag@gmail.com')
        //     ->setFullName('Bonheur baguley')
        //     ->setPhoneNumber('1234567890')
        //     ->setPassword($up->hashPassword($user, 'password'))
        //     ->setRoles(['ROLE_USER']);
        //     ;
        //     $em->persist($user);
        //     $em->flush();
            return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
