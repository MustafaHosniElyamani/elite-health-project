<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function download($filename)
    {





        // Serve the file for download
        return Storage::download('app/uploads/'.$filename);
    }
}
