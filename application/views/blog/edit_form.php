<div class="container">
    <div class="row">
    
        <div class="col-12">
        
        <?php if( ! empty(validation_errors())) :  ?>
            <div class="alert alert-warning" role="alert">
                <?= validation_errors() ?>
            </div>
        <?php endif ?>
            <div class="card mb-3">
                <div class="card-header text-center text-white" style="background: linear-gradient(to top, #31b156, #c2dd6a)">  
                    <h1 class="text-uppercase">Edit Artikel</h1>
                </div>
                <?= form_open_multipart(); ?>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="title">Judul Artikel</label>
                            <?= form_input('title',set_value('title', $blog['title']), 'class="form-control" id="title"' ) ?>
                        </div>
                    </li>


                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="url">URL</label>
                            <?= form_input('url', set_value('url', $blog['url']), 'class="form-control" id="url"' ) ?>
                        </div>
                    </li>


                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="quotes">Quotes</label>
                            <?= form_input('quotes', set_value('quotes', $blog['quotes']), 'class="form-control" id="quotes"' ) ?>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="quotes">Isi Artikel</label>
                            <?= form_textarea('content',set_value('content', $blog['content']),'class="form-control" id="content"') ?>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="images">Input Image</label>
                            <?= form_upload('image', null, ' class="form-control" id="image"') ?>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                        <button type="submit" class="btn  text-white" style="background: linear-gradient(to right, #31b156, #c2dd6a)">Edit</button>
                        </div>
                    </li>
                    
                </ul>
                </form>
            </div>
        </div>
    
    </div>
</div>