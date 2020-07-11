<?php $this->assign('title', 'Escolas'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <?= $this->Form->create($school) ?>
            <div class="card-header">
                <h4 class="card-title">Informações básicas</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6 col-xl-12">
                                <div class="mb-3">
                                    <label class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Insira o nome da escola" value="<?php echo $school->name;?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-12">
                                <div class="mb-3">
                                    <label class="form-label">Descrição</label>
                                    <textarea type="text" class="form-control" name="description" id="description" placeholder="Insira a descrição da escola"><?php echo $school->description;?></textarea>
                                </div>
                                <div class="col-md-6 col-xl-12">
                                    <div class="mb-3">
                                        <label class="form-label">Endereço</label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Insira o endereço da escola" value="<?php echo $school->address;?>">
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-12">
                                    <div class="mb-3">
                                        <label class="form-check">
                                            <input class="form-check-input" id="active" name="active" type="checkbox">
                                            <span class="form-check-label" for="active">Escola está ativa no sistema?</span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary ml-auto">Salvar escola</button>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
