# Resumo Projeto - LaraWell

-   **ABM_LaraWell**: é um aplicativo web onde os usuários fazem pedidos para comprar produtos.

A Loja Online será implementada com Laravel (PHP), banco de dados MySQL, Bootstrap (um framework CSS) e Blade (um sistema de templates Laravel).

Escopo de aplicação do aplicativo.

-   A página inicial exibirá uma mensagem de boas-vindas e algumas imagens.
-   A página Sobre exibirá informações sobre a loja online e os desenvolvedores.
-   A página de produtos exibirá as informações sobre os produtos disponíveis. Além disso, você pode clicar em um produto específico e ver suas informações.
-   A página do carrinho exibirá os produtos adicionados ao carrinho e o preço total a ser pago. Além disso, o usuário pode remover produtos do carrinho e fazer compras.
-   A página de login exibirá um formulário para permitir que os usuários façam login no aplicativo.
-   A página de registro exibirá um formulário para permitir que os usuários criem contas.
-   Minha página de pedidos exibirá os pedidos feitos pelo usuário conectado.
-   O painel de administração conterá seções para gerenciar os produtos da loja (criar, atualizar, excluir e listá-los).

---

# AMPPS

O **AMPPS** é uma alternativa bastante robusta ao XAMPP, ele oferece um ambiente de desenvolvimento local completo. Ele inclui **Apache, MySQL, PHP, Perl** e ainda vai além, trazendo o **Softaculous**, um instalador automático que facilita a instalação de mais de 400 aplicativos web como WordPress, Joomla, Drupal e muitos outros.

Uma das grandes vantagens do AMPPS é a **flexibilidade na escolha de versões do PHP**, permitindo que você alterne entre diferentes versões com apenas alguns cliques. Isso é especialmente útil para testar compatibilidade de projetos com versões distintas da linguagem.

Além disso, o painel de controle do AMPPS é bem intuitivo, com abas específicas para configurar Apache, MySQL, PHP e domínios virtuais. Ele também permite gerenciar múltiplos sites locais com facilidade, o que é ótimo para quem trabalha com vários projetos ao mesmo tempo.

# Composer

O **Composer** é uma poderosa ferramenta de gerenciamento de dependências para projetos em PHP. Com ele, você define de forma simples as bibliotecas necessárias para seu projeto em um arquivo de configuração (`composer.json`), e o Composer se encarrega automaticamente de instalá-las, atualizá-las e mantê-las organizadas. Além disso, ele garante que todas as versões estejam compatíveis entre si, evitando conflitos e facilitando o desenvolvimento colaborativo.

> Podemos dizer que o **Composer** é como o **NuGet** do PHP.

---

# Comandos cli

## Verificar versões:

```bash
php --version
```

```bash
composer --version
```

## Criar Projeto:

```bash
composer create-project laravel/laravel onlineStore "9.*" --prefer-dist
```

-   `composer`: Chama o Composer, o gerenciador de dependências do PHP.
-   `create-project`: Diz ao Composer que você quer **criar um novo projeto** a partir de um pacote existente.
-   `laravel/laravel`: Este é o **pacote base do Laravel** disponível no [Packagist](https://packagist.org). Ele contém a estrutura de um novo projeto Laravel.
-   `onlineStore`: Este é o **nome da pasta** onde o projeto será criado. Ou seja, ao final, você terá um diretório `onlineStore` com todo o código lá dentro.
-   `"9.*"`: Especifica a **versão desejada do Laravel**, neste caso, qualquer versão da linha 9.x. O asterisco funciona como um curinga.
-   `--prefer-dist` - Instrui o Composer a **baixar os arquivos como distribuição (zip)** em vez de clonar o repositório do Git, o que geralmente é mais rápido e leve.

## Iniciar o servidor de desenvolvimento embutido

```bash
cd onlineStore # navegue para dentro do projeto
php artisan serve
```

O comando `php artisan serve` inicia um servidor de desenvolvimento embutido, permitindo que você visualize e teste sua aplicação Laravel localmente.

O **Artisan** é a interface de linha de comando nativa do Laravel, localizada na raiz do projeto como um script executável. Ele oferece uma série de comandos que automatizam tarefas comuns de desenvolvimento — como execução de `migrations`, criação de `controllers`, cache de configuração, entre outras — agilizando significativamente o fluxo de trabalho.

Você pode explorar a lista completa de comandos disponíveis e detalhes adicionais na documentação oficial do `Laravel Artisan`: [https://laravel.com/docs/9.x/artisan](https://laravel.com/docs/9.x/artisan).

## Executando o aplicativo

No Terminal, vá para o diretório do projeto e execute o seguinte:

```bash
php artisan serve
```

Abra o navegador em [http://127.0.0.1:8000/](http://127.0.0.1:8000/) e você verá o aplicativo com o novo layout.

---

# Estrutura do Projeto Laravel — com observações

-   **app/Http/Controllers/**  
    Armazena os _controllers_, que fazem a ponte entre as rotas e a lógica de negócio.  
    _Obs.:_ Organize os controladores por domínio ou recurso (por exemplo, `UserController`, `ProductController`) para manter o projeto limpo e modular.

-   **app/Models/**  
    Contém os _models_, que representam as entidades da aplicação e se comunicam com o banco de dados.  
    _Obs.:_ Use _Eloquent Relationships_ com moderação e de forma clara para tornar o código mais expressivo e reutilizável.

-   **database/migrations/**  
    Guarda as _migrations_ para controle de versão do banco de dados.  
    _Obs.:_ Prefira criar pequenas migrações bem nomeadas, e acompanhe com _seeds_ ou _factories_ para facilitar testes e preenchimento de dados.

-   **public/**  
    Diretório de arquivos públicos e ponto de entrada do app via `index.php`.  
    _Obs.:_ Evite armazenar arquivos sensíveis aqui, pois tudo nessa pasta é diretamente acessível via navegador.

-   **resources/views/**  
    Abriga os arquivos Blade, responsáveis pelo conteúdo HTML renderizado.  
    _Obs.:_ Separe as views em subpastas conforme o domínio do sistema, e aproveite os _components_ e _layouts_ Blade para reaproveitamento.

-   **routes/web.php**  
    Local para definir as rotas que respondem a requisições via navegador.  
    _Obs.:_ Divida as rotas em múltiplos arquivos quando o projeto crescer, e use _Route::group_ para aplicar _middlewares_ ou prefixos comuns.

-   **storage/app/public/**  
    Espaço para arquivos carregados via upload e que precisam ser públicos.  
    _Obs.:_ Lembre-se de rodar o comando `php artisan storage:link` para criar um atalho simbólico na pasta _public_, permitindo o acesso externo.

-   **vendor/**  
    Contém todas as dependências gerenciadas pelo Composer.  
    _Obs.:_ Nunca edite arquivos dentro dessa pasta. Em vez disso, use _Service Providers_ e _Facades_ para personalizar ou estender bibliotecas externas.

-   **.env**  
    Armazena variáveis de ambiente sensíveis e específicas do ambiente atual.  
    _Obs.:_ Não versionar este arquivo (está no `.gitignore`) e crie um `.env.example` para servir como modelo aos demais desenvolvedores.

-   **composer.json**  
    Arquivo de configuração do Composer que define as dependências, scripts e metadados do projeto.  
    _Obs.:_ Sempre que possível, fixe as versões das dependências para evitar quebras inesperadas ao atualizar.

---

# Padrão de Desenvolvimento

## MVC

Neste projeto, adotaremos a arquitetura de software baseada no padrão _MVC_ (**Model-View-Controller**), amplamente suportado pelo Laravel através da integração com o mecanismo de templates Blade.

A utilização do padrão MVC proporciona diversas vantagens, como a separação clara das responsabilidades entre modelo, visualização e controle, facilitando a organização do código. Essa abordagem também promove a colaboração simultânea entre diferentes membros da equipe, agiliza a identificação e correção de erros e contribui significativamente para a escalabilidade e manutenção da aplicação.

## Blade: O Mecanismo de Templates do Laravel

O **Blade** é o sistema de templates nativo do Laravel, combinando simplicidade e poder. Ele permite criar views dinâmicas de forma organizada, mesclando HTML com sintaxe intuitiva e recursos avançados.

-   **Principais Recursos**
    -   **Herança de layouts** – Reutilize estruturas de página com `@extends` e `@section`.
    -   **Componentes e partials** – Modularize o código com `@include` e componentes reutilizáveis.
    -   **Diretivas limpas** – Substitua estruturas PHP por `@if`, `@foreach`, `@yield`, entre outras.
    -   **Alta performance** – Compilado em PHP puro, garantindo velocidade.

> **Comparação**: Blade é como o "Razor" do PHP—ambos simplificam a mistura de lógica e HTML.

-   **Por Que Usar um Template Engine?** Embora seja possível misturar PHP e HTML diretamente, os mecanismos de template—como o Blade—garantem:
    -   **Separação clara** entre lógica e apresentação.
    -   **Código mais limpo**, evitando PHP puro nas views.
    -   **Segurança**, restringindo operações inadequadas (ex.: acesso ao banco de dados).

> **Dica importante**: Evite `@php` ou código PHP nas views. Se uma funcionalidade não tem uma diretiva Blade, provavelmente pertence a um controlador ou serviço.

Blade é armazenado em `resources/views` com a extensão `.blade.php`, oferecendo uma sintaxe elegante para desenvolvimento ágil e sustentável.

## Bootstrap

O Bootstrap é o framework CSS mais utilizado no mundo para criação de interfaces responsivas e com abordagem _mobile-first_. Em projetos Laravel, embora seja possível desenvolver a interface do usuário totalmente do zero, frequentemente optamos por aproveitar frameworks CSS como o Bootstrap para agilizar o processo e garantir um resultado visualmente profissional desde o início.

Neste projeto, utilizaremos o Bootstrap como base para nossa estrutura front-end, complementado por um template inicial que nos permitirá focar mais na lógica de aplicação sem comprometer a qualidade estética. Essa combinação oferece:

-   Layouts responsivos prontos
-   Componentes UI pré-estilizados
-   Padronização visual consistente
-   Economia de tempo no desenvolvimento

Para explorar todos os recursos do Bootstrap, visite a documentação oficial:  
[https://getbootstrap.com/](https://getbootstrap.com/)

---

## Arquitetura de Software da Loja Online **ABM_LaraWell**

### Visão Geral do Fluxo de Requisições

1. **Clientes (Front-end)**

    - Usuários que acessam a aplicação através de navegadores web (em dispositivos móveis ou computadores)
    - Utilizam o protocolo HTTP/HTTPS para comunicação com o servidor
    - Recebem respostas em HTML, CSS e JavaScript para renderização das interfaces

2. **Servidor (Back-end)**

    - Hospeda e executa o código da aplicação
    - Processa requisições seguindo o fluxo MVC (Model-View-Controller)

### Fluxo de Processamento

1. **Rotas** (`web.php`)

    - Primeiro ponto de entrada das requisições HTTP
    - Define os endpoints e mapeia cada URL para o controlador responsável

2. **Controladores**

    - Recebem e processam as requisições
    - Implementam a lógica de negócio principal
    - Coordenam a interação entre modelos e views

3. **Modelos**

    - Representam a estrutura de dados da aplicação
    - Responsáveis por todas as operações com o banco de dados
    - Aplicam regras de validação e relacionamentos entre entidades

4. **Views**

    - Geram a apresentação final dos dados
    - Combinam templates com dados processados
    - Produzem a resposta HTML/CSS/JS enviada ao cliente

### Diagrama Conceitual

```
Cliente → [Rotas] → [Controlador] → [Modelo]
                                   ↓
Cliente ← [View] ← [Controlador] ← [Banco de Dados]
```

---

# Padrões de Codificação

## O que são Padrões de Codificação?

Padrões de codificação consistem em convenções e diretrizes para escrita de código em uma linguagem específica. Sua adoção traz benefícios significativos:

-   **Consistência visual**: Uniformiza o estilo de código entre diferentes desenvolvedores
-   **Legibilidade**: Facilita a leitura, manutenção e redução de complexidade
-   **Qualidade**: Promove a reutilização de código, detecção precoce de erros e boas práticas
-   **Produtividade**: Aumenta a eficiência do time de desenvolvimento

## Padrão PSR-2 no Ecossistema PHP

O PHP-FIG (PHP Framework Interop Group) estabelece os padrões mais difundidos, sendo o **PSR-2** um dos mais adotados para estilo de codificação. Este padrão define convenções como:

-   Indentação com 4 espaços
-   Limite de 120 caracteres por linha
-   Padronização para chaves, nomes e estruturas

> **Referência oficial**: [PSR-2 Specification](https://www.php-fig.org/psr/psr-2/)

## Automatização com PHP_CodeSniffer

Para implementação consistente desses padrões, utilizamos o **PHP_CodeSniffer**, ferramenta essencial que combina:

1. **phpcs**: Analisador estático que identifica violações nos padrões
2. **phpcbf**: Corretor automático para ajustes de conformidade

Principais características:

-   Suporte a PHP, JavaScript e CSS
-   Integração contínua em pipelines de desenvolvimento
-   Configuração flexível para diferentes padrões

**Repositório oficial**: [PHP_CodeSniffer no GitHub](https://github.com/squizlabs/PHP_CodeSniffer)

## **Laravel Debugbar**

Usamos o **Laravel Debugbar** no desenvolvimento, esta pacote exibe em tempo real:

-   Número de queries executadas
-   Tempo de execução de cada processo
-   Possíveis gargalos de performance
-   Mensagens de depuração

---

# Segurança do Laravel: Proteções Essenciais aplicadas ao Projeto

## Proteção contra CSRF (Cross-Site Request Forgery)

O Laravel implementa medidas robustas de segurança por padrão, sendo uma das principais a proteção automática contra ataques CSRF. Todos os formulários HTML devem incluir um token de segurança, que é verificado automaticamente pelo framework. Com o Blade, basta utilizar a diretiva `@csrf` para gerar esse campo oculto:

```html
<form method="POST">
    @csrf
    <!-- demais campos do formulário -->
</form>
```

> _Saiba mais sobre CSRF na [documentação oficial da OWASP](https://owasp.org/www-community/attacks/csrf)_

## Prevenção contra Atribuição em Massa

O Laravel adota uma abordagem segura para operações com o banco de dados através do sistema de Mass Assignment Protection. Por padrão, o método `create()` não aceita arrays de dados sem a definição explícita dos campos permitidos. Essa configuração é feita no modelo através da propriedade `$fillable`:

```php
protected $fillable = [
    'nome',
    'descricao',
    'preco',
    'imagem'
];
```

---

# Banco de Dados: MySQL

**MySQL** é o sistema de gerenciamento de banco de dados relacional (SGBDR) de código aberto mais popular mundialmente, desenvolvido e mantido pela Oracle Corporation. Como solução robusta e escalável, ele permite armazenar, organizar e recuperar dados de forma eficiente através de consultas SQL.

## Características Principais

1. **Modelo Relacional**: Organiza dados em tabelas interligadas através de chaves, evitando redundâncias e garantindo integridade referencial.
2. **Arquitetura Otimizada**: Utiliza estruturas físicas especializadas para operações rápidas de leitura/gravação.
3. **Abstração Lógica**: Oferece objetos como bancos de dados, tabelas, views, índices e stored procedures, proporcionando flexibilidade no desenvolvimento.

## Vantagens no Ecossistema Laravel

O framework Laravel inclui suporte nativo para quatro SGBDs, sendo o MySQL a opção padrão recomendada:

| Banco de Dados | Versão Mínima |
| -------------- | ------------- |
| MySQL          | 5.7+          |
| PostgreSQL     | 9.6+          |
| SQLite         | 3.8.8+        |
| SQL Server     | 2017+         |

**Implementação no Projeto**: Utilizaremos o MySQL através do pacote AMPPS, que fornece um ambiente integrado para desenvolvimento com:

-   Servidor MySQL pré-configurado
-   Ferramentas de administração (phpMyAdmin)
-   Stack LAMP completo (Linux/Windows/macOS)

---

# Migrações no Laravel

As migrações no Laravel funcionam como um sistema de controle de versão para o banco de dados, permitindo que você defina e compartilhe a estrutura do banco de forma consistente entre toda a equipe de desenvolvimento. Essa abordagem oferece várias vantagens em relação à criação manual de tabelas:

-   Controle de versão do esquema do banco
-   Facilidade de compartilhamento entre desenvolvedores
-   Possibilidade de reversão de alterações
-   Sincronização automática da estrutura do banco

## Criando uma Migração para Produtos

Para criar uma migração que gera a tabela de produtos, execute o seguinte comando no terminal:

```bash
php artisan make:migration create_products_table
```

Esta migração terá dois métodos essenciais:

1. **Método `up()`**: Responsável por criar a tabela "products" no banco de dados
2. **Método `down()`**: Executa a operação inversa (neste caso, remove a tabela)

Observação: O Laravel segue a convenção de nomear tabelas no plural, o que otimiza a integração com o Eloquent ORM.

## Configuração do Ambiente

Antes de executar as migrações, é necessário configurar o acesso ao banco de dados no arquivo `.env` (localizado na raiz do projeto). Atualize as seguintes variáveis:

```
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

Ajuste esses valores de acordo com sua configuração local de banco de dados.

## Executando as Migrações

Com a configuração concluída, execute as migrações pendentes com o comando:

```bash
php artisan migrate
```

Este comando aplicará todas as migrações que ainda não foram executadas no banco de dados.

---

# Eloquent: ORM do Laravel

O Eloquent é o ORM (Mapeamento Objeto-Relacional) padrão do Laravel, projetado para simplificar e otimizar a interação com bancos de dados. Com uma abordagem elegante e intuitiva, ele permite manipular dados como objetos, seguindo o padrão Active Record.

-   **Principais características**:
    -   **Associação direta**: Cada tabela do banco corresponde a um Modelo
    -   **Operações simplificadas**: Inserção, consulta, atualização e exclusão de registros com métodos intuitivos
    -   **Relacionamentos**: Suporte nativo a associações entre modelos (1:1, 1:N, N:N)
    -   **Segurança**: Proteção contra injeção SQL e outros riscos

Documentação oficial: [Eloquent no Laravel 9.x](https://laravel.com/docs/9.x/eloquent)

## Estrutura de Modelos

Por convenção, os modelos ficam armazenados em:

```
app/Models/
```

O Laravel inclui automaticamente um modelo `User.php` neste diretório, servindo como exemplo da estrutura básica.

## Criando um Modelo de Produto

Para gerar um novo modelo, execute no terminal (dentro do diretório do projeto):

```bash
php artisan make:model Product
```

Isso criará o arquivo `app/Models/Product.php` com a seguinte estrutura básica:

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // Configurações opcionais do modelo
}
```

## Funcionalidades herdadas:

Ao estender `Illuminate\Database\Eloquent\Model`, a classe `Product` ganha automaticamente:

-   Sistema de consulta fluente
-   Gerenciamento de relacionamentos
-   Eventos e observadores
-   Serialização de dados
-   Métodos para operações CRUD

A trait `HasFactory` facilita a criação de dados de teste usando factories, um recurso útil para desenvolvimento e testes.

---

# Armazenamento de Arquivos no Laravel

O Laravel oferece uma poderosa abstração para manipulação de arquivos através da integração com o pacote PHP Flysystem, desenvolvido por Frank de Jonge. Essa integração fornece drivers unificados para trabalhar com diversos sistemas de armazenamento:

-   Sistemas locais
-   Armazenamento em nuvem (Amazon S3, Google Cloud Storage, etc.)
-   Servidores remotos (SFTP)

Documentação oficial: [Laravel Filesystem](https://laravel.com/docs/9.x/filesystem)

## A Classe Storage

O Laravel disponibiliza a classe `Storage` que oferece métodos abrangentes para:

-   Operações básicas (criar, ler, atualizar, excluir)
-   Gestão de diretórios
-   Controle de permissões
-   Manipulação de metadados

Exemplo de uso:

```php
use Illuminate\Support\Facades\Storage;

// Armazenar um arquivo
Storage::disk('s3')->put('caminho/arquivo.jpg', $conteudo);

// Recuperar um arquivo
$conteudo = Storage::get('arquivo.jpg');
```

-   **Vantagens do Uso do Storage**
    1. **Segurança**: Arquivos são armazenados fora da pasta pública
    2. **Escalabilidade**: Suporte nativo a armazenamento em nuvem
    3. **Produtividade**: API unificada para diferentes provedores
    4. **Manutenibilidade**: Lógica centralizada para manipulação de arquivos

## Configuração do Link Simbólico

Para disponibilizar arquivos armazenados via web, execute:

```bash
php artisan storage:link
```

Este comando cria um atalho simbólico de `public/storage` para `storage/app/public`, permitindo acesso seguro aos arquivos sem expor toda a estrutura de diretórios.

**Importante**: O link simbólico deve ser criado apenas uma vez durante a configuração inicial do projeto. Em ambientes de produção, considere configurar seu servidor web para servir os arquivos diretamente para melhor performance.

---

# Sistemas de Autenticação no Laravel

O painel de administração, por lidar com dados sensíveis, exige um sistema robusto de autenticação. O Laravel oferece diferentes soluções ao longo de suas versões:

Nas versões 6._ e 7._, o Laravel contava com o sistema oficial de autenticação **laravel/ui**, baseado no framework CSS Bootstrap ([documentação oficial](https://laravel.com/docs/7.x/authentication) • [repositório GitHub](https://github.com/laravel/ui)). Criado por Taylor Otwell (o criador do Laravel), esse pacote também passou a oferecer suporte ao Vue e ao React.

## Kits Modernos (Laravel 9+)

-   **Breeze**: Solução leve, baseada em Blade e estilizada com Tailwind CSS.
-   **Breeze + Inertia**: Versão do Breeze que utiliza Inertia.js com Vue ou React.
-   **Jetstream**: Mais robusto, com suporte a Livewire ou Inertia.js, além de recursos avançados como verificação em dois fatores.

**Observação**: Todos os kits modernos exigem frameworks JavaScript, o que pode não ser ideal para projetos que priorizam simplicidade frontend.

Para este projeto, optamos pelo **laravel/ui** (ainda compatível com Laravel 9+) devido a:

1. Independência de frameworks frontend
2. Manutenção simplificada
3. Adequação ao escopo técnico definido

Claro, Adelino! Aqui está o trecho aprimorado, mais direto e objetivo:

## AdminAuthMiddleware

Restringiremos o acesso ao painel administrativo apenas a usuários administradores. Em vez de utilizar _gates_ ou _policies_ ([documentação](https://laravel.com/docs/9.x/authorization)), adotaremos um middleware personalizado.

No Laravel, middlewares permitem interceptar e processar requisições HTTP. Por exemplo, o middleware de autenticação redireciona usuários não logados para a tela de login. Além disso, é possível criar middlewares adicionais para outras verificações.

Neste caso, criamos um middleware que permite o acesso ao painel apenas a administradores. Usuários não autorizados serão redirecionados para a página inicial.

```bash
php artisan make:middleware AdminAuthMiddleware
```

## Sessões no Laravel

Atualmente, nossa Loja Online utiliza o protocolo HTTP, que é **sem estado** – ou seja, não mantém dados entre requisições. No entanto, o Laravel implementa **sessões** para preservar informações do usuário em múltiplas requisições, como autenticação, carrinho de compras e mensagens temporárias.

### Como Funciona?

1. **Primeiro Acesso**:

    - O Laravel gera um **ID de sessão** e armazena os dados em `storage/framework/sessions`.
    - Envia o ID via cookie (`laravel_session`) na resposta HTTP.

2. **Requisições Seguintes**:

    - O navegador envia o cookie com o ID da sessão.
    - O Laravel recupera os dados associados (ex.: status de login) e os mantém disponíveis.

3. **Login**:

    - Após autenticação, o Laravel atualiza a sessão, indicando que o usuário está logado.
    - Pode regenerar o ID da sessão por segurança.

4. **Logout/Expiração**:
    - Ao sair ou após 120 minutos (padrão), a sessão é invalidada.

### Aplicações Comuns:

-   Autenticação
-   Mensagens flash (ex.: "Compra realizada!")
-   Carrinho de compras temporário
-   Tokens CSRF

### Quando Não Usar?

Para dados permanentes, prefira o **Eloquent**. Sessões são ideais para informações temporárias.

---

# Laravel Tinker

O **Laravel Tinker** é um REPL (Read–Eval–Print Loop) poderoso que permite interagir com seu aplicativo Laravel diretamente pelo terminal. É uma ferramenta essencial para testes rápidos, manipulação de dados e depuração de código. [Documentação oficial](https://laravel.com/docs/9.x/artisan#tinker)

Neste exemplo, utilizamos o Tinker para criar um usuário administrador do zero:

1. Instanciamos um novo usuário com os dados necessários.
2. Criptografamos a senha utilizando `bcrypt()` para garantir a segurança.
3. Salvamos o registro no banco de dados.

Com isso, já é possível acessar o sistema com as credenciais criadas.

> **Dica:** O Tinker é ótimo para inspeções rápidas. Por exemplo, execute o comando `$products = App\Models\Product::all();` para visualizar todos os produtos salvos na base de dados.

---

# Carrinho de compras

## 1. **Controlador do Carrinho (CartController)**

-   **index**: Exibe os produtos adicionados ao carrinho e calcula o total com base nas quantidades armazenadas na sessão.
-   **add**: Adiciona um produto ao carrinho, salvando a quantidade na sessão.
-   **delete**: Remove todos os produtos do carrinho (limpa a sessão).

## 2. **Modificação do Modelo Product**

-   Implementa o método `sumPricesByQuantities`, que calcula o valor total com base no preço dos produtos e suas respectivas quantidades no carrinho.

## 3. **Rotas adicionadas no web.php**

-   `/cart`: visualização do carrinho.
-   `/cart/add/{id}`: rota para adicionar produtos.
-   `/cart/delete`: rota para esvaziar o carrinho.

## 4. **Atualização da Navegação (app.blade.php)**

-   Adição de um link “Cart” no menu de navegação.

## 5. **Página do Produto (show.blade.php)**

-   Inclusão de um formulário para o usuário escolher a quantidade e adicionar o item ao carrinho.

## 6. **Criação da View cart/index.blade.php**

-   Mostra uma tabela com os produtos no carrinho, suas quantidades, e o valor total.
-   Botões para efetuar uma compra (ainda não funcional) e esvaziar o carrinho.

---

# Pedidos e Itens

Essa etapa prepara o sistema para registrar compras com múltiplos itens, associar cada pedido a um usuário, preservar o preço no momento da compra e permitir relacionamentos entre entidades — tudo pronto para a funcionalidade de `checkout` ser implementada.

## Estrutura de Dados

-   **Pedidos (Orders)**: Armazenam `id`, `data`, `total` e `user_id`. O nome do usuário é recuperado via relacionamento.
-   **Itens (Items)**: Armazenam `id`, `quantidade`, `preço`, `order_id` e `product_id`. Também são relacionados a um pedido e a um produto.

## Migrações

-   Criação das tabelas `orders` e `items`, com suas colunas e **chaves estrangeiras** para manter a integridade referencial com `users` e `products`.

## Modelos Eloquent

-   **Order**:

    -   Relacionamento `belongsTo` com o modelo `User`.
    -   Relacionamento `hasMany` com o modelo `Item`.
    -   Métodos de validação e acesso (getters/setters).

-   **Item**:
    -   Relacionamento `belongsTo` com `Order` e `Product`.
    -   Validações específicas para garantir dados consistentes.

## Atualizações em outros modelos

-   **User**: Adicionado relacionamento `hasMany` para acessar seus pedidos (`orders()`).
-   **Product**: Adicionado relacionamento `hasMany` com os itens associados.

---

# Compra de produtos

1. **Criação da rota protegida de compra**

    - Nova rota `/cart/purchase` adicionada em `web.php`, acessível apenas por usuários autenticados.

2. **Atualização da view do carrinho**

    - A view `cart.index` agora mostra os botões “Purchase” e “Remover todos os produtos” apenas se houver produtos na sessão.

3. **Nova view para confirmação de compra**

    - `purchase.blade.php` exibe uma mensagem de sucesso com o número do pedido ao finalizar a compra.

4. **Método purchase no `CartController`**

    - Verifica se há produtos no carrinho.
    - Cria um novo pedido (`Order`) vinculado ao usuário.
    - Itera pelos produtos, cria os itens (`Item`) do pedido com quantidade e preço.
    - Calcula o total, atualiza o pedido e o saldo do usuário.
    - Limpa a sessão do carrinho.
    - Exibe a view de confirmação.

5. **Fluxo visual de compra**

    - O usuário adiciona produtos, clica em "Purchase", e vê uma mensagem de sucesso com o ID do pedido.
    - A base de dados é atualizada com o novo pedido e os itens comprados.

6. **Observação importante**
    - O sistema ainda não verifica se o usuário tem saldo suficiente antes da compra. Melhoria futura a ser implementada.

---

# Página de Pedidos

1. **Criação da rota `/my-account/orders`**  
   A nova rota, protegida por autenticação, leva os usuários à página onde podem visualizar seus pedidos.

2. **Link no menu de navegação**  
   Um link “My Orders” foi adicionado à interface do usuário para facilitar o acesso à nova funcionalidade.

3. **Novo controller: `MyAccountController`**  
   Foi criado com um método `orders()` para recuperar os pedidos do usuário autenticado e enviar para a view.

4. **View `orders.blade.php` personalizada**  
   Exibe cada pedido do usuário, com informações como ID, data, total e uma tabela com os itens (produto, preço, quantidade). Usa `@forelse` para tratar casos em que não há pedidos.

5. **Relacionamentos Eloquent**  
   Mostra como acessar dados relacionados (como produtos dentro de itens de pedidos) com facilidade graças aos relacionamentos definidos.

---
