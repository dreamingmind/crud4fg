<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LegacyCatalogsUsers Controller
 *
 * @property \App\Model\Table\LegacyCatalogsUsersTable $LegacyCatalogsUsers
 *
 * @method \App\Model\Entity\LegacyCatalogsUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LegacyCatalogsUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Catalogs', 'Users'],
        ];
        $legacyCatalogsUsers = $this->paginate($this->LegacyCatalogsUsers);

        $this->set(compact('legacyCatalogsUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Legacy Catalogs User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $legacyCatalogsUser = $this->LegacyCatalogsUsers->get($id, [
            'contain' => ['Catalogs', 'Users'],
        ]);

        $this->set('legacyCatalogsUser', $legacyCatalogsUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $legacyCatalogsUser = $this->LegacyCatalogsUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $legacyCatalogsUser = $this->LegacyCatalogsUsers->patchEntity($legacyCatalogsUser, $this->request->getData());
            if ($this->LegacyCatalogsUsers->save($legacyCatalogsUser)) {
                $this->Flash->success(__('The legacy catalogs user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy catalogs user could not be saved. Please, try again.'));
        }
        $catalogs = $this->LegacyCatalogsUsers->Catalogs->find('list', ['limit' => 200]);
        $users = $this->LegacyCatalogsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('legacyCatalogsUser', 'catalogs', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Legacy Catalogs User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $legacyCatalogsUser = $this->LegacyCatalogsUsers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $legacyCatalogsUser = $this->LegacyCatalogsUsers->patchEntity($legacyCatalogsUser, $this->request->getData());
            if ($this->LegacyCatalogsUsers->save($legacyCatalogsUser)) {
                $this->Flash->success(__('The legacy catalogs user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy catalogs user could not be saved. Please, try again.'));
        }
        $catalogs = $this->LegacyCatalogsUsers->Catalogs->find('list', ['limit' => 200]);
        $users = $this->LegacyCatalogsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('legacyCatalogsUser', 'catalogs', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Legacy Catalogs User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $legacyCatalogsUser = $this->LegacyCatalogsUsers->get($id);
        if ($this->LegacyCatalogsUsers->delete($legacyCatalogsUser)) {
            $this->Flash->success(__('The legacy catalogs user has been deleted.'));
        } else {
            $this->Flash->error(__('The legacy catalogs user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
