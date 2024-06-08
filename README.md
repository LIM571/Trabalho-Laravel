# 🥋 Executando o CRUD de Lutadores Laravel com Estilo!

Este repositório oferece um sistema CRUD completo para gerenciar lutadores utilizando o framework Laravel, junto com um sistema de login para garantir a segurança dos seus dados. Prepare-se para gerenciar seus lutadores favoritos com maestria!

## 📋 Pré-requisitos para a Luta:

Antes de iniciar sua jornada, certifique-se de ter os seguintes itens em seu arsenal:

- **PHP 8.0 ou superior** 🐘: A linguagem base para construir seus golpes de código.
- **Composer** 🎼: Seu fiel escudeiro para gerenciar as dependências do projeto.
- **Servidor web local** 🌐 (Apache ou Nginx): O ringue onde sua aplicação vai brilhar.
- **Banco de dados MySQL** 🗄️: O local onde seus dados de luta serão armazenados.

## ⚔️ Instalação: Prepare-se para a Batalha!

1. **Clone o repositório:**

    ```bash
    git clone https://github.com/LIM571/Trabalho-Laravel.git
    ```

2. **Entre no ringue:**

    ```bash
    cd Trabalho-Laravel
    ```

3. **Instale as dependências:**

    ```bash
    composer install
    ```

4. **Configure o banco de dados:**

    Crie um arquivo `.env` na pasta raiz do projeto e defina as credenciais de acesso ao seu banco de dados MySQL:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=nome_do_seu_banco_de_dados
    DB_USERNAME=nome_de_usuario
    DB_PASSWORD=sua_senha
    ```

5. **Execute as migrations:**

    ```bash
    php artisan migrate
    ```

6. **Semeie o banco de dados (opcional):**

    ```bash
    php artisan db:seed
    ```

7. **Inicie o servidor web local:**

    Siga as instruções específicas do seu servidor web local para iniciar o servidor.

## 🌐 Acesse a Aplicação:

Abra seu navegador e acesse a URL:

```url
http://localhost:8000
```

## 🏟️ **Login: Entre na Arena!**

Utilize as credenciais padrão para entrar na arena:

- **Usuário**: admin
- **Senha**: 123456

## 🛠️ **Funcionalidades do CRUD: Seus Golpes Devastadores!**

- **Cadastro de Lutadores**:

  - 🆕 Crie novos lutadores com nome, categoria, nacionalidade e data de nascimento.
  - 📸 Anexe fotos dos lutadores (opcional) para torná-los ainda mais épicos!

- **Listagem de Lutadores**:

  - 📋 Visualize todos os lutadores cadastrados em uma lista organizada.
  - 🔍 Utilize filtros para encontrar lutadores específicos por nome, categoria ou nacionalidade.

- **Edição de Lutadores**:

  - ✏️ Modifique as informações dos lutadores já cadastrados.
  - 🖼️ Altere as fotos dos lutadores (opcional) para atualizar seus visuais.

- **Exclusão de Lutadores**:

  - 🗑️ Remova lutadores do sistema quando necessário.

## ℹ️ **Observações: Dicas para Vencer!**

- Este projeto é um exemplo básico de CRUD em Laravel. Você pode personalizá-lo e adaptá-lo de acordo com suas necessidades e desejos.
- Consulte a documentação oficial do Laravel 📚 para aprofundar seus conhecimentos e dominar as técnicas.
- Caso tenha dúvidas ou problemas, abra uma issue no repositório do GitHub para obter ajuda.

Aproveite seu novo sistema CRUD de Lutadores e domine a arte da gestão! 🎉






