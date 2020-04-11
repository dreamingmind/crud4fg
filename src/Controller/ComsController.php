<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Coms Controller
 *
 * @property \App\Model\Table\ComsTable $Coms
 *
 * @method \App\Model\Entity\Com[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ComsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Addresses', 'OldAddresses'],
        ];
        $coms = $this->paginate($this->Coms);

        $this->set(compact('coms'));
    }

    /**
     * View method
     *
     * @param string|null $id Com id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $com = $this->Coms->get($id, [
            'contain' => ['Addresses', 'OldAddresses'],
        ]);

        $this->set('com', $com);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $com = $this->Coms->newEmptyEntity();
        if ($this->request->is('post')) {
            $com = $this->Coms->patchEntity($com, $this->request->getData());
            if ($this->Coms->save($com)) {
                $this->Flash->success(__('The com has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The com could not be saved. Please, try again.'));
        }
        $addresses = $this->Coms->Addresses->find('list', ['limit' => 200]);
        $oldAddresses = $this->Coms->OldAddresses->find('list', ['limit' => 200]);
        $this->set(compact('com', 'addresses', 'oldAddresses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Com id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $com = $this->Coms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $com = $this->Coms->patchEntity($com, $this->request->getData());
            if ($this->Coms->save($com)) {
                $this->Flash->success(__('The com has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The com could not be saved. Please, try again.'));
        }
        $addresses = $this->Coms->Addresses->find('list', ['limit' => 200]);
        $oldAddresses = $this->Coms->OldAddresses->find('list', ['limit' => 200]);
        $this->set(compact('com', 'addresses', 'oldAddresses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Com id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $com = $this->Coms->get($id);
        if ($this->Coms->delete($com)) {
            $this->Flash->success(__('The com has been deleted.'));
        } else {
            $this->Flash->error(__('The com could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
