<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingResearchGroup $mappingResearchGroup
 * @var string[]|\Cake\Collection\CollectionInterface $researchGroups
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mappingResearchGroup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mappingResearchGroup->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Mapping Research Groups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingResearchGroups form content">
            <?= $this->Form->create($mappingResearchGroup) ?>
            <fieldset>
                <legend><?= __('Edit Mapping Research Group') ?></legend>
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
