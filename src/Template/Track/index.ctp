<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
    <div class="col-sm-3 col-lg-3">
        <nav class="navbar navbar-default">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><a href="../mant/users/dashboard">Dashboard</a></li>
        <li><?= $this->Html->link(__('New Track'), ['action' => 'add']) ?></li>

    </ul>
</nav>
</div>

<div class="col-sm-9 col-lg-9">
    <h3><?= __('Track') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('venuename') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('licenseno') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($track as $track): ?>
            <tr>
                <td><?= $this->Number->format($track->id) ?></td>
                <td><?= h($track->venuename) ?></td>
                <td><?= h($track->type) ?></td>
                <td><?= h($track->latitude) ?></td>
                <td><?= h($track->longitude) ?></td>
                <td><?= h($track->licenseno) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $track->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $track->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $track->id], ['confirm' => __('Are you sure you want to delete # {0}?', $track->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
</div>