<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactDetail $contactDetail
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contactDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contactDetail->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Contact Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactDetails form content">
            <?= $this->Form->create($contactDetail) ?>
            <fieldset>
                <legend><?= __('Edit Contact Detail') ?></legend>
                <?php
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
                    echo $this->Form->control('email');
                    echo $this->Form->control('telephone');
                    echo $this->Form->control('personal_website');
                    echo $this->Form->control('blog');
                    echo $this->Form->control('linkedin');
                    echo $this->Form->control('twitter_username');
                    echo $this->Form->control('google_scholar');
                    echo $this->Form->control('acadamia');
                    echo $this->Form->control('research_gate');
                    echo $this->Form->control('orcid');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
