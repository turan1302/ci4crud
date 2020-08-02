<?php 

namespace App\Controllers;
use App\Models\KategoriModel;

class Home extends BaseController
{

	public $kategoriler;

	public function __construct(){

		$this->kategoriler=new KategoriModel();

	}


	public function index(){
		
		return view('welcome_message');
	}


	public function kategoriler(){


		$data['kategoriler'] = $this->kategoriler->findAll();


		return view("kategoriler",$data);

	}


	public function new_form(){


		return view("kategori_ekle");

	}


	public function add(){

		helper('form');  // gerkli

		$validate = $this->validate(array(

			"title"=>"required"

		));


		if ($validate) {

			$data = array(

				"title"=>$this->request->getpost("title")

			);

			$isAdding = $this->kategoriler->insert($data);

			if ($isAdding) {

				session()->setFlashdata('durum',array(

					"type"=>"yes",
					"message"=>"Kayıt Ekleme İşlemi Başarılı"

				));
				return redirect()->route('kategoriler');


			}else{

				session()->setFlashdata('durum',array(

					"type"=>"no",
					"message"=>"Kayıt Ekleme İşlemi Başarısız"

				));
				return redirect()->route('kategoriler');

			}

		}else{

			return view("kategori_ekle");


		}

		


	}


	public function delete($kategori_id){

		$delete = $this->kategoriler->delete($kategori_id);

		if ($delete) {

			session()->setFlashdata('durum',array(

				"type"=>"yes",
				"message"=>"Kayıt Silme İşlemi Başarılı"

			));
			return redirect()->route('kategoriler');


		}else{

			session()->setFlashdata('durum',array(

				"type"=>"no",
				"message"=>"Kayıt Silme İşlemi Başarısız"

			));
			return redirect()->route('kategoriler');

		}

	}


	public function update_form($kategori_id){

		$kategori = $this->kategoriler->find($kategori_id);

		$data=array(

			"kategori"=>$kategori

		);

		return view("kategori_guncelle",$data);


	}


	public function update($kategori_id){

		$data=array(

			"title"=>$this->request->getpost("title")

		);

		$kategori = $this->kategoriler->update($kategori_id,$data);


		if ($kategori) {

			session()->setFlashdata('durum',array(

				"type"=>"yes",
				"message"=>"Kayıt Güncelleme İşlemi Başarılı"

			));
			return redirect()->route('kategoriler');

		}else{

			session()->setFlashdata('durum',array(

				"type"=>"yes",
				"message"=>"Kayıt Güncelleme İşlemi Başarısız"

			));
			return redirect()->route('kategoriler');

		}

	}

	//--------------------------------------------------------------------

}
