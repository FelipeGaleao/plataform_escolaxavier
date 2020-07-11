<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Subjects Controller
 *
 * @property \App\Model\Table\SubjectsTable $Subjects
 *
 * @method \App\Model\Entity\Subject[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubjectsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->set('title', 'Matérias');
        $this->paginate = [
            'contain' => ['Courses']
        ];
        $subjects = $this->Subjects->find('all');
        $courses = $this->Subjects->Courses->find('all');

        $this->set(compact('subjects', 'courses'));
    }

    /**
     * View method
     *
     * @param string|null $id Subject id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subject = $this->Subjects->get($id, [
            'contain' => ['Courses', 'Enrollments']
        ]);

        $this->set('subject', $subject);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->set('title', 'Matérias');

        $subject = $this->Subjects->newEntity();
        if ($this->request->is('post')) {
            $subject = $this->Subjects->patchEntity($subject, $this->request->getData());
            if ($this->Subjects->save($subject)) {
                $this->Flash->success(__('A matéria foi salva com sucesso..'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A matéria não foi salva. Tente novamente..'));
        }
        $courses = $this->Subjects->Courses->find('all');
        $this->set(compact('subject', 'courses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Subject id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->set('title', 'Matérias');
        $subject = $this->Subjects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subject = $this->Subjects->patchEntity($subject, $this->request->getData());
            if ($this->Subjects->save($subject)) {
                $this->Flash->success(__('A matéria foi salva com sucesso..'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A matéria não foi salva. Tente novamente..'));
        }
        $courses = $this->Subjects->Courses->find('all');
        $this->set(compact('subject', 'courses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Subject id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete', 'get']);
        $subject = $this->Subjects->get($id);
        if ($this->Subjects->delete($subject)) {
            $this->Flash->success(__('A matéria foi deletada com sucesso.'));
        } else {
            $this->Flash->error(__('A matéria não foi deletada. Tente novamente..'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
