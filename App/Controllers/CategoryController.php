<?php
namespace App\Controllers;

use App\Helpers\Views;
use App\Models\Model;
class CategoryController
{
    public function index()
    {
        $categorys=[['name'=>'Mobile'],
        ['name'=>'Laptop'],
        ['name'=>'Tablet'],
        ['name'=>'Televesion']];
        Views::make('index','Bosh sahifa');
    }
    public function about()
    {
        Views::make('about','About sahifa');
    }
    public function contact()
    {
        Views::make('contact','Contact sahifa');

    }
}