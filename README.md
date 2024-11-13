
markdown
Copiar código
# Instalação da Base em Laravel

Este documento fornece um script completo para instalar e configurar uma aplicação Laravel, incluindo a instalação do Composer, configuração de dependências, ajustes no arquivo `.env`, criação de links de armazenamento, limpeza de cache e execução das migrations.

## Passo 1: Baixar e Instalar o Composer

Execute os comandos abaixo para baixar e instalar o Composer localmente:

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
php composer.phar install
```

## Passo 2: Instalar Dependências para SCSS e Compilar

Para instalar as dependências do Node.js e compilar os arquivos SCSS, execute:

```bash
npm install
npm run build
```

## Passo 3: Configurar o Arquivo .env

° Copie o arquivo .env.example e renomeie para .env:

```bash
cp .env.example .env
```

° Edite o arquivo .env e configure as variáveis de ambiente para URL da aplicação e banco de dados:

```bash
APP_URL=http://suporte.studioalpha.test
DB_CONNECTION=mysql  
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=gwmtozzo_seminovos
DB_USERNAME=root
DB_PASSWORD=2106
```

## Passo 4: Criar Link para o Diretório de Storage

Crie o link simbólico para o diretório storage para permitir o acesso público aos arquivos:

```bash
php artisan storage:link
```

## Passo 5: Limpar Cache e Otimizar Configurações

Para limpar o cache e otimizar a aplicação, execute:

```bash
php artisan optimize:clear
```

## Passo 6: Executar as Migrations

Execute as migrations para configurar as tabelas do banco de dados:

```bash
php artisan migrate
```

## Passo 7: Criar Usuário Admin no Filament

Para criar um usuário administrativo no painel Filament, use o comando:

```bash
php artisan make:filament-user
```

## Passo 8: Criar chave local JWT

```bash
php artisan jwt:secret
```
