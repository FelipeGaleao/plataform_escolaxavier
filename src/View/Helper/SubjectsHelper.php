<?php


/* src/View/Helper/LinkHelper.php */
namespace App\View\Helper;

use Cake\I18n\Date;
use Cake\ORM\TableRegistry;
use Cake\View\Helper;

class SubjectsHelper extends Helper
{

    /* Busca o nome do curso pelo Id */
    public function getNameOfCoursebyId($id)
    {
        $courses = TableRegistry::getTableLocator()->get('Courses');
        $courses = $courses->find('all')->where(['id' => $id]);
        foreach($courses as $course){
            $course = $course->name;
            echo $course;
        }
    }

    /* Busca o nome da matéria por Id */
    public function getNameOfSubjectById($id)
    {
        $subjects = TableRegistry::getTableLocator()->get('Subjects');
        $subjects = $subjects->find('all')->where(['id' => $id]);
        foreach($subjects as $subject){
            $subject = $subject->name;
            echo $subject;
        }
    }
    /* Busca todas as matriculas por determinado curso */
    public function getAllEnrollmentsByCourseId($id)
    {
        $subjects = TableRegistry::getTableLocator()->get('Enrollments');
        $subjects = $subjects->find('all', array(
            'contains' => array('Students'),
            'contain' => array('Grades'),
        ))->where(['course_id' => $id])->toArray();
        return $subjects;
    }

    public function getAllGradesByEnrollmentId($id)
    {
        $subjects = TableRegistry::getTableLocator()->get('Grades');
        $subjects = $subjects->find('all')->where(['enrollment_id' => $id])->toArray();
        return $subjects;
    }

    /* Retorna todos os cursos */
    public function getAllCourses()
    {
        $courses = TableRegistry::getTableLocator()->get('Courses');
        $courses = $courses->find('all')->distinct('id')->toArray();
        return $courses;
    }

/* Obtém todos os diários por curso */
    public function getAllDailybooksByCourse($id)
    {
        $dailybooks = TableRegistry::getTableLocator()->get('Dailybooks');
        $dailybooks = $dailybooks->find('all')->where(['course_id' => $id])->toArray();
        return $dailybooks;
    }
    /* Obtém todos os boletins por curso */
    public function getReportByCourse($id)
    {
        $subjects = TableRegistry::getTableLocator()->get('Reports');
        $subjects = $subjects->find('all')->where(['course_id' => $id])->toArray();
        return $subjects;
    }

    /* Obtem todos os estudantes por curso */
    public function getStudentsByCourse($id)
    {
        $subjects = TableRegistry::getTableLocator()->get('Reports');
        $subjects = $subjects->find('all')->where(['course_id' => $id])->distinct('student_id')->groupBy('student_id')->toArray();
        return $subjects;
    }

    /* Obtem todos os boletins por estudante e matéria */
    public function getReportByStudentSubjectId($student_id, $subject_id)
    {
        $subjects = TableRegistry::getTableLocator()->get('Reports');
        $subjects = $subjects->find('all')->where(['subject_id' => $subject_id])->where(['student_id' => $student_id])->toArray();
        return $subjects;
    }

    /*Obtem todos os boletins por estudante e curso */
    public function getReportByStudentCourseId($student_id, $course_id)
    {
        $subjects = TableRegistry::getTableLocator()->get('Reports');
        $subjects = $subjects->find('all')->where(['course_id' => $course_id])->where(['student_id' => $student_id])->toArray();
        return $subjects;
    }

    /*Obtem a média pela matricula do curso */
    public function getAverageByEnrollmentById($id)
    {
        $subjects = TableRegistry::getTableLocator()->get('Enrollments');
        $subjects = $subjects->find('all', array(
            'contains' => array('Students'),
            'contain' => array('Grades'),
        ))->where(['id' => $id])->toArray();
        foreach($subjects as $subject){
            $averageFinal_sum = 0;
            $qty_grades = 0;
            foreach($subject['grades'] as $grade){
                $qty_grades = $qty_grades+1;
                $averageFinal_sum = $averageFinal_sum+$grade->grade_value;
            }
           return($averageFinal = $averageFinal_sum/$qty_grades);
        }
    }
    /* Consegue a situação da nota, se aprovado ou reprovado, pelo código da matricula */
    public function getStatusApprovalByEnrollment($id)
    {
        $subjects = TableRegistry::getTableLocator()->get('Enrollments');
        $subjects = $subjects->find('all', array(
            'contains' => array('Students'),
            'contain' => array('Grades'),
        ))->where(['id' => $id])->toArray();
        foreach($subjects as $subject){
            $averageFinal_sum = 0;
            $qty_grades = 0;
            foreach($subject['grades'] as $grade){
                $qty_grades = $qty_grades+1;
                $averageFinal_sum = $averageFinal_sum+$grade->grade_value;
            }
            $averageFinal = $averageFinal_sum/$qty_grades;
            if($averageFinal >=      7){
                return('Aprovado');
            }else{
                return('Reprovado');
            }
        }
    }



    public function getNameOfStudentById($id)
    {
        $students = TableRegistry::getTableLocator()->get('Students');
        $students = $students->find('all')->where(['id' => $id]);
        foreach($students as $student){
            $student = $student->name;
            echo $student;
        }
    }
    public function getNameOfSchoolbyId($id)
    {
        $schools = TableRegistry::getTableLocator()->get('Schools');
        $schools = $schools->find('all')->where(['id' => $id]);
        foreach($schools as $school){
            $school = $school->name;
            echo $school;
        }
    }
}

?>
