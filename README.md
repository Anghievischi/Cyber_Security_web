# Script para Instalação da Base em Laravel

# Passo 1: Baixar e Instalar o Composer

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
php composer.phar install

# Passo 2: Instalar Dependências para SCSS e Compilar

npm install
npm run build

# Passo 3: Configurar o Arquivo .env

cp .env.example .env

# Configurar o APP_URL e Banco de Dados no .env (edite o arquivo conforme o ambiente)

sed -i 's|APP_URL=._|APP_URL=http://suporte.studioalpha.test|' .env
sed -i 's|DB_DATABASE=._|DB_DATABASE=gwmtozzo_seminovos|' .env
sed -i 's|DB_USERNAME=._|DB_USERNAME=root|' .env
sed -i 's|DB_PASSWORD=._|DB_PASSWORD=2106|' .env

# Configurar Email no .env

sed -i 's|MAIL_MAILER=._|MAIL_MAILER=smtp|' .env
sed -i 's|MAIL_HOST=._|MAIL_HOST=mail.studioalpha.com.br|' .env
sed -i 's|MAIL_PORT=._|MAIL_PORT=465|' .env
sed -i 's|MAIL_USERNAME=._|MAIL_USERNAME=autentica_form@studioalpha.com.br|' .env
sed -i 's|MAIL_PASSWORD=._|MAIL_PASSWORD=ughi3e|' .env
sed -i 's|MAIL_ENCRYPTION=._|MAIL_ENCRYPTION=null|' .env
sed -i 's|MAIL_FROM_ADDRESS=._|MAIL_FROM_ADDRESS="autentica_form@studioalpha.com.br"|' .env
sed -i 's|MAIL_FROM_NAME=._|MAIL_FROM_NAME="WEBSITE"|' .env
sed -i 's|MAIL_RECEIVER=.\*|MAIL_RECEIVER=programacao4@studioalpha.com.br|' .env

# Passo 4: Criar Link para o Diretório de Storage

php artisan storage:link

# Passo 5: Limpar Cache e Otimizar Configurações

php artisan optimize:clear

# Passo 6: Executar as Migrations

php artisan migrate

# Passo 7: Criar Usuário Admin no Filament

php artisan make:filament-user

# Observação: Caso o upload de imagens apresente erros, verifique e ajuste a configuração 'upload_tmp_dir' no php.ini, por exemplo:

# upload_tmp_dir=C:\laragon\tmp

echo "Instalação e configuração concluídas!"
