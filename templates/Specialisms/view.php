<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Specialism $specialism
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Specialism'), ['action' => 'edit', $specialism->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Specialism'), ['action' => 'delete', $specialism->id], ['confirm' => __('Are you sure you want to delete # {0}?', $specialism->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Specialisms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Specialism'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="specialisms view content">
            <h3><?= h($specialism->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($specialism->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($specialism->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Display') ?></th>
                    <td><?= $specialism->display ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Mapping Specialisms') ?></h4>
                <?php if (!empty($specialism->mapping_specialisms)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Specialism Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($specialism->mapping_specialisms as $mappingSpecialisms) : ?>
                        <tr>
                            <td><?= h($mappingSpecialisms->id) ?></td>
                            <td><?= h($mappingSpecialisms->specialism_id) ?></td>
                            <td><?= h($mappingSpecialisms->profile_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MappingSpecialisms', 'action' => 'view', $mappingSpecialisms->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MappingSpecialisms', 'action' => 'edit', $mappingSpecialisms->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MappingSpecialisms', 'action' => 'delete', $mappingSpecialisms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mappingSpecialisms->id)]) ?>
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
