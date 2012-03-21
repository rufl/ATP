<?php
class PostsController extends AppController {
    public $name = 'Posts';
    public $helpers = array('Html', 'Form', 'Form2','TinyMCE.TinyMCE');
    public $components = array('RequestHandler');
    
    public function index() {
         $this->set('posts', $this->Post->find('all'));
    }

    public function admin() {
         $this->set('posts', $this->Post->find('all'));
    }

    public function upload() {
        if (!empty($this->data)) {
            if ($data = $this->Uploader->upload('fileName')) {
                // Upload successful, do whatever
            }
        }
    }    

    function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $this->Session->setFlash('O evento id: ' . $id . ' foi removido.');
            $this->redirect(array('action' => 'index'));
        }
    }

    function edit($id = null) {
        $this->Post->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Post->read();
        } else {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('As informações do evento foram atualizadas.');
                $this->redirect(array('action' => 'admin'));
            } else {
                $this->Session->setFlash('Não foi possível atualizar o evento.');
            }
        }
    }

    public function view($id) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());

    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('O evento foi criado.');
                $this->redirect(array('action' => 'admin'));
            } else {
                $this->Session->setFlash('Não foi possível criar o evento.');
            }
        }
    }
    }

    /**
     * Format the filename a specific way before uploading and attaching.
     * 
     * @access public
     * @param string $name  - The current filename without extension
     * @param string $field - The form field name
     * @param array $file   - The $_FILES data
     * @return string
     */
    function formatFileName($name, $field, $file) {
        return md5($name);
    }