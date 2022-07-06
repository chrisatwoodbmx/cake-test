<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingVisibility $mappingVisibility
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mappingVisibility->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mappingVisibility->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Mapping Visibilities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingVisibilities form content">
            <?= $this->Form->create($mappingVisibility) ?>
            <fieldset>
                <legend><?= __('Edit Mapping Visibility') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
