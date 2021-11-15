# Wamp.net  (Nginx , PHP , Mariadb , Siteaanmaken , PHPMYADMIN, )

 ## CODE Conventies:
 Zorg dat je alle models met één hoofdletter schrijft anders kom je conflicten tegen bij migration

## Migration uitgevoerd   x 
## Model Aanmaken   x 
## Factory Aanmaken x 
## Seeder Aanmaken  x  

#### php artisan make:model --all Modelnaam (let op hoofdletter)
bijv : php artisan make:model --all Modelnaam


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

 ## in de model 
 protected Fillable ['array invullen'] bij model
 use app gebruiken bij Seeder 
 & Database seeder $this call geven 
 in factory faker gebruiken 
 LET OP : je kan ook direct gebruik maken van gegevens in de factory en of seeder 
 Bij seeder de factory aanroepen :      
  $stagestatus = Company::factory()->create([
            'stagestatus' => 'Zoekt Stagiaire'
        ]); 

of in de factory meteen de waarde meegeven: 
   'stagestatus' => 'Nog niet bekend'


 
 ## Relaties : 

LET op dat je bij relaties de foreigID gebruikt en dat je constrained gebruikt als het niet duidelijk is welke tabel je nodig hebt of de naam afwijkt. 
->onUpdate en onDelete niet vergeten. 
BIJV  : 
 $table->foreignId('company_id')->constrained()
            ->onUpdate('cascade')->onDelete('cascade'); 
            $table->foreignId('practicalteacher_id')->constrained('practicalteachers')
            ->onUpdate('cascade')->onDelete('cascade'); 
            $table->foreignId('student_id')->constrained('students')
            ->onUpdate('cascade')->onDelete('cascade'); 

    Relaties in de model : 
    protected $fillable = [ 'company_id', 'student_id', 'practicalteacher_id']; 
    Tenzij je OOP methode gebruikt dan heb je geen proteced fillable nodig

  public function company()
  {
      return $this->belongsTo(Company::class); 
  }


## PHP artisan request aanmaken voor validatie 
PHP artisan make:request TestStoreRequest 
KIJK in de HTPP -> Request ->  Auth map 
Deze op true zetten en rules toevoegen bijv : 
'name' => 'required|string|unique:tabelnaam|min:5|max:50' 
LET OP : vergeet niet in de controller -> store gebruik te maken van de request  TestStoreRequest 
en zorg dat die request ook wordt gebruikt 


