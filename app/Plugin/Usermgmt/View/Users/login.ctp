
<div class="actions">
    <ul>
       <li>
           <a class="togglebox" href="javascript:void(0)">Forgot Passowrd?</a>
       </li>

       <li><?php echo $this->Html->link(__('Register'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
    </ul>
</div>

<div class="users form">
    <div class="login-box">
        <?php echo $this->Session->flash('auth'); ?>
        <?php echo $this->Form->create('User'); ?>
        <fieldset>
            <legend>
                <?php echo __('Please enter your username and password'); ?>
            </legend>
            <?php echo $this->Form->input('username');
            echo $this->Form->input('password');
            ?>
        </fieldset>
        <?php echo $this->Form->end(__('Login')); ?>
    </div>

    <div class="forgotpass-box" style="display: none">
        <?php echo $this->Session->flash('auth'); ?>
        <?php echo $this->Form->create('User'); ?>
        <fieldset>
            <legend>
                <?php echo __('Please enter Email Address'); ?>
            </legend>
            <?php echo $this->Form->input('email');?>


        </fieldset>
        <?php echo $this->Form->end(__('Login')); ?>
    </div>

</div>
