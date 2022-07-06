<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingLocation $mappingLocation
 * @var string[]|\Cake\Collection\CollectionInterface $locations
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mappingLocation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mappingLocation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Mapping Locations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingLocations form content">
            <?= $this->Form->create($mappingLocation) ?>
            <fieldset>
                <legend><?= __('Edit Mapping Location') ?></legend>
                <?php
                    echo $this->Form->control('location_id', ['options' => $locations]);
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
                    echo $this->Form->control('room');
                    echo $this->Form->control('floor');
                    echo $this->Form->control('office_hours');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
