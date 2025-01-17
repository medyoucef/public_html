<?php

namespace App\Repositories\Back;

use App\{
    Models\Banner,
    Helpers\ImageHelper
};

class BannerRepository
{

    /**
     * Store Banner.
     *
     * @param  \App\Http\Requests\ImageStoreRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'assets/images');
        $input['logo'] = ImageHelper::handleUploadedImage($request->file('logo'),'assets/images');
        Banner::create($input);
    }

    /**
     * Update Banner.
     *
     * @param  \App\Http\Requests\ImageUpdateRequest  $request
     * @return void
     */

    public function update($banner, $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo')) {
            $input['photo'] = ImageHelper::handleUpdatedUploadedImage($file,'/assets/images/',$banner,'/assets/images/','photo');
        }
        if ($file = $request->file('logo')) {
            $input['logo'] = ImageHelper::handleUpdatedUploadedImage($file,'/assets/images/',$banner,'/assets/images/','logo');
        }
        $banner->update($input);
    }

    /**
     * Delete banner.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($banner)
    {
        ImageHelper::handleDeletedImage($banner,'photo','assets/images/');
        ImageHelper::handleDeletedImage($banner,'logo','assets/images/');
        $banner->delete();
    }

}
