<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ResearchGroup $researchGroup
 * @var \Cake\Collection\CollectionInterface|string[] $parentResearchGroups
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Research Groups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="researchGroups form content">
            <?= $this->Form->create($researchGroup) ?>
            <fieldset>
                <legend><?= __('Add Research Group') ?></legend>
                <?php
                    echo $this->Form->control('parent_id', ['options' => $parentResearchGroups, 'empty' => true]);
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
