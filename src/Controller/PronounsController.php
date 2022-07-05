<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pronouns Controller
 *
 * @property \App\Model\Table\PronounsTable $Pronouns
 * @method \App\Model\Entity\Pronoun[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PronounsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $pronouns = $this->paginate($this->Pronouns);

        $this->set(compact('pronouns'));
    }

    /**
     * View method
     *
     * @param string|null $id Pronoun id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pronoun = $this->Pronouns->get($id, [
            'contain' => ['Profiles'],
        ]);

        $this->set(compact('pronoun'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pronoun = $this->Pronouns->newEmptyEntity();
        if ($this->request->is('post')) {
            $pronoun = $this->Pronouns->patchEntity($pronoun, $this->request->getData());
            if ($this->Pronouns->save($pronoun)) {
                $this->Flash->success(__('The pronoun has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pronoun could not be saved. Please, try again.'));
        }
        $this->set(compact('pronoun'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pronoun id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pronoun = $this->Pronouns->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pronoun = $this->Pronouns->patchEntity($pronoun, $this->request->getData());
            if ($this->Pronouns->save($pronoun)) {
                $this->Flash->success(__('The pronoun has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pronoun could not be saved. Please, try again.'));
        }
        $this->set(compact('pronoun'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pronoun id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pronoun = $this->Pronouns->get($id);
        if ($this->Pronouns->delete($pronoun)) {
            $this->Flash->success(__('The pronoun has been deleted.'));
        } else {
            $this->Flash->error(__('The pronoun could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
