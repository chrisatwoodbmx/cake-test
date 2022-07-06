<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 * @var string[]|\Cake\Collection\CollectionInterface $titles
 * @var string[]|\Cake\Collection\CollectionInterface $postNominals
 * @var string[]|\Cake\Collection\CollectionInterface $pronouns
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Profiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profiles form content">
            <?= $this->Form->create($profile) ?>
            <fieldset>
                <legend><?= __('Edit Profile') ?></legend>
                <?php
                    echo $this->Form->control('uuid');
                    echo $this->Form->control('username');
                    echo $this->Form->control('profile_type');
                    echo $this->Form->control('visibility_id');
                    echo $this->Form->control('title_id', ['options' => $titles]);
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('middle_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('known_as');
                    echo $this->Form->control('is_media_expert');
                    echo $this->Form->control('is_welsh_speaker');
                    echo $this->Form->control('available_supervise');
                    echo $this->Form->control('archived');
                    echo $this->Form->control('inactive');
                    echo $this->Form->control('post_nominal_id', ['options' => $postNominals, 'empty' => true]);
                    echo $this->Form->control('pronoun_id', ['options' => $pronouns, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
