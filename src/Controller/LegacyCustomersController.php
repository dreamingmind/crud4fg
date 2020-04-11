<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LegacyCustomers Controller
 *
 * @property \App\Model\Table\LegacyCustomersTable $LegacyCustomers
 *
 * @method \App\Model\Entity\LegacyCustomer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LegacyCustomersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Addresses', 'Images'],
        ];
        $legacyCustomers = $this->paginate($this->LegacyCustomers);

        $this->set(compact('legacyCustomers'));
    }

    /**
     * View method
     *
     * @param string|null $id Legacy Customer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $legacyCustomer = $this->LegacyCustomers->get($id, [
            'contain' => ['Users', 'Addresses', 'Images'],
        ]);

        $this->set('legacyCustomer', $legacyCustomer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $legacyCustomer = $this->LegacyCustomers->newEmptyEntity();
        if ($this->request->is('post')) {
            $legacyCustomer = $this->LegacyCustomers->patchEntity($legacyCustomer, $this->request->getData());
            if ($this->LegacyCustomers->save($legacyCustomer)) {
                $this->Flash->success(__('The legacy customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy customer could not be saved. Please, try again.'));
        }
        $users = $this->LegacyCustomers->Users->find('list', ['limit' => 200]);
        $addresses = $this->LegacyCustomers->Addresses->find('list', ['limit' => 200]);
        $images = $this->LegacyCustomers->Images->find('list', ['limit' => 200]);
        $this->set(compact('legacyCustomer', 'users', 'addresses', 'images'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Legacy Customer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $legacyCustomer = $this->LegacyCustomers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $legacyCustomer = $this->LegacyCustomers->patchEntity($legacyCustomer, $this->request->getData());
            if ($this->LegacyCustomers->save($legacyCustomer)) {
                $this->Flash->success(__('The legacy customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy customer could not be saved. Please, try again.'));
        }
        $users = $this->LegacyCustomers->Users->find('list', ['limit' => 200]);
        $addresses = $this->LegacyCustomers->Addresses->find('list', ['limit' => 200]);
        $images = $this->LegacyCustomers->Images->find('list', ['limit' => 200]);
        $this->set(compact('legacyCustomer', 'users', 'addresses', 'images'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Legacy Customer id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $legacyCustomer = $this->LegacyCustomers->get($id);
        if ($this->LegacyCustomers->delete($legacyCustomer)) {
            $this->Flash->success(__('The legacy customer has been deleted.'));
        } else {
            $this->Flash->error(__('The legacy customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
