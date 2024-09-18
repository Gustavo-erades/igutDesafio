<?php 
    class MedicosController extends AppController{
        public $helpers=array('Html','Form');
       
        function index() {
            $this->set('medicos', $this->Medico->find('all'));
        }
        public function view($id = null) {
            $this->set('medicos', $this->Medico->findById($id));
        }
        public function new(){
            if ($this->request->is('post')) {
                if ($this->Medico->save($this->request->data)) {
                    $this->Flash->success('Medico cadastrado com sucesso!');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
    }