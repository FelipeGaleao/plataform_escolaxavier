<?php
$this->assign('title', 'Matérias');
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
                <th>Matéria</th>
                <th>Descrição</th>
                <th>Curso</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($subjects as $subject){
                ?>
                <tr>
                    <td>
                        <div class="d-flex lh-sm py-1 align-items-center">
                            <div class="flex-fill">
                                <div class="strong"><?php echo $subject->name;?></div>
                                <div class="text-muted text-h5"><a href="#" class="text-reset"><?php echo $subject->address;?></a></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div><?php echo $subject->description;?></div>
                    </td>
                    <td>
                        <div><?php echo $this->Subjects->getNameOfCoursebyId($subject->course_id);?></div>
                    </td>
                    <td class="text-muted">
                        <a href="/materias/apagar/<?php echo $subject->id;?>">Remover *</a>
                    </td>
                    <td>
                        <a href="/materias/editar/<?php echo $subject->id;?>">Editar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <hr>
        <p style="margin-left: 40px">*: Certifique-se que não há matrículas para essa matéria</p>
    </div>
</div>
