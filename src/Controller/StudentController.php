<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Student;


class StudentController extends Controller
{


    /**
     * @Route("/student", name ="student_show")
     */
    public function showAction()
    {
        $student = new Student(1, 'Ken','Kilmartin');

        $template = 'student/show.html.twig';
        $args = [
            'student' => $student
        ];
        return $this->render($template,$args);
    }
}
