<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Excel;
use App\Post;
use App\User;

class ExcelController extends Controller
{
    public function getExport(){
        $posts = Post::select('id', 'title', 'body', 'created_at')->get();
        Excel::create('Posts Data', function($excel) use($posts){
            $excel->sheet('Sheet1', function($sheet) use($posts){
                $sheet->fromArray($posts);
                $sheet->setWidth('C', 150);
                $sheet->setWidth('B', 50);
                $sheet->mergeCells('D1:E1');
                $sheet->freezeFirstRow();
            });
        })->export('xlsx');
    }

    public function getExportUsers(){
        $users = User::all();
        Excel::create('Users Data', function($excel) use($users){
            $excel->sheet('Sheet1', function($sheet) use($users){
                $sheet->fromArray($users);
                $sheet->freezeFirstRow();
            });
        })->export('xlsx');
    }
}
