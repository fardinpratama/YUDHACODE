<?php


class Blog extends CI_controller {


    public function index($offset = 0){

        //message
        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('pesan','Pesan', 'required');

        if($this->form_validation->run() === true){
            $data['nama'] = $this->input->post('nama');
            $data['email'] = $this->input->post('email');
            $data['pesan'] = $this->input->post('pesan');

            $id = $this->Message_model->insertMessage($data);

            if($id){
                $this->session->set_flashdata('pesan', 'pesan berhasil dikirm!');
                redirect('/#contact');
            }else{
                $this->session->set_flashdata('pesan', 'pesan gagal terkirim!');
                redirect('/#contact');
            }
        }

        // PAGINATION
        $this->load->library('pagination');

        $config['base_url'] = site_url('blog/index');
        $config['total_rows'] = $this->Blog_model->getTotalBlog();
        $config['per_page'] = 3;
        
        $this->pagination->initialize($config);
        
        $query = $this->Blog_model->getBlogs( $config['per_page'], $offset);
        $data['blog']= $query->result_array();

        $this->load->view('templates/home/header');
        $this->load->view('blog/index', $data);
        $this->load->view('templates/home/footer');
    }

    public function detail($url){
        //comment
    $data['komenReply'] = $this->input->get('komen_reply');

        //message
        $this->form_validation->set_rules('name','Nama', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('comment','Pesan', 'required');

        if($this->form_validation->run() === true){
            $post['name'] = $this->input->post('name');
            $post['email'] = $this->input->post('email');
            $post['comment'] = $this->input->post('comment');
            $post['url']= $url;
            $id = $this->Comment_model->insertComment($post);

            $data['nama'] = null;
            $data['e_mail'] =null;
            $data['pesan'] = null;

            if($id){
                $this->session->set_flashdata('komen', 'komentarmu berhasil dikirm!');  
                redirect("/blog/detail/". $post['url'].'#komen');
            }else{
                $this->session->set_flashdata('komen', 'komentarmu gagal terkirim!');
                redirect("/blog/detail/". $post['url'].'#komen');
            }
        }else {
            $data['nama'] = $this->input->post('name');
            $data['e_mail'] = $this->input->post('email');
            $data['pesan'] = $this->input->post('comment');
        }
        // end comment
        

        $query = $this->Blog_model->getSingleBlog('url',$url);
        $data['blog'] = $query->row_array();

        // mengambil data komentar
        $comment = $this->Comment_model->getCommentByUrl('url',$url);
        $data['comment'] =  $comment->result_array();

        // mengambil tiga artikel terbaru
        $getBlog = $this->Blog_model->getMoreBlog();
        $data['more']= $getBlog->result_array();

        // mengambil data reply kommmen 
         $getReply = $this->Reply_model->getReplyByUrl($url);
         $data['ListReply']=$getReply->result_array();
        $this->load->view('templates/blog/header', $data);
        $this->load->view('blog/detail', $data);
        $this->load->view('templates/blog/footer');
    }


    public function add() {

        $this->form_validation->set_rules('title','Judul', 'required');
        $this->form_validation->set_rules('url','URL', 'required|alpha_dash');
        $this->form_validation->set_rules('quotes','Quotes', 'required');
        $this->form_validation->set_rules('content','Konten', 'required');

        if($this->form_validation->run() === true){
            $data['title']= $this->input->post('title');
            $data['url']= $this->input->post('url');
            $data['quotes']= $this->input->post('quotes');
            $data['content']= $this->input->post('content');

            // UPLOAD image

            $config['upload_path']          = './assets/img/artikel/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000000;
            $config['max_width']            = 20000;
            $config['max_height']           = 20000;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('image'))
            {
                   echo $this->upload->display_errors();

            }
            else
            {
                    $data['image'] = $this->upload->data()['file_name'];
            }

    
            $id= $this->Blog_model->insertBlog($data);
            
            if($id){
                $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                redirect('/#blog');
            }else{
                $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect('/blog/add');
            }
            
        }
        $this->load->view('templates/blog/header',);
        $this->load->view('blog/add_form');
        $this->load->view('templates/blog/footer');
    }

    public function edit($id){
        $query = $this->Blog_model->getSingleBlog('id', $id);
        $data['blog'] = $query->row_array();

        $this->form_validation->set_rules('title','Judul', 'required');
        $this->form_validation->set_rules('url','URL', 'required|alpha_dash');
        $this->form_validation->set_rules('quotes','Quotes', 'required');
        $this->form_validation->set_rules('content','Konten', 'required');

        if($this->form_validation->run() === true){
            $post['title']= $this->input->post('title');
            $post['url']= $this->input->post('url');
            $post['quotes']= $this->input->post('quotes');
            $post['content']= $this->input->post('content');

              // UPLOAD image

              $config['upload_path']          = './assets/img/artikel/';
              $config['allowed_types']        = 'gif|jpg|png';
              $config['max_size']             = 1000000;
              $config['max_width']            = 20000;
              $config['max_height']           = 20000;
  
              $this->load->library('upload', $config);
              $this->upload->do_upload('image');
  
              if ( ! empty($this->upload->data()['file_name']))
              {
                $post['image'] = $this->upload->data()['file_name'];
  
              }
    
            $id= $this->Blog_model->updateBlog($id,$post);
          
            
            if($id){
                $this->session->set_flashdata('message', 'Data berhasil Diedit!');
                redirect('/#blog');
            }else{
                $this->session->set_flashdata('message', 'Data gagal Diedit!');
                redirect('/blog/edit');
            }
            
        }


        $this->load->view('templates/blog/header',);
        $this->load->view('blog/edit_form', $data);
        $this->load->view('templates/blog/footer');
    }

    public function delete($id){
        $result =  $this->Blog_model->deleteBLog($id);
        if($result){
            $this->session->set_flashdata('message', 'Data berhasil dihapus!');
            redirect('/#blog');
        }else{
            $this->session->set_flashdata('message', 'Data gagal dihapus!');
            redirect('/#blog');
        }
    }


    public function login(){
        if( $this->input->post()){
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        if($username == 'fardin' && $password == 'fardin14'){
            $_SESSION['username']= 'saya';
            redirect('/');
        }else{
            $this->session->set_flashdata('message', 'Username/Password tidak cocok!');
            redirect('/blog/login');
        }

    }


        $this->load->view('templates/blog/header');
        $this->load->view('blog/login_form');
        $this->load->view('templates/blog/footer');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }

    public function replyComment(){
        $this->form_validation->set_rules('name','Judul', 'required');
        $this->form_validation->set_rules('email','URL', 'required|valid_email');
        $this->form_validation->set_rules('reply','Reply', 'required');
        if($this->form_validation->run() === true){
            $post['name']= $this->input->post('name');
            $post['email']= $this->input->post('email');
            $post['pesan']= $this->input->post('reply');
            $post['kode']= $this->input->post('kode');
            $post['url']= $this->input->post('url');
        

            $id= $this->Reply_model->insertReply($post);
            
            if($id){
                $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                redirect("/blog/detail/". $post['url'].'#komen');
            }else{
                $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect("/blog/detail/". $post['url']);
            }
        }
    //   return  json_encode($this->Reply_model->getCommentById($this->input->post('id')));
    }

  

    
}




?>