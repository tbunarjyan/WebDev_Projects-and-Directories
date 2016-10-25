<?php

require "classes/StudentModel.php";

$studentModel = new StudentModel();

$students = $studentModel->getStudents();

var_dump($students);