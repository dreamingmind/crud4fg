<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LegacyAddresses Controller
 *
 * @property \App\Model\Table\LegacyAddressesTable $LegacyAddresses
 *
 * @method \App\Model\Entity\LegacyAddress[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LegacyAddressesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'EpmsVendors', 'TaxRates', 'Customers'],
        ];
        $legacyAddresses = $this->paginate($this->LegacyAddresses);

        $this->set(compact('legacyAddresses'));
    }

    /**
     * View method
     *
     * @param string|null $id Legacy Address id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $legacyAddress = $this->LegacyAddresses->get($id, [
            'contain' => ['Users', 'EpmsVendors', 'TaxRates', 'Customers'],
        ]);

        $this->set('legacyAddress', $legacyAddress);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $legacyAddress = $this->LegacyAddresses->newEmptyEntity();
        if ($this->request->is('post')) {
            $legacyAddress = $this->LegacyAddresses->patchEntity($legacyAddress, $this->request->getData());
            if ($this->LegacyAddresses->save($legacyAddress)) {
                $this->Flash->success(__('The legacy address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy address could not be saved. Please, try again.'));
        }
        $users = $this->LegacyAddresses->Users->find('list', ['limit' => 200]);
        $epmsVendors = $this->LegacyAddresses->EpmsVendors->find('list', ['limit' => 200]);
        $taxRates = $this->LegacyAddresses->TaxRates->find('list', ['limit' => 200]);
        $customers = $this->LegacyAddresses->Customers->find('list', ['limit' => 200]);
        $this->set(compact('legacyAddress', 'users', 'epmsVendors', 'taxRates', 'customers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Legacy Address id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $legacyAddress = $this->LegacyAddresses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $legacyAddress = $this->LegacyAddresses->patchEntity($legacyAddress, $this->request->getData());
            if ($this->LegacyAddresses->save($legacyAddress)) {
                $this->Flash->success(__('The legacy address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy address could not be saved. Please, try again.'));
        }
        $users = $this->LegacyAddresses->Users->find('list', ['limit' => 200]);
        $epmsVendors = $this->LegacyAddresses->EpmsVendors->find('list', ['limit' => 200]);
        $taxRates = $this->LegacyAddresses->TaxRates->find('list', ['limit' => 200]);
        $customers = $this->LegacyAddresses->Customers->find('list', ['limit' => 200]);
        $this->set(compact('legacyAddress', 'users', 'epmsVendors', 'taxRates', 'customers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Legacy Address id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $legacyAddress = $this->LegacyAddresses->get($id);
        if ($this->LegacyAddresses->delete($legacyAddress)) {
            $this->Flash->success(__('The legacy address has been deleted.'));
        } else {
            $this->Flash->error(__('The legacy address could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
