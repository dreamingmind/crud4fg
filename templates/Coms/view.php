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
            <?= $this->Html->link(__('Edit Com'), ['action' => 'edit', $com->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Com'), ['action' => 'delete', $com->id], ['confirm' => __('Are you sure you want to delete # {0}?', $com->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Coms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Com'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coms view content">
            <h3><?= h($com->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= $com->has('address') ? $this->Html->link($com->address->name, ['controller' => 'Addresses', 'action' => 'view', $com->address->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($com->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Channel') ?></th>
                    <td><?= h($com->channel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($com->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Primary') ?></th>
                    <td><?= $this->Number->format($com->primary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Old Address Id') ?></th>
                    <td><?= $this->Number->format($com->old_address_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($com->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($com->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
