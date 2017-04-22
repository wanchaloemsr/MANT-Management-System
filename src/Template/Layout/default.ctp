<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->Html->css('bootstrap.css') ?>

    <?= $this->Html->css('mant.css') ?>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">

            <div class="navbar-header navbar-center">
              <a class="navbar-brand" href="#">MANT</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <i class="glyphicon glyphicon-menu-hamburger"></i>
            </button>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php if($loggedIn) : ?>
                    <li><?= $this->Html->link('Register', ['controller' => 'users', 'action' => 'register']);?></li>
                <?php else : ?>
                    <li><?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']);?></li>
                <?php endif ; ?>
            </ul>
        </div>
    </div>
</nav>




<?= $this->Flash->render() ?>
<div class="container clearfix">
    <?= $this->fetch('content') ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<?php echo $this->Html->script('bootstrap.min.js'); ?>
<footer>
</footer>
</body>
</html>
