<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LegacyImages Controller
 *
 * @property \App\Model\Table\LegacyImagesTable $LegacyImages
 *
 * @method \App\Model\Entity\LegacyImage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LegacyImagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items'],
        ];
        $legacyImages = $this->paginate($this->LegacyImages);

        $this->set(compact('legacyImages'));
    }

    /**
     * View method
     *
     * @param string|null $id Legacy Image id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $legacyImage = $this->LegacyImages->get($id, [
            'contain' => ['Items'],
        ]);

        $this->set('legacyImage', $legacyImage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $legacyImage = $this->LegacyImages->newEmptyEntity();
        if ($this->request->is('post')) {
            $legacyImage = $this->LegacyImages->patchEntity($legacyImage, $this->request->getData());
            if ($this->LegacyImages->save($legacyImage)) {
                $this->Flash->success(__('The legacy image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy image could not be saved. Please, try again.'));
        }
        $items = $this->LegacyImages->Items->find('list', ['limit' => 200]);
        $this->set(compact('legacyImage', 'items'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Legacy Image id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $legacyImage = $this->LegacyImages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $legacyImage = $this->LegacyImages->patchEntity($legacyImage, $this->request->getData());
            if ($this->LegacyImages->save($legacyImage)) {
                $this->Flash->success(__('The legacy image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legacy image could not be saved. Please, try again.'));
        }
        $items = $this->LegacyImages->Items->find('list', ['limit' => 200]);
        $this->set(compact('legacyImage', 'items'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Legacy Image id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $legacyImage = $this->LegacyImages->get($id);
        if ($this->LegacyImages->delete($legacyImage)) {
            $this->Flash->success(__('The legacy image has been deleted.'));
        } else {
            $this->Flash->error(__('The legacy image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
