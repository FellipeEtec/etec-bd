# ETEC BD

passo a passo:
baixar o XAMPP
configurar o php.ini -> remover comentários em: ffi, ftp, fileinfo, pdo_mysql e zip
baixar o laravel -> composer global require laravel/installer
criar um projeto laravel -> laravel new && npm install && npm run build
rodar para ver se funciona -> composer run dev
instalar o breeze -> composer require laravel/breeze --dev && php artisan breeze:install
configurar o .env com o HOST, PORT e DATABASE
criar as páginas/views da Etec
configurar o web.php com as rotas criadas
