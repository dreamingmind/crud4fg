<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LegacyUsers Controller
 *
 * @property \App\Model\Table\LegacyUsersTable $LegacyUsers
 *
 * @method \App\Model\Entity\LegacyUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LegacyUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentLegacyUsers'],
        ];
        $legacyUsers = $this->paginate($this->LegacyUsers);

        $this->set(compact('legacyUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Legacy User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $legacyUser = $this->LegacyUsers->get($id, [
            'contain' => ['ParentLegacyUsers', 'Users', 'ChildLegacyUsers'],
        ]);

        $this->set('legacyUser', $legacyUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $legacyUser = $this->LegacyUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $legacyUser = $this->LegacyUsers->patchEntity($legacyUser, $this->request->getData());
            if ($this->LegacyUsers->save($legacyUser)) {
                $this->Flash->success(__('The legacy user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy user could not be saved. Please, try again.'));
        }
        $parentLegacyUsers = $this->LegacyUsers->ParentLegacyUsers->find('list', ['limit' => 200]);
        $users = $this->LegacyUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('legacyUser', 'parentLegacyUsers', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Legacy User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $legacyUser = $this->LegacyUsers->get($id, [
            'contain' => ['Users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $legacyUser = $this->LegacyUsers->patchEntity($legacyUser, $this->request->getData());
            if ($this->LegacyUsers->save($legacyUser)) {
                $this->Flash->success(__('The legacy user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy user could not be saved. Please, try again.'));
        }
        $parentLegacyUsers = $this->LegacyUsers->ParentLegacyUsers->find('list', ['limit' => 200]);
        $users = $this->LegacyUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('legacyUser', 'parentLegacyUsers', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Legacy User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $legacyUser = $this->LegacyUsers->get($id);
        if ($this->LegacyUsers->delete($legacyUser)) {
            $this->Flash->success(__('The legacy user has been deleted.'));
        } else {
            $this->Flash->error(__('The legacy user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
