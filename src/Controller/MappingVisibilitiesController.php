<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MappingVisibilities Controller
 *
 * @property \App\Model\Table\MappingVisibilitiesTable $MappingVisibilities
 * @method \App\Model\Entity\MappingVisibility[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MappingVisibilitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mappingVisibilities = $this->paginate($this->MappingVisibilities);

        $this->set(compact('mappingVisibilities'));
    }

    /**
     * View method
     *
     * @param string|null $id Mapping Visibility id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mappingVisibility = $this->MappingVisibilities->get($id, [
            'contain' => ['Profiles'],
        ]);

        $this->set(compact('mappingVisibility'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mappingVisibility = $this->MappingVisibilities->newEmptyEntity();
        if ($this->request->is('post')) {
            $mappingVisibility = $this->MappingVisibilities->patchEntity($mappingVisibility, $this->request->getData());
            if ($this->MappingVisibilities->save($mappingVisibility)) {
                $this->Flash->success(__('The mapping visibility has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping visibility could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingVisibility'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mapping Visibility id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mappingVisibility = $this->MappingVisibilities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mappingVisibility = $this->MappingVisibilities->patchEntity($mappingVisibility, $this->request->getData());
            if ($this->MappingVisibilities->save($mappingVisibility)) {
                $this->Flash->success(__('The mapping visibility has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping visibility could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingVisibility'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mapping Visibility id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mappingVisibility = $this->MappingVisibilities->get($id);
        if ($this->MappingVisibilities->delete($mappingVisibility)) {
            $this->Flash->success(__('The mapping visibility has been deleted.'));
        } else {
            $this->Flash->error(__('The mapping visibility could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
