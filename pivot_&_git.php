<?php
//*Pivot tablica many to many između tablica category  i user.
//$ php artisan make:model Category --migration

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

}
public function up()
{
  Schema::create('category', function(Blueprint $table)
  {
    $table->increments('id');
    $table->string('name');
    $table->timestamps();
  });
}
/*
$ php artisan migrate
  $ php artisan make:migration create_category_user_table \
  --create=category_user
  
  
Otvoriti u novoj migraciji da izgleda ovako:
public function up()

{
  Schema::create('category_user', function(Blueprint $table)
  {
      $table->integer('category_id')->unsigned()->nullable();
      $table->foreign('category_id')->references('id')
            ->on('category')->onDelete('cascade');

      $table->integer('user_id')->unsigned()->nullable();
      $table->foreign('catergoy_id')->references('id')
            ->on('user')->onDelete('cascade');

      $table->timestamps();
  });
}
Na kraju:
$ php artisan migrate
?>