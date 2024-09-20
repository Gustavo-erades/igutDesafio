<?php 
    class PacientesController extends AppController{
        function index() {
            $this->layout='ajax';
            $this->paginate=array(
                'limit'=>40,
                'order'=>array('Pacientes.nome'=>'ASC')
            );
            $pacientes=$this->paginate($this->Pacientes);
            $this->set('pacientes', $this->paginate($this->Pacientes));
        }
        public function view($id = null) {
            $this->set('pacientes', $this->Paciente->findById($id));
        }
        public function new(){
            $this->layout='ajax';
            if ($this->request->is('post')) {
               $this->Paciente->save($this->request->data);
               exit;
            }
        }
}