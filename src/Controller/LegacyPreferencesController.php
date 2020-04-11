<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LegacyPreferences Controller
 *
 * @property \App\Model\Table\LegacyPreferencesTable $LegacyPreferences
 *
 * @method \App\Model\Entity\LegacyPreference[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LegacyPreferencesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $legacyPreferences = $this->paginate($this->LegacyPreferences);

        $this->set(compact('legacyPreferences'));
    }

    /**
     * View method
     *
     * @param string|null $id Legacy Preference id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $legacyPreference = $this->LegacyPreferences->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('legacyPreference', $legacyPreference);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $legacyPreference = $this->LegacyPreferences->newEmptyEntity();
        if ($this->request->is('post')) {
            $legacyPreference = $this->LegacyPreferences->patchEntity($legacyPreference, $this->request->getData());
            if ($this->LegacyPreferences->save($legacyPreference)) {
                $this->Flash->success(__('The legacy preference has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy preference could not be saved. Please, try again.'));
        }
        $users = $this->LegacyPreferences->Users->find('list', ['limit' => 200]);
        $this->set(compact('legacyPreference', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Legacy Preference id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $legacyPreference = $this->LegacyPreferences->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $legacyPreference = $this->LegacyPreferences->patchEntity($legacyPreference, $this->request->getData());
            if ($this->LegacyPreferences->save($legacyPreference)) {
                $this->Flash->success(__('The legacy preference has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy preference could not be saved. Please, try again.'));
        }
        $users = $this->LegacyPreferences->Users->find('list', ['limit' => 200]);
        $this->set(compact('legacyPreference', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Legacy Preference id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $legacyPreference = $this->LegacyPreferences->get($id);
        if ($this->LegacyPreferences->delete($legacyPreference)) {
            $this->Flash->success(__('The legacy preference has been deleted.'));
        } else {
            $this->Flash->error(__('The legacy preference could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
