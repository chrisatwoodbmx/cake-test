<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MappingTeams Controller
 *
 * @method \App\Model\Entity\MappingTeam[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MappingTeamsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mappingTeams = $this->paginate($this->MappingTeams);

        $this->set(compact('mappingTeams'));
    }

    /**
     * View method
     *
     * @param string|null $id Mapping Team id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mappingTeam = $this->MappingTeams->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mappingTeam'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mappingTeam = $this->MappingTeams->newEmptyEntity();
        if ($this->request->is('post')) {
            $mappingTeam = $this->MappingTeams->patchEntity($mappingTeam, $this->request->getData());
            if ($this->MappingTeams->save($mappingTeam)) {
                $this->Flash->success(__('The mapping team has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping team could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingTeam'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mapping Team id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mappingTeam = $this->MappingTeams->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mappingTeam = $this->MappingTeams->patchEntity($mappingTeam, $this->request->getData());
            if ($this->MappingTeams->save($mappingTeam)) {
                $this->Flash->success(__('The mapping team has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping team could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingTeam'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mapping Team id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mappingTeam = $this->MappingTeams->get($id);
        if ($this->MappingTeams->delete($mappingTeam)) {
            $this->Flash->success(__('The mapping team has been deleted.'));
        } else {
            $this->Flash->error(__('The mapping team could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
