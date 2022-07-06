<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingExpertise[]|\Cake\Collection\CollectionInterface $mappingExpertises
 */
?>
<div class="mappingExpertises index content">
    <?= $this->Html->link(__('New Mapping Expertise'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mapping Expertises') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('expertise_id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mappingExpertises as $mappingExpertise): ?>
                <tr>
                    <td><?= $this->Number->format($mappingExpertise->id) ?></td>
                    <td><?= $mappingExpertise->has('expertise') ? $this->Html->link($mappingExpertise->expertise->name, ['controller' => 'Expertises', 'action' => 'view', $mappingExpertise->expertise->id]) : '' ?></td>
                    <td><?= $mappingExpertise->has('profile') ? $this->Html->link($mappingExpertise->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingExpertise->profile->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mappingExpertise->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mappingExpertise->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mappingExpertise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingExpertise->id)]) ?>
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
