<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BookModel;

class BookController extends Controller
{
    public function __construct()
    {
        $this->BookModel = new BookModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data['listbook'] = $this->BookModel->alldata();
        //dd($data);
        return view('admin/v_book', $data);
    }

    public function getbook($id)
    {
        if (!$this->BookModel->getdata($id)) {
            abort(404);
        }

        $data['listbook'] = $this->BookModel->getdata($id);
        return view('admin/v_book_detail', $data);
    }

    public function addbook()
    {
        Request()->validate([

            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'sampul' => 'required|mimes:jpg,jpeg,png'

        ], [

            'judul.required' => 'Wajib Diisi !',
            'penulis.required' => 'Wajib Diisi !',
            'penerbit.required' => 'Wajib Diisi !',
            'tahun.required' => 'Wajib Diisi !',
            'sampul.required' => 'Wajib Diisi !',

        ]);

        $file = Request()->sampul;
        $fileName = Request()->judul.'.'.$file->getClientOriginalExtension();
        $file->move(public_path('cover'), $fileName);

        $data = [

            'judul' => Request()->judul,
            'penulis' => Request()->penulis,
            'penerbit' => Request()->penerbit,
            'tahun' => Request()->tahun,
            'sampul' => $fileName,
        ];

        $this->BookModel->adddata($data);
        return redirect()->route('book')->with('pesan', 'Berhasil menambah buku');
    }

    public function editbook($id)
    {
        if (!$this->BookModel->getdata($id)) {
            abort(404);
        }

        $data['listbook'] = $this->BookModel->getdata($id);
        return view('admin/v_book_edit', $data);

    }

    public function updatebook($id)
    {
        Request()->validate([

            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'sampul' => 'mimes:jpg,jpeg,png'

        ], [

            'judul.required' => 'Wajib Diisi !',
            'penulis.required' => 'Wajib Diisi !',
            'penerbit.required' => 'Wajib Diisi !',
            'tahun.required' => 'Wajib Diisi !',

        ]);

        //kalo ingin ganti sampul
        if (Request()->sampul <> "") {
            
            $file = Request()->sampul;
            $fileName = Request()->judul.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('cover'), $fileName);

            $data = [

                'judul' => Request()->judul,
                'penulis' => Request()->penulis,
                'penerbit' => Request()->penerbit,
                'tahun' => Request()->tahun,
                'sampul' => $fileName,
            ];

            $this->BookModel->updatedata($id, $data);
        
            //kalo tidak ingin ganti sampul
        } else {
            
            $data = [

                'judul' => Request()->judul,
                'penulis' => Request()->penulis,
                'penerbit' => Request()->penerbit,
                'tahun' => Request()->tahun,
            ];

            $this->BookModel->updatedata($id, $data);

        }

        return redirect()->route('book')->with('pesan', 'Berhasil mengupdate buku');
    }

    public function deletebook($id)
    {
        //sekalian untuk hapus foto sampul buku
        $buku = $this->BookModel->getdata($id);
        if($buku->sampul <> ""){

            unlink(public_path('cover') . '/' . $buku->sampul);

        }

        $this->BookModel->deletedata($id);
        return redirect()->route('book')->with('pesan', 'Berhasil menghapus buku');
    }

}
