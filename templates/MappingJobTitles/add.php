<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingJobTitle $mappingJobTitle
 * @var \Cake\Collection\CollectionInterface|string[] $jobTitles
 * @var \Cake\Collection\CollectionInterface|string[] $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Mapping Job Titles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingJobTitles form content">
            <?= $this->Form->create($mappingJobTitle) ?>
            <fieldset>
                <legend><?= __('Add Mapping Job Title') ?></legend>
                <?php
                    echo $this->Form->control('job_title_id', ['options' => $jobTitles]);
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
