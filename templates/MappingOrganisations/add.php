<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingOrganisation $mappingOrganisation
 * @var \Cake\Collection\CollectionInterface|string[] $organisations
 * @var \Cake\Collection\CollectionInterface|string[] $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Mapping Organisations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingOrganisations form content">
            <?= $this->Form->create($mappingOrganisation) ?>
            <fieldset>
                <legend><?= __('Add Mapping Organisation') ?></legend>
                <?php
                    echo $this->Form->control('organisation_id', ['options' => $organisations]);
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
