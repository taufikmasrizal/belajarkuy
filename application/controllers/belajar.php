<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class belajar extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('modelbuku'); // Load modelbuku ke controller ini
    $this->load->model('Auth'); // load usermodel ke controller ini
    $this->load->helper(array('form', 'url')); 
    $this->load->library('pagination');
  }
  
  public function index()
  {

    $this->load->view('index');
    
  }
  function lihat($id=NULL){
    $this->load->library('pagination'); // Load librari paginationnya
    
    $query = $this->db->get('buku'); // Query untuk menampilkan semua data siswa
    
    $config['base_url'] = base_url().'belajar/lihat';
    $config['total_rows'] = $query->num_rows();
    $config['per_page'] = 6;
    $config['first_page'] = 'Awal';
    $config['last_page'] = 'Akhir';
    $config['next_page'] = '&laquo;';
    $config['prev_page'] = '&raquo;';
    
    $this->pagination->initialize($config); // Set konfigurasi paginationnya
	
	//buat pagination
 $data['halaman'] = $this->pagination->create_links();

   //tamplikan data
 $data['query'] = $this->modelbuku->ambil_buku($config['per_page'], $id);
    
    $this->load->view('menu_ebook', $data);
  }


  public function paging()
  {
     
      //hitung jumlah row
      $jumlah= $this->modelbuku->jumlah();

      //inisialisasi array
      $config = array();

      //set base_url untuk setiap link page
      $config['base_url'] = base_url().'belajar/paging/';

      //hitung jumlah row
      $config['total_rows'] = $jumlah;

      //mengatur total data yang tampil per page
      $config['per_page'] = 5;

      //mengatur jumlah nomor page yang tampil
      $config['num_links'] = $jumlah;

      //mengatur tag
      $config['num_tag_open'] = '<li>';
      $config['num_tag_close'] = '</li>';
      $config['next_tag_open'] = "<li>";
      $config['next_tagl_close'] = "</li>";
      $config['prev_tag_open'] = "<li>";
      $config['prev_tagl_close'] = "</li>";
      $config['first_tag_open'] = "<li>";
      $config['first_tagl_close'] = "</li>";
      $config['last_tag_open'] = "<li>";
      $config['last_tagl_close'] = "</li>";
      $config['cur_tag_open'] = '&nbsp;<a class="current">';
      $config['cur_tag_close'] = '</a>';
      $config['next_link'] = 'Next';
      $config['prev_link'] = 'Previous';

      //inisialisasi array 'config' dan set ke pagination library
      $this->pagination->initialize($config);

      $dari = $this->uri->segment('3');

      //inisialisasi array
      $data = array();

      //ambil data buku dari database
      $data['buku'] = $this->modelbuku->lihat($config['per_page'],$dari);

      //Membuat link
      $str_links = $this->pagination->create_links();
      $data["links"] = explode('&nbsp;',$str_links );
      $data['title'] = 'Tutorial Pagination CodeIgniter | https://recodeku.blogspot.com';

      $this->load->view('tabel_ebook',$data);
  
  }
  function tampil($id=NULL){
    $this->load->library('pagination'); // Load librari paginationnya
    
    $query = $this->db->get('buku'); // Query untuk menampilkan semua data siswa
    
    $config['base_url'] = base_url().'belajar/tampil';
    $config['total_rows'] = $query->num_rows();
    $config['per_page'] = 6;
    $config['first_page'] = 'Awal';
    $config['last_page'] = 'Akhir';
    $config['next_page'] = '&laquo;';
    $config['prev_page'] = '&raquo;';
    
    $this->pagination->initialize($config); // Set konfigurasi paginationnya
	
	//buat pagination
 $data['halaman'] = $this->pagination->create_links();

   //tamplikan data
 $data['query'] = $this->modelbuku->ambil_buku($config['per_page'], $id);
    
    $this->load->view('tabel_ebook', $data);
  }
  public function admin(){
    $this->load->view('home_admin');
  }
  public function menu(){
    $data['buku'] = $this->modelbuku->view()->result();
    $this->load->view('menu_ebook',$data);
  }
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->modelbuku->validation("simpan_data")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->modelbuku->simpan_data(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect('belajar/tambah');
      }
    }
    
    $this->load->view('form_ebook');
  }
  public function tambahebook(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->modelbuku->validation("simpan_data")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->modelbuku->simpan_data(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect('belajar/tambahebook');
      }
    }
    
    $this->load->view('form_ebookSS');
  }
  public function ubah($id_buku){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->modelbuku>validation("edit")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->modelbuku->edit($NIK); // Panggil fungsi edit() yang ada di SiswaModel.php
        redirect('home_admin');
      }
    }
    
    $data['buku'] = $this->modelbuku->view_by($id_buku);
    $this->load->view('form_ubah_ebook', $data);
  }
  
  function hapus($id_buku){
		$where = array('id_buku' => $id_buku);
		$this->modelbuku->hapus_data($where,'buku');
		redirect('belajar/tampil');
	}
  public function download($id){
    $this->load->helper('download');
    $fileinfo = $this->modelbuku->download($id);
    $file = 'file/'.$fileinfo['nama_buku'];
    force_download($file, NULL);
}
function search_keyword()
    {
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->modelbuku->search($keyword);
        $this->load->view('search_menuebook',$data);
    }
    function search_admin()
    {
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->modelbuku->search($keyword);
        $this->load->view('search_admin',$data);
    }
function hitungbuku(){
  $data['total_buku'] = $this->modelbuku->hitungJumlahBuku();
}
public function tentangkami(){
  $this->load->view('tentangkami');
}
public function ebooktingkatsekolah(){
  $this->load->view('ebook_tingkatsekolah');
}
}
