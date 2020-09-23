<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Requisitos Laravel

<strong>php 7.4</strong>
O próximo passo é instalar o  PHP. Felizmente, o PHP 7 vem por padrão nos repositórios oficiais do  Ubuntu, o que faz que a instalação dele seja tranquila. 
Você só precisa instalar o idioma dele e algum módulo extra. Para fazer isso, execute o comando logo abaixo.
```
sudo apt install php libapache2-mod-php php-mbstring php-xmlrpc php-soap php-gd php-xml php-cli php-zip php-bcmath php-tokenizer php-json php-pear
```
<strong>Mysql</strong>
```
sudo apt install MySQL-server
```
<strong>phpMyAdmin</strong>
phpMyAdmin é uma ferramenta de software livre escrita em PHP, destinada a gerenciar a administração do MySql na web. Ele pode ser instalado usando o comando abaixo.
```
$ sudo apt-get install phpmyadmin
```
Podemos acessar o painel phpMyAdmin usando o link abaixo no navegador.
http://localhost/phpmyadmin

<strong>Composer</strong>
O Composer é um  gerenciador de PHP que facilita o download de bibliotecas PHP nos nossos  projetos
```
$ sudo apt install composer
```
<strong>Laravel</strong>
Primeiro, baixe o instalador do Laravel usando o Composer:
```
$composer global require laravel/installer
$cd .config/composer/vendor/bin/
$./laravel
Laravel Installer 4.0.4
```
adiciona a path do composer
```
export PATH="$HOME/.config/composer/vendor/bin:$PATH"
```
<strong>Criacao do projeto</strong>
```
$ composer create-project --prefer-dist laravel/laravel=8.0 accesscredito
```

mysql> 
```
create database bd;
```
abrir o arquivo .env colocar o nome da database, usuário e senha
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db
DB_USERNAME=root
DB_PASSWORD=******
```
dentro da pasta do projeto execute o comando no terminal
```
 php artisan make:migration create_usuarios_table --create=usuarios
 ```
 Abra o arquivo 2020_09_12_222716_create_usuario_table.php que contém a classe de migração e atualize-o da seguinte maneira:
  
 Um arquivo de migração será criado dentro da pasta de banco de dados / migrações (database/migrations) do seu usuário, a seguir precisamos adicionar os campos à nossa tabela de banco de dados
 ```
 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->nullable();
            $table->string('cpf', 14)->nullable();
            $table->string('data_nascimento')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone', 14)->nullable();
            $table->string('endereco', 100)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('cep', 9)->nullable();
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}

 ```
 
 Para evitar erros, você precisa especificar o comprimento da string padrão antes de executar a migração.
Abra o arquivo (app/Providers/AppServiceProvider.php) e adicione a rota do schema fora da class e na função boot o Schena
```
use Illuminate\Support\Facades\Schema;
Schema :: defaultstringLength (191) da seguinte maneira:
 ```
 Em seguida, volte para o seu terminal e execute o seguinte comando:
```
$ php artisan migrate
```
Em seguida, precisaremos adicionar rotas para nossas operações CRUD.Abra o arquivo routes \ web.php e adicione nossa rota de recurso da seguinte forma:
```
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuarios', UsuarioController::class);
```
Em seguida, precisamos criar um controlador e modelo Laravel executando o seguinte comando:
```
$ php artisan make:controller UsuarioController --resource --model=Usuario
```
o arquivo app / Http / Controllers / UsuarioController.php  contem as operações do CRUD
O aquivo view esta divido em sub-diretorios
```
|--resources
    |--views
       |--includes
          ----footer.blade.php
          -----head.blade.php
          -----header.blade.php
       |--layouts
          -----app.blade.php
       |--usuarios
          -----index
          -----create
          -----edit
          -----show
```


![Screenshot_2020-09-23 AccessCredito](https://user-images.githubusercontent.com/33138839/94049493-114d5a00-fda3-11ea-96d6-2dbd3c5cc435.png)
http://localhost:8000/usuarios


![Screenshot_2020-09-23 AccessCredito(1)](https://user-images.githubusercontent.com/33138839/94049954-9c2e5480-fda3-11ea-9961-94b0e6cabd4d.png)
http://localhost:8000/usuarios/create

![Screenshot_2020-09-23 AccessCredito(2)](https://user-images.githubusercontent.com/33138839/94050375-2aa2d600-fda4-11ea-9336-067d1d12cd15.png)
http://localhost:8000/usuarios/20

![Screenshot_2020-09-23 AccessCredito(3)](https://user-images.githubusercontent.com/33138839/94050890-de0bca80-fda4-11ea-975d-3c02114b52cc.png)
http://localhost:8000/usuarios/22/edit
