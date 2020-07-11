# Plataforma da Escola Xavier

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

Desenvolvido utilizando [CakePHP](https://cakephp.org) 3.x e MySQL.

Maiores informações podem ser encontradas em: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Instalação

1. Utilizar o [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Executar o comando `composer install` na raiz do diretório.
Após execução do composer deverá ser feito a importação do banco de dados que está em `root/database/` para o banco de dados.
3. Em seguida, configurar o arquivo `config/app.php` para o banco de dados a ser utilizado. A configuração está nas linhas 250 a 260.
4. Para executar o servidor, basta digitar no terminal `bin/cake server -p 8765`.
5. O servidor estará rodando na porta 8765 do localhost! :)
Acesse http://localhost:8765.

```bash
bin/cake server -p 8765
```

## Como pensei?

Para o desenvolvimento da aplicação, eu imaginei que fosse necessário um sistema acadêmico - nesse caso, com o CakePHP eu conseguiria criar um CRUD de forma rápida e simples.
Então, desenvolvi o banco de dados com as seguintes tabelas.

Tabelas principais: Elas terão as dimensões do nosso banco, onde iremos utilizar para alimentar outras tabelas. É importante que ela não seja deletada, são elas:
Estudantes, Matérias, Cursos, Escolas.
`Students, Subjects, Courses, Schools`
Em seguida será necessário criar as tabelas fatos para registrar as matriculas, avaliações, diários de classe (pensei em incluir também faltas) e por fim, boletins. 
`Grades`, `Enrollments`, `Reports`, `Dailybooks`.

## Como funciona?

Inicialmente deve ser cadastrado uma escola, em seguida deverá ser cadastrado todos os cursos para essa escola. Em seguida, você deverá cadastrar todos as matérias para o curso criado.
Em seguida, você poderá fazer a matricula dos estudantes em cada matéria, no caso, no mínimo três matérias por curso. 
Por fim, você poderá lançar as notas (seja trabalho ou avaliação). Todas as avaliações serão exibidas no Diário de Classe (Dailybooks). 
Será através dele que a tabela de Boletins `reports` será alimentada, onde servirá de fonte para a página inicial - nesse caso, nosso dashboard, indicar se o aluno obteve sucesso ou reprovou na matéria. 

## Pontos a melhorar
Com o uso de Foreign Keys, não foi possível configurar todos os deletes do CRUD em tempo hábil, portanto, isso será um requisito a melhorar. 
Também devo melhorar a usuabilidade: utilizar modals para operações como vinculação de matricula, adicionar novas avaliações/trabalhos e por fim, criação de matérias.

Agradeço pela atenção e pelo tempo disponibilizado.
