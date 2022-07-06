<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JobTitle $jobTitle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Job Titles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jobTitles form content">
            <?= $this->Form->create($jobTitle) ?>
            <fieldset>
                <legend><?= __('Add Job Title') ?></legend>
                <?php
                    echo $this->Form->control('job_title');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
