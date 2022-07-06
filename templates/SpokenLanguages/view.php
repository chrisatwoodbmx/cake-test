<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SpokenLanguage $spokenLanguage
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Spoken Language'), ['action' => 'edit', $spokenLanguage->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Spoken Language'), ['action' => 'delete', $spokenLanguage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $spokenLanguage->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Spoken Languages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Spoken Language'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="spokenLanguages view content">
            <h3><?= h($spokenLanguage->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($spokenLanguage->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($spokenLanguage->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Mapping Spoken Languages') ?></h4>
                <?php if (!empty($spokenLanguage->mapping_spoken_languages)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Spoken Language Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($spokenLanguage->mapping_spoken_languages as $mappingSpokenLanguages) : ?>
                        <tr>
                            <td><?= h($mappingSpokenLanguages->id) ?></td>
                            <td><?= h($mappingSpokenLanguages->spoken_language_id) ?></td>
                            <td><?= h($mappingSpokenLanguages->profile_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MappingSpokenLanguages', 'action' => 'view', $mappingSpokenLanguages->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MappingSpokenLanguages', 'action' => 'edit', $mappingSpokenLanguages->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MappingSpokenLanguages', 'action' => 'delete', $mappingSpokenLanguages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingSpokenLanguages->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
