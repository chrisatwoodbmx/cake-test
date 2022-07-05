<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ContactDetails Controller
 *
 * @property \App\Model\Table\ContactDetailsTable $ContactDetails
 * @method \App\Model\Entity\ContactDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Profiles', 'Linkedins', 'GoogleScholars', 'Acadamias', 'Orcids'],
        ];
        $contactDetails = $this->paginate($this->ContactDetails);

        $this->set(compact('contactDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactDetail = $this->ContactDetails->get($id, [
            'contain' => ['Profiles', 'Linkedins', 'GoogleScholars', 'Acadamias', 'Orcids'],
        ]);

        $this->set(compact('contactDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactDetail = $this->ContactDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $contactDetail = $this->ContactDetails->patchEntity($contactDetail, $this->request->getData());
            if ($this->ContactDetails->save($contactDetail)) {
                $this->Flash->success(__('The contact detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact detail could not be saved. Please, try again.'));
        }
        $profiles = $this->ContactDetails->Profiles->find('list', ['limit' => 200])->all();
        $linkedins = $this->ContactDetails->Linkedins->find('list', ['limit' => 200])->all();
        $googleScholars = $this->ContactDetails->GoogleScholars->find('list', ['limit' => 200])->all();
        $acadamias = $this->ContactDetails->Acadamias->find('list', ['limit' => 200])->all();
        $orcids = $this->ContactDetails->Orcids->find('list', ['limit' => 200])->all();
        $this->set(compact('contactDetail', 'profiles', 'linkedins', 'googleScholars', 'acadamias', 'orcids'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactDetail = $this->ContactDetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactDetail = $this->ContactDetails->patchEntity($contactDetail, $this->request->getData());
            if ($this->ContactDetails->save($contactDetail)) {
                $this->Flash->success(__('The contact detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact detail could not be saved. Please, try again.'));
        }
        $profiles = $this->ContactDetails->Profiles->find('list', ['limit' => 200])->all();
        $linkedins = $this->ContactDetails->Linkedins->find('list', ['limit' => 200])->all();
        $googleScholars = $this->ContactDetails->GoogleScholars->find('list', ['limit' => 200])->all();
        $acadamias = $this->ContactDetails->Acadamias->find('list', ['limit' => 200])->all();
        $orcids = $this->ContactDetails->Orcids->find('list', ['limit' => 200])->all();
        $this->set(compact('contactDetail', 'profiles', 'linkedins', 'googleScholars', 'acadamias', 'orcids'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactDetail = $this->ContactDetails->get($id);
        if ($this->ContactDetails->delete($contactDetail)) {
            $this->Flash->success(__('The contact detail has been deleted.'));
        } else {
            $this->Flash->error(__('The contact detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
