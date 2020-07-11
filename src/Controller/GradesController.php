<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Grades Controller
 *
 * @property \App\Model\Table\GradesTable $Grades
 *
 * @method \App\Model\Entity\Grade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GradesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->set('title', 'Avaliações');
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
    }
    public function index()
    {
        $this->set('title', 'Avaliações');
        $this->paginate = [
            'contain' => ['Enrollments']
        ];
        $grades = $this->paginate($this->Grades);

        $this->set(compact('grades'));
    }

    /**
     * View method
     *
     * @param string|null $id Grade id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->set('title', 'Avaliações');

        $grade = $this->Grades->get($id, [
            'contain' => ['Enrollments']
        ]);

        $this->set('grade', $grade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->set('title', 'Avaliações');

        $grade = $this->Grades->newEntity();
        if ($this->request->is('post')) {
            $grade = $this->Grades->patchEntity($grade, $this->request->getData());
            if ($this->Grades->save($grade)) {
                $this->Flash->success(__('A avaliação foi salva com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A avaliação não pode ser salva. Tente novamente..'));
        }
        $enrollments = $this->Grades->Enrollments->find('all');
        $this->set(compact('grade', 'enrollments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->set('title', 'Avaliações');
    $this->loadModel('Reports');
     $this->loadModel('Enrollments');
        $grade = $this->Grades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grade = $this->Grades->patchEntity($grade, $this->request->getData());
            if ($this->Grades->save($grade)) {
                $this->Flash->success(__('A avaliação foi salva com sucesso, verifique o diário de classe.'));
                $enrollments = $this->Enrollments->find('all')->Where(['id' => $grade->enrollment_id])->limit('1')->toArray();
                foreach($enrollments as $enrollment){
                    $student_id =  $enrollment->student_id;
                    $subject_id =  $enrollment->subject_id;
                    $reports = $this->Reports->find('all')->Where(['student_id' => $student_id])->Where(['subject_id' => $subject_id])->toArray();
                    foreach($reports as $report){
                        $report_id = $report->id;
                        $this->Reports->deleteAll(['id' => $report_id]);
                        $this->Flash->success(__('A avaliação foi alterada com sucesso, altere o diário de classe para finalizar.'));

                    }
                }
            }
            $this->Flash->error(__('A avaliação não pode ser salva. Tente novamente..'));
        }
        $enrollments = $this->Grades->Enrollments->find('all');
        $this->set(compact('grade', 'enrollments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete', 'get']);
        $grade = $this->Grades->get($id);
        if ($this->Grades->delete($grade)) {
            $this->Flash->success(__('A avaliação foi deletada com sucesso.'));
        } else {
            $this->Flash->error(__('A avaliação não pode ser deletada, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
