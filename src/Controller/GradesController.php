<?php
namespace App\Controller;

use App\Controller\AppController;

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

        $grade = $this->Grades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
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
