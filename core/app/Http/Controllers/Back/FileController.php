<?php

namespace App\Http\Controllers\Back;

use App\{
    Models\File,
    Repositories\Back\FileRepository,
    Http\Requests\ImageStoreRequest,
    Http\Requests\ImageUpdateRequest,
    Http\Controllers\Controller
};
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\Back\FileRepository $repository
     *
     */
    public function __construct(FileRepository $repository)
    {
        $this->middleware('auth:admin');
        $this->middleware('adminlocalize');
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.file.index',[
            'datas' => File::orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.file.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            //  'photo' => 'required|image',
            'title' => 'required|max:100',
            'link' => 'required|max:255',
            'details' => 'required|max:255',
        ]);
        $this->repository->store($request);
        return redirect()->route('back.file.index')->withSuccess(__('New file Added Successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        return view('back.file.edit',compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImageUpdateRequest $request, File $file)
    {
        $request->validate([
            'title' => 'required|max:100',
            'link' => 'required|max:255',
            // 'logo' => 'image',
            // 'photo' => 'image',
            'details' => 'required|max:255',
        ]);
        $this->repository->update($file, $request);
        return redirect()->route('back.file.index')->withSuccess(__('file Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        $this->repository->delete($file);
        return redirect()->route('back.file.index')->withSuccess(__('file Deleted Successfully.'));
    }
}
