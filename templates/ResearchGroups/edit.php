<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ResearchGroup $researchGroup
 * @var string[]|\Cake\Collection\CollectionInterface $parentResearchGroups
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $researchGroup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $researchGroup->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Research Groups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="researchGroups form content">
            <?= $this->Form->create($researchGroup) ?>
            <fieldset>
                <legend><?= __('Edit Research Group') ?></legend>
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
