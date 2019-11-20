<?php if($this->session->flashdata('komen')) : ?>
                       <div class="row">
                       <div class="col-md-8 m-auto mt-3">
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('komen'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div></div>
                       </div>
        <?php endif ?>  

          <!-- cek validasi -->
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
    <div class="container m-auto">
        <!-- judul -->
        <div class="row title">
            <div class="col-12">
          
                <h1 class=" mt-3 head-title"><?= $blog['title']; ?></h1>
                <div class="row kotak-title mb-1">
                  <div class="col-auto pr-0 m-auto mb-0">
                      <div class="kotak " id="kotak1">
                        </div>
                          <div class="kotak" id="kotak2">
                          </div>
                          <div class="kotak" id="kotak3">
                          </div>
                        <div class="kotak" id="kotak4">
                        </div>
                  </div>
                    <div class="col-auto p-0 m-auto">
                        <p class="mt-0 mb-0">Date post <?= date('l, d F Y', strtotime($blog['date_post'])); ?> <span>|</span><span>|</span><span>|</span> <?= str_word_count($blog['content']);  ?>
                          words </p>
                    </div>
                </div>

                <div class="batas"></div>
            </div>

        </div>

        <!-- artikel -->

        <div class="row">
            <div class="col-sm-7 sub-title ml-4 mt-3">
                <h3>
                <i class="fas fa-quote-right"></i> <?= $blog['quotes']; ?>
                </h3>
            </div>

            <div class="row m-3 text-justify content">
                <div class="col-sm-6">
                    <?php if($blog['image']): ?>
                    <div class="img mb-4">
                        <img src="<?= base_url();?>/assets/img/artikel/<?= $blog['image']; ?>" id="img-blog1" class="">
                    </div>
                     <?php endif ?>

                    <?= $blog['content']; ?>
                </div>

                <div class=" col-sm-6 pb-5">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim facilis ipsum maiores in
                        expedita
                        quaerat quidem adipisci aliquam. Dolor laudantium, obcaecati corporis commodi quod beatae
                        autem,
                        laborum nobis corrupti error aspernatur vel? Dolores dolorem debitis reprehenderit officiis
                        incidunt, sed nostrum laudantium iusto expedita quo ab eos obcaecati, sunt laboriosam quis?
                    </p>

                    <div class="quotes">
                        <p>
                            <i class="fas fa-quote-right fa-2x"></i>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi vel doloribus nisi
                            maiores....
                        </p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat architecto cum eius possimus
                        debitis. Id eius quaerat, sed totam tempora quidem nostrum nobis quia officiis illo, dolores
                        velit debitis eaque.
                    </p>

                    <div class="row about justify-content-end text-right m-0 pr-3">
                        <div class="col p-0 follow mr-3"><a href="https://www.instagram.com/@fardinpy"><i class="fab fa-instagram"><span> follow</span></i></a></div>
                        <div class="col-auto p-0 mt-auto about-text">
                            <p>Fardin Pratama Yudha</p>
                            <p>Web developer</p>
                            <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Dicta iure.</p>
                        </div>
                        <div class="col-2 p-0 mt-auto">
                            <img src="<?= base_url();?>/assets/img/about/me.png" alt="" class="img-thumbnail border-dark">
                        </div>
                    </div>

                </div>
            </div>
            <div class="batas"></div>
        </div>


        <div class="more">
            <div class="row">
                <div class="col-sm-6 mt-3">
                    <h4>More Article</h4>
                    <div class="card mt-4">
                        <ul class="list-group">
                        <?php foreach($more as $key => $blogs) : ?>
                            <li>
                            <a href="<?= site_url('blog/detail/'. $blogs['url']) ?>" class="text-decoration-none text-capitalize text-dark"> <?= $blogs['title']; ?></a>
                             </li>
                        <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 mt-3">
              

                    <h4>Leave a reply</h4>
                   <?= form_open(); ?>
                        <div class="form-message">
                            <div class=" form-group">
                                <label for="pesan">Comment</label>
                                
                                <?= form_textarea('comment', $pesan, 'class="form-control"') ?>
                            </div>
                            <div class=" form-group">
                                <label for="name">Name</label>
                                <?= form_input('name', $nama,'class="form-control" id="email"' ) ?>
                                
                            </div>
                            <div class="form-group">
                                <label for="nama">E-mail</label>
                                <?= form_input('email', $e_mail,'class="form-control" id="email"' ) ?>
                            </div>

                            <div class="form-group ">
                                <button class="btn btnsend">Send</button>
                            </div>
                        </div>
                  <?= form_close(); ?>
                </div>
                <!-- <div class="batas mt-3"></div> -->
            </div>
        </div>

        <!-- comment -->

        <div class="row comment mb-3" id="komen">
            <div class="col-sm-10 m-auto">
                <div class="<?php if(!empty($comment)){ echo "card"; } ?>  mt-4">
                    <div class="card-body p-2">
                            <?php foreach($comment as $key => $comments) : ?>
                        <!-- comment 1 -->
                        <div class="row list-comment border-bottom ">
                            <div class="col-2 mb-2 photo">
                                <img src="<?= base_url();?>/assets/img/about/me.png" alt=""
                                    class="rounded-circle border border-white img-thumbnail float-right">
                            </div>
                            <div class="col-10">
                                <div class="row people-comment ">
                                    <div class="col-auto ">
                                        <p class="nama mb-2"><?= $comments['name'] ?> <span>says:</span></p>
                                    </div>
                                    <div class="col-auto ml-auto ">
                                        <p class="text-right mb-2"><?= date('l, d F Y', strtotime($comments['date'])); ?></p>
                                    </div>
                                </div>
                                <div class="row text-comment">
                                    <div class="col-12">
                                        <p> <?= $comments['comment'] ?></p>
                                        <div class="row p-0">
                                            <div class="col-10">
                                            <a href="<?= site_url('/blog/replyComment/').$comments['id']?>" class="text-dark text-decoration-none ml-2 reply-comment" data-toggle="modal" data-kode="<?= strtotime($comments['date']) ?>" data-target="#exampleModal" data-url="<?= $comments['url'] ?>" data-comment="<?= $comments['comment'] ?>"> <span style="font-size:1.2vw">reply</span> 
                                            </a>
                                            
                                                      <!-- replay -->
                                                      <div class="replaylist rounded" style="background-color:rgba(0, 0, 0, .3)" >
                                                      <?php foreach($ListReply as $key => $ListReplys) : ?>
                                                          <?php if(strtotime($comments['date'])  == $ListReplys['kode'] ) :?>
                                                      <div class="row reply ml-auto pt-1  mb-1" >
                                                        <div class="col-10 " >
                                                                    <div class="row list-comment " >
                                                                        <div class="col-2 mb-2 photo">
                                                                        <img src="<?= base_url();?>/assets/img/about/me.png" alt=""  class="rounded-circle border border-white img-thumbnail float-right">
                                  
                                                                        </div>
                                                                        <div class="col-10">
                                                                            <div class="row people-comment">
                                                                                <div class="col-auto">
                                                                                    <p class="nama"><?= $ListReplys['name'] ?> <span>says:</span></p>
                                                                                </div>
                                                                                <div class="col-auto ml-auto">
                                                                                    <p class="text-right"><?= date('l, d F Y', strtotime($ListReplys['date'])); ?></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row text-comment">
                                                                                <div class="col-12">
                                                                                    <p><?= $ListReplys['pesan'] ?> </p>
                                                                                    <div class="row">
                                                                                        <div class="col-10 mt-0">
                                                                                        <a href="<?= site_url('/blog/replyComment/').$comments['id']?>" class="text-dark text-decoration-none ml-2 reply-comment" data-toggle="modal" data-kode="<?= strtotime($comments['date']) ?>" data-target="#exampleModal" data-url="<?= $comments['url'] ?>" data-comment="<?= $ListReplys['pesan'] ?>"> <span style="font-size:1.2vw">reply</span> </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php endif ?>
                                                            <?php endforeach ?>
                                                            </div>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>


    </div>




    <!-- Modal  komen reply-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="font-italic">"<span></span>"</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    <?= form_open('/blog/replyComment'); ?>
                    <input type="hidden" name="url" id="url" > 
                    <input type="hidden" name="kode" id="kode"> 
                        <div class="form-message" style="font-size:80%" >
                            <div class=" form-group">
                                <label for="pesan">Reply</label>
                                <textarea name="reply" class="form-control"  cols="30" rows="2" style="font-size:80%"></textarea>
                            </div>
                            <div class=" form-group">
                                <label for="name">Name</label>
                                <?= form_input('name',null,'class="form-control" id="name" style="font-size:80%"' ) ?>
                                
                            </div>
                            <div class="form-group">
                                <label for="nama">E-mail</label>
                                <?= form_input('email',null ,'class="form-control" id="email" style="font-size:80%"' ) ?>
                            </div>
                            <div class="form-group ">
                                <button class="btn text-white rounded-lg" style=" background: linear-gradient(to top, #31b156, #c2dd6a); font-size:80%;">Send</button>
                            </div>
                        </div>
                  <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>





