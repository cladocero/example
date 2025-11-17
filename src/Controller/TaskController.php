<?php

namespace App\Controller;

use App\Entity\Task;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TaskController extends AbstractController
{
    #[Route('/task', name: 'app_task')]
    public function taskPage(EntityManagerInterface $em): Response
    {
        $task = new Task();
        $task->setTitle("Hacer ejercicio");
        $task->setCreatedAt(new DateTimeImmutable());

        $em->persist($task);
        $em->flush();

        $tasks = $em->getRepository(Task::class)->findAll();
        
        return $this->render('task/list.html.twig', [
            'tasks' => $tasks
        ]);
    }
}
