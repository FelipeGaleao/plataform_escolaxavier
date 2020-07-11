<!doctype html>
<?php echo $this->Element('header');?>
<?php $this->assign('title', 'Cadastro'); ?>
<body class="antialiased border-top-wide border-primary d-flex flex-column">
<div class="flex-fill d-flex flex-column justify-content-center">
    <div class="container-tight py-6">
        <div class="text-center mb-4">
            <img src="/img/logo.png" height="36" alt="">
        </div>
        <?= $this->Form->create($user) ?>
        <div class="card card-md">
            <div class="card-body">
                <h2 class="mb-5 text-center">Cadastro de para acesso ao sistema da escola.xavier</h2>
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Insira seu nome" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Insira seu e-mail" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Insira sua senha" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirme sua senha</label>
                    <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirme sua senha" autocomplete="off">
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                </div>
            </div>
    </div>
        <?= $this->Form->end() ?>

        </form>
    <div class="text-center text-muted">
        Já possui conta? <a href="/login" tabindex="-1">Faça seu login</a>
    </div>
</div>
</div>
<!-- Libs JS -->
<?php
echo $this->Html->css("/libs/bootstrap/dist/js/bootstrap.bundle.min.js");
echo $this->Html->css("/dist/js/tabler.min.js");

?>

<script>
    document.body.style.display = "block"
</script>
</body>
</html>
