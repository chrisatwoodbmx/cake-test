<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingLocation[]|\Cake\Collection\CollectionInterface $mappingLocations
 */
?>
<div class="mappingLocations index content">
    <?= $this->Html->link(__('New Mapping Location'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mapping Locations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('location_id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th><?= $this->Paginator->sort('room') ?></th>
                    <th><?= $this->Paginator->sort('floor') ?></th>
                    <th><?= $this->Paginator->sort('office_hours') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mappingLocations as $mappingLocation): ?>
                <tr>
                    <td><?= $this->Number->format($mappingLocation->id) ?></td>
                    <td><?= $mappingLocation->has('location') ? $this->Html->link($mappingLocation->location->name, ['controller' => 'Locations', 'action' => 'view', $mappingLocation->location->id]) : '' ?></td>
                    <td><?= $mappingLocation->has('profile') ? $this->Html->link($mappingLocation->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingLocation->profile->id]) : '' ?></td>
                    <td><?= h($mappingLocation->room) ?></td>
                    <td><?= h($mappingLocation->floor) ?></td>
                    <td><?= h($mappingLocation->office_hours) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mappingLocation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mappingLocation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mappingLocation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingLocation->id)]) ?>
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
