<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LegacyObservers Controller
 *
 * @property \App\Model\Table\LegacyObserversTable $LegacyObservers
 *
 * @method \App\Model\Entity\LegacyObserver[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LegacyObserversController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'UserObservers'],
        ];
        $legacyObservers = $this->paginate($this->LegacyObservers);

        $this->set(compact('legacyObservers'));
    }

    /**
     * View method
     *
     * @param string|null $id Legacy Observer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $legacyObserver = $this->LegacyObservers->get($id, [
            'contain' => ['Users', 'UserObservers'],
        ]);

        $this->set('legacyObserver', $legacyObserver);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $legacyObserver = $this->LegacyObservers->newEmptyEntity();
        if ($this->request->is('post')) {
            $legacyObserver = $this->LegacyObservers->patchEntity($legacyObserver, $this->request->getData());
            if ($this->LegacyObservers->save($legacyObserver)) {
                $this->Flash->success(__('The legacy observer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy observer could not be saved. Please, try again.'));
        }
        $users = $this->LegacyObservers->Users->find('list', ['limit' => 200]);
        $userObservers = $this->LegacyObservers->UserObservers->find('list', ['limit' => 200]);
        $this->set(compact('legacyObserver', 'users', 'userObservers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Legacy Observer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $legacyObserver = $this->LegacyObservers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $legacyObserver = $this->LegacyObservers->patchEntity($legacyObserver, $this->request->getData());
            if ($this->LegacyObservers->save($legacyObserver)) {
                $this->Flash->success(__('The legacy observer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy observer could not be saved. Please, try again.'));
        }
        $users = $this->LegacyObservers->Users->find('list', ['limit' => 200]);
        $userObservers = $this->LegacyObservers->UserObservers->find('list', ['limit' => 200]);
        $this->set(compact('legacyObserver', 'users', 'userObservers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Legacy Observer id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $legacyObserver = $this->LegacyObservers->get($id);
        if ($this->LegacyObservers->delete($legacyObserver)) {
            $this->Flash->success(__('The legacy observer has been deleted.'));
        } else {
            $this->Flash->error(__('The legacy observer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
