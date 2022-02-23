# Réalisation d'une application boite à idée avec Laravel et React (hooks)
<img src="https://simplonline.co/_next/image?url=https%3A%2F%2Fsimplonline-v3-prod.s3.eu-west-3.amazonaws.com%2Fmedia%2Fimage%2Fjpg%2F1f55c347-6db9-4700-b3e7-395b986958e2.jpg&w=1280&q=75" width=100%/>
#  I commencons par créer par notre l' API backend
Vue que le fronten et le backend fonction sur deux technologies differentes , on a jugé naicessaire de commencer par creer la partie 
backend qui est basé sur le framework Laravel.

#  1-creation du projet backend

```php
 composer create-project --prefer-dist laravel/laravel Backend
 
```

# 2-Allez dans le fichier .env
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=backend
DB_USERNAME=root
DB_PASSWORD=

```
# Crrer la base de donnée backend sur phpmyadmin
<img src="backend.PNG"   width=100¨% /> 

# Creation du model et du controller
Vous pouvez le faire de deux manieres:<br>
La maniere Lumpeul


```php
php artisan make:controller create_idees_tables 

```

```php
php artisan make:model idees
```
Alors y a une maniere Epsilon de faire la meme chose de facon plus efficaces😁😁😁
cette commande te permet de générer le model et le controller en meme temps
```php
php artisan make:model idee -mc
```
# Creations des champs de notre tables idees

<img src="champs.PNG"   width=100¨% />
Creer les champs dont vous avez besoin pour votre base de donnée pour notre cas on besoin de(libelle,description,message)

```php
public function up()
    {
        Schema::create('idees', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('description');
            $table->string('message');
            $table->timestamps();
        });
    }
```
# Migrations des champs sur phpmyadmin

```php
php artisan migrate
```
<img src="db1.PNG"   width=100¨% /> 
<img src="db2.PNG"   width=100¨% /> 
# ouvrez le fichier IdeeController.php 

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\idee;

class IdeeController extends Controller
{
    public function index()
    {
        return idee::All();
    }
}
```

# Parametrer les routes d' acces a l ' API
```php
use App\Http\Controllers\IdeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/idee', [IdeeController::class, 'index']);

```

# Testons si notre api marche a merveille
Tout d abord ajoutons des entrées dans notre base de données

<img src="testdb.PNG"   width=100¨% /> 

# Testons si les urls de notre Api marche  >>> http://127.0.0.1:8000/api/idee
<img src="verificationapi.PNG"   width=100¨% /> 

LA PARTIE  BACKEND EST TERMINEE  VOUS POUVEZ VOUS FELICITEZ 

<img src="https://c.tenor.com/-jvrI-Uvb6YAAAAM/noblainer-napoleon-dynamite.gif"   width=100% />








