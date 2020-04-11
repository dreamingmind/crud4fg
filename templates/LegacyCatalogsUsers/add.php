<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyCatalogsUser $legacyCatalogsUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Legacy Catalogs Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyCatalogsUsers form content">
            <?= $this->Form->create($legacyCatalogsUser) ?>
            <fieldset>
                <legend><?= __('Add Legacy Catalogs User') ?></legend>
                <?php
                    echo $this->Form->control('catalog_id');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
