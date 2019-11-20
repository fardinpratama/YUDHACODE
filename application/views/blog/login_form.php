<div class="container">
    <div class="row">

        <div class="col-md-8 m-auto">
        <?php if($this->session->flashdata()) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('message'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
         <?php endif ?>
            <div class="card mb-3">

                <div class="card-header text-center text-white" style="background: linear-gradient(to top, #31b156, #c2dd6a)">  
               
                  
                    <h1 class="text-uppercase">FOrm login</h1>
                </div>
                <?= form_open(); ?>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <?= form_input('username', null, ' class="form-control" id="username"') ?>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <?= form_password('password', null, ' class="form-control" id="password"') ?>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                        <button type="submit" class="btn  text-white" style="background: linear-gradient(to right, #31b156, #c2dd6a)">Login</button>
                        </div>
                    </li>
                    
                </ul>
                <?= form_close(); ?>
            </div>
        </div>
    
    </div>
</div>