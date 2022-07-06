<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingTeam[]|\Cake\Collection\CollectionInterface $mappingTeams
 */
?>
<div class="mappingTeams index content">
    <?= $this->Html->link(__('New Mapping Team'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mapping Teams') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('team_id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mappingTeams as $mappingTeam): ?>
                <tr>
                    <td><?= $this->Number->format($mappingTeam->id) ?></td>
                    <td><?= $mappingTeam->has('team') ? $this->Html->link($mappingTeam->team->id, ['controller' => 'Teams', 'action' => 'view', $mappingTeam->team->id]) : '' ?></td>
                    <td><?= $mappingTeam->has('profile') ? $this->Html->link($mappingTeam->profile->id, ['controller' => 'Profiles', 'action' => 'view', $mappingTeam->profile->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mappingTeam->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mappingTeam->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mappingTeam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingTeam->id)]) ?>
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
