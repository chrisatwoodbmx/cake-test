<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expertise $expertise
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Expertise'), ['action' => 'edit', $expertise->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Expertise'), ['action' => 'delete', $expertise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expertise->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Expertises'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Expertise'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="expertises view content">
            <h3><?= h($expertise->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($expertise->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($expertise->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Display') ?></th>
                    <td><?= $expertise->display ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Mapping Expertises') ?></h4>
                <?php if (!empty($expertise->mapping_expertises)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Expertise Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($expertise->mapping_expertises as $mappingExpertises) : ?>
                        <tr>
                            <td><?= h($mappingExpertises->id) ?></td>
                            <td><?= h($mappingExpertises->expertise_id) ?></td>
                            <td><?= h($mappingExpertises->profile_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MappingExpertises', 'action' => 'view', $mappingExpertises->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MappingExpertises', 'action' => 'edit', $mappingExpertises->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MappingExpertises', 'action' => 'delete', $mappingExpertises->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingExpertises->id)]) ?>
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
