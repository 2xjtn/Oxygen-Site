<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download($os) 
    {
        switch ($os) 
        {
            case 'linux':
                return view('pages.downloads.linux');
                break;
            case 'windows':
                return "gtfo pleb";
                break;
            default:
                return "wtf did you do";
                break;
        }
    }
    public function getFile($pkg)
    {
        // switch($pkg)
        // {
        //     case 'tar-gz':
        //         // Download logic to add when we start packaging
        //         // $file = 'test.txt';
        //         // if (file_exists($file)) {
        //         //     echo "hg";
        //         //     header('Content-Description: File Transfer');
        //         //     header('Content-Type: application/octet-stream');
        //         //     header('Content-Disposition: attachment; filename="'.basename($file).'"');
        //         //     header('Expires: 0');
        //         //     header('Cache-Control: must-revalidate');
        //         //     header('Pragma: public');
        //         //     header('Content-Length: ' . filesize($file));
        //         //     readfile($file);
        //         // }
        //     break;
        // }
        return "download machine b r o k e";
    }
}
