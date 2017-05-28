<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
    <div class="col-sm-3 col-lg-3">
<nav class="navbar navbar-default">
    <ul>
        <li class="heading"><?= __('Actions') ?></li>
        <li><a href="../mant/users/dashboard">Dashboard</a></li>
        <li><?= $this->Html->link(__('Create New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
</div>
<div class="col-sm-9 col-lg-9">
    <h3><?= __('Users') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('firstname') ?></th>
                <th><?= $this->Paginator->sort('lastname') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->firstname) ?></td>
                    <td><?= h($user->lastname) ?></td>
                    <td><?= h($user->email) ?></td>
                </tr>

                <td colspan="4">
                   <div class="btn btn-info"><?= $this->Html->link(__('More Detail'), ['action' => 'view', $user->id]) ?></div>
                    <div class="btn btn-info"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?></div>
                    <div class="btn btn-info"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?></div>
                    </td>
                    
                </td>

            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination justify-content-end mt-3 mr-3">
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