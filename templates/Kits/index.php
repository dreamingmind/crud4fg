<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kit[]|\Cake\Collection\CollectionInterface $kits
 */
?>
<div class="kits index content">
    <?= $this->Html->link(__('New Kit'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Kits') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('kit_id') ?></th>
                    <th><?= $this->Paginator->sort('component_id') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kits as $kit): ?>
                <tr>
                    <td><?= $this->Number->format($kit->id) ?></td>
                    <td><?= $this->Number->format($kit->kit_id) ?></td>
                    <td><?= $kit->has('skus') ? $this->Html->link($kit->skus->name, ['controller' => 'Skus', 'action' => 'view', $kit->skus->id]) : '' ?></td>
                    <td><?= $this->Number->format($kit->quantity) ?></td>
                    <td><?= h($kit->created) ?></td>
                    <td><?= h($kit->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $kit->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kit->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kit->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
