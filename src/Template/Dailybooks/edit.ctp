<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<?php
$this->assign('title', 'Diário de classe');
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School[]|\Cake\Collection\CollectionInterface $schools
 */
?>
<?php
/* Pesquisa todas as matriculas por curso e monta um laço de repetição*/
$enrollments = $this->Subjects->getAllEnrollmentsByCourseId($dailybook->course_id);
foreach($enrollments as $enrollment){
    $average_final = $this->Subjects->getAverageByEnrollmentById($enrollment->id);
    $status_average = $this->Subjects->getStatusApprovalByEnrollment($enrollment->id);
    /* Caso a matéria seja diferente da matéria do diário de classe, ele pula */
    if($enrollment->subject_id != $dailybook->subject_id) {
        continue;
    }
    /* Busca todas os boletins por estudante e matéria */
    $diarios = $this->Subjects->getReportByStudentSubjectId($enrollment->student_id, $enrollment->subject_id);
    ?>
    <div class="row">
    <div class="col-6">
<h2><?php echo $this->Subjects->getNameOfStudentById($enrollment->student_id);?></h2>
    <h5><?php echo $this->Subjects->getNameOfCourseById($enrollment->course_id);?></h5>
        <h5><?php echo $this->Subjects->getNameOfSubjectById($enrollment->subject_id);?></h5>
        <a class="badge badge-info text-white"><?php echo $enrollment->status; ?></a>
    </div>
        <div class="col-6">
            <h3><Strong>Média final: </Strong> <?php echo $average_final;?></h3>
            <a class="btn btn-success text-white"> <?php echo $status_average;?></a>
            <?php

            /* Se não houver diário, exibe botão para lançar nota.
            Ao acionar o botão, ele irá fazer AJAX com GET no Reports, montando a nota final no boletim e fechando o diário
            */
            if(empty($diarios)){
                ?>
            <button id="fechar_diario_<?php echo $enrollment->id;?>" class="btn btn-success text-white" onClick="fechar_diario(<?php echo $enrollment->student_id;?>,<?php echo $enrollment->subject_id;?>,<?php echo $enrollment->course_id;?>,<?php echo $average_final;?>, <?php echo $enrollment->id;?>)">Fechar diário</button>
<?php
 }else{?>
                <button id="fechar_diario_<?php echo $enrollment->id;?>" class="btn btn-warning text-white">Diário fechado</button>

                <?php
 }?>
        </div>
    </div>
<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
            <tr>
                <th>Título da avaliação</th>
                <th>Nota</th>
                <th>Data</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            /* Laço de repetição para todas as avaliações registradas para o aluno nesta matéria */
            foreach($enrollment->grades as $grade) {
                ?>
                <td>
                    <div><?php echo $grade->name;?></div>
                </td>
        <td>
            <div><?php echo $grade->grade_value;?></div>
        </td>
        <td>
            <div>       <?php echo $grade->modified;?></div
        </td>
                <td>
                    <div><a href="/avaliacoes/editar/<?php echo $grade->id;?>">Editar nota</a></div>
                </td>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php }?>
