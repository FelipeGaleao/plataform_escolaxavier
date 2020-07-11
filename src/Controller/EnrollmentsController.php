<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Enrollments Controller
 *
 * @property \App\Model\Table\EnrollmentsTable $Enrollments
 *
 * @method \App\Model\Entity\Enrollment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnrollmentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->set('title', 'Matriculas');
        $this->paginate = [
            'contain' => ['Courses', 'Subjects', 'Students']
        ];
        $enrollments = $this->paginate($this->Enrollments);

        $this->set(compact('enrollments'));
    }

    /**
     * View method
     *
     * @param string|null $id Enrollment id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->set('title', 'Matriculas');

        $enrollment = $this->Enrollments->get($id, [
            'contain' => ['Courses', 'Subjects', 'Students', 'Grades']
        ]);

        $this->set('enrollment', $enrollment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->set('title', 'Matriculas');

        $this->loadModel('Courses');
        $this->loadModel('Subjects');
        $this->loadModel('Schools');
        $this->loadModel('Students');

        $enrollment = $this->Enrollments->newEntity();
        if ($this->request->is('post')) {
            $enrollment = $this->Enrollments->patchEntity($enrollment, $this->request->getData());
            if ($this->Enrollments->save($enrollment)) {
                $this->Flash->success(__('A matricula foi salva com sucesso..'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A matricula não foi salva com sucesso.'));
        }
        $courses_select = $this->Courses->find('all');
        $subjects_select = $this->Subjects->find('all');
        $schools_select = $this->Schools->find('all');
        $students_select = $this->Students->find('all');

        $courses = $this->Enrollments->Courses->find('all');
        $subjects = $this->Enrollments->Subjects->find('all');
        $students = $this->Enrollments->Students->find('all');
        $this->set(compact('enrollment', 'courses', 'subjects', 'students', 'courses_select', 'subjects_select', 'schools_select', 'students_select'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enrollment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->set('title', 'Matriculas');


        $this->loadModel('Courses');
        $this->loadModel('Subjects');
        $this->loadModel('Schools');
        $this->loadModel('Students');

        $enrollment = $this->Enrollments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enrollment = $this->Enrollments->patchEntity($enrollment, $this->request->getData());
            if ($this->Enrollments->save($enrollment)) {
                $this->Flash->success(__('A matricula foi salva com sucesso..'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A matricula não foi salva com sucesso.'));
        }
        $courses_select = $this->Courses->find('all');
        $subjects_select = $this->Subjects->find('all');
        $schools_select = $this->Schools->find('all');
        $students_select = $this->Students->find('all');


        $courses = $this->Enrollments->Courses->find('all');
        $subjects = $this->Enrollments->Subjects->find('all');
        $students = $this->Enrollments->Students->find('all');
        $this->set(compact('enrollment', 'courses', 'subjects', 'students', 'courses_select', 'subjects_select', 'schools_select', 'students_select'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enrollment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete', 'get']);
        $enrollment = $this->Enrollments->get($id);
        if ($this->Enrollments->delete($enrollment)) {
            $this->Flash->success(__('A matricula foi deletada com sucesso.'));
        } else {
            $this->Flash->error(__('A matricula não pode ser deletada, tente novamente..'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
