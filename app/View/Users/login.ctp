<div class="users form" align="center" style="padding-top: 12px">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <h3><?php echo 'Acceso de Administrador'; ?></h3>
    <?php
        echo $this->Form->input('username', array('type' => 'text', 'label'=>'Username:'));
        echo $this->Form->input('password', array('type' => 'password', 'label'=>'Password:'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>