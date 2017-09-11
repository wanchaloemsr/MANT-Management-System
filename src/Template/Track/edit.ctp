<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $track->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $track->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Track'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="track form large-9 medium-8 columns content">
    <?= $this->Form->create($track) ?>
    <fieldset>
        <legend><?= __('Edit Track') ?></legend>
        <?php
            echo $this->Form->control('venuename');
            echo $this->Form->control('type');
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
            echo $this->Form->control('licenseno');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
