<?php

class StudentController
{

    public function listAction()
    {
        require ROOT_PATH . "Model/StudentModel.php";

        $studentModel = new StudentModel();

        $students = $studentModel->getStudents();

        require ROOT_PATH . "View/student/list.phtml";
    }

    public function createAction($data)
    {

    }

    public function updateAction($id, $data)
    {

    }

    public function deleteAction($id)
    {

    }
}