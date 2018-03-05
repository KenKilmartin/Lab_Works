<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Student;
use App\Repository\StudentRepository;


class StudentController extends Controller
{


    /**
     * @Route("/student/{$id}", name ="student_show")
     */
    public function showAction($id)
    {
        $student = new Student();

        $template = 'student/show.html.twig';
        $args = [
            'student' => $student
        ];
        return $this->render($template,$args);
    }
    /**
     * @Route("/student", name="student_list")
     */
    public function listAction()
    {
        $studentRepository = new StudentRepository();
        $students = $studentRepository->findAll();

        $template = 'student/list.html.twig';

        $args = [
            'students'=> $students
        ];
        return $this->render($template, $args);
    }
}
