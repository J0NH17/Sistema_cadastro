# Sistema Acadêmico | PHP + MySQL

Projeto educacional de desenvolvimento Web criado para demonstrar, na prática, a integração entre **PHP, MySQL, HTML e Bootstrap**, por meio de um sistema de gerenciamento de matrículas de alunos.

O projeto foi trabalhado em sala de aula, com explicações passo a passo e códigos comentados, permitindo compreender desde a conexão com o banco de dados até a execução das principais operações de um CRUD.

## Objetivo do projeto

Desenvolver uma aplicação Web que permita cadastrar, consultar, atualizar e excluir registros de alunos e seus respectivos cursos, utilizando PHP para o processamento no servidor e MySQL para o armazenamento das informações.

A proposta também busca consolidar conceitos de programação, formulários HTML, consultas SQL e organização de arquivos em aplicações Web.

## Tecnologias utilizadas

- **HTML5:** estruturação das páginas e formulários.
- **PHP:** processamento das requisições e regras da aplicação.
- **MySQL:** armazenamento e gerenciamento dos dados.
- **SQL:** operações de inserção, consulta, atualização e exclusão.
- **Bootstrap 5:** estilização de tabelas, formulários e botões.
- **JavaScript:** mensagens e redirecionamentos utilizados em determinadas operações.
- **XAMPP:** ambiente local para execução do Apache, PHP e MySQL.

## Funcionalidades

O sistema apresenta as quatro operações fundamentais de um CRUD:

| Operação | SQL | Funcionalidade |
|---|---|---|
| Create | INSERT | Cadastrar alunos e cursos |
| Read | SELECT | Consultar os registros cadastrados |
| Update | UPDATE | Alterar informações existentes |
| Delete | DELETE | Excluir registros do banco de dados |

## Estrutura do projeto

```text
sistema-academico-php-mysql/
│
├── index.php
├── cadastro.php
├── conexao.php
├── lendoDados.php
├── atualizarCurso.php
└── apagarRegistro.php
```

### Descrição dos arquivos

**index.php**

Página inicial do projeto.

**cadastro.php**

Apresenta um formulário HTML para informar o nome do aluno e o curso. Recebe os dados utilizando o método POST e executa o comando SQL INSERT.

**conexao.php**

Responsável por estabelecer a conexão entre o PHP e o banco de dados MySQL utilizando MySQLi.

**lendoDados.php**

Executa uma consulta SQL SELECT e percorre os registros encontrados para apresentar os alunos cadastrados.

**atualizarCurso.php**

Apresenta a listagem dos alunos e permite selecionar um registro para edição. Utiliza GET para identificar o registro e POST para enviar os dados atualizados.

**apagarRegistro.php**

Responsável pela operação de exclusão de registros do banco de dados.

## Configuração do ambiente

### 1. Instalar os programas necessários

Para executar o projeto localmente, será necessário:

- XAMPP com Apache, PHP e MySQL.
- Um navegador Web.
- Um editor de código, como Visual Studio Code.

### 2. Preparar o projeto

Copie os arquivos do projeto para uma pasta dentro do diretório `htdocs` do XAMPP.

Exemplo:

```text
C:\xampp\htdocs\sistema-academico-php-mysql
```

### 3. Iniciar os serviços

Abra o painel de controle do XAMPP e inicie:

- Apache
- MySQL

### 4. Criar o banco de dados

Acesse o phpMyAdmin:

```text
http://localhost/phpmyadmin
```

Execute o seguinte SQL:

```sql
CREATE DATABASE sistemaAcademico;

USE sistemaAcademico;

CREATE TABLE matricula (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    curso VARCHAR(150) NOT NULL
);
```

### 5. Configurar a conexão

No arquivo `conexao.php`, confira os parâmetros utilizados:

```php
$conexao = mysqli_connect(
    "localhost",
    "root",
    "",
    "sistemaAcademico"
);
```

Os valores apresentados correspondem a uma configuração comum de ambiente local do XAMPP. Caso sua instalação utilize outra senha, usuário ou porta, será necessário ajustar a conexão.

**Atenção:** a utilização do usuário `root` sem senha é apresentada apenas para fins didáticos em ambiente local. Essa configuração não deve ser utilizada em produção.

### 6. Executar o projeto

Abra o navegador e acesse:

```text
http://localhost/sistema-academico-php-mysql/
```

Para acessar diretamente o formulário de cadastro:

```text
http://localhost/sistema-academico-php-mysql/cadastro.php
```

## Conceitos trabalhados

Durante o desenvolvimento do projeto, foram abordados:

- Funcionamento do PHP no servidor.
- Integração entre HTML e PHP.
- Métodos HTTP GET e POST.
- Utilização de variáveis e estruturas condicionais.
- Importação de arquivos com `require`.
- Conexão com MySQL utilizando `mysqli_connect()`.
- Execução de comandos SQL com `mysqli_query()`.
- Recuperação de registros com `mysqli_fetch_array()` e `mysqli_fetch_assoc()`.
- Utilização de estruturas de repetição para listar informações.
- Criação de formulários para cadastro e edição.
- Utilização do identificador do registro nas operações SQL.
- Estilização de interfaces utilizando Bootstrap.

## Finalidade educacional

Este repositório foi desenvolvido com finalidade exclusivamente educacional, como parte das atividades práticas de programação Web.

Os códigos foram organizados e comentados para facilitar a compreensão dos alunos, demonstrando a comunicação entre o navegador, o servidor PHP e o banco de dados MySQL.

O projeto constitui uma base introdutória para o desenvolvimento de aplicações Web dinâmicas e para a compreensão das operações CRUD.

### Observações sobre segurança

Por se tratar de um projeto didático, o código original prioriza a apresentação dos fundamentos de PHP e SQL.

Antes de utilizar uma aplicação semelhante em produção, recomenda-se implementar consultas preparadas (*prepared statements*), validação dos dados recebidos, tratamento adequado de erros, proteção contra XSS e controle de acesso às operações de alteração e exclusão.

## Possíveis melhorias

- Implementar validação de formulários no servidor.
- Utilizar consultas preparadas com MySQLi.
- Adicionar autenticação de usuários.
- Criar mecanismos de pesquisa e filtragem.
- Implementar paginação de registros.
- Melhorar a responsividade das interfaces.
- Adicionar mensagens de confirmação para exclusões.
- Organizar a aplicação em uma arquitetura MVC.

---

**Projeto desenvolvido para fins educacionais, com acompanhamento e orientação do Professor Diego Antonio, durante atividades práticas de desenvolvimento Web.**
