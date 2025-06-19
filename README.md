# LaraWell - Loja Online

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

## Visão Geral

O **LaraWell** é uma aplicação web de loja online desenvolvida com Laravel, onde os usuários podem navegar por produtos, adicionar itens ao carrinho e realizar compras. O projeto inclui um painel administrativo para gerenciamento de produtos e pedidos.

## Recursos Principais

-   **Páginas do Cliente**:

    -   Página inicial com boas-vindas
    -   Catálogo de produtos
    -   Carrinho de compras
    -   Área de login e registro
    -   Histórico de pedidos

-   **Painel Administrativo**:
    -   CRUD completo de produtos
    -   Gerenciamento de pedidos
    -   Autenticação segura para administradores

## Tecnologias Utilizadas

### Backend

-   **Laravel 9** - Framework PHP MVC
-   **Eloquent ORM** - Para interação com o banco de dados
-   **Laravel Migrations** - Controle de versão do esquema do banco
-   **Laravel Authentication** - Sistema de autenticação nativo
-   **Laravel Tinker** - REPL para interação com a aplicação

### Frontend

-   **Blade Templates** - Sistema de templates do Laravel
-   **Bootstrap 5** - Framework CSS para design responsivo

### Banco de Dados

-   **MySQL** - Sistema gerenciador de banco de dados relacional

### Ferramentas de Desenvolvimento

-   **AMPPS** - Ambiente de desenvolvimento local (Apache, MySQL, PHP)
-   **Composer** - Gerenciador de dependências PHP
-   **PHP_CodeSniffer** - Ferramenta para padronização de código (PSR-2)
-   **Laravel Debugbar** - Depurador para desenvolvimento

## Configuração do Ambiente

1. **Pré-requisitos**:

    - PHP ≥ 8.0
    - Composer instalado
    - MySQL ≥ 5.7
    - Node.js (para assets frontend)

2. **Instalação**:

    ```bash
    git clone [repositório-do-projeto]
    cd onlineStore
    composer install
    cp .env.example .env
    php artisan key:generate
    ```

3. **Configuração do Banco de Dados**:

    - Criar um banco de dados MySQL
    - Configurar as credenciais no arquivo `.env`

    ```bash
    php artisan migrate --seed
    ```

4. **Iniciar o servidor**:
    ```bash
    php artisan serve
    ```

## Padrões de Desenvolvimento

-   **Arquitetura**: MVC (Model-View-Controller)
-   **Estilo de Código**: PSR-2
-   **Segurança**:
    -   Proteção CSRF nativa
    -   Mass Assignment Protection
    -   Autenticação segura
-   **Boas Práticas**:
    -   Migrações para controle de esquema
    -   Eloquent ORM para interação com banco
    -   Separação clara entre lógica e apresentação

## Rotas Principais

| Rota                 | Descrição                      |
| -------------------- | ------------------------------ |
| `/`                  | Página inicial                 |
| `/products`          | Listagem de produtos           |
| `/product/{id}`      | Detalhes de um produto         |
| `/cart`              | Carrinho de compras            |
| `/cart/add/{id}`     | Adicionar item ao carrinho     |
| `/cart/purchase`     | Finalizar compra (autenticado) |
| `/my-account/orders` | Histórico de pedidos           |
| `/admin`             | Painel administrativo          |

## Contribuição

Contribuições são bem-vindas!

## Licença

Distribuído sob a licença MIT. Veja `LICENSE` para mais informações.
