<?php 
    class PacientesController extends AppController{
        public $helpers=array('Html','Form');
        function index() {
            $this->set('pacientes', $this->Paciente->find('all'));
        }
        public function view($id = null) {
            $this->set('pacientes', $this->Paciente->findById($id));
        }
        public function new(){
            if ($this->request->is('post')) {
                if ($this->Paciente->save($this->request->data)) {
                    $this->Flash->success('Paciente cadastrado com sucesso!');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
        
    }