# Wamp.net  (Nginx , PHP , Mariadb , Siteaanmaken , PHPMYADMIN, )

## Migration uitgevoerd   x 
## Model Aanmaken   x 
## Factory Aanmaken x 
## Seeder Aanmaken  x  

#### php artisan make:model --all Modelnaam


## migration tabel vullen  & View aanmaken 
# Laravel Breeze installeren ->  
1. composer require laravel/breeze --dev 
2. php artisan breeze:install 
3. npp i  && npm run dev  eventueel (require "tailwindcss in webpack.mix.js")
resources -> views -> layouts-> layout.blade.php aanmaken 
link href = "   {{  asset(' css/app.css') }} " rel= "stylesheet" >  
link href = "   {{  asset(' js/app.js') }} " rel= "stylesheet" >  in header plaatsen

## Routing regelen 
route:resource ('/admin/companies', CompanyController::class); 
als je admin map aanmaakt let op   In de Http -> Controllers maak je een Admin map  : 
namespace App\Http\Controllers\Admin; 
 use App\Htpp\Controllers\Controller 



