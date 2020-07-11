<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Reports Controller
 *
 * @property \App\Model\Table\ReportsTable $Reports
 *
 * @method \App\Model\Entity\Report[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReportsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->set('title', 'Boletins');
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
    }

    public function add()
    {
        $report = $this->Reports->newEntity();
        if ($this->request->is('get')) {
            $report['student_id'] = $_GET['student_id'];
            $report['subject_id'] = $_GET['subject_id'];
            $report['course_id'] = $_GET['course_id'];
            $report['average_final'] = $_GET['average_final'];
            $report['status'] = $_GET['status'];
            $report = $this->Reports->patchEntity($report, $this->request->getData());
            if ($this->Reports->save($report)) {
                $this->Flash->success(__('The report has been saved.'));
            }
            $this->Flash->error(__('The report could not be saved. Please, try again.'));
        }
        $courses = $this->Reports->Courses->find('list', ['limit' => 200]);
        $subjects = $this->Reports->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('report', 'courses', 'subjects'));
    }
}

