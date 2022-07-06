<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingLocation $mappingLocation
 * @var \Cake\Collection\CollectionInterface|string[] $locations
 * @var \Cake\Collection\CollectionInterface|string[] $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Mapping Locations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingLocations form content">
            <?= $this->Form->create($mappingLocation) ?>
            <fieldset>
                <legend><?= __('Add Mapping Location') ?></legend>
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
