<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookModel extends Model
{
    use HasFactory;

    public function alldata()
    {
        // return DB::table('tbl_book')
        // ->leftJoin('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_book.id_kategori')
        // ->get();
        
        return DB::table('tbl_book')->get();
    }

    public function getkategori()
    {
        return DB::table('tbl_kategori')->get();
    }

    public function getdata($id)
    {
        return DB::table('tbl_book')->where('id', $id)->first();
    }

    public function adddata($data)
    {
        DB::table('tbl_book')->insert($data);
    }

    public function updatedata($id, $data)
    {
        DB::table('tbl_book')->where('id', $id)->update($data);
    }

    public function deletedata($id)
    {
        DB::table('tbl_book')->where('id', $id)->delete();
    }
}
