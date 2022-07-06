<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingSpecialism[]|\Cake\Collection\CollectionInterface $mappingSpecialisms
 */
?>
<div class="mappingSpecialisms index content">
    <?= $this->Html->link(__('New Mapping Specialism'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mapping Specialisms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('specialism_id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mappingSpecialisms as $mappingSpecialism): ?>
                <tr>
                    <td><?= $this->Number->format($mappingSpecialism->id) ?></td>
                    <td><?= $mappingSpecialism->has('specialism') ? $this->Html->link($mappingSpecialism->specialism->name, ['controller' => 'Specialisms', 'action' => 'view', $mappingSpecialism->specialism->id]) : '' ?></td>
                    <td><?= $mappingSpecialism->has('profile') ? $this->Html->link($mappingSpecialism->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingSpecialism->profile->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mappingSpecialism->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mappingSpecialism->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mappingSpecialism->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingSpecialism->id)]) ?>
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
