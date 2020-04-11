<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LegacyItems Controller
 *
 * @property \App\Model\Table\LegacyItemsTable $LegacyItems
 *
 * @method \App\Model\Entity\LegacyItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LegacyItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Vendors', 'Locations'],
        ];
        $legacyItems = $this->paginate($this->LegacyItems);

        $this->set(compact('legacyItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Legacy Item id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $legacyItem = $this->LegacyItems->get($id, [
            'contain' => ['Vendors', 'Locations'],
        ]);

        $this->set('legacyItem', $legacyItem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $legacyItem = $this->LegacyItems->newEmptyEntity();
        if ($this->request->is('post')) {
            $legacyItem = $this->LegacyItems->patchEntity($legacyItem, $this->request->getData());
            if ($this->LegacyItems->save($legacyItem)) {
                $this->Flash->success(__('The legacy item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy item could not be saved. Please, try again.'));
        }
        $vendors = $this->LegacyItems->Vendors->find('list', ['limit' => 200]);
        $locations = $this->LegacyItems->Locations->find('list', ['limit' => 200]);
        $this->set(compact('legacyItem', 'vendors', 'locations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Legacy Item id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $legacyItem = $this->LegacyItems->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $legacyItem = $this->LegacyItems->patchEntity($legacyItem, $this->request->getData());
            if ($this->LegacyItems->save($legacyItem)) {
                $this->Flash->success(__('The legacy item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy item could not be saved. Please, try again.'));
        }
        $vendors = $this->LegacyItems->Vendors->find('list', ['limit' => 200]);
        $locations = $this->LegacyItems->Locations->find('list', ['limit' => 200]);
        $this->set(compact('legacyItem', 'vendors', 'locations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Legacy Item id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $legacyItem = $this->LegacyItems->get($id);
        if ($this->LegacyItems->delete($legacyItem)) {
            $this->Flash->success(__('The legacy item has been deleted.'));
        } else {
            $this->Flash->error(__('The legacy item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
