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
                <li class="heading"><?= __('Users') ?></li>
                <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
                <li class="heading"><?= __('Track') ?></li>
                <li><a href="../Track">Display Tracks</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-sm-3 col-lg-3">
        
    </div>
</div>