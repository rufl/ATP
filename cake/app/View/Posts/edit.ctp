<!-- File: /app/View/Posts/edit.ctp -->

<h1>Editar Evento</h1>
<?php
    echo $this->Form2->create('Post');
    echo $this->TinyMCE->editor(array('theme' => 'simple', 'mode' => 'textareas'));    
    echo $this->Form2->input('type', array('label' => 'Tipo', array('div' => 'test')));       
    echo $this->Form2->input('title', array('label' => 'Evento', array('div' => 'test')));
    echo $this->Form2->input('body', array('label' => 'Descritivo', array('div' => 'test')));
    echo $this->Form2->input('date_event', array('label' => 'Data do Evento', 'class'=>'datepicker', 'type'=>'text', array('div' => 'test')));
    echo $this->Form2->input('id', array('type' => 'hidden'));
    echo $this->Form2->end('Salvar Evento');
?>