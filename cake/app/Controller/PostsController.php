<?php
class PostsController extends AppController {
    public $name = 'Posts';
    public $helpers = array('Html', 'Form', 'Form2','TinyMCE.TinyMCE', 'TwitterBootstrap.TwitterBootstrap');
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
            $this->redirect(array('action' => 'admin'));
        }
    }

    function edit($id = null) {
        $this->Post->id = $id;
        $this->set('current_id',$this->Post->id); //added - link to mediabrowser
        $this->set('post', $this->Post->read()); //added - image preview - mediabrowser
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

    function mediabrowser($id = null) {
        $this->Post->id = $id;
        $this->set('current_id',$this->Post->id); //added - link to mediabrowser
        $this->set('post', $this->Post->read()); //added - image preview - mediabrowser
        $this->Post->read(null,$id);
        if ($this->request->is('get')) {
            $this->request->data = $this->Post->read();
        } else {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Imagens alteradas com sucesso.');
                $this->redirect(array('action' => 'admin'));
            } else {
                $this->Session->setFlash('Não foi possível atualizar o evento.');
            }
        }
    }    

    function mediadelete($id = null){
        $Post = $this->Post->findById($id);
        $this->Post->id = $id;
        $this->Post->data = $id;
        $image_path = $this->Post->field('image_path');
        $thumb_path = $this->Post->field('thumb_path');
        $preview_path = $this->Post->field('preview_path');
        $img_path = new File(WWW_ROOT . $image_path);
        $thb_path = new File(WWW_ROOT . $thumb_path);
        $prv_path = new File(WWW_ROOT . $preview_path);
        $this->set('current_id', $this->Post->id);
        $this->set('post', $this->Post->read());
        $this->Post->set('image_path', '');     //Database
        $this->Post->set('thumb_path', '');     //Database
        $this->Post->set('preview_path', '');   //Database
        if($img_path->delete()){
            $this->Session->setFlash('Imagem do evento id: ' . $id . ' removida.');
        } else {
            $this->Session->setFlash('Imagem do evento id: ' . $id . ' removida.');
        }
            if($thb_path->delete()){
                $this->Session->setFlash('Thumb do evento id: ' . $id . ' removida.');
            } else {
                $this->Session->setFlash('Thumb do evento id: ' . $id . ' removida.');
            }
                if($prv_path->delete()){
                    $this->Session->setFlash('Preview do evento id: ' . $id . ' removida.');
                } else {
                    $this->Session->setFlash('Preview do evento id: ' . $id . ' removida.');
                }            
        //unlink('.'. $image_path);               //Filesystem
        //unlink('.'. $thumb_path);               //Filesystem
        //unlink('.'. $preview_path);             //Filesystem
        $this->Post->save();
        $this->Session->setFlash('Imagem do evento id: ' . $id . ' removida.');
        $this->redirect(array('action' => 'mediabrowser'));
    }     

    public function view($id) {
        $this->Post->id = $id;
        $this->set('current_id',$this->Post->id);
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