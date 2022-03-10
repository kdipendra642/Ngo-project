<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\BaseController;

class CategoryController extends BaseController
{
    protected $base_route = 'admin.category';
    protected $view_path = 'admin.category';
    protected $panel = 'Category';
    protected $folder_path;
    protected $model;


    public function __construct() {
        $this->model = new Category();
        $this->folder_path = getcwd() . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'category' . DIRECTORY_SEPARATOR;
        
    }
   
    public function index()
    {
        $category = $this->model::all();
        return view(parent::loadDefaultDataToView($this->view_path.'.index'), compact('category'));
    }

   
    public function create()
    {
        return view(parent::loadDefaultDataToView($this->view_path.'.create'));
    }

   
    public function store(Request $request)
    {
        $category = $this->model;

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'max:500',
        ],
        [
            'title.required' => 'Please provide title for the category.',
            'title.max' => 'Title length exceed.',
            'description.max' => 'Too long description.',
        ]);

        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';

        $category->save();
        $request->session()->flash('success_message', $this->panel . ' successfully added.');
        return redirect()->route($this->base_route);
    }

   
    public function edit($id)
    {
        $category = $this->model::find($id);
        return view(parent::loadDefaultDataToView($this->view_path.'.edit'), compact('category'));
    }

   
    public function update(Request $request, $id)
    {
        $category = $this->model::find($id);
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'max:500',
        ],
        [
            'title.required' => 'Please provide title for the banner.',
            'title.max' => 'Title length exceed.',
            'description.max' => 'Too long description.',
        ]);

       
        $category->update();

        $request->session()->flash('updated_message', $this->panel . ' successfully updated.');
        return redirect()->route($this->base_route);
    }

   
    public function destroy(Request $request, $id)
    {
        $category = $this->model::find($id);

        $category->delete();

        $request->session()->flash('delete_message', $this->panel . ' successfully deleted.');
        return redirect()->route($this->base_route);
    }
}