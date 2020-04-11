<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ShippingAccounts Controller
 *
 * @property \App\Model\Table\ShippingAccountsTable $ShippingAccounts
 *
 * @method \App\Model\Entity\ShippingAccount[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShippingAccountsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tenants'],
        ];
        $shippingAccounts = $this->paginate($this->ShippingAccounts);

        $this->set(compact('shippingAccounts'));
    }

    /**
     * View method
     *
     * @param string|null $id Shipping Account id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shippingAccount = $this->ShippingAccounts->get($id, [
            'contain' => ['Tenants', 'Addresses'],
        ]);

        $this->set('shippingAccount', $shippingAccount);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shippingAccount = $this->ShippingAccounts->newEmptyEntity();
        if ($this->request->is('post')) {
            $shippingAccount = $this->ShippingAccounts->patchEntity($shippingAccount, $this->request->getData());
            if ($this->ShippingAccounts->save($shippingAccount)) {
                $this->Flash->success(__('The shipping account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shipping account could not be saved. Please, try again.'));
        }
        $tenants = $this->ShippingAccounts->Tenants->find('list', ['limit' => 200]);
        $this->set(compact('shippingAccount', 'tenants'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Shipping Account id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shippingAccount = $this->ShippingAccounts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shippingAccount = $this->ShippingAccounts->patchEntity($shippingAccount, $this->request->getData());
            if ($this->ShippingAccounts->save($shippingAccount)) {
                $this->Flash->success(__('The shipping account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shipping account could not be saved. Please, try again.'));
        }
        $tenants = $this->ShippingAccounts->Tenants->find('list', ['limit' => 200]);
        $this->set(compact('shippingAccount', 'tenants'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Shipping Account id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shippingAccount = $this->ShippingAccounts->get($id);
        if ($this->ShippingAccounts->delete($shippingAccount)) {
            $this->Flash->success(__('The shipping account has been deleted.'));
        } else {
            $this->Flash->error(__('The shipping account could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
