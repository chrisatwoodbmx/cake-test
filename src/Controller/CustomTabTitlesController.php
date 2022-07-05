<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CustomTabTitles Controller
 *
 * @property \App\Model\Table\CustomTabTitlesTable $CustomTabTitles
 * @method \App\Model\Entity\CustomTabTitle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomTabTitlesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $customTabTitles = $this->paginate($this->CustomTabTitles);

        $this->set(compact('customTabTitles'));
    }

    /**
     * View method
     *
     * @param string|null $id Custom Tab Title id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customTabTitle = $this->CustomTabTitles->get($id, [
            'contain' => ['Contents'],
        ]);

        $this->set(compact('customTabTitle'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customTabTitle = $this->CustomTabTitles->newEmptyEntity();
        if ($this->request->is('post')) {
            $customTabTitle = $this->CustomTabTitles->patchEntity($customTabTitle, $this->request->getData());
            if ($this->CustomTabTitles->save($customTabTitle)) {
                $this->Flash->success(__('The custom tab title has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The custom tab title could not be saved. Please, try again.'));
        }
        $this->set(compact('customTabTitle'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Custom Tab Title id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customTabTitle = $this->CustomTabTitles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customTabTitle = $this->CustomTabTitles->patchEntity($customTabTitle, $this->request->getData());
            if ($this->CustomTabTitles->save($customTabTitle)) {
                $this->Flash->success(__('The custom tab title has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The custom tab title could not be saved. Please, try again.'));
        }
        $this->set(compact('customTabTitle'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Custom Tab Title id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customTabTitle = $this->CustomTabTitles->get($id);
        if ($this->CustomTabTitles->delete($customTabTitle)) {
            $this->Flash->success(__('The custom tab title has been deleted.'));
        } else {
            $this->Flash->error(__('The custom tab title could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
