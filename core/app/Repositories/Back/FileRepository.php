<?php

namespace App\Repositories\Back;

use App\{
    Models\File,
    Helpers\ImageHelper
};

class FileRepository
{

    /**
     * Store File.
     *
     * @param  \App\Http\Requests\ImageStoreRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'assets/images');
        $input['logo'] = ImageHelper::handleUploadedImage($request->file('logo'),'assets/images');
        File::create($input);
    }

    /**
     * Update File.
     *
     * @param  \App\Http\Requests\ImageUpdateRequest  $request
     * @return void
     */

    public function update($file, $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo')) {
            $input['photo'] = ImageHelper::handleUpdatedUploadedImage($file,'/assets/images/',$file,'/assets/images/','photo');
        }
        if ($file = $request->file('logo')) {
            $input['logo'] = ImageHelper::handleUpdatedUploadedImage($file,'/assets/images/',$file,'/assets/images/','logo');
               $file->update($input);

        }
    }

    /**
     * Delete file.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($file)
    {
        ImageHelper::handleDeletedImage($file,'photo','assets/images/');
        ImageHelper::handleDeletedImage($file,'logo','assets/images/');
        $file->delete();
    }

}
