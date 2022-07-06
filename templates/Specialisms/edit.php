<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Specialism $specialism
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $specialism->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $specialism->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Specialisms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="specialisms form content">
            <?= $this->Form->create($specialism) ?>
            <fieldset>
                <legend><?= __('Edit Specialism') ?></legend>
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
