<?php
$this->assign('title', 'Diários de classes');
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School[]|\Cake\Collection\CollectionInterface $schools
 */
?>
<div class="card" style="padding-left: 30px;">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
            <tr>
                <th>Curso</th>
                <th>Matéria</th>
                <th>Última modificação</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>

            <tr>
    <?php
    foreach($dailybooks as $dailybook){
    ?>
                <td>
                    <div class="d-flex lh-sm py-1 align-items-center">
                        <div class="flex-fill">
                            <div class="strong"><?php echo $dailybook->course->name;?></div>
                            <div class="text-muted text-h5"><a href="#" class="text-reset"><?php echo $dailybook->subject->name;?></a></div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex lh-sm py-1 align-items-center">
                        <div class="flex-fill">
                            <div class="strong"><?php echo $dailybook->subject->name;?></div>
                        </div>
                    </div>
                </td>
                <td>
                    <div><?php echo $dailybook->modified;?></div>
                </td>
                <td>
                    <a href="/diarios/editar/<?php echo $dailybook->id;?>">Fechar diário</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
