<?php $this->assign('title', 'Matriculas'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <?= $this->Form->create($enrollment) ?>
            <div class="card-header">
                <h4 class="card-title">Efetuando matricula</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="col">
                                    <label>Curso</label>
                                    <select class="form-select" id="course_id" name="course_id">
                                        <?php foreach($courses_select as $cou_select){?>
                                            <option value="<?php echo $cou_select->id;?>"><?php echo $cou_select->name;?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Matéria</label>
                                    <select class="form-select" id="subject_id" name="subject_id">
                                        <?php foreach($subjects_select as $sub_select){?>
                                            <option value="<?php echo $sub_select->id;?>"><?php echo $sub_select->name;?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Estudante</label>
                                    <select class="form-select" id="student_id" name="student_id">
                                        <?php foreach($students_select as $stu_select){?>
                                            <option value="<?php echo $stu_select->id;?>"><?php echo $stu_select->name;?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Situação da matricula</label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="" disabled selected>Selecione</option>
                                        <option>Pendente</option>
                                        <option>Em andamento</option>
                                        <option>Trancada</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                            <a href="#" class="btn btn-link">Cancelar</a>
                            <button type="submit" class="btn btn-primary ml-auto">Salvar matricula</button>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
