<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LegacyUserRegistry $legacyUserRegistry
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Legacy User Registries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legacyUserRegistries form content">
            <?= $this->Form->create($legacyUserRegistry) ?>
            <fieldset>
                <legend><?= __('Add Legacy User Registry') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('node_id');
                    echo $this->Form->control('model');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
