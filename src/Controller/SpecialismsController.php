<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Specialisms Controller
 *
 * @property \App\Model\Table\SpecialismsTable $Specialisms
 * @method \App\Model\Entity\Specialism[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SpecialismsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $specialisms = $this->paginate($this->Specialisms);

        $this->set(compact('specialisms'));
    }

    /**
     * View method
     *
     * @param string|null $id Specialism id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $specialism = $this->Specialisms->get($id, [
            'contain' => ['MappingSpecialisms'],
        ]);

        $this->set(compact('specialism'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $specialism = $this->Specialisms->newEmptyEntity();
        if ($this->request->is('post')) {
            $specialism = $this->Specialisms->patchEntity($specialism, $this->request->getData());
            if ($this->Specialisms->save($specialism)) {
                $this->Flash->success(__('The specialism has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The specialism could not be saved. Please, try again.'));
        }
        $this->set(compact('specialism'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Specialism id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $specialism = $this->Specialisms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $specialism = $this->Specialisms->patchEntity($specialism, $this->request->getData());
            if ($this->Specialisms->save($specialism)) {
                $this->Flash->success(__('The specialism has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The specialism could not be saved. Please, try again.'));
        }
        $this->set(compact('specialism'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Specialism id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $specialism = $this->Specialisms->get($id);
        if ($this->Specialisms->delete($specialism)) {
            $this->Flash->success(__('The specialism has been deleted.'));
        } else {
            $this->Flash->error(__('The specialism could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
