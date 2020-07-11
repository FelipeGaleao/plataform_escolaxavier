<?php
$this->assign('title', 'Avaliações');
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <?= $this->Form->create($grade) ?>
            <div class="card-header">
                <h4 class="card-title">Adicionando uma avaliação</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col">
                                <select class="form-select" id="enrollment_id" name="enrollment_id">
                                    <option value="" selected disabled>Aluno - (Cód Mat) - Curso</option>
                                    <?php foreach($enrollments as $enrollment){?>
                                        <option
                                            <?php if($enrollment->id == $grade->enrollment_id){
                                                echo 'selected';
                                            }else{
                                            }?>

                                            value="<?php echo $enrollment->id;?>"><?php echo $this->Subjects->getNameOfStudentById($enrollment->student_id);?> - <?php echo $this->Subjects->getNameOfSubjectById($enrollment->subject_id);?>  -  (Cód Mat: <?php echo $enrollment->id;?>) - <?php echo $this->Subjects->getNameOfCoursebyId($enrollment->course_id);?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-xl-12">
                                <div class="mb-3">
                                    <label class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Insira o nome da avaliação" value="<?php echo $grade->name;?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-12">
                                <div class="mb-3">
                                    <label class="form-label">Descrição</label>
                                    <textarea type="text" class="form-control" name="description" id="description" placeholder="Insira a descrição da avaliação"><?php echo $grade->description;?></textarea>
                                </div>
                                <div class="col-md-6 col-xl-12">
                                    <div class="mb-3">
                                        <label class="form-label">Valor da nota</label>
                                        <input type="number" step="any" class="form-control" name="grade_value" id="grade_value" placeholder="Valor da nota" value="<?php echo $grade->grade_value;?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary ml-auto">Salvar avaliação</button>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
