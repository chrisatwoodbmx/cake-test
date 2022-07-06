<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingResearchGroup $mappingResearchGroup
 * @var \Cake\Collection\CollectionInterface|string[] $researchGroups
 * @var \Cake\Collection\CollectionInterface|string[] $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Mapping Research Groups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingResearchGroups form content">
            <?= $this->Form->create($mappingResearchGroup) ?>
            <fieldset>
                <legend><?= __('Add Mapping Research Group') ?></legend>
                <?php
                    echo $this->Form->control('research_group_id', ['options' => $researchGroups]);
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
