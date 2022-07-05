<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Expertises Controller
 *
 * @property \App\Model\Table\ExpertisesTable $Expertises
 * @method \App\Model\Entity\Expertise[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExpertisesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $expertises = $this->paginate($this->Expertises);

        $this->set(compact('expertises'));
    }

    /**
     * View method
     *
     * @param string|null $id Expertise id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expertise = $this->Expertises->get($id, [
            'contain' => ['MappingExpertises'],
        ]);

        $this->set(compact('expertise'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expertise = $this->Expertises->newEmptyEntity();
        if ($this->request->is('post')) {
            $expertise = $this->Expertises->patchEntity($expertise, $this->request->getData());
            if ($this->Expertises->save($expertise)) {
                $this->Flash->success(__('The expertise has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expertise could not be saved. Please, try again.'));
        }
        $this->set(compact('expertise'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Expertise id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expertise = $this->Expertises->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expertise = $this->Expertises->patchEntity($expertise, $this->request->getData());
            if ($this->Expertises->save($expertise)) {
                $this->Flash->success(__('The expertise has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expertise could not be saved. Please, try again.'));
        }
        $this->set(compact('expertise'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Expertise id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expertise = $this->Expertises->get($id);
        if ($this->Expertises->delete($expertise)) {
            $this->Flash->success(__('The expertise has been deleted.'));
        } else {
            $this->Flash->error(__('The expertise could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
