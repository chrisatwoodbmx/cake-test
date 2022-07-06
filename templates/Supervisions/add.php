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
            <?= $this->Html->link(__('List Supervisions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supervisions form content">
            <?= $this->Form->create($supervision) ?>
            <fieldset>
                <legend><?= __('Add Supervision') ?></legend>
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
