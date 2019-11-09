
<?php
install composer 
download laravel: 
install laravel project:  composer create-project --prefer-dist laravel/laravel blog
set routes
=======================================db Database ============================================================
What is locking in MySQL?
					
MyISAM:
		default MySQL storageengine
		
InnoDB : 
		alternative engine built-in to MySQL intended for high-performance databases
=======================================Route ============================================================
C:\xampp\htdocs\Blog_Site\routes\web
									Route::get('test', "home@index1");
									Route::get('testing', "home@hello");
									Route::get('list', "home@list");
									Route::get('layout', "home@layout");
									Route::get('index_file', "home@index_file");
					
Route::view('/waqar1', 'welcome');		//The view method accepts a URI as its first argument and a view name as its second argument
Route::view('/waqar2', 'welcome', ['name' => 'Taylor']);		//an array of data to pass to the view as an optional third argument:												
class product_model extends Model{
	protected $table = "products";
	protected $primaryKey = "product_id";
	protected $fillable = ['sku','name','description','regular_price','discount_price','quantity','taxable'];
	public $timestamps = false;
					
	
}														
=======================================Controller ============================================================
C:\xampp\htdocs\Blog_Site\app\Http\Controllers
php artisan make:controller name 
	function index(){
		return view('hello');	
	}
	return view('product/list', ['name' => 'James']);
	
===========================================Views========================================================
project\resources\views   
<link rel="stylesheet" type="text/css" href="{{ URL('assets/css/bootstrap.min.css')}}">
{{ URL('images/backend_images/				')}}
===================================================================================================
set route->direct text 
set route->view
set route->controller->view
set route->controller->view pe variable bhejna
set route->controller->view pe array bhejna
=============================Controller to view send variables ===========================================
Project\app\Http\Controllers		yahan se route set honge..
								controller can be created through cmd php artisan make:controller name
								class home extends Controller
								
								class home extends Controller{
									function index1(){
											return "indeex function";			direct return msg 
										}
									}
									function hello(){
										return view("hello");					view pe bhejo hello.blade.php pe 
									}
									function list(){
										return view("product.list");			view ke andar folder he product uske andar list.blade.php pe bhejo 
									}
									function list1(){
										$ProductList = array("IPhone 11","IPhone 10", "IPhone 9")
										return view("product/list", ProductList)
									}
								}	
								
Controller  se view pe bhejne ke tareeqe:
--------------------way 1------------------------------------------------		
	function list1(){
		
		$data['heading'] = "Welcome to Home Page";
		$data['ProductList'] = array("IPhone 11","IPhone 10", "IPhone 9");
		$data['ProductList1'] = array("IPhone 11","IPhone 10", "IPhone 9");
		$data['ProductList2'] = array("IPhone 11","IPhone 10", "IPhone 9");
		return view("product/list", $data);
	}
	recieve at view: 
							<?php 
									echo "<h1>".$heading."</h1>"
							
										foreach($ProductList as $product){
											echo "<li>".$product."<li>";
										}
										foreach($ProductList1 as $product1){
											echo "<li>".$product1."<li>";
										}
										foreach($ProductList2 as $product2){
											echo "<li>".$product2."<li>";
										}
							?>
							
--------------------way 2------------------------------------------------	
	function list1(){	
		$heading = "Product Listing Page";
		$productList = array("iPhone 11", "iPhone 10", "iPhone 9");
		return view("product/list")->with("productList", $productList);
	}
	recieve at view: 
							<?php 
									echo "<h1>".$heading."</h1>"
							?>
							



	
--------------------envivonment------------------------------------------------		
	video 7:  2:00
--------------------JSON ------------------------------------------------		
	video 7:  5:00
					
=================laravel 6 updates =======================================================


login/register
		php artisan migrate 

		composer require laravel/ui --dev
		php artisan ui vue --auth

		if css is not working :
								cmd: npm install
								cmd: npm run dev

l\framework\src\Illuminate\Foundation\Auth   action files

hash check:
			$pw = 123456;
			// 123456
			$hashed = Hash::make($pw);
			// '$2y$10$xSugoyKv765TY8DsERJ2/.mPIOwLNdM5Iw1n3x1XNVymBlHNG4cX6'
			Hash::check($hashed, $pw);
			// false
			Hash::check($pw, $hashed);
			// true

			Hash::check() has two parameters first one is plane password and another is hashed password. If password matched with hash it will return true.

			Hash::check(normal_password,hashed_password);

			Hash::check('123456a','$2y$10$.XB30GO4jn7bx7EauLrWkugIaCNGxiQCgrFTeFDeSSrGdQYd6Rneq');

=================mysql=======================================================
class 8 

login/register 
create 
update 


alter table product id product_id int;
relationship https://www.youtube.com/watch?v=qc4JZcxlLyc
php artisan make:migration this command is for create/update/delete/drop queries

php artisan make:migration this command is for create/update/delete/drop queries

php artisan make:migration permission
			this command will create a file at project\database\migrations
			this file include up and down function 
			there are already 2 class exists user_table and password_reset
			
		you cant communicate direct with db in laravel, 
		even if you have to create any table
		
		//create a table with users, including fields id, name, email should be unique 
									// password, rememberToken and timestamps which have created at and updated at 
		public function up(){
			Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
		//dont create if exist
	    public function down(){
		   Schema::dropIfExists('users');
		}
		The up method is used to add new tables, columns, or indexes to your database, while the down method should reverse the operations performed by the up method.
		now to execute this permission file this will create tabe as per above query 
php artisan make:migration 	name	this command will create a file at project\database\migrations
php artisan migrate:install 	this command will run a up function /create table 
php artisan migrate
error: 
	[Illuminate\Database\QueryException]
	SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table users add unique users_email_unique(email))

solve: 
	add this code in AppServiceProvider.php 
		use Illuminate\Support\Facades\Schema;

		public function boot(){
			Schema::defaultStringLength(191);
		}
	now execute php artisan migrate, your migrations will be run and create table according to your migration 
	
php artisan migrate:rollback 	this command will run a down function /drop that table 



id	name	email	password
#1 create migration 	php artisan make:migration
#2 execute migration 	php artisan migrate:refresh


=======================================admin multi users=======================================
https://pusher.com/tutorials/multiple-authentication-guards-laravel
=======================================Middleware=======================================
					
create middleware: 	
---------------------------------------
		php artisan make:middleware CheckAge




add in kernel       
---------------------------------------
		'checkhome' => \App\Http\Middleware\checkhome::class,


			
for single 
---------------------------------------
		Route::get('portfolio', 'Home@portfolio')->middleware('checkhome');



way1 for all: 	
---------------------------------------
 		add $this->middleware('checkhome'); 		in __construct



way2 for all	Middleware Groups	
---------------------------------------
			Route::group(['middleware'=>['auth']], function(){
				Route::get('admin/dashboard', 'AdminController@dashboard');
				Route::get('admin/settings', 'AdminController@settings');
			});	



how middle ware work:
---------------------------------------


			C:\xampp\htdocs\laravel_5.5\app\Http\kernel.php  
			http ke andar 1 file he kernel.php ye laravel ki backbone he 
			iske andar middleware ko ye pick kar raha he,
			middleware ke andar 1 auth ki class he 
			'auth' => \App\Http\Middleware\Authenticate::class,
			jo authentication ka kaam kar ri he 
			is file ke andar 1 function hota he handle 
			jo ke ye verify karta he ke bunda login ho ke araha he ya direct 


multiple middleware to the route:
---------------------------------------
			Route::get('/', function () {
			    //
			})->middleware('first', 'second');






// ================================ laravel 6 Login/Register/Auth process ===========================

#1 composer require laravel/ui --dev
#2 php artisan ui vue --auth		this will show you views login/register nd create table 

#3


------------------------------------------------------------									
 Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes")
		to solve this error go to laravel_6\app\Providers\AppServiceProvider.php 
		add 		Schema::defaultStringLength(191); in boot function 
		also add 	use Illuminate\Support\Facades\Schema;
		note: if this error occur then drop all the related table nd 
		run php artisan migrate commandd again, this will create 4 tables at db 





		
=========================================HTTP/Request=========================================									

Route Parameters
-------------------------------
		Route::put('user/{id}', 'UserController@update');


path(); 
-------------------------------
		$uri = $request->path(); 				//e.g output contact_us



url()
-------------------------------					
		// Without Query String...          	//e.g output	http://localhost:90/Blog_Site/public/about_us
		url = $request->url();			




fullUrl()
-------------------------------
		// With Query String...          		//e.g output	http://localhost:90/Blog_Site/public/about_us
		url = $request->fullUrl();



isMethod('post')
-------------------------------------
		if ($r->isMethod('post')) {				//e.g output 	true 
			return "post method";
		}else{	
			return "get method";
		}	

all()
------------------------------------
        $input = $request->all();				//this return all request attributes



==================================HTTP Retrieving Input ==================================================

Retrieving All Input Data
------------------------------------
			$input = $request->all();




Retrieving An Input Value
------------------------------------	
			$name = $request->input('name');					//output name value
			$name = $request->input('name', 'Sally');			////output Sally if name is empty
			$name = $request->input('products.0.name');			//use "dot" notation to access the arrays
			$names = $request->input('products.*.name');
			$input = $request->input();							//Retrieve all of the input values as an associative array:


Retrieving Input From The Query String
------------------------------------




Retrieving Input Via Dynamic Properties		$name = $request->name;
Retrieving JSON Input Values $name = $request->input('user.name');
The has method returns true if the value is present on the request: if ($request->has(['name', 'email'])) {}
The hasAny method returns true if any of the specified values are present: if ($request->hasAny(['name', 'email'])) {}
If you would like to determine if a value is present on the request and is not empty, you may use the filled method: if ($request->filled('name')) {}



------------------------------------------------------------									
way1:  first check unique or if fail then check max 
validate:
		$validatedData = $request->validate([
		        'title' => 'required|unique:posts|max:255',
		        'body' => 'required',
		]);

way2 first check unique and if fail then stop here 

		$validatedData = $request->validate([
		    'title' => ['required', 'unique:posts', 'max:255'],
		    'body' => ['required'],
		]);	
way1:
	$validator = Validator::make($request->all(), [
			'title' => 'required|unique:posts|max:255',
			'email' => 'required|:posts|max:255',
			'password' => 'required:posts|min:20',
			'body' => 'required',
	]);
	if ($validator->fails()) {
		return redirect('login')
					->withErrors($validator)
					->withInput();
	}
way2:
	$validatedData = $request->validate([
		'title' => 'required|unique:posts|max:255',
		'email' => 'required|:posts|max:255',
		'password' => 'required:posts|min:20',
		'body' => 'required',
	]);	
echo error on html: 
		way1: 
			@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
			@endif
		way2:
			@if(Session::has('status'))
				
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>	
						<strong>{!! session('status') !!}</strong>
				</div>
			@endif
	
HAsh 
	use hash;
	$registerData['password'] = Hash::make($postedData['password']);	//Hash::make($value);
	
=============================session=============================
-------------------------------
$request_url = $request->url(); 
$aa = explode("/",$request_url);
echo $aa[5];  //index5 output

set session:
-------------------------------
working:
Session::put('adminSession', $name);	
{{ Session::get('adminSession') }}

get session:
-------------------------------
			Session::get('variableName');



Retrieving All Session Data
-------------------------------
			$data = $request->session()->all();				


Storing Data
-------------------------------
		$request->session()->put('key', 'value');		// Via a request instance...
		session(['key' => 'value']);					// Via the global helper...



// Via a request instance...
$request->session()->put('key', 'value');

// Via the global helper...
session(['key' => 'value']);

$request->session()->push('user.teams', 'developers');

$value = $request->session()->pull('key', 'default');


To determine if an item is present in the session, even if its value is null, you may use the exists method. The exists method returns true if the item is present:
-------------------------------
		if ($request->session()->exists('users')) {						//users ke naam ka variable session me he bhi ya nahi
		    //
		}



To determine if an item is present in the session, you may use the has method. The has method returns true if the item is present and is not null:
-------------------------------
		if ($request->session()->has('users')) {						//users ke naam ka jo variable session me he uske andar value he to true
		    //	
		}



Pushing To Array Session Values:
-------------------------------
		$request->session()->push('user.teams', 'developers');			 //push a new value onto a session value that is an array




Retrieving & Deleting An Item:
-------------------------------
$value = $request->session()->pull('key', 'default');					//The pull method will retrieve and delete an item from the session in a single statement:



Flash Data
-------------------------------
$request->session()->flash('status', 'Task was successful!');


=============================ASKING=============================
	
question ask:    
			login karte waqt pass match 
			how to solve console error
			chunk query in db 				https://laravel.com/docs/6.x/queries#chunking-results
	       	 middleware me jo close he wo kis kaam ka he ?			 return $next($request);
	       	 PSR-7 Requests in HTTP RESQUEST
	       	 error:			Trying to get property 'headers' of non-object
	       	 				code:
	       	 						       if ($request->is('contact_us')) {
									            return "contact_us";
									        }else{
									            return "false";
									        }
			
			what is  Query String in HTTP Response



=============================SUBLIME EDITOR=============================
Sublime Editor:
				type html and press tab, this will generate basic code 
				ctrl+shift+d = duplicate 
				ctrl duba ke jahan jahan cursor enter karte jaoge wahan wahan jo bhi ap type karoge edit hota rahega 
				shift+right click = mouse ko pakarh ke jahan tk le ke jaunga wo wo select hota jaega 
				ctrl+shift+upper arrow 
				ctrl+shift+k = line delete 
				ctrl+k+k = jahan pe cursor he us se aage ki puri wo line delete 
				ctrl+/ = comment
				jub 2 file ko 1 sath view karna ho, view me ja ke layout then column 2
				then 2nd tab ko pakarh ke 2nd column me le jao 
				ctrl+shift+p = command pellete
		>	div>p>h1>p   1 div ho uske andar paragraph, then uske andar h1, then 	 	 uske andar again paragraph, ye div>p>h1>p likh ke tab press 
		+	div+p: 1 div create ho or uske forun bad pargraph 
			ul+li
		*   div*10:     10 div create hojaengi 
	> and * ul>li*10    1 ul create ho or uske andar 10 list 
	.       1      		div create hogi jisme class hogi empty 
	.container 1   		div create hogi jiske andar class container hogi
	#contriner 1   		div create ho jiski id contrianer ho 
	ul>li.item*10  		1 ul create ho or uske bad 10 list nd unki class
						container ho        

keyboard shortkeys:
				VIRTUAL desktop
					win+ctrl+D = new fresh deskptop
					win+ctrl+arrow = left arrow means pichli wali desktop and right means current
					win+ctrl+f4 =  jub koi desktop faultu hojaye to usey close karne ke liye
					win+1 = app1
					win+2 = app2
					win+3 = app3
					split 2 app and work on them
					==========================
							win+left arrow = is se left pe 1 app open hojaega
							win+right arrow = is se right pe 1 app open hojaega
					ctrl+alt+tab = show all running app
					win+tab = show all running app
					window magnifire = win+ | win-
					win+i = window setting
					white collar
				
//============================admin panel======================:
working panel http://demo.raman.work/adminpro/roles

//============================GITHUB======================:
1 - git config --global user.name "username"
2 - git config --global user.email "email"
3 - git	init first time it will give your an error: initialized is empty git repository
4 - ls:     check files in directory
5 - git add .	this will update branch master, means ready to connect to git
6 - git commit -m "My First Commit"  this create connection
7 - git status     this will show, if the connection is success, nothing to commit, working tree 8 - clean
9 - git remote add origin https://github.com/waqar321/projectName.git
10 git push -u origin master      This command tells git to “push” all your commits to a remote repository (which is usually GitHub or Bitbucket.

update from another computer:
https://www.geos.ed.ac.uk/~smudd/NMDM_Course/html/more_advanced_github.html

git clone https://github.com/USERNAME/REPOSITORY.git
This command copies all the files in a repository to your computer, and begins tracking them in git. You do this by typing in:

git push -u origin master

error:
Rebase doesn't happen in the background. "rebase in progress" means that you started a rebase, and the rebase got interrupted because of conflict. You have to resume the rebase (git rebase --continue) or abort it (git rebase --abort).
update:
		ls   check directory
		git status:			this will show you which file is not updated
		git add .			this will update branch master, means ready to connect to git
		git status 			this time status will show you your branch is up to date
		git commit -m "editted testing html"  a last commit to your repository, this shows what you changed
		git status        if success, this shows nothing to commit
		git log          this shows your detial
		git push origin master  this will finaly uploads yours files





//============================DATABASE QUERY======================:

		SELECT:
		------------------------------------------------------------------------------------------------------------	
			$all = product_model::all();											select * from products
			return $all;				return all rows

			$product_id = product_model::find(1);									select * from products where product_id=1
			return $product_id;			

			$user = product_model::where('product_id', 2)->first();					select first_row from products where product_id=2
			return $user;			

			$user = product_model::where('name', 'Waqar Mughal')->first();			select first_row from products where name='Waqar Mughal'
			return $user;				

			$search_detail = form_data::where('name', 'LIKE', '%waqar%')->get();   name ke column me jahan jahan waqar he wahan ki puri row utha ke le ao 

			$id = product_model::where('name', 'Waqar Mughal')->value('product_id'); 		select product_id from products where name='WAQAR MUGHAL'
			$user = product_model::where('name', 'Waqar Mughal')->value('name');
			$discount_price = product_model::where('name', 'Waqar Mughal')->value('discount_price');
			
			return $id
			return $discount_price
			return $user

			$search_detail = form_data::where('category', 'LIKE', '%'.$search_value.'%')
				->orWhere('type', 'LIKE', '%'.$search_value.'%')
				->orWhere('city', 'LIKE', '%'.$search_value.'%')
				->orWhere('country', 'LIKE', '%'.$search_value.'%')
				->orWhere('contact', 'LIKE', '%'.$search_value.'%')
				->orWhere('category', 'LIKE', '%'.$search_value.'%')
				->orWhere('type', 'LIKE', '%'.$search_value.'%')
				->orWhere('bugdet', 'LIKE', '%'.$search_value.'%')
				->orWhere('floor', 'LIKE', '%'.$search_value.'%')
				->orWhere('sq_ft', 'LIKE', '%'.$search_value.'%')
				->orWhere('banglow_sq_yd', 'LIKE', '%'.$search_value.'%')
				->orWhere('nature_of_buying', 'LIKE', '%'.$search_value.'%')
				->orWhere('Time_to_call', 'LIKE', '%'.$search_value.'%')
				->orWhere('choosen_location', 'LIKE', '%'.$search_value.'%')->get();

			foreach($search_detail as $search_detail1){
				echo $search_detail1->name;
			}
			CREATE TABLE accounts(
			    account_id INT NOT NULL AUTO_INCREMENT,
			    customer_id INT( 4 ) NOT NULL ,
			    account_type ENUM( 'savings', 'credit' ) NOT NULL,
			    balance FLOAT( 9 ) NOT NULL,
			    PRIMARY KEY ( account_id ), 
			    FOREIGN KEY (customer_id) REFERENCES customers(customer_id) 
			) ENGINE=INNODB;

		PLUCK			
		------------------------------------------------------------------------------------------------------------	
			$titles = product_model::pluck('name');				products ke table me name ke column ki sari value utha ke le ao 

			foreach ($titles as $title) {
			    echo $title."<br>";
			}

		COUNT()
		------------------------------------------------------------------------------------------------------------	
			$count = product_model::count();
			return  "Numbers of recorsd in products table".$count;					;return total records
		
		MAX()
		------------------------------------------------------------------------------------------------------------	
			$max_price = product_model::max('regular_price');
			return  "maximum price of products".$max_price;
		
		AVG()
		------------------------------------------------------------------------------------------------------------	
			$avg_price = product_model::avg('regular_price');
			return  "Average price of products".$avg_price;
		
		EXIST()
		------------------------------------------------------------------------------------------------------------	
			return "Exist         ".product_model::where('product_id', 24)->exists(); 						if record exist, it return 1 

		EXIST()
		------------------------------------------------------------------------------------------------------------	
			return "Not Exist         ".product_model::where('product_id', 24)->doesntExist();				if record does not exist, it return 1

		GET()	
		------------------------------------------------------------------------------------------------------------	
			$user = product_model::select('name', 'regular_price')->get();									get all the name nd price
			foreach($user as $userName){	
				echo $userName->name."            ".$userName->regular_price."<br>";	
			}

	if ( ! isset($parts[1])) {
   		$parts[1] = null;
	}
		INSERT:
		------------------------------------------------------------------------------------------------------------	

				insert single 
						$insert = testing::insert([
							'name' => 'waqar', 
							'email' => 'john@example.com'
						]);
						return "insert query           ".$insert;

				insert miltiple records:
						$insert = testing::insert([
						    ['name' => 'waqar1', 'email' => 'waqarmughal1@gmail.com'],
						    ['name' => 'waqar2', 'email' => 'waqarmughal2@gmail.com'],
						    ['name' => 'waqar3', 'email' => 'waqarmughal3@gmail.com']
						 
						]);
						return "insert query           ".$insert;

				insertOrIgnore
					$insert = testing::insertOrIgnore([
					    ['name' => 'waqar1','email' => 'waqarmughal1@gmail.com'],
					    ['name' => 'waqar2','email' => 'waqarmughal2@gmail.com']
					]);


					return "insert query           ".$insert;
		
		db queries: https://freek.dev/1182-searching-models-using-a-where-like-query-in-laravel

		UPDATE:
		------------------------------------------------------------------------------------------------------------	
				Update record
					$affected = testing::where('id', 1)->update(['name' => 'updated']);
					return "insert query           ".$affected;

				$affected = testing::updateOrInsert(						name nd email check karega, agar dono hen to wahan ki id ko 11 karde
			        ['name' => 'updated', 'email' => 'john@example.com'],
			        ['id' => '11']
	  		  	);	


		Increment & Decrement
		------------------------------------------------------------------------------------------------------------	
					testing::increment('id', 12);   increment in all values of column
					testing::decrement('id', 12);   decrement in all values of column
		
					testing::increment('id', 12, ['name' => 'waqar1']);
					//jahan name waqar1 he wahan ki id me 12 increment kardo, or name ke column ki values sari hi waqar1 kardo

	gitcode:
https://www.youtube.com/redirect?q=https%3A%2F%2Fgithub.com%2Fstackdevelopers%2Fmake-admin-panel-in-laravel-5.6&stzid=UgysT2ykx60f8As4LeB4AaABAg.90E0R6nt2-E90EIqgb83c4&event=comments&redir_token=jUC-nY4hEkJmDPQ_ZFZUSnc4Rzd8MTU3MjUxNTU0M0AxNTcyNDI5MTQz

what is admin panel:
		The admin panel (usually logged into from /wp-admin) is where new posts, categories, tags, pages, links and custom post types are created.

		It's also where theme files are changed, widgets are added, plugins are activated or updated, and reading/writing/general settings are changed.

		In short, the admin panel is where the content is created and the website is managed. This is the key to how a content management system (CMS) works.

		Essentially, a CMS is just a series of forms that take the place of manually creating files and uploading them to the server. They simplify that process.

		The admin panel is just another series of forms that let you do all of the things explained above without having to manually edit files and upload them.


erors: 
1 - Trying to get property 'wd' of non-object   
	bhund: 
			@foreach($names as $name)
				{{$name->wd}}
    		@endforeach
	fix:
    		@foreach($names as $name)
    				{{$name}}
    		@endforeach



?>
