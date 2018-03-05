<?php
/**
 * Created by PhpStorm.
 * User: Ken
 * Date: 05/03/2018
 * Time: 10:52
 */

namespace  App\Repository;
use App\Entity\Student;

class StudentRepository
{
    private $students = [];

    public function __construct()
    {
        $id =1;
        $s1 = new Student ($id, 'Matt', 'Smith');
        $this->students[$id] = $s1;

        $id =2;
        $s2 = new Student ($id, 'joelle', 'murphy');
        $this->students[$id] = $s2;

        $id =3;
        $s3 = new Student ($id, 'frances', 'mc guiness');
        $this->students[$id] = $s3;
    }
    public function findAll()
    {
        return $this->students;
    }
    public function find($id)
    {
        if(array_key_exists($id. $this->students)){
            return $this->students[$id];
        }else{
            return null;
        }
    }

}