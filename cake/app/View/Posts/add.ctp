<!-- File: /app/View/Posts/add.ctp -->

<h1>Novo Evento</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('date_event');
echo $this->Form->end('Salvar Evento');
?>