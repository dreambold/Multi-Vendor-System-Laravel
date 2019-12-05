<?php

namespace App\Http\Controllers\Admin;

use\App\Http\controllers\JoshController;
use App\File;
use App\Helpers\Thumbnail;
use App\Http\Requests;
use App\Http\Requests\FileUploadRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Response;
use stdClass;


class FileController extends JoshController {

    /**
     * Store a newly created resource in storage.
     *
     * @param FileUploadRequest $request
     * @return Response
     */
    public function store(FileUploadRequest $request)
    {
        $destinationPath = public_path() . '/uploads/files/';

        $file_temp = $request->file('file');
        $extension       = $file_temp->getClientOriginalExtension() ?: 'png';
        $safeName        = str_random(10).'.'.$extension;

        $fileItem = new File();
        $fileItem->filename = $safeName;
        $fileItem->mime = $file_temp->getMimeType();
        $fileItem->save();

        $file_temp->move($destinationPath, $safeName);

        Thumbnail::generate_image_thumbnail($destinationPath . $safeName, $destinationPath . 'thumb_' . $safeName);

        return $fileItem->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FileUploadRequest $request
     * @return Response
     */
    public function postFilesCreate(FileUploadRequest $request)
    {
        $destinationPath = public_path() . '/uploads/files/';

        $file_temp = $request->file('file');
        $extension  = $file_temp->getClientOriginalExtension() ?: 'png';
        $safeName        = str_random(10).'.'.$extension;

        $fileItem = new File();
        $fileItem->filename = $safeName;
        $fileItem->mime = $file_temp->getMimeType();
        $fileItem->save();

        $file_temp->move($destinationPath, $safeName);

        Thumbnail::generate_image_thumbnail($destinationPath . $safeName, $destinationPath . 'thumb_' . $safeName);

        $success = new stdClass();
        $success->name = $safeName;
        $success->size = $file_temp->getClientSize();
        $success->url =  URL::to('/uploads/files/'.$safeName);
        $success->thumbnailUrl =  URL::to('/uploads/files/thumb_'.$safeName);
        $success->deleteUrl = URL::to('admin/file/delete?_token='.csrf_token().'&id='.$fileItem->id);
        $success->deleteType = 'DELETE';
        $success->fileID = $fileItem->id;

        return Response::json(array( 'files'=> array($success)), 200);
    }

    public function delete(Request $request)
    {
        if(isset($request->id)) {
            $upload = File::find($request->id);
            $upload->delete();

            unlink(public_path('uploads/files/'.$upload->filename));
            unlink(public_path('uploads/files/thumb_'.$upload->filename));

            if(!isset(File::find($request->id)->filename)) {
                $success = new stdClass();
                $success->{$upload->filename} = true;
                return Response::json(array('files' => array($success)), 200);
            }
        }
    }
}
