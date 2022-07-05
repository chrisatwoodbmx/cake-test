<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * HistoryAudits Controller
 *
 * @property \App\Model\Table\HistoryAuditsTable $HistoryAudits
 * @method \App\Model\Entity\HistoryAudit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HistoryAuditsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Records', 'Profiles'],
        ];
        $historyAudits = $this->paginate($this->HistoryAudits);

        $this->set(compact('historyAudits'));
    }

    /**
     * View method
     *
     * @param string|null $id History Audit id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $historyAudit = $this->HistoryAudits->get($id, [
            'contain' => ['Records', 'Profiles'],
        ]);

        $this->set(compact('historyAudit'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $historyAudit = $this->HistoryAudits->newEmptyEntity();
        if ($this->request->is('post')) {
            $historyAudit = $this->HistoryAudits->patchEntity($historyAudit, $this->request->getData());
            if ($this->HistoryAudits->save($historyAudit)) {
                $this->Flash->success(__('The history audit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The history audit could not be saved. Please, try again.'));
        }
        $records = $this->HistoryAudits->Records->find('list', ['limit' => 200])->all();
        $profiles = $this->HistoryAudits->Profiles->find('list', ['limit' => 200])->all();
        $this->set(compact('historyAudit', 'records', 'profiles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id History Audit id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $historyAudit = $this->HistoryAudits->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $historyAudit = $this->HistoryAudits->patchEntity($historyAudit, $this->request->getData());
            if ($this->HistoryAudits->save($historyAudit)) {
                $this->Flash->success(__('The history audit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The history audit could not be saved. Please, try again.'));
        }
        $records = $this->HistoryAudits->Records->find('list', ['limit' => 200])->all();
        $profiles = $this->HistoryAudits->Profiles->find('list', ['limit' => 200])->all();
        $this->set(compact('historyAudit', 'records', 'profiles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id History Audit id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $historyAudit = $this->HistoryAudits->get($id);
        if ($this->HistoryAudits->delete($historyAudit)) {
            $this->Flash->success(__('The history audit has been deleted.'));
        } else {
            $this->Flash->error(__('The history audit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
