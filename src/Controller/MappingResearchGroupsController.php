<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MappingResearchGroups Controller
 *
 * @method \App\Model\Entity\MappingResearchGroup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MappingResearchGroupsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mappingResearchGroups = $this->paginate($this->MappingResearchGroups);

        $this->set(compact('mappingResearchGroups'));
    }

    /**
     * View method
     *
     * @param string|null $id Mapping Research Group id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mappingResearchGroup = $this->MappingResearchGroups->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mappingResearchGroup'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mappingResearchGroup = $this->MappingResearchGroups->newEmptyEntity();
        if ($this->request->is('post')) {
            $mappingResearchGroup = $this->MappingResearchGroups->patchEntity($mappingResearchGroup, $this->request->getData());
            if ($this->MappingResearchGroups->save($mappingResearchGroup)) {
                $this->Flash->success(__('The mapping research group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping research group could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingResearchGroup'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mapping Research Group id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mappingResearchGroup = $this->MappingResearchGroups->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mappingResearchGroup = $this->MappingResearchGroups->patchEntity($mappingResearchGroup, $this->request->getData());
            if ($this->MappingResearchGroups->save($mappingResearchGroup)) {
                $this->Flash->success(__('The mapping research group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping research group could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingResearchGroup'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mapping Research Group id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mappingResearchGroup = $this->MappingResearchGroups->get($id);
        if ($this->MappingResearchGroups->delete($mappingResearchGroup)) {
            $this->Flash->success(__('The mapping research group has been deleted.'));
        } else {
            $this->Flash->error(__('The mapping research group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
