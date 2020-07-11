<?php $this->assign('title', 'Editando um novo estudante'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <?= $this->Form->create($student) ?>
            <div class="card-header">
                <h4 class="card-title">Informações básicas</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="col">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Insira o nome do estudante" value="<?php echo $student->name;?>">
                                </div>
                                <div class="col">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Insira o email do estudante" value="<?php echo $student->email;?>">
                                </div>
                                <div class="col">
                                    <label>CPF</label>
                                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Insira o CPF do estudante" value="<?php echo $student->cpf;?>">
                                </div>
                                <div class="col-md-6 col-xl-12">
                                    <div class="mb-3">
                                        <label class="form-label">Selecione a escola</label>
                                        <select class="form-select" id="school_id" name="school_id">
                                            <?php foreach($schools as $school){?>
                                                <option value="<?php echo $school->id;?>"><?php echo $school->name;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-12">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-check">
                                                <input class="form-check-input" id="active" name="active" type="checkbox">
                                                <span class="form-check-label" for="active">Estudante está ativo no sistema?</span>
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
                            <button type="submit" class="btn btn-primary ml-auto">Salvar estudante</button>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
