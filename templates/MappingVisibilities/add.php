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
            <?= $this->Html->link(__('List Mapping Visibilities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingVisibilities form content">
            <?= $this->Form->create($mappingVisibility) ?>
            <fieldset>
                <legend><?= __('Add Mapping Visibility') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
