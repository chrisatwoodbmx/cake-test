<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MappingSpokenLanguages Controller
 *
 * @method \App\Model\Entity\MappingSpokenLanguage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MappingSpokenLanguagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mappingSpokenLanguages = $this->paginate($this->MappingSpokenLanguages);

        $this->set(compact('mappingSpokenLanguages'));
    }

    /**
     * View method
     *
     * @param string|null $id Mapping Spoken Language id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mappingSpokenLanguage = $this->MappingSpokenLanguages->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mappingSpokenLanguage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mappingSpokenLanguage = $this->MappingSpokenLanguages->newEmptyEntity();
        if ($this->request->is('post')) {
            $mappingSpokenLanguage = $this->MappingSpokenLanguages->patchEntity($mappingSpokenLanguage, $this->request->getData());
            if ($this->MappingSpokenLanguages->save($mappingSpokenLanguage)) {
                $this->Flash->success(__('The mapping spoken language has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping spoken language could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingSpokenLanguage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mapping Spoken Language id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mappingSpokenLanguage = $this->MappingSpokenLanguages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mappingSpokenLanguage = $this->MappingSpokenLanguages->patchEntity($mappingSpokenLanguage, $this->request->getData());
            if ($this->MappingSpokenLanguages->save($mappingSpokenLanguage)) {
                $this->Flash->success(__('The mapping spoken language has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping spoken language could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingSpokenLanguage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mapping Spoken Language id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mappingSpokenLanguage = $this->MappingSpokenLanguages->get($id);
        if ($this->MappingSpokenLanguages->delete($mappingSpokenLanguage)) {
            $this->Flash->success(__('The mapping spoken language has been deleted.'));
        } else {
            $this->Flash->error(__('The mapping spoken language could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
