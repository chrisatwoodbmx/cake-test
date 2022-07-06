<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HistoryAudit[]|\Cake\Collection\CollectionInterface $historyAudits
 */
?>
<div class="historyAudits index content">
    <?= $this->Html->link(__('New History Audit'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('History Audits') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('table') ?></th>
                    <th><?= $this->Paginator->sort('field') ?></th>
                    <th><?= $this->Paginator->sort('record_id') ?></th>
                    <th><?= $this->Paginator->sort('old') ?></th>
                    <th><?= $this->Paginator->sort('new') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($historyAudits as $historyAudit): ?>
                <tr>
                    <td><?= $this->Number->format($historyAudit->id) ?></td>
                    <td><?= h($historyAudit->table) ?></td>
                    <td><?= h($historyAudit->field) ?></td>
                    <td><?= $this->Number->format($historyAudit->record_id) ?></td>
                    <td><?= h($historyAudit->old) ?></td>
                    <td><?= h($historyAudit->new) ?></td>
                    <td><?= $historyAudit->has('profile') ? $this->Html->link($historyAudit->profile->id, ['controller' => 'Profiles', 'action' => 'view', $historyAudit->profile->id]) : '' ?></td>
                    <td><?= h($historyAudit->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $historyAudit->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $historyAudit->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $historyAudit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historyAudit->id)]) ?>
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
