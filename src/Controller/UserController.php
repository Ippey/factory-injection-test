<?php

namespace App\Controller;

use App\Service\QiitaService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /** @var QiitaService  */
    private $qiitaService;

    public function __construct(QiitaService $qiitaService)
    {
        $this->qiitaService = $qiitaService;
    }

    /**
     * @param $userId
     * @return Response
     * @Route("/user/{userId}", name="user")
     */
    public function index($userId)
    {
        $user = $this->qiitaService->getUser($userId);
        return $this->render('user/index.html.twig', ['user' => $user]);
    }
}
