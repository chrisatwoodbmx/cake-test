<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MappingJobTitles Controller
 *
 * @method \App\Model\Entity\MappingJobTitle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MappingJobTitlesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mappingJobTitles = $this->paginate($this->MappingJobTitles);

        $this->set(compact('mappingJobTitles'));
    }

    /**
     * View method
     *
     * @param string|null $id Mapping Job Title id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mappingJobTitle = $this->MappingJobTitles->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mappingJobTitle'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mappingJobTitle = $this->MappingJobTitles->newEmptyEntity();
        if ($this->request->is('post')) {
            $mappingJobTitle = $this->MappingJobTitles->patchEntity($mappingJobTitle, $this->request->getData());
            if ($this->MappingJobTitles->save($mappingJobTitle)) {
                $this->Flash->success(__('The mapping job title has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping job title could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingJobTitle'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mapping Job Title id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mappingJobTitle = $this->MappingJobTitles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mappingJobTitle = $this->MappingJobTitles->patchEntity($mappingJobTitle, $this->request->getData());
            if ($this->MappingJobTitles->save($mappingJobTitle)) {
                $this->Flash->success(__('The mapping job title has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping job title could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingJobTitle'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mapping Job Title id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mappingJobTitle = $this->MappingJobTitles->get($id);
        if ($this->MappingJobTitles->delete($mappingJobTitle)) {
            $this->Flash->success(__('The mapping job title has been deleted.'));
        } else {
            $this->Flash->error(__('The mapping job title could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
