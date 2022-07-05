<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PostNominals Controller
 *
 * @property \App\Model\Table\PostNominalsTable $PostNominals
 * @method \App\Model\Entity\PostNominal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostNominalsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $postNominals = $this->paginate($this->PostNominals);

        $this->set(compact('postNominals'));
    }

    /**
     * View method
     *
     * @param string|null $id Post Nominal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postNominal = $this->PostNominals->get($id, [
            'contain' => ['Profiles'],
        ]);

        $this->set(compact('postNominal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postNominal = $this->PostNominals->newEmptyEntity();
        if ($this->request->is('post')) {
            $postNominal = $this->PostNominals->patchEntity($postNominal, $this->request->getData());
            if ($this->PostNominals->save($postNominal)) {
                $this->Flash->success(__('The post nominal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post nominal could not be saved. Please, try again.'));
        }
        $this->set(compact('postNominal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Post Nominal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postNominal = $this->PostNominals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postNominal = $this->PostNominals->patchEntity($postNominal, $this->request->getData());
            if ($this->PostNominals->save($postNominal)) {
                $this->Flash->success(__('The post nominal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post nominal could not be saved. Please, try again.'));
        }
        $this->set(compact('postNominal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Post Nominal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postNominal = $this->PostNominals->get($id);
        if ($this->PostNominals->delete($postNominal)) {
            $this->Flash->success(__('The post nominal has been deleted.'));
        } else {
            $this->Flash->error(__('The post nominal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
