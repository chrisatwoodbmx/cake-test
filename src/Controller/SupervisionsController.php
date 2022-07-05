<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Supervisions Controller
 *
 * @property \App\Model\Table\SupervisionsTable $Supervisions
 * @method \App\Model\Entity\Supervision[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupervisionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $supervisions = $this->paginate($this->Supervisions);

        $this->set(compact('supervisions'));
    }

    /**
     * View method
     *
     * @param string|null $id Supervision id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $supervision = $this->Supervisions->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('supervision'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $supervision = $this->Supervisions->newEmptyEntity();
        if ($this->request->is('post')) {
            $supervision = $this->Supervisions->patchEntity($supervision, $this->request->getData());
            if ($this->Supervisions->save($supervision)) {
                $this->Flash->success(__('The supervision has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supervision could not be saved. Please, try again.'));
        }
        $this->set(compact('supervision'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Supervision id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $supervision = $this->Supervisions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supervision = $this->Supervisions->patchEntity($supervision, $this->request->getData());
            if ($this->Supervisions->save($supervision)) {
                $this->Flash->success(__('The supervision has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supervision could not be saved. Please, try again.'));
        }
        $this->set(compact('supervision'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Supervision id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $supervision = $this->Supervisions->get($id);
        if ($this->Supervisions->delete($supervision)) {
            $this->Flash->success(__('The supervision has been deleted.'));
        } else {
            $this->Flash->error(__('The supervision could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
