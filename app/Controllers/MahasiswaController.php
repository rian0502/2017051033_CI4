<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;
use CodeIgniter\Files\File;

use function PHPUnit\Framework\fileExists;

class MahasiswaController extends BaseController
{
    public function index()
    {
        //
        $mahasiswa = new Mahasiswa();
        if($this->request->getVar('search')){
            $data = [
                "title" => "Mahasiswa",
                "mahasiswa" => $mahasiswa->like('nama', $this->request->getVar('search'))
                ->orLike('NPM', $this->request->getVar('search'))
                ->paginate(10, 'mahasiswa'),
                "pager" => $mahasiswa->pager,
                "input" => $this->request->getVar('search')
            ];     
            return view('mahasiswa/index', $data);
        }

        $data = [
            "title" => "Mahasiswa",
            "mahasiswa" => $mahasiswa->paginate(10,'mahasiswa'),
            "pager" => $mahasiswa->pager,
            "input" => NULL
        ];           
        return view("mahasiswa/index", $data);
        
    }

    public function detail($npm){
        $data = [
            "title" => "Mahasiswa",
            "mahasiswa" => (new Mahasiswa())->where(["NPM" => $npm])->first()
        ];
        return view("mahasiswa/detail", $data);
    }


    public function create(){
        session();
        $data = [
            "title" => "Mahasiswa",
            'validation' => \Config\Services::validation()
        ];
        return view("mahasiswa/create",$data);
    }

    public function store(){
        $data = [
            "NPM" => $this->request->getPost("NPM"),
            "nama" => $this->request->getPost("nama"),
            "alamat" => $this->request->getPost("alamat"),
        ];
        if(!$this->validate([
            "NPM" => [
                "rules" => "required|is_unique[mahasiswas.NPM]",
                "errors" => [
                    "required" => "NPM harus diisi",
                    "is_unique" => "NPM sudah terdaftar"
                ]
            ],
            "nama" => [
                "rules" => "required|min_length[3]",
                "errors" => [
                    "required" => "Nama harus diisi",
                    "min_length[3]" => "Nama minimal 3 karakter"
                ]
            ],
            "alamat" => [
                "rules" => "required|min_length[3]",
                "errors" => [
                    "required" => "Alamat harus diisi",
                    "min_length[3]" => "Alamat minimal 5 karakter"
                ]
            ],
            "pasFoto" => [
                'rules' => 'uploaded[pasFoto]|max_size[pasFoto,1024]|is_image[pasFoto]|mime_in[pasFoto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
        ])){
            $validation = \Config\Services::validation();
        
            return redirect()->to('/mahasiswas/create')->withInput();
        }
        $img = $this->request->getFile('pasFoto');
        $img->move(WRITEPATH. '../public/assets/images/');

        $data['image'] = $img->getName();
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        (new Mahasiswa())->insert($data);
        return redirect()->to("/mahasiswas")->with("success","Data berhasil ditambahkan");
    }

    public function edit($npm){
        session();
        $data = [
            "title" => "Mahasiswa",
            "mahasiswa" => (new Mahasiswa())->where(["NPM" => $npm])->first(),
            "validation" => \Config\Services::validation()
        ];
        return view("mahasiswa/update", $data);
    }

    public function update(){
        $img = $this->request->getFile('image');
        $img->move(WRITEPATH. '../public/assets/images/');
        if(!$this->validate([
            "nama" => "required|min_length[1]",
            "alamat" => "required|min_length[1]",
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/mahasiswas/edit/'.$this->request->getPost('NPM'))->withInput()->with('validation',$validation);
        }

        $data = [
            "nama" => $this->request->getPost("nama"),
            "alamat" => $this->request->getPost("alamat"),
            "image" => $img->getName(),
        ];
        $data['updated_at'] = date('Y-m-d H:i:s');
        (new Mahasiswa())->where(["NPM" => $this->request->getPost("NPM")])->set($data)->update();
        return redirect()->to("/mahasiswas")->with("success","Data berhasil diubah");
    }

    public function delete($npm){
        unlink(WRITEPATH. '../public/assets/images/'.(new Mahasiswa())->where(["NPM" => $npm])->first()['image']);
        (new Mahasiswa())->delete($npm);
        return redirect()->to("/mahasiswas")->with("success","Data berhasil dihapus");
    }
}
