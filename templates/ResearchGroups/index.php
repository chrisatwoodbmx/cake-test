<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ResearchGroup[]|\Cake\Collection\CollectionInterface $researchGroups
 */
?>
<div class="researchGroups index content">
    <?= $this->Html->link(__('New Research Group'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Research Groups') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('parent_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($researchGroups as $researchGroup): ?>
                <tr>
                    <td><?= $this->Number->format($researchGroup->id) ?></td>
                    <td><?= $researchGroup->has('parent_research_group') ? $this->Html->link($researchGroup->parent_research_group->name, ['controller' => 'ResearchGroups', 'action' => 'view', $researchGroup->parent_research_group->id]) : '' ?></td>
                    <td><?= h($researchGroup->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $researchGroup->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $researchGroup->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $researchGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $researchGroup->id)]) ?>
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
