<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kit $kit
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kit->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Kits'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kits form content">
            <?= $this->Form->create($kit) ?>
            <fieldset>
                <legend><?= __('Edit Kit') ?></legend>
                <?php
                    echo $this->Form->control('kit_id');
                    echo $this->Form->control('component_id', ['options' => $skus]);
                    echo $this->Form->control('quantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
