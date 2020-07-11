<?php $this->assign('title', 'Página inicial'); ?>
<div class="content">
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-auto">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Visão geral da Escola Xavier
                    </div>
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ml-auto d-print-none">
                <span class="d-none d-sm-inline">
                </span>
                    <a href="/students/add" class="btn btn-primary ml-3 d-none d-sm-inline-block" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                        Adicionar um novo estudante
                    </a>
                    <a href="/students/add" class="btn btn-primary ml-3 d-sm-none btn-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="row row-deck row-cards">

            <?php
            /* Inicia um laço de repetição para buscar todos os cursos cadastrados no sistema */
            $courses = $this->Subjects->getAllCourses();
            foreach($courses as $course){
            ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Curso de <?php echo $course->name;?></h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter">
                            <?php $reports = $this->Subjects->getStudentsByCourse($course->id);

                            /* Inicia tods alunos para o determinado curso */

                            foreach($reports as $students){
                                foreach($students as $student){
                                }
                            ?>
                            <thead>
                            <tr>
                                <th rowspan="8" width="200px"><?php echo $course->name;?> <?php $this->Subjects->getNameOfStudentById($students['0']->student_id)?></th>
                                <th>Matéria</th>
                                <th>Notas</th>
                            </tr>

                            <?php
                            /* Inicia um laço de repetição para buscar todos os diários de classes por determinado aluno em determinado curso */
                            $reports = $this->Subjects->getReportByStudentCourseId($students['0']->student_id, $course->id);
                            /* determina que a média final, quantidade de diários (por matéria) é zero */
                            $average_final = 0;
                            $qty_report = 0;
                            /* Inicia a repetição por diário de classe */
                            /* Por fim: se a nota final < 7 = reprova; > 7: aprova; */
                            foreach($reports as $report){
                                $average_final = $average_final+$report->average_final;
                                $qty_report = $qty_report+1;
                          ?>
                            <tr>
                                <td><?php echo $this->Subjects->getNameOfSubjectById($report->subject_id);?></td>
                                <td><?php echo $report->average_final;?></td>
                            </tr>
                            <?php
                            }
                            ?>

                            <tr>
                                <td>Média Final</td>
                                <td><?php
                                    $avg_final = $average_final/$qty_report;
                                    echo round($avg_final, 2);?></td>
                            </tr>
                            <tr>
                                <td>Resultado</td>
                                <td><?php if($avg_final < 7){
                                    echo 'Reprovado' ;
                                }else{
                                    echo 'Aprovado';
                                }?> </td>
                            </tr>
                            </thead>
                            <?php }?>
                        </table>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

