<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MappingActivitiesTypes Controller
 *
 * @method \App\Model\Entity\MappingActivitiesType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MappingActivitiesTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mappingActivitiesTypes = $this->paginate($this->MappingActivitiesTypes);

        $this->set(compact('mappingActivitiesTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Mapping Activities Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mappingActivitiesType = $this->MappingActivitiesTypes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mappingActivitiesType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mappingActivitiesType = $this->MappingActivitiesTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $mappingActivitiesType = $this->MappingActivitiesTypes->patchEntity($mappingActivitiesType, $this->request->getData());
            if ($this->MappingActivitiesTypes->save($mappingActivitiesType)) {
                $this->Flash->success(__('The mapping activities type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping activities type could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingActivitiesType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mapping Activities Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mappingActivitiesType = $this->MappingActivitiesTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mappingActivitiesType = $this->MappingActivitiesTypes->patchEntity($mappingActivitiesType, $this->request->getData());
            if ($this->MappingActivitiesTypes->save($mappingActivitiesType)) {
                $this->Flash->success(__('The mapping activities type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping activities type could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingActivitiesType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mapping Activities Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mappingActivitiesType = $this->MappingActivitiesTypes->get($id);
        if ($this->MappingActivitiesTypes->delete($mappingActivitiesType)) {
            $this->Flash->success(__('The mapping activities type has been deleted.'));
        } else {
            $this->Flash->error(__('The mapping activities type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
