<?php $this->assign('title', 'Matérias'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <?= $this->Form->create($subject) ?>
            <div class="card-header">
                <h4 class="card-title">Informações básicas</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="col">
                                    <label>Curso</label>
                                    <select class="form-select" id="course_id" name="course_id">
                                        <?php foreach($courses as $course){?>
                                            <option value="<?php echo $course->id;?>"><?php echo $course->name;?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="col-md-6 col-xl-12">
                                    <div class="mb-3">
                                        <label class="form-label">Nome</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Insira o nome da matéria">
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-12">
                                    <div class="mb-3">
                                        <label class="form-label">Descrição</label>
                                        <textarea type="text" class="form-control" name="description" id="description" placeholder="Insira a descrição da matéria"></textarea>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-check">
                                                <input class="form-check-input" id="active" name="active" type="checkbox">
                                                <span class="form-check-label" for="active">Matéria está ativo no sistema?</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                            <a href="#" class="btn btn-link">Cancelar</a>
                            <button type="submit" class="btn btn-primary ml-auto">Salvar matéria</button>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
