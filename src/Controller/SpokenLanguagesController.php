<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SpokenLanguages Controller
 *
 * @method \App\Model\Entity\SpokenLanguage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SpokenLanguagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $spokenLanguages = $this->paginate($this->SpokenLanguages);

        $this->set(compact('spokenLanguages'));
    }

    /**
     * View method
     *
     * @param string|null $id Spoken Language id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $spokenLanguage = $this->SpokenLanguages->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('spokenLanguage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $spokenLanguage = $this->SpokenLanguages->newEmptyEntity();
        if ($this->request->is('post')) {
            $spokenLanguage = $this->SpokenLanguages->patchEntity($spokenLanguage, $this->request->getData());
            if ($this->SpokenLanguages->save($spokenLanguage)) {
                $this->Flash->success(__('The spoken language has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The spoken language could not be saved. Please, try again.'));
        }
        $this->set(compact('spokenLanguage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Spoken Language id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $spokenLanguage = $this->SpokenLanguages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $spokenLanguage = $this->SpokenLanguages->patchEntity($spokenLanguage, $this->request->getData());
            if ($this->SpokenLanguages->save($spokenLanguage)) {
                $this->Flash->success(__('The spoken language has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The spoken language could not be saved. Please, try again.'));
        }
        $this->set(compact('spokenLanguage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Spoken Language id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $spokenLanguage = $this->SpokenLanguages->get($id);
        if ($this->SpokenLanguages->delete($spokenLanguage)) {
            $this->Flash->success(__('The spoken language has been deleted.'));
        } else {
            $this->Flash->error(__('The spoken language could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
