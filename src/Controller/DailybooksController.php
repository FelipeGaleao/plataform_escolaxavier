<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Dailybooks Controller
 *
 * @property \App\Model\Table\DailybooksTable $Dailybooks
 *
 * @method \App\Model\Entity\Dailybook[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DailybooksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->set('title', 'Diários de classe');
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
    }
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses', 'Subjects']
        ];
        $subjects =  $this->loadModel('Subjects');
        $courses = $this->loadModel('Courses');
        $courses = $this->Courses->find('all');
        $subjects = $this->Subjects->find('all');
        $dailybooks = $this->paginate($this->Dailybooks);
        $this->set(compact('dailybooks', 'subjects', 'courses'));
    }

    /**
     * View method
     *
     * @param string|null $id Dailybook id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dailybook = $this->Dailybooks->get($id, [
            'contain' => ['Courses', 'Subjects']
        ]);

        $this->set('dailybook', $dailybook);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dailybook = $this->Dailybooks->newEntity();
        if ($this->request->is('post')) {
            $dailybook = $this->Dailybooks->patchEntity($dailybook, $this->request->getData());
            if ($this->Dailybooks->save($dailybook)) {
                $this->Flash->success(__('The dailybook has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dailybook could not be saved. Please, try again.'));
        }
        $courses = $this->Dailybooks->Courses->find('list', ['limit' => 200]);
        $subjects = $this->Dailybooks->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('dailybook', 'courses', 'subjects'));
    }

    public function add_post()
    {
        $dailybook = $this->Dailybooks->newEntity();
        if ($this->request->is('get')) {
            $dailybook = $this->Dailybooks->patchEntity($dailybook, $this->request->getData());
            if ($this->Dailybooks->save($dailybook)) {
                $this->Flash->success(__('The dailybook has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dailybook could not be saved. Please, try again.'));
        }
        $courses = $this->Dailybooks->Courses->find('list', ['limit' => 200]);
        $subjects = $this->Dailybooks->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('dailybook', 'courses', 'subjects'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Dailybook id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dailybook = $this->Dailybooks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dailybook = $this->Dailybooks->patchEntity($dailybook, $this->request->getData());
            if ($this->Dailybooks->save($dailybook)) {
                $this->Flash->success(__('The dailybook has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dailybook could not be saved. Please, try again.'));
        }
        $subjects =  $this->loadModel('Subjects');
        $courses = $this->loadModel('Courses');
        $enrollments = $this->loadModel('Enrollments');
        $courses = $this->Courses->find('all');
        $subjects = $this->Subjects->find('all');
        $enrollments = $this->Enrollments->find('all');

        $this->set(compact('dailybook', 'courses', 'subjects', 'enrollments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dailybook id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dailybook = $this->Dailybooks->get($id);
        if ($this->Dailybooks->delete($dailybook)) {
            $this->Flash->success(__('The dailybook has been deleted.'));
        } else {
            $this->Flash->error(__('The dailybook could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
