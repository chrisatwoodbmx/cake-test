<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supervision $supervision
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $supervision->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $supervision->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Supervisions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supervisions form content">
            <?= $this->Form->create($supervision) ?>
            <fieldset>
                <legend><?= __('Edit Supervision') ?></legend>
                <?php
                    echo $this->Form->control('supervisor');
                    echo $this->Form->control('student');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
