<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HistoryAudit $historyAudit
 * @var \Cake\Collection\CollectionInterface|string[] $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List History Audits'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="historyAudits form content">
            <?= $this->Form->create($historyAudit) ?>
            <fieldset>
                <legend><?= __('Add History Audit') ?></legend>
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
