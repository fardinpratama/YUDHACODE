
    <!-- navbar -->

    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?=  $this->session->flashdata('message')?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
    </div> -->
  
    <nav class=" container-fluid navbar navbar-expand-sm navbar-dark fixed-top">


        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="icon-bar top-bar ml-auto"></span>
            <span class="icon-bar middle-bar ml-auto"></span>
            <span class="icon-bar bottom-bar ml-auto"></span>
        </button>

        <a class="navbar-brand mr-auto page-scroll" href="#home">
            <img src="<?= base_url();?>/assets/img/logo3.png" alt="logo">
        </a>

        <div class="collapse navbar-collapse navbar-kanan" id="navbarSupportedContent">
            <div class="navbar-nav ml-auto">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="#traveling">Traveling</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                    <?php if(isset($_SESSION['username'])) : ?>
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="<?=  site_url('blog/add');?>">Tambah Artikel</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="<?=  site_url('blog/logout');?>">Logout</a>
                    </li>
                    <?php else: ?>
                        <li class="nav-item active">
                        <a class="nav-link page-scroll" href="<?=  site_url('blog/login');?>">Login</a>
                    </li>
                     <?php endif ?>
                </ul>
            </div>
        </div>

        
    </nav>

    <!-- banner -->
    <div class="bd-example">
        <div id="carousel-thumb" class="carousel slide slider carousel-thumbnails" data-ride="carousel"
            data-interval="8000">
            <ol class="carousel-indicators">
                <li data-target="#carousel-thumb" data-slide-to="0" class="active img-slide">
                    <img src="<?= base_url();?>/assets/img/jumbotron/img1.jpg">
                </li>
                <li data-target="#carousel-thumb" data-slide-to="1" class="img-slide">
                    <img src="<?= base_url();?>/assets/img/jumbotron/img2.jpg">
                </li>
                <li data-target="#carousel-thumb" data-slide-to="2" class="img-slide">
                    <img src="<?= base_url();?>/assets/img/jumbotron/img3.jpg">
                </li>
                <li data-target="#carousel-thumb" data-slide-to="3" class="img-slide">
                    <img src="<?= base_url();?>/assets/img/jumbotron/img4.jpg">
                </li>
            </ol>

            <section>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="<?= base_url();?>/assets/img/jumbotron/img1.jpg" class="move d-block w-100 img-fluid" alt="First slide">
                        <div class="carousel-caption d-md-block" id="title1">
                            <div class="title-header" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="0">
                                <h1>Hi!</h1>
                                <h1>I'm Yudha</h1>
                                <p>welcome in my zone</p>
                            </div>

                            <div class="box-content" id="box1" data-aos="fade-right" data-aos-duration="1000"
                                data-aos-delay="0">
                                <div class="quotes">
                                    <p>Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit.
                                        Nullam eu convallis tortor. Suspendisse potenti. In faucibus
                                        massa arcu, vitae cursus mi hendrerit nec</p>
                                    <span>Fardin Pratama Yudha</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url();?>/assets/img/jumbotron/img2.jpg" class="move d-block w-100 img-fluid" alt="Second slide">
                        <div class="carousel-caption  d-md-block" id="title2">
                            <div class="title-header" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1">
                                <h1>Hi!</h1>
                                <h1>I'm Yudha</h1>
                                <p>welcome in my zone</p>
                            </div>

                            <div class="box-content" id="box2" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="0">
                                <div class="quotes ">
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nullam eu convallis tortor. Suspendisse potenti. In faucibus
                                        massa arcu, vitae cursus mi hendrerit nec</p>
                                    <span>Fardin Pratama Yudha</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url();?>/assets/img/jumbotron/img3.jpg" class="move d-block w-100 img-fluid" alt="Third slide">
                        <div class="carousel-caption  d-md-block" id="title3">
                            <div class="title-header" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">
                                <h1>Hi!</h1>
                                <h1>I'm Yudha</h1>
                                <p>welcome in my zone</p>
                            </div>

                            <div class="box-content" id="box3" data-aos="fade-left" data-aos-duration="1000"
                                data-aos-delay="0">
                                <div class="quotes ">
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nullam eu convallis tortor. Suspendisse potenti. In faucibus
                                        massa arcu, vitae cursus mi hendrerit nec</p>
                                    <span> Fardin Pratama Yudha</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url();?>/assets/img/jumbotron/img4.jpg" class="move d-block w-100 img-fluid" alt="fourth slide">
                        <div class="carousel-caption  d-md-block" id="title4">
                            <div class="title-header" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">
                                <h1>Hi!</h1>
                                <h1>I'm Yudha</h1>
                                <p>welcome in my zone</p>
                            </div>

                            <div class="box-content" id="box4" data-aos="fade-left" data-aos-duration="1000"
                                data-aos-delay="0">
                                <div class="quotes ">
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nullam eu convallis tortor. Suspendisse potenti. In faucibus
                                        massa arcu, vitae cursus mi hendrerit nec</p>
                                    <span>Fardin Pratama Yudha</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


        </div>
    </div>



    <!-- traveler -->
    <div class="container traveler" id="traveling">
        <div class="row">
            <div class="col-md-8 m-auto traveler-content text-center">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Traveler in Banggai Island</h2>
                <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="0">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Id officia dolorum doloribus neque sapiente
                    aspernatur unde earum amet quis sed autem, ab harum accusamus officiis omnis, voluptates dignissimos
                    aperiam voluptate!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="swiper-container" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="0">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card">
                            <div class="imgbx">
                                <img src="<?= base_url();?>/assets/img/traveler/img1.jpg" class="img-fluid" alt="slide3">
                                <div class="content">
                                    <h2>Danau Tendetung</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam maiores quaerat
                                        adipisci fugiat ab
                                        rem. </p>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="imgbx">
                                <img src="<?= base_url();?>/assets/img/traveler/img2.jpg" class="img-fluid" alt="slide3">
                                <div class="content">
                                    <h2>Pasir Panjang</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam maiores quaerat
                                        adipisci fugiat ab
                                        rem. </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="imgbx">
                                <img src="<?= base_url();?>/assets/img/traveler/img3.jpg" class="img-fluid" alt="slide3">
                                <div class="content">
                                    <h2>Danau Monosan</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam maiores quaerat
                                        adipisci fugiat ab
                                        rem. </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="imgbx">
                                <img src="<?= base_url();?>/assets/img/traveler/img4.jpg" class="img-fluid" alt="slide3">
                                <div class="content">
                                    <h2>Lambangan Pauno</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam maiores quaerat
                                        adipisci fugiat ab
                                        rem. </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="imgbx">
                                <img src="<?= base_url();?>/assets/img/traveler/img2.jpg" class="img-fluid" alt="slide3">
                                <div class="content">
                                    <h2>Pasir Panjang</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam maiores quaerat
                                        adipisci fugiat ab
                                        rem. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- blog -->
    <div class="blog" id="blog">
        <div class="row">
            <div class="col-sm-5 img-box" data-parallax="scroll" data-image-src="<?= base_url();?>/assets/img/blog/img2.jpg">
            
                <h2 class="text-white text-center">Blog, is my diary adventure</h2>
               
            </div>
            <div class="col-sm-7 content-blog">
                <div class="row ">
                    <div class="col-sm-11 title-blog m-auto">

                    <!-- cek flash data -->
                    <?php if($this->session->flashdata('message')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('message'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif ?>
                        <h1>Blog, is my diary adventure</h1>
                        <div class="line mb-4"></div>
                        <form class="form-inline ml-2" id="search">
                            <div class="input-group cari">
                                <div class="input-group-prepend blog-search">
                                    <span class="input-group-text blog-search-icon" id="basic-addon1"  ><i
                                            class="fas fa-search text-white"></i></span>
                                    <input type="text" name="find" class="form-control blog-search" placeholder="search blog">
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php foreach($blog as $key => $blogs) : ?>
                <div class="row">
                    <div class="col-sm-11 artikel ">
                        <div class="title-artikel">
                            <h3><?= $blogs['title'] ?></h3>
                            <div class="date-post">
                                <p>

                                <?php if(isset($_SESSION['username'])) : ?>
                                <a href="<?= site_url('blog/edit/'. $blogs['id']) ?>">Edit</a> | <a href="<?= site_url('blog/delete/'. $blogs['id']) ?>" onclick="return confirm('apa kamu yakin ingin menghapusnya?')">Delete</a>
                                 
                                 <?php endif ?>
                                 <span></span> Date Post,<?= date('l, d F Y', strtotime($blogs['date_post'])); ?> </p>
                            </div>
                        </div>
                        <div class="isi-artikel">
                            <p><?= $blogs['quotes'] ?>
                            </p>
                            <button class="btn read-more"><a href="<?= site_url('blog/detail/'. $blogs['url']) ?>">read more</a></button>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                <!-- pagination -->

                <div class="row">
                    <div class="col-sm-8 m-auto pb-3">
                        <div class=" text-center">
                        <?php echo $this->pagination->create_links(); ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <!-- about -->
    <section class="about" id="about">
        <div class="row header pt-4 m-auto">
            <div class="col-sm-5 kotak-header">
                <div class="kotak" id="kotak1">
                </div>
                <div class="kotak" id="kotak2">
                </div>
                <div class="kotak" id="kotak3">
                </div>
                <div class="kotak" id="kotak4">
                </div>
                <h2 id="about-phone">
                    About Me
                </h2>
            </div>
            <div class="col-sm-5">
                <h2 id="about-desktop">
                    About Me
                </h2>
            </div>
        </div>
        <div class="row content">
            <div class="col-sm-5 about-img">
                <img src="<?= base_url();?>/assets/img/about/icon1.png" alt="" class="icon1 img-fluid">
                <img src="<?= base_url();?>/assets/img/about/me2.png" alt="" class="me img-fluid">
                <img src="<?= base_url();?>/assets/img/about/icon2.png" alt="" class=" icon2 img-fluid">
            </div>
            <div class="col-sm-6 about-text">
                <h1>who am i?</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique nemo maxime numquam
                    soluta
                    eum non! Ut commodi modi cumque neque beatae fugiat! Similique non omnis nostrum
                    hic quis quo voluptas omnis similique accusantium placeat asperiores libero.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis animi suscipit quam optio
                    quos.
                    Delectus dicta aperiam obcaecati dolore, atque animi cum quas esse fugiat corrupti, hic
                    id
                    nihil. Ex!</p>
            </div>
        </div>
    </section>



    <!-- contact -->
    <section class="contact" id="contact">
        <span class="batas">
        </span>
        

        <div class="container">
        <?php if($this->session->flashdata('pesan')) : ?>
                       <div class="row">
                       <div class="col-md-8 m-auto mt-3">
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('pesan'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div></div>
                       </div>
        <?php endif ?>     

        <?php if( ! empty(validation_errors())) :  ?>
            <div class="row">
                       <div class="col-md-8 m-auto mt-3">
                       <div class="alert alert-warning alert-dismissible fade show" role="alert">
                       <?= validation_errors() ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div></div>
                       </div>
        <?php endif ?>                
            <div class="row header">
                <div class="col-md-12 text-center">
                    <h2 id="contact">contact </h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-5 mycontact">
                    <div class="card text-white mb-3 text-center">
                        <div class="card-body">
                            <h5 class="card-title">Contact US</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="row ">
                                <div class="col-2 icon">
                                    <i class="fas fa-map-marker-alt "></i>
                                </div>
                                <div class="col-9 detail">
                                    <p>
                                        Banggai, Sulawesi Tengah <br>Indonesia
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-2 icon">
                                    <i class="far fa-envelope "></i>
                                </div>
                                <div class="col-9 detail">
                                    <p>
                                        fardinpratama14@gmail.com
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-2 icon">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div class="col-9 detail">
                                    <p>
                                        +628 53415 96615
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-2 icon">
                                    <i class="fab fa-instagram "></i>
                                </div>
                                <div class="col-9 detail ">
                                    <p>
                                        @fardinpy
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 form ">
              
                   <?= form_open() ?>
                        <div class="card form-message">
                            <input type="hidden" name="url" class="url">
                            <input type="hidden" name="kode" class="kode">
                            <div class="title text-center pt-2">
                                <h2>get in touch</h2>
                            </div>
                            <div class=" form-group">
                                <label for="nama">Name</label>
                                <?= form_input('nama', null,'class="form-control" id="nama"' ) ?>
                            </div>
                            <div class=" form-group">
                                <label for="email">E-mail</label>
                                <?= form_input('email', null,'class="form-control" id="email"' ) ?>
                            </div>
                            <div class=" form-group">
                                <label for="pesan">Message</label>
                                <?= form_textarea('pesan', null, 'class="form-control"') ?>
        
                            </div>
                            <div class="form-group ">
                                <button class="btn btnsend">Send</button>
                            </div>
                        </div>
                  <?= form_close(); ?>
                </div>
            </div>
        </div>
    </section>




