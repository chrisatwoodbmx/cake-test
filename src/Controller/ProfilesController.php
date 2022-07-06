<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Profiles Controller
 *
 * @property \App\Model\Table\ProfilesTable $Profiles
 * @method \App\Model\Entity\Profile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['MappingVisibilities', 'Titles', 'PostNominals', 'Pronouns'],
        ];
        $profiles = $this->paginate($this->Profiles);

        $this->set(compact('profiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profile = $this->Profiles->get($id, [
            'contain' => ['MappingVisibilities', 'Titles', 'PostNominals', 'Pronouns', 'Activities', 'ContactDetails', 'Contents', 'HistoryAudits', 'MappingExpertises', 'MappingJobTitles', 'MappingLocations', 'MappingOrganisations', 'MappingResearchGroups', 'MappingSpecialisms', 'MappingSpokenLanguages', 'MappingTeams'],
        ]);

        $this->set(compact('profile'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profile = $this->Profiles->newEmptyEntity();
        if ($this->request->is('post')) {
            $profile = $this->Profiles->patchEntity($profile, $this->request->getData());
            if ($this->Profiles->save($profile)) {
                $this->Flash->success(__('The profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profile could not be saved. Please, try again.'));
        }
        $mappingVisibilities = $this->Profiles->MappingVisibilities->find('list', ['limit' => 200])->all();
        $titles = $this->Profiles->Titles->find('list', ['limit' => 200])->all();
        $postNominals = $this->Profiles->PostNominals->find('list', ['limit' => 200])->all();
        $pronouns = $this->Profiles->Pronouns->find('list', ['limit' => 200])->all();
        $this->set(compact('profile', 'mappingVisibilities', 'titles', 'postNominals', 'pronouns'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profile = $this->Profiles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profile = $this->Profiles->patchEntity($profile, $this->request->getData());
            if ($this->Profiles->save($profile)) {
                $this->Flash->success(__('The profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profile could not be saved. Please, try again.'));
        }
        $mappingVisibilities = $this->Profiles->MappingVisibilities->find('list', ['limit' => 200])->all();
        $titles = $this->Profiles->Titles->find('list', ['limit' => 200])->all();
        $postNominals = $this->Profiles->PostNominals->find('list', ['limit' => 200])->all();
        $pronouns = $this->Profiles->Pronouns->find('list', ['limit' => 200])->all();
        $this->set(compact('profile', 'mappingVisibilities', 'titles', 'postNominals', 'pronouns'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profile = $this->Profiles->get($id);
        if ($this->Profiles->delete($profile)) {
            $this->Flash->success(__('The profile has been deleted.'));
        } else {
            $this->Flash->error(__('The profile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
