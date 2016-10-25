<?php

require ROOT_PATH . "Core/DbConnection.php";
require ROOT_PATH . "Model/Student.php";

class StudentModel
{
    private $dbTable;

    private $dbConnection;

    /**
     * StudentModel constructor.
     */
    public function __construct()
    {
        $this->dbTable = "students";
        $this->dbConnection = new DbConnection();
    }

    public function getStudents()
    {
        $statement = $this->dbConnection->getConnection()->prepare("SELECT id, first_name, last_name FROM " . $this->dbTable);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);

        $result = $statement->fetchAll();

        $students = [];
        foreach ($result as $item) {
            $student = new Student();
            $student->setId($item['id']);
            $student->setFirstName($item['first_name']);
            $student->setLastName($item['last_name']);

            $students[] = $student;
        }

        return $students;
    }

    public function deleteStudent($studentId)
    {

    }

    public function addStudent(Student $student)
    {

    }
}