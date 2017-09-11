<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Track Controller
 *
 * @property \App\Model\Table\TrackTable $Track
 */
class TrackController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $track = $this->paginate($this->Track);

        $this->set(compact('track'));
        $this->set('_serialize', ['track']);
    }

    /**
     * View method
     *
     * @param string|null $id Track id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $track = $this->Track->get($id, [
            'contain' => []
        ]);

        $this->set('track', $track);
        $this->set('_serialize', ['track']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $track = $this->Track->newEntity();
        if ($this->request->is('post')) {
            $track = $this->Track->patchEntity($track, $this->request->getData());
            if ($this->Track->save($track)) {
                $this->Flash->success(__('The track has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The track could not be saved. Please, try again.'));
        }
        $this->set(compact('track'));
        $this->set('_serialize', ['track']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Track id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $track = $this->Track->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $track = $this->Track->patchEntity($track, $this->request->getData());
            if ($this->Track->save($track)) {
                $this->Flash->success(__('The track has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The track could not be saved. Please, try again.'));
        }
        $this->set(compact('track'));
        $this->set('_serialize', ['track']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Track id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $track = $this->Track->get($id);
        if ($this->Track->delete($track)) {
            $this->Flash->success(__('The track has been deleted.'));
        } else {
            $this->Flash->error(__('The track could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
