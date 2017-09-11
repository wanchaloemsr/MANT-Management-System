<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
    <div class="col-sm-3 col-lg-3">
        <nav class="navbar navbar-default">
            <ul class="side-nav">
            <li><a href="../mant/users/dashboard">Dashboard</a></li>
        <li class="heading"><?= __('Track') ?></li>
        <li><?= $this->Html->link(__('List Track'), ['action' => 'index']) ?></li>
    </ul>
</nav>
</div>
<div class="col-sm-9 col-lg-9">
    <?= $this->Form->create($track) ?>
    <fieldset>
        <legend><?= __('Add Track') ?></legend>
        <?php
            echo $this->Form->control('venuename');
            echo $this->Form->control('type');
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
            echo $this->Form->control('license Number');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>