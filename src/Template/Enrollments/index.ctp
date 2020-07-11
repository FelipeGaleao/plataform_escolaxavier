<?php
$this->assign('title', 'Matriculas');
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School[]|\Cake\Collection\CollectionInterface $schools
 */
?>
<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
            <tr>
                <th>Código da matricula</th>
                <th>Estudante</th>
                <th>Curso</th>
                <th>Matéria</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($enrollments as $enrollment){
                ?>
                <tr>
                    <td>
                        <div class="d-flex lh-sm py-1 align-items-center">
                            <div class="flex-fill">
                                <div class="strong"><?php echo $enrollment->id;?></div>
                                <div class="text-muted text-h5"><a href="#" class="text-reset"><?php echo $enrollment->student->name;?></a></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div><?php echo $enrollment->student->name;?></div>
                    </td>
                    <td>
                        <div><?php echo $enrollment->course->name;?></div>
                    </td>
                    <td>
                        <div><?php echo $enrollment->subject->name;?></div>
                    </td>
                    <td>
                        <a href="/matriculas/editar/<?php echo $enrollment->id;?>">Editar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
