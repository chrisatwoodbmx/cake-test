<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HistoryAudit $historyAudit
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit History Audit'), ['action' => 'edit', $historyAudit->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete History Audit'), ['action' => 'delete', $historyAudit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historyAudit->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List History Audits'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New History Audit'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="historyAudits view content">
            <h3><?= h($historyAudit->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Table') ?></th>
                    <td><?= h($historyAudit->table) ?></td>
                </tr>
                <tr>
                    <th><?= __('Field') ?></th>
                    <td><?= h($historyAudit->field) ?></td>
                </tr>
                <tr>
                    <th><?= __('Old') ?></th>
                    <td><?= h($historyAudit->old) ?></td>
                </tr>
                <tr>
                    <th><?= __('New') ?></th>
                    <td><?= h($historyAudit->new) ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $historyAudit->has('profile') ? $this->Html->link($historyAudit->profile->id, ['controller' => 'Profiles', 'action' => 'view', $historyAudit->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($historyAudit->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Record Id') ?></th>
                    <td><?= $this->Number->format($historyAudit->record_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($historyAudit->created) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
