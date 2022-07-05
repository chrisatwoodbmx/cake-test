<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MappingOrganisations Controller
 *
 * @method \App\Model\Entity\MappingOrganisation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MappingOrganisationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mappingOrganisations = $this->paginate($this->MappingOrganisations);

        $this->set(compact('mappingOrganisations'));
    }

    /**
     * View method
     *
     * @param string|null $id Mapping Organisation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mappingOrganisation = $this->MappingOrganisations->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mappingOrganisation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mappingOrganisation = $this->MappingOrganisations->newEmptyEntity();
        if ($this->request->is('post')) {
            $mappingOrganisation = $this->MappingOrganisations->patchEntity($mappingOrganisation, $this->request->getData());
            if ($this->MappingOrganisations->save($mappingOrganisation)) {
                $this->Flash->success(__('The mapping organisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping organisation could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingOrganisation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mapping Organisation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mappingOrganisation = $this->MappingOrganisations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mappingOrganisation = $this->MappingOrganisations->patchEntity($mappingOrganisation, $this->request->getData());
            if ($this->MappingOrganisations->save($mappingOrganisation)) {
                $this->Flash->success(__('The mapping organisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping organisation could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingOrganisation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mapping Organisation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mappingOrganisation = $this->MappingOrganisations->get($id);
        if ($this->MappingOrganisations->delete($mappingOrganisation)) {
            $this->Flash->success(__('The mapping organisation has been deleted.'));
        } else {
            $this->Flash->error(__('The mapping organisation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
