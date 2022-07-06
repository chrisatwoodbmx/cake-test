<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expertise $expertise
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Expertises'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="expertises form content">
            <?= $this->Form->create($expertise) ?>
            <fieldset>
                <legend><?= __('Add Expertise') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('display');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
