# CRUD de Veículos com Laravel

Este projeto é uma aplicação CRUD (Create, Read, Update, Delete) desenvolvida em Laravel para gerenciamento de veículos.

## Funcionalidades
- Listagem de veículos.
- Criação de novos veículos.
- Edição de informações de um veículo existente.
- Exclusão de veículos.

## Tecnologias Utilizadas
- **Laravel 8**: Framework PHP para aplicações web.
- **Bootstrap**: Para estilização das páginas.
- **MySQL**: Banco de dados para armazenar as informações dos veículos.

## Requisitos
- PHP >= 8.1
- Composer
- MySQL
- Node.js (opcional para compilar assets)

## Configuração do Ambiente
1. Clone o repositório:
   ```bash
   git clone <url-do-repositorio>
   ```
2. Acesse o diretório do projeto:
   ```bash
   cd crud_bs
   ```
3. Instale as dependências do Laravel:
   ```bash
   composer install
   ```
4. Copie o arquivo `.env.example` para `.env`:
   ```bash
   cp .env.example .env
   ```
5. Configure as variáveis de ambiente no arquivo `.env` (principalmente as configurações de banco de dados):
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=crud_veiculos
   DB_USERNAME=seu_usuario
   DB_PASSWORD=sua_senha
   ```
6. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```
7. Execute as migrações para criar a estrutura do banco de dados:
   ```bash
   php artisan migrate
   ```
8. Opcional: Compile os assets do frontend (CSS/JS):
   ```bash
   npm install && npm run dev
   ```

## Execução do Projeto
Inicie o servidor de desenvolvimento:
```bash
php artisan serve
```
Acesse a aplicação no navegador: [http://localhost:8000](http://localhost:8000)

## Estrutura de Arquivos
- **Controllers:** Localizados em `app/Http/Controllers`, gerenciam a lógica do sistema.
  - `VeiculoController.php`: Controlador principal para a gestão de veículos.
- **Models:** Localizados em `app/Models`, representam as tabelas do banco de dados.
  - `Veiculo.php`: Modelo para a tabela `veiculos`.
- **Views:** Localizadas em `resources/views/veiculos`, contêm as páginas da aplicação.
  - `index.blade.php`: Lista os veículos.
  - `create.blade.php`: Formulário para adicionar veículos.
  - `edit.blade.php`: Formulário para editar veículos.
- **Rotas:** Definidas em `routes/web.php`, conectam URLs às ações do controlador.

## Principais Rotas
- **Listar Veículos:**
  ```
  GET /veiculos
  ```
- **Criar Veículo:**
  ```
  GET /veiculos/create
  ```
- **Salvar Veículo:**
  ```
  POST /veiculos
  ```
- **Editar Veículo:**
  ```
  GET /veiculos/{id}/edit
  ```
- **Atualizar Veículo:**
  ```
  PUT /veiculos/{id}
  ```
- **Excluir Veículo:**
  ```
  DELETE /veiculos/{id}
  ```

## Contribuições
Contribuições são bem-vindas! Por favor, envie um pull request ou abra uma issue para sugerir melhorias.


