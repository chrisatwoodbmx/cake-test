<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingActivitiesType $mappingActivitiesType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mappingActivitiesType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mappingActivitiesType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Mapping Activities Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingActivitiesTypes form content">
            <?= $this->Form->create($mappingActivitiesType) ?>
            <fieldset>
                <legend><?= __('Edit Mapping Activities Type') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
