<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MappingExpertises Controller
 *
 * @method \App\Model\Entity\MappingExpertise[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MappingExpertisesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mappingExpertises = $this->paginate($this->MappingExpertises);

        $this->set(compact('mappingExpertises'));
    }

    /**
     * View method
     *
     * @param string|null $id Mapping Expertise id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mappingExpertise = $this->MappingExpertises->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mappingExpertise'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mappingExpertise = $this->MappingExpertises->newEmptyEntity();
        if ($this->request->is('post')) {
            $mappingExpertise = $this->MappingExpertises->patchEntity($mappingExpertise, $this->request->getData());
            if ($this->MappingExpertises->save($mappingExpertise)) {
                $this->Flash->success(__('The mapping expertise has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping expertise could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingExpertise'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mapping Expertise id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mappingExpertise = $this->MappingExpertises->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mappingExpertise = $this->MappingExpertises->patchEntity($mappingExpertise, $this->request->getData());
            if ($this->MappingExpertises->save($mappingExpertise)) {
                $this->Flash->success(__('The mapping expertise has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping expertise could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingExpertise'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mapping Expertise id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mappingExpertise = $this->MappingExpertises->get($id);
        if ($this->MappingExpertises->delete($mappingExpertise)) {
            $this->Flash->success(__('The mapping expertise has been deleted.'));
        } else {
            $this->Flash->error(__('The mapping expertise could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
