<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Com $com
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $com->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $com->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Coms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coms form content">
            <?= $this->Form->create($com) ?>
            <fieldset>
                <legend><?= __('Edit Com') ?></legend>
                <?php
                    echo $this->Form->control('address_id', ['options' => $addresses]);
                    echo $this->Form->control('type');
                    echo $this->Form->control('channel');
                    echo $this->Form->control('primary');
                    echo $this->Form->control('old_address_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
