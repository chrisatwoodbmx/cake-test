<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ResearchGroups Controller
 *
 * @property \App\Model\Table\ResearchGroupsTable $ResearchGroups
 * @method \App\Model\Entity\ResearchGroup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResearchGroupsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentResearchGroups'],
        ];
        $researchGroups = $this->paginate($this->ResearchGroups);

        $this->set(compact('researchGroups'));
    }

    /**
     * View method
     *
     * @param string|null $id Research Group id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $researchGroup = $this->ResearchGroups->get($id, [
            'contain' => ['ParentResearchGroups', 'MappingResearchGroups', 'ChildResearchGroups'],
        ]);

        $this->set(compact('researchGroup'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $researchGroup = $this->ResearchGroups->newEmptyEntity();
        if ($this->request->is('post')) {
            $researchGroup = $this->ResearchGroups->patchEntity($researchGroup, $this->request->getData());
            if ($this->ResearchGroups->save($researchGroup)) {
                $this->Flash->success(__('The research group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The research group could not be saved. Please, try again.'));
        }
        $parentResearchGroups = $this->ResearchGroups->ParentResearchGroups->find('list', ['limit' => 200])->all();
        $this->set(compact('researchGroup', 'parentResearchGroups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Research Group id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $researchGroup = $this->ResearchGroups->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $researchGroup = $this->ResearchGroups->patchEntity($researchGroup, $this->request->getData());
            if ($this->ResearchGroups->save($researchGroup)) {
                $this->Flash->success(__('The research group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The research group could not be saved. Please, try again.'));
        }
        $parentResearchGroups = $this->ResearchGroups->ParentResearchGroups->find('list', ['limit' => 200])->all();
        $this->set(compact('researchGroup', 'parentResearchGroups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Research Group id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $researchGroup = $this->ResearchGroups->get($id);
        if ($this->ResearchGroups->delete($researchGroup)) {
            $this->Flash->success(__('The research group has been deleted.'));
        } else {
            $this->Flash->error(__('The research group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
