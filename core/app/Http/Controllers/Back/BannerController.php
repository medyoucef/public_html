<?php

namespace App\Http\Controllers\Back;

use App\{
    Models\Banner,
    Repositories\Back\BannerRepository,
    Http\Requests\ImageStoreRequest,
    Http\Requests\ImageUpdateRequest,
    Http\Controllers\Controller
};
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\Back\BannerRepository $repository
     *
     */
    public function __construct(BannerRepository $repository)
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
        return view('back.banner.index',[
            'datas' => banner::orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.banner.create');
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
            'logo' => 'image',
            'photo' => 'required|image',
            'title' => 'required|max:100',
            'link' => 'required|max:255',
            'details' => 'required|max:255',
        ]);
        $this->repository->store($request);
        return redirect()->route('back.banner.index')->withSuccess(__('New banner Added Successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('back.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImageUpdateRequest $request, Banner $banner)
    {
        $request->validate([
            'title' => 'required|max:100',
            'link' => 'required|max:255',
            'logo' => 'image',
            'photo' => 'image',
            'details' => 'required|max:255',
        ]);
        $this->repository->update($banner, $request);
        return redirect()->route('back.banner.index')->withSuccess(__('banner Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $this->repository->delete($banner);
        return redirect()->route('back.banner.index')->withSuccess(__('banner Deleted Successfully.'));
    }
}
