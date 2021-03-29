<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class modelbuku extends CI_Model {
  // Fungsi untuk menampilkan semua data buku
  public function view(){
      return $this->db->get('buku')->result();
  }
  
  // Fungsi untuk menampilkan data buku berdasarkan id bukus nya
  public function view_by($id_buku){
    $this->db->where('id_buku', $id_buku);
    return $this->db->get('buku')->row();
  }

   // Fungsi untuk validasi form tambah dan ubah
   public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "simpan_data")
      $this->form_validation->set_rules('id_buku', 'id_buku', 'required|numeric|max_length[11]');
    $this->form_validation->set_rules('nama_buku', 'nama_buku', 'required|max_length[50]');
    $this->form_validation->set_rules('jenis_buku', 'jenis_buku', 'required');
    $this->form_validation->set_rules('pengarang', 'pengarang', 'required|max_length[15]');
	$this->form_validation->set_rules('penerbit', 'penerbit', 'required');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }

  // Fungsi untuk melakukan simpan data ke tabel Buku
  public function simpan_data()
		{
			$config['upload_path']   = './file/';
			$config['allowed_types'] = 'docx|pdf|doc';
			$config['max_size']      = '5048000';
			$config['max_width']     = '1024';
			$config['max_height']    = '768';
			$config['file_name']     = url_title($this->input->post('file_buku'));
			$filename = $this->upload->file_name;
			$this->load->library('upload',$config);
			$this->upload->do_upload('file_buku');
			$data = $this->upload->data();
			
			$data = array(
				'id_buku'        => $this->input->post('id_buku'),
				'nama_buku'        => $this->input->post('nama_buku'),
				'jenis_buku'       => $this->input->post('jenis_buku'),
				'pengarang'        => $this->input->post('pengarang'),
				'penerbit'        => $this->input->post('penerbit'),
				'file_buku'            => $data['file_name']
			);
			$this->db->insert('buku',$data);
			redirect('belajar/tambah');
		}	
  // Fungsi untuk melakukan ubah data buku berdasarkan id_buku
  public function edit($id_buku)
  {
    $config['upload_path']   = './file/';
			$config['allowed_types'] = 'docx|pdf|doc';
			$config['max_size']      = '5048000';
			$config['max_width']     = '40000';
			$config['max_height']    = '2000';
			$config['file_name']     = url_title($this->input->post('file'));
			$filename = $this->upload->file_name;
			$this->upload->initialize($config);
			$this->upload->do_upload('file');
			$data = $this->upload->data();
			
			$data = array(
				'id_buku'          => "",
				'nama_buku'        => $this->input->post('nama_buku'),
				'jenis_buku'       => $this->input->post('jenis_buku'),
				'pengarang'        => $this->input->post('pengarang'),
				'penerbit'        => $this->input->post('penerbit'),
				'file_buku'            => $data['file_name']
    );
    
    $this->db->where('id_buku', $id_buku);
    $this->db->update('buku', $data); // Untuk mengeksekusi perintah update data
    redirect('belajar/ubah');
  }
  public function kode(){
	$this->db->select('RIGHT(buku.id_buku,2) as id_buku', FALSE);
	$this->db->order_by('id_buku','DESC');    
	$this->db->limit(1);    
	$query = $this->db->get('buku');  //cek dulu apakah ada sudah ada kode di tabel.    
	if($query->num_rows() <> 0){      
		 //cek kode jika telah tersedia    
		 $data = $query->row();      
		 $kode = intval($data->id_buku) + 1; 
	}
	else{      
		 $kode = 1;  //cek jika kode belum terdapat pada table
	}
		$tgl=date('dmY'); 
		$batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
		$kodetampil = "BK"."5".$tgl.$batas;  //format kode
		return $kodetampil;  
   }
  // Fungsi untuk melakukan menghapus data buku berdasarkan id_buku 
  function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}
	public function count_buku()
		{
			$data = $this->db->query("SELECT * FROM belajarkuy");
			return $data->num_rows();
		}
	public function download($id){
			$query = $this->db->get_where('buku',array('id_buku'=>$id));
			return $query->row_array();
		   }

	function data($number,$offset){
			return $query = $this->db->get('buku',$number,$offset)->result();                    
}
function jumlah_data(){

	return $this->db->get('buku')->num_rows();

}
function jumlah(){
	$query = $this->db->get('buku');
	return $query->num_rows();
   }
   public function ambil_buku($num, $offset)
 {
 $this->db->order_by('nama_buku', 'ASC');

$data = $this->db->get('buku', $num, $offset);

return $data->result();
 }
 function search($keyword)
 {
	 $this->db->like('nama_buku',$keyword);
	 $this->db->or_like('jenis_buku',$keyword);
	 $this->db->or_like('pengarang',$keyword);
	 $this->db->or_like('penerbit',$keyword);
	 $query  =   $this->db->get('buku');
	 return $query->result();
 }
 public function hitungJumlahBuku()
{   
    $query = $this->db->get('buku');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
}
?>  