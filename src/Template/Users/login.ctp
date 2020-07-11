<?php echo $this->Element('header');?>
<?php $this->assign('title', 'Login para acesso'); ?>
<body class="antialiased border-top-wide border-primary d-flex flex-column">
<div class="flex-fill d-flex flex-column justify-content-center">
    <div class="container-tight py-6">
        <div class="text-center mb-4">
            <img src="/img/logo.png" height="36" alt="">
        </div>
        <?= $this->Form->create() ?>
        <div class="card">
            <div class="card-body">
                <h2 class="mb-5 text-center">Acesso ao sistema da escola.xavier</h2>
                <div class="mb-3">
                    <label class="form-label">Endereço de e-mail</label>
                    <input type="email" id="username" name="username" class="form-control" placeholder="Insira seu e-mail" autocomplete="off">
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        Senha
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" id="password" name="password" class="form-control"  placeholder="Senha" >
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                </div>
            </div>
    </div>
    <?= $this->Form->end() ?>
    <div class="text-center text-muted">
        Não possui conta? <a href="/cadastro" tabindex="-1">Faça seu cadastro</a>
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
