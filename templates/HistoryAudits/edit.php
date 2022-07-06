<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HistoryAudit $historyAudit
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $historyAudit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $historyAudit->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List History Audits'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="historyAudits form content">
            <?= $this->Form->create($historyAudit) ?>
            <fieldset>
                <legend><?= __('Edit History Audit') ?></legend>
                <?php
                    echo $this->Form->control('table');
                    echo $this->Form->control('field');
                    echo $this->Form->control('record_id');
                    echo $this->Form->control('old');
                    echo $this->Form->control('new');
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
