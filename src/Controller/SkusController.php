<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Skus Controller
 *
 * @property \App\Model\Table\SkusTable $Skus
 *
 * @method \App\Model\Entity\Skus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SkusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Stores', 'Items', 'OldCatalogs'],
        ];
        $skus = $this->paginate($this->Skus);

        $this->set(compact('skus'));
    }

    /**
     * View method
     *
     * @param string|null $id Skus id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $skus = $this->Skus->get($id, [
            'contain' => ['Stores', 'Items', 'OldCatalogs'],
        ]);

        $this->set('skus', $skus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $skus = $this->Skus->newEmptyEntity();
        if ($this->request->is('post')) {
            $skus = $this->Skus->patchEntity($skus, $this->request->getData());
            if ($this->Skus->save($skus)) {
                $this->Flash->success(__('The skus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The skus could not be saved. Please, try again.'));
        }
        $stores = $this->Skus->Stores->find('list', ['limit' => 200]);
        $items = $this->Skus->Items->find('list', ['limit' => 200]);
        $oldCatalogs = $this->Skus->OldCatalogs->find('list', ['limit' => 200]);
        $this->set(compact('skus', 'stores', 'items', 'oldCatalogs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Skus id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $skus = $this->Skus->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $skus = $this->Skus->patchEntity($skus, $this->request->getData());
            if ($this->Skus->save($skus)) {
                $this->Flash->success(__('The skus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The skus could not be saved. Please, try again.'));
        }
        $stores = $this->Skus->Stores->find('list', ['limit' => 200]);
        $items = $this->Skus->Items->find('list', ['limit' => 200]);
        $oldCatalogs = $this->Skus->OldCatalogs->find('list', ['limit' => 200]);
        $this->set(compact('skus', 'stores', 'items', 'oldCatalogs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Skus id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $skus = $this->Skus->get($id);
        if ($this->Skus->delete($skus)) {
            $this->Flash->success(__('The skus has been deleted.'));
        } else {
            $this->Flash->error(__('The skus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
