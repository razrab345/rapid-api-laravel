<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $category;
    protected $page;

	public function __construct()
	{
	  // Коллекция всех категорий
	  $this->category = Category::all();
	  // Коллекция всех страниц
	  $this->page = Page::all();

	}
	public function category_page($id) {
		$category = $this->category->find($id);
		$title = $category->title;
		$description = $category->description;
		$catalog = $this->category;
		$page = $this->page;
		$products = Products::where('parent_id', $id)->get();


		return view('category', ['title' => $title, 'description' => $description, 'catalog' => $catalog, 'page' => $page, 'products' => $products]);
	}
	public function categories() {
		$catalog = $this->category;
		$page = $this->page;
		
		return view('categories', ['catalog' => $catalog, 'page' => $page]);
	}
}
