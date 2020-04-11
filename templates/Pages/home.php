<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

    <?= $this->Html->css('milligram.min.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container text-center">
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <p><a href="http://dev.crud4fg.com/coms">Coms</a></p>
                <p><a href="http://dev.crud4fg.com/error">Error</a></p>
                <p><a href="http://dev.crud4fg.com/images">Images</a></p>
                <p><a href="http://dev.crud4fg.com/Inventories">Inventories</a></p>
                <p><a href="http://dev.crud4fg.com/Items">Items</a></p>
                <p><a href="http://dev.crud4fg.com/Kits">Kits</a></p>
                <p><a href="http://dev.crud4fg.com/LegacyAddresses">LegacyAddresses</a></p>
                <p><a href="http://dev.crud4fg.com/LegacyBudgets">LegacyBudgets</a></p>
                <p><a href="http://dev.crud4fg.com/LegacyCatalogs">LegacyCatalogs</a></p>
                <p><a href="http://dev.crud4fg.com/LegacyCatalogsUsers">LegacyCatalogsUsers</a></p>
                <p><a href="http://dev.crud4fg.com/LegacyCustomers">LegacyCustomers</a></p>
                <p><a href="http://dev.crud4fg.com/LegacyImages">LegacyImages</a></p>
                <p><a href="http://dev.crud4fg.com/LegacyItems">LegacyItems</a></p>
                <p><a href="http://dev.crud4fg.com/LegacyObservers">LegacyObservers</a></p>
                <p><a href="http://dev.crud4fg.com/LegacyPreferences">LegacyPreferences</a></p>
                <p><a href="http://dev.crud4fg.com/LegacyUserRegistries">LegacyUserRegistries</a></p>
                <p><a href="http://dev.crud4fg.com/LegacyUsers">LegacyUsers</a></p>
                <p><a href="http://dev.crud4fg.com/LegacyUsersUsers">LegacyUsersUsers</a></p>
                <p><a href="http://dev.crud4fg.com/Pages">Pages</a></p>
                <p><a href="http://dev.crud4fg.com/People">People</a></p>
                <p><a href="http://dev.crud4fg.com/Preferences">Preferences</a></p>
                <p><a href="http://dev.crud4fg.com/ShippingAccounts">ShippingAccounts</a></p>
                <p><a href="http://dev.crud4fg.com/Skus">Skus</a></p>
                <p><a href="http://dev.crud4fg.com/Stores">Stores</a></p>
                <p><a href="http://dev.crud4fg.com/TenantContracts">TenantContracts</a></p>
                <p><a href="http://dev.crud4fg.com/Tenants">Tenants</a></p>
                <p><a href="http://dev.crud4fg.com/Users">Users</a></p>
                <p><a href="http://dev.crud4fg.com/Warehouses">Warehouses</a></p>
                <p><a href="http://dev.crud4fg.com/Addresses">Addresses</a></p>
            </div>
        </div>
    </main>
</body>
</html>
