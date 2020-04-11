<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LegacyUserRegistries Controller
 *
 * @property \App\Model\Table\LegacyUserRegistriesTable $LegacyUserRegistries
 *
 * @method \App\Model\Entity\LegacyUserRegistry[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LegacyUserRegistriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Nodes'],
        ];
        $legacyUserRegistries = $this->paginate($this->LegacyUserRegistries);

        $this->set(compact('legacyUserRegistries'));
    }

    /**
     * View method
     *
     * @param string|null $id Legacy User Registry id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $legacyUserRegistry = $this->LegacyUserRegistries->get($id, [
            'contain' => ['Users', 'Nodes'],
        ]);

        $this->set('legacyUserRegistry', $legacyUserRegistry);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $legacyUserRegistry = $this->LegacyUserRegistries->newEmptyEntity();
        if ($this->request->is('post')) {
            $legacyUserRegistry = $this->LegacyUserRegistries->patchEntity($legacyUserRegistry, $this->request->getData());
            if ($this->LegacyUserRegistries->save($legacyUserRegistry)) {
                $this->Flash->success(__('The legacy user registry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy user registry could not be saved. Please, try again.'));
        }
        $users = $this->LegacyUserRegistries->Users->find('list', ['limit' => 200]);
        $nodes = $this->LegacyUserRegistries->Nodes->find('list', ['limit' => 200]);
        $this->set(compact('legacyUserRegistry', 'users', 'nodes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Legacy User Registry id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $legacyUserRegistry = $this->LegacyUserRegistries->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $legacyUserRegistry = $this->LegacyUserRegistries->patchEntity($legacyUserRegistry, $this->request->getData());
            if ($this->LegacyUserRegistries->save($legacyUserRegistry)) {
                $this->Flash->success(__('The legacy user registry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy user registry could not be saved. Please, try again.'));
        }
        $users = $this->LegacyUserRegistries->Users->find('list', ['limit' => 200]);
        $nodes = $this->LegacyUserRegistries->Nodes->find('list', ['limit' => 200]);
        $this->set(compact('legacyUserRegistry', 'users', 'nodes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Legacy User Registry id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $legacyUserRegistry = $this->LegacyUserRegistries->get($id);
        if ($this->LegacyUserRegistries->delete($legacyUserRegistry)) {
            $this->Flash->success(__('The legacy user registry has been deleted.'));
        } else {
            $this->Flash->error(__('The legacy user registry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
