<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Donors;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\BaseController;

class DonorsController extends BaseController
{
    protected $base_route = 'admin.donors';
    protected $view_path = 'admin.donors';
    protected $panel = 'Donors';
    protected $folder_path;
    protected $model;


    public function __construct() {
        $this->model = new Donors();
        $this->folder_path = getcwd() . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'donors' . DIRECTORY_SEPARATOR;
        
    }
   
    public function index()
    {
        $donors = $this->model::all();
        return view(parent::loadDefaultDataToView($this->view_path.'.index'), compact('donors'));
    }

   
    public function create()
    {
        return view(parent::loadDefaultDataToView($this->view_path.'.create'));
    }

   
    public function store(Request $request)
    {
        $donors = $this->model;

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|max:12288|mimes:jpg,jpeg,png',
        ],
        [
            'title.required' => 'Please provide title for the donors.',
            'title.max' => 'Title length exceed.',
            'image.required' => 'Please provide any image.',
            'image.max' => 'Too large file.',
            'image.mimes' => 'mimes:jpg,jpeg,png',
        ]);

        $donors->title = $request->input('title');
        $donors->status = $request->input('status') == TRUE ? '1' : '0';

        if ($request->hasfile('image')) {
            parent::createFolderIfNotExist($this->folder_path);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move($this->folder_path, $filename);
            $donors->image = $filename;
        }

        $donors->save();
        $request->session()->flash('success_message', $this->panel . ' successfully added.');
        return redirect()->route($this->base_route);
    }

   
    public function edit($id)
    {
        $donors = $this->model::find($id);
        return view(parent::loadDefaultDataToView($this->view_path.'.edit'), compact('donors'));
    }

   
    public function update(Request $request, $id)
    {
        $donors = $this->model::find($id);
        $donors->title = $request->input('title');
        $donors->status = $request->input('status') == TRUE ? '1' : '0';

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'sometimes|max:12288|mimes:jpg,jpeg,png',
        ],
        [
            'title.required' => 'Please provide title for the donors.',
            'title.max' => 'Title length exceed.',
            'image.max' => 'Too large file.',
            'image.mimes' => 'mimes:jpg,jpeg,png',
        ]);

        if($request->hasfile('image')) {
            $destination = $this->folder_path.$donors->image;
            if(file_exists($destination)){
                unlink($destination);
            }

            if ($request->hasfile('image')) {
                parent::createFolderIfNotExist($this->folder_path);
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move($this->folder_path, $filename);
                $donors->image = $filename;
            }
        }
        $donors->update();

        $request->session()->flash('updated_message', $this->panel . ' successfully updated.');
        return redirect()->route($this->base_route);
    }

   
    public function destroy(Request $request, $id)
    {
        $donors = $this->model::find($id);

        $destination = $this->folder_path.$donors->image;
        
        if(file_exists($destination)){
            unlink($destination);
        }

        $donors->delete();

        $request->session()->flash('delete_message', $this->panel . ' successfully deleted.');
        return redirect()->route($this->base_route);
    }
}
