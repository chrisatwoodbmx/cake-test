<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingResearchGroup[]|\Cake\Collection\CollectionInterface $mappingResearchGroups
 */
?>
<div class="mappingResearchGroups index content">
    <?= $this->Html->link(__('New Mapping Research Group'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mapping Research Groups') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('research_group_id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mappingResearchGroups as $mappingResearchGroup): ?>
                <tr>
                    <td><?= $this->Number->format($mappingResearchGroup->id) ?></td>
                    <td><?= $mappingResearchGroup->has('research_group') ? $this->Html->link($mappingResearchGroup->research_group->name, ['controller' => 'ResearchGroups', 'action' => 'view', $mappingResearchGroup->research_group->id]) : '' ?></td>
                    <td><?= $mappingResearchGroup->has('profile') ? $this->Html->link($mappingResearchGroup->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingResearchGroup->profile->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mappingResearchGroup->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mappingResearchGroup->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mappingResearchGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingResearchGroup->id)]) ?>
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
