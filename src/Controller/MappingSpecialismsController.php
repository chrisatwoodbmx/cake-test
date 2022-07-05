<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MappingSpecialisms Controller
 *
 * @method \App\Model\Entity\MappingSpecialism[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MappingSpecialismsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mappingSpecialisms = $this->paginate($this->MappingSpecialisms);

        $this->set(compact('mappingSpecialisms'));
    }

    /**
     * View method
     *
     * @param string|null $id Mapping Specialism id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mappingSpecialism = $this->MappingSpecialisms->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mappingSpecialism'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mappingSpecialism = $this->MappingSpecialisms->newEmptyEntity();
        if ($this->request->is('post')) {
            $mappingSpecialism = $this->MappingSpecialisms->patchEntity($mappingSpecialism, $this->request->getData());
            if ($this->MappingSpecialisms->save($mappingSpecialism)) {
                $this->Flash->success(__('The mapping specialism has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping specialism could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingSpecialism'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mapping Specialism id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mappingSpecialism = $this->MappingSpecialisms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mappingSpecialism = $this->MappingSpecialisms->patchEntity($mappingSpecialism, $this->request->getData());
            if ($this->MappingSpecialisms->save($mappingSpecialism)) {
                $this->Flash->success(__('The mapping specialism has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mapping specialism could not be saved. Please, try again.'));
        }
        $this->set(compact('mappingSpecialism'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mapping Specialism id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mappingSpecialism = $this->MappingSpecialisms->get($id);
        if ($this->MappingSpecialisms->delete($mappingSpecialism)) {
            $this->Flash->success(__('The mapping specialism has been deleted.'));
        } else {
            $this->Flash->error(__('The mapping specialism could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
