<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TenantContracts Controller
 *
 * @property \App\Model\Table\TenantContractsTable $TenantContracts
 *
 * @method \App\Model\Entity\TenantContract[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TenantContractsController extends AppController
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
        $tenantContracts = $this->paginate($this->TenantContracts);

        $this->set(compact('tenantContracts'));
    }

    /**
     * View method
     *
     * @param string|null $id Tenant Contract id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tenantContract = $this->TenantContracts->get($id, [
            'contain' => ['Tenants'],
        ]);

        $this->set('tenantContract', $tenantContract);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tenantContract = $this->TenantContracts->newEmptyEntity();
        if ($this->request->is('post')) {
            $tenantContract = $this->TenantContracts->patchEntity($tenantContract, $this->request->getData());
            if ($this->TenantContracts->save($tenantContract)) {
                $this->Flash->success(__('The tenant contract has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tenant contract could not be saved. Please, try again.'));
        }
        $tenants = $this->TenantContracts->Tenants->find('list', ['limit' => 200]);
        $this->set(compact('tenantContract', 'tenants'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tenant Contract id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tenantContract = $this->TenantContracts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tenantContract = $this->TenantContracts->patchEntity($tenantContract, $this->request->getData());
            if ($this->TenantContracts->save($tenantContract)) {
                $this->Flash->success(__('The tenant contract has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tenant contract could not be saved. Please, try again.'));
        }
        $tenants = $this->TenantContracts->Tenants->find('list', ['limit' => 200]);
        $this->set(compact('tenantContract', 'tenants'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tenant Contract id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tenantContract = $this->TenantContracts->get($id);
        if ($this->TenantContracts->delete($tenantContract)) {
            $this->Flash->success(__('The tenant contract has been deleted.'));
        } else {
            $this->Flash->error(__('The tenant contract could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
