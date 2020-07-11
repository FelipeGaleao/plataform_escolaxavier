<?php

/* Define qual é o controlador */
$controlador = $this->request->controller;

/* Cursos */
if($controlador == "Courses"){
?>
    <div class="col-auto ml-auto d-print-none">
                <span class="d-none d-sm-inline">
                  <a href="/cursos/" class="btn btn-white">
                   Visualizar todos os cursos
                  </a>
                </span>
    <a href="/cursos/novo" class="btn btn-primary ml-3 d-none d-sm-inline-block">
        Adicionar um novo curso
    </a>
    <a href="/cursos/novo" class="btn btn-primary ml-3 d-sm-none btn-icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
    </a>
</div>
<?php }else{}?>

<?php
/* Cursos */
if($controlador == "Subjects"){
?>
<div class="col-auto ml-auto d-print-none">
                <span class="d-none d-sm-inline">
                  <a href="/materias/" class="btn btn-white">
                   Visualizar todas as matérias
                  </a>
                </span>
    <a href="/materias/novo" class="btn btn-primary ml-3 d-none d-sm-inline-block">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
        Adicionar uma nova matéria
    </a>
    <a href="/materias/novo" class="btn btn-primary ml-3 d-sm-none btn-icon" aria-label="Adicionar uma nova matéria">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
    </a>
</div>
<?php }else{}?>


<?php
/* Cursos */
if($controlador == "Grades"){
    ?>
    <div class="col-auto ml-auto d-print-none">
                <span class="d-none d-sm-inline">
                  <a href="/avaliacoes/" class="btn btn-white">
                   Visualizar todas as avaliações
                  </a>
                </span>
        <a href="/avaliacoes/novo" class="btn btn-primary ml-3 d-none d-sm-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
            Adicionar uma nova avaliação
        </a>
        <a href="/avaliacoes/novo" class="btn btn-primary ml-3 d-sm-none btn-icon"  aria-label="Adicionar uma nova avaliação">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
        </a>
    </div>
<?php }else{}?>


<?php
/* Cursos */
if($controlador == "Students"){
    ?>
    <div class="col-auto ml-auto d-print-none">
                <span class="d-none d-sm-inline">
                  <a href="/estudantes/" class="btn btn-white">
                   Visualizar todos os estudantes
                  </a>
                </span>
        <a href="/estudantes/novo" class="btn btn-primary ml-3 d-none d-sm-inline-block" >
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
            Adicionar um novo estudante
        </a>
        <a href="/estudantes/novo" class="btn btn-primary ml-3 d-sm-none btn-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
        </a>
    </div>
<?php }else{}?>

<?php
/* Cursos */
if($controlador == "Enrollments"){
    ?>
    <div class="col-auto ml-auto d-print-none">
                <span class="d-none d-sm-inline">
                  <a href="/matriculas/" class="btn btn-white">
                   Visualizar todas as matriculas
                  </a>
                </span>
        <a href="/matriculas/novo" class="btn btn-primary ml-3 d-none d-sm-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
            Adicionar uma nova matricula
        </a>
        <a href="/matriculas/novo" class="btn btn-primary ml-3 d-sm-none btn-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
        </a>
    </div>
<?php }else{}?>


<?php
/* Cursos */
if($controlador == "Schools"){
    ?>
    <div class="col-auto ml-auto d-print-none">
                <span class="d-none d-sm-inline">
                  <a href="/escolas/" class="btn btn-white">
                   Visualizar todas as escolas
                  </a>
                </span>
        <a href="/escolas/novo" class="btn btn-primary ml-3 d-none d-sm-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
            Adicionar uma nova escola
        </a>
        <a href="/escolas/novo" class="btn btn-primary ml-3 d-sm-none btn-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
        </a>
    </div>
<?php }else{}?>



<?php
/* Cursos */
if($controlador == "Dailybooks"){
    ?>
    <div class="col-auto ml-auto d-print-none">
                <span class="d-none d-sm-inline">
                  <a href="/diarios/" class="btn btn-white">
                  Visualizar todos os diários em abertos
                  </a>
                </span>
        <a href="/diarios/novo" class="btn btn-primary ml-3 d-none d-sm-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
            Adicionar um novo diário de classe
        </a>
        <a href="/diarios/novo" class="btn btn-primary ml-3 d-sm-none btn-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
        </a>
    </div>
<?php }else{}?>








