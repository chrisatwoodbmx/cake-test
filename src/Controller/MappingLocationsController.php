<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MappingLocations Controller
 *
 * @method \App\Model\Entity\MappingLocation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MappingLocationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mappingLocations = $this->paginate($this->MappingLocations);

        $this->set(compact('mappingLocations'));
    }

    /**
     * View method
     *
     * @param string|null $id Mapping Location id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mappingLocation = $this->MappingLocations->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mappingLocation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mappingLocation = $this->MappingLocations->newEmptyEntity();
        if ($this->request->is('post')) {
            $mappingLocation = $this->MappingLocations->patchEntity($mappingLocation, $this->request->getData());
            if ($this->MappingLocations->save($mappingLocation)) {
                $this->Flash->success(__('The mapping location has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping location could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingLocation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mapping Location id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mappingLocation = $this->MappingLocations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mappingLocation = $this->MappingLocations->patchEntity($mappingLocation, $this->request->getData());
            if ($this->MappingLocations->save($mappingLocation)) {
                $this->Flash->success(__('The mapping location has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping location could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingLocation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mapping Location id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mappingLocation = $this->MappingLocations->get($id);
        if ($this->MappingLocations->delete($mappingLocation)) {
            $this->Flash->success(__('The mapping location has been deleted.'));
        } else {
            $this->Flash->error(__('The mapping location could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
