<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingOrganisation[]|\Cake\Collection\CollectionInterface $mappingOrganisations
 */
?>
<div class="mappingOrganisations index content">
    <?= $this->Html->link(__('New Mapping Organisation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mapping Organisations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('organisation_id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mappingOrganisations as $mappingOrganisation): ?>
                <tr>
                    <td><?= $this->Number->format($mappingOrganisation->id) ?></td>
                    <td><?= $mappingOrganisation->has('organisation') ? $this->Html->link($mappingOrganisation->organisation->name, ['controller' => 'Organisations', 'action' => 'view', $mappingOrganisation->organisation->id]) : '' ?></td>
                    <td><?= $mappingOrganisation->has('profile') ? $this->Html->link($mappingOrganisation->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingOrganisation->profile->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mappingOrganisation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mappingOrganisation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mappingOrganisation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingOrganisation->id)]) ?>
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
