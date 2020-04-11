<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LegacyUsersUsers Controller
 *
 * @property \App\Model\Table\LegacyUsersUsersTable $LegacyUsersUsers
 *
 * @method \App\Model\Entity\LegacyUsersUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LegacyUsersUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UserManageds', 'UserManagers'],
        ];
        $legacyUsersUsers = $this->paginate($this->LegacyUsersUsers);

        $this->set(compact('legacyUsersUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Legacy Users User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $legacyUsersUser = $this->LegacyUsersUsers->get($id, [
            'contain' => ['UserManageds', 'UserManagers'],
        ]);

        $this->set('legacyUsersUser', $legacyUsersUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $legacyUsersUser = $this->LegacyUsersUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $legacyUsersUser = $this->LegacyUsersUsers->patchEntity($legacyUsersUser, $this->request->getData());
            if ($this->LegacyUsersUsers->save($legacyUsersUser)) {
                $this->Flash->success(__('The legacy users user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy users user could not be saved. Please, try again.'));
        }
        $userManageds = $this->LegacyUsersUsers->UserManageds->find('list', ['limit' => 200]);
        $userManagers = $this->LegacyUsersUsers->UserManagers->find('list', ['limit' => 200]);
        $this->set(compact('legacyUsersUser', 'userManageds', 'userManagers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Legacy Users User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $legacyUsersUser = $this->LegacyUsersUsers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $legacyUsersUser = $this->LegacyUsersUsers->patchEntity($legacyUsersUser, $this->request->getData());
            if ($this->LegacyUsersUsers->save($legacyUsersUser)) {
                $this->Flash->success(__('The legacy users user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy users user could not be saved. Please, try again.'));
        }
        $userManageds = $this->LegacyUsersUsers->UserManageds->find('list', ['limit' => 200]);
        $userManagers = $this->LegacyUsersUsers->UserManagers->find('list', ['limit' => 200]);
        $this->set(compact('legacyUsersUser', 'userManageds', 'userManagers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Legacy Users User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $legacyUsersUser = $this->LegacyUsersUsers->get($id);
        if ($this->LegacyUsersUsers->delete($legacyUsersUser)) {
            $this->Flash->success(__('The legacy users user has been deleted.'));
        } else {
            $this->Flash->error(__('The legacy users user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
