<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LegacyCatalogs Controller
 *
 * @property \App\Model\Table\LegacyCatalogsTable $LegacyCatalogs
 *
 * @method \App\Model\Entity\LegacyCatalog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LegacyCatalogsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items', 'ParentLegacyCatalogs', 'Customers', 'CustomerUsers'],
        ];
        $legacyCatalogs = $this->paginate($this->LegacyCatalogs);

        $this->set(compact('legacyCatalogs'));
    }

    /**
     * View method
     *
     * @param string|null $id Legacy Catalog id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $legacyCatalog = $this->LegacyCatalogs->get($id, [
            'contain' => ['Items', 'ParentLegacyCatalogs', 'Customers', 'CustomerUsers', 'Users', 'ChildLegacyCatalogs'],
        ]);

        $this->set('legacyCatalog', $legacyCatalog);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $legacyCatalog = $this->LegacyCatalogs->newEmptyEntity();
        if ($this->request->is('post')) {
            $legacyCatalog = $this->LegacyCatalogs->patchEntity($legacyCatalog, $this->request->getData());
            if ($this->LegacyCatalogs->save($legacyCatalog)) {
                $this->Flash->success(__('The legacy catalog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy catalog could not be saved. Please, try again.'));
        }
        $items = $this->LegacyCatalogs->Items->find('list', ['limit' => 200]);
        $parentLegacyCatalogs = $this->LegacyCatalogs->ParentLegacyCatalogs->find('list', ['limit' => 200]);
        $customers = $this->LegacyCatalogs->Customers->find('list', ['limit' => 200]);
        $customerUsers = $this->LegacyCatalogs->CustomerUsers->find('list', ['limit' => 200]);
        $users = $this->LegacyCatalogs->Users->find('list', ['limit' => 200]);
        $this->set(compact('legacyCatalog', 'items', 'parentLegacyCatalogs', 'customers', 'customerUsers', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Legacy Catalog id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $legacyCatalog = $this->LegacyCatalogs->get($id, [
            'contain' => ['Users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $legacyCatalog = $this->LegacyCatalogs->patchEntity($legacyCatalog, $this->request->getData());
            if ($this->LegacyCatalogs->save($legacyCatalog)) {
                $this->Flash->success(__('The legacy catalog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy catalog could not be saved. Please, try again.'));
        }
        $items = $this->LegacyCatalogs->Items->find('list', ['limit' => 200]);
        $parentLegacyCatalogs = $this->LegacyCatalogs->ParentLegacyCatalogs->find('list', ['limit' => 200]);
        $customers = $this->LegacyCatalogs->Customers->find('list', ['limit' => 200]);
        $customerUsers = $this->LegacyCatalogs->CustomerUsers->find('list', ['limit' => 200]);
        $users = $this->LegacyCatalogs->Users->find('list', ['limit' => 200]);
        $this->set(compact('legacyCatalog', 'items', 'parentLegacyCatalogs', 'customers', 'customerUsers', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Legacy Catalog id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $legacyCatalog = $this->LegacyCatalogs->get($id);
        if ($this->LegacyCatalogs->delete($legacyCatalog)) {
            $this->Flash->success(__('The legacy catalog has been deleted.'));
        } else {
            $this->Flash->error(__('The legacy catalog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
