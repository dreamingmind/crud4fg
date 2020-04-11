<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $images
 */
?>
<div class="images index content">
    <?= $this->Html->link(__('New Image'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Images') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('img_file') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('alt') ?></th>
                    <th><?= $this->Paginator->sort('dir') ?></th>
                    <th><?= $this->Paginator->sort('sku_id') ?></th>
                    <th><?= $this->Paginator->sort('item_id') ?></th>
                    <th><?= $this->Paginator->sort('person_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('old_image_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($images as $image): ?>
                <tr>
                    <td><?= $this->Number->format($image->id) ?></td>
                    <td><?= h($image->img_file) ?></td>
                    <td><?= h($image->title) ?></td>
                    <td><?= h($image->alt) ?></td>
                    <td><?= h($image->dir) ?></td>
                    <td><?= $image->has('skus') ? $this->Html->link($image->skus->name, ['controller' => 'Skus', 'action' => 'view', $image->skus->id]) : '' ?></td>
                    <td><?= $image->has('item') ? $this->Html->link($image->item->name, ['controller' => 'Items', 'action' => 'view', $image->item->id]) : '' ?></td>
                    <td><?= $image->has('person') ? $this->Html->link($image->person->id, ['controller' => 'People', 'action' => 'view', $image->person->id]) : '' ?></td>
                    <td><?= h($image->created) ?></td>
                    <td><?= h($image->modified) ?></td>
                    <td><?= $this->Number->format($image->old_image_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $image->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $image->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?>
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
