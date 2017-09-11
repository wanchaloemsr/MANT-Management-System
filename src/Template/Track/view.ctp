<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
    <div class="col-sm-3 col-lg-3">
        <nav class="navbar navbar-default">
    <ul class="side-nav">
    <li><a href="..../mant/users/dashboard">Dashboard</a></li>
        <li class="heading"><?= __('Track') ?></li>
        <li><?= $this->Html->link(__('Edit Track'), ['action' => 'edit', $track->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Track'), ['action' => 'delete', $track->id], ['confirm' => __('Are you sure you want to delete # {0}?', $track->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Track'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Track'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
</div>
<div class="col-sm-9 col-lg-9">
    <h3><?= h($track->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Venuename') ?></th>
            <td><?= h($track->venuename) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($track->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= h($track->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= h($track->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Licenseno') ?></th>
            <td><?= h($track->licenseno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($track->id) ?></td>
        </tr>
    </table>
</div>
</div>