<?php
class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('default_controller');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_pengguna');
		$this->load->model('m_kelas');
		$this->load->library('upload');
	}


	function index(){
		$x['kelas']=$this->m_kelas->get_all_kelas();
		$x['data']=$this->m_siswa->get_all_siswa();
		$this->load->view('superadmin/v_siswa',$x);
	}
	
	
	function simpan_siswa($id_kelas){

				$config['upload_path'] = './assets/images/foto_santri/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = FALSE; //nama yang terupload nantinya
	            $config['max_size']     = 3024; // 3MB
	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/foto_santri/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/foto_santri/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$nis=strip_tags($this->input->post('xnis'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$kelas=strip_tags($this->input->post('xkelas'));

							$walikelas=$this->m_kelas->get_kelas_wali_id($kelas);//mengambil nilai id wali kelas dari tabel kelas
							$siswa_guru_id=$walikelas->kelas_wali_id;
							$random=rand();
							$siswa_password=$random;	

							$this->m_siswa->simpan_siswa($siswa_guru_id,$nis,$nama,$jenkel,$kelas,$siswa_password,$random,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('superadmin/siswa');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('superadmin/siswa');
	                }
	                 
	            }else{
	            	$nis=strip_tags($this->input->post('xnis'));
					$nama=strip_tags($this->input->post('xnama'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$kelas=strip_tags($this->input->post('xkelas'));
					$random=rand();
					$siswa_password=$random;
					$this->m_siswa->simpan_siswa_tanpa_img($nis,$nama,$jenkel,$kelas,$siswa_password,$random);
					echo $this->session->set_flashdata('msg','success');
					redirect('superadmin/siswa');
				}
				
	}
	
	function update_siswa(){
				
	            $config['upload_path'] = './assets/images/foto_santri/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = FALSE; //nama yang terupload nantinya
	            $config['max_size']     = 3024; // 3MB
	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/foto_santri/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/foto_santri/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                       	$gambar=$this->input->post('gambar');
							$path='./assets/images/foto_santri/'.$gambar;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$nis=strip_tags($this->input->post('xnis'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$kelas=strip_tags($this->input->post('xkelas'));
							// print_r($kelas);
							// die();
							$this->m_siswa->update_siswa($kode,$nis,$nama,$jenkel,$kelas,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('superadmin/siswa');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('superadmin/siswa');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$nis=strip_tags($this->input->post('xnis'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$kelas=strip_tags($this->input->post('xkelas'));

							$this->m_siswa->update_siswa_tanpa_img($kode,$nis,$nama,$jenkel,$kelas);
							echo $this->session->set_flashdata('msg','info');
							redirect('superadmin/siswa');
	            } 

	}

	function hapus_siswa(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/foto_santri/'.$gambar;
		unlink($path);
		$this->m_siswa->hapus_siswa($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('superadmin/siswa');
	}

}