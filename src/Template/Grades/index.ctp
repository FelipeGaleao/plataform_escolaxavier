<?php
$this->assign('title', 'Avaliações');
?>
<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
            <tr>
                <th>Nome do curso</th>
                <th>Nome da matéria</th>
                <th>Nome do estudante</th>
                <th>Avaliação</th>
                <th>Nota</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($grades as $grade){
                ?>
                <tr>
                    <td>
                        <div class="d-flex lh-sm py-1 align-items-center">
                            <div class="flex-fill">
                                <div class="strong"><?php echo $this->Subjects->getNameOfCoursebyId($grade->enrollment->course_id);?></div>
                                <div class="text-muted text-h5"><a href="#" class="text-reset"><?php echo $grade->enrollment->id;?></a></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div><?php echo $this->Subjects->getNameOfSubjectbyId($grade->enrollment->subject_id);?></div>
                    </td>
                    <td>
                        <div><?php echo $this->Subjects->getNameOfStudentbyId($grade->enrollment->student_id);?></div>
                    </td>
                    <td>
                        <div><?php echo $grade->name;?></div>
                    </td>
                    <td>
                        <div><?php echo $grade->grade_value;?></div>
                    </td>
                    <td class="text-muted">
                        <a href="/avaliacoes/apagar/<?php echo $grade->id;?>">Remover</a>
                    </td>
                    <td>
                        <a href="/avaliacoes/editar/<?php echo $grade->id;?>">Editar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
