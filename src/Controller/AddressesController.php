<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Addresses Controller
 *
 * @property \App\Model\Table\AddressesTable $Addresses
 *
 * @method \App\Model\Entity\Address[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AddressesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ShippingAccounts', 'Warehouses', 'Tenants', 'People', 'OldAddresses'],
        ];
        $addresses = $this->paginate($this->Addresses);

        $this->set(compact('addresses'));
    }

    /**
     * View method
     *
     * @param string|null $id Address id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $address = $this->Addresses->get($id, [
            'contain' => ['ShippingAccounts', 'Warehouses', 'Tenants', 'People', 'OldAddresses', 'Coms', 'LegacyCustomers'],
        ]);

        $this->set('address', $address);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $address = $this->Addresses->newEmptyEntity();
        if ($this->request->is('post')) {
            $address = $this->Addresses->patchEntity($address, $this->request->getData());
            if ($this->Addresses->save($address)) {
                $this->Flash->success(__('The address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The address could not be saved. Please, try again.'));
        }
        $shippingAccounts = $this->Addresses->ShippingAccounts->find('list', ['limit' => 200]);
        $warehouses = $this->Addresses->Warehouses->find('list', ['limit' => 200]);
        $tenants = $this->Addresses->Tenants->find('list', ['limit' => 200]);
        $people = $this->Addresses->People->find('list', ['limit' => 200]);
        $oldAddresses = $this->Addresses->OldAddresses->find('list', ['limit' => 200]);
        $this->set(compact('address', 'shippingAccounts', 'warehouses', 'tenants', 'people', 'oldAddresses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Address id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $address = $this->Addresses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $address = $this->Addresses->patchEntity($address, $this->request->getData());
            if ($this->Addresses->save($address)) {
                $this->Flash->success(__('The address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The address could not be saved. Please, try again.'));
        }
        $shippingAccounts = $this->Addresses->ShippingAccounts->find('list', ['limit' => 200]);
        $warehouses = $this->Addresses->Warehouses->find('list', ['limit' => 200]);
        $tenants = $this->Addresses->Tenants->find('list', ['limit' => 200]);
        $people = $this->Addresses->People->find('list', ['limit' => 200]);
        $oldAddresses = $this->Addresses->OldAddresses->find('list', ['limit' => 200]);
        $this->set(compact('address', 'shippingAccounts', 'warehouses', 'tenants', 'people', 'oldAddresses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Address id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $address = $this->Addresses->get($id);
        if ($this->Addresses->delete($address)) {
            $this->Flash->success(__('The address has been deleted.'));
        } else {
            $this->Flash->error(__('The address could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
