<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Content $content
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 * @var string[]|\Cake\Collection\CollectionInterface $customTabTitles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $content->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $content->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Contents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contents form content">
            <?= $this->Form->create($content) ?>
            <fieldset>
                <legend><?= __('Edit Content') ?></legend>
                <?php
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
                    echo $this->Form->control('overview');
                    echo $this->Form->control('research');
                    echo $this->Form->control('teaching');
                    echo $this->Form->control('biography');
                    echo $this->Form->control('honours');
                    echo $this->Form->control('memberships');
                    echo $this->Form->control('academic_positions');
                    echo $this->Form->control('engagement');
                    echo $this->Form->control('committees');
                    echo $this->Form->control('custom_tab_title_id', ['options' => $customTabTitles, 'empty' => true]);
                    echo $this->Form->control('custom_tab_content');
                    echo $this->Form->control('supervision');
                    echo $this->Form->control('past_supervision');
                    echo $this->Form->control('thesis_title');
                    echo $this->Form->control('thesis_content');
                    echo $this->Form->control('funding');
                    echo $this->Form->control('funding_sources');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
