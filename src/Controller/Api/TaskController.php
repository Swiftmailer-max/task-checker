<?php
namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    #[Route('/check', methods: ['POST'])]
    public function check(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $correctAnswer = "42";
        $userAnswer = $data['answer'] ?? '';

        $isCorrect = $userAnswer === $correctAnswer;

        return new JsonResponse([
            'correct' => $isCorrect,
            'feedback' => $isCorrect 
                ? 'Dobrze! Świetna robota.'
                : 'Niepoprawna odpowiedź. Spróbuj jeszcze raz.'
        ]);
    }
    
    #[Route('/task', name: 'app_task_form')]
    public function form(Request $request): Response
    {
        return $this->render('task/form.html.twig');
    }
}
