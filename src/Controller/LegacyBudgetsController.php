<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LegacyBudgets Controller
 *
 * @property \App\Model\Table\LegacyBudgetsTable $LegacyBudgets
 *
 * @method \App\Model\Entity\LegacyBudget[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LegacyBudgetsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $legacyBudgets = $this->paginate($this->LegacyBudgets);

        $this->set(compact('legacyBudgets'));
    }

    /**
     * View method
     *
     * @param string|null $id Legacy Budget id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $legacyBudget = $this->LegacyBudgets->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('legacyBudget', $legacyBudget);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $legacyBudget = $this->LegacyBudgets->newEmptyEntity();
        if ($this->request->is('post')) {
            $legacyBudget = $this->LegacyBudgets->patchEntity($legacyBudget, $this->request->getData());
            if ($this->LegacyBudgets->save($legacyBudget)) {
                $this->Flash->success(__('The legacy budget has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy budget could not be saved. Please, try again.'));
        }
        $users = $this->LegacyBudgets->Users->find('list', ['limit' => 200]);
        $this->set(compact('legacyBudget', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Legacy Budget id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $legacyBudget = $this->LegacyBudgets->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $legacyBudget = $this->LegacyBudgets->patchEntity($legacyBudget, $this->request->getData());
            if ($this->LegacyBudgets->save($legacyBudget)) {
                $this->Flash->success(__('The legacy budget has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy budget could not be saved. Please, try again.'));
        }
        $users = $this->LegacyBudgets->Users->find('list', ['limit' => 200]);
        $this->set(compact('legacyBudget', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Legacy Budget id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $legacyBudget = $this->LegacyBudgets->get($id);
        if ($this->LegacyBudgets->delete($legacyBudget)) {
            $this->Flash->success(__('The legacy budget has been deleted.'));
        } else {
            $this->Flash->error(__('The legacy budget could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
