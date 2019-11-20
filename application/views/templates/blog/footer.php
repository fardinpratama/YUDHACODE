

    <!-- footer -->
    <footer>
        <div class="">
            <div class="row text-center pt-3">
                <div class="col">
                    <p> Copyright <i class=" far fa-copyright fa-1x"></i> 2019 all right
                        reversed |
                        <span>yudha.code</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url();?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url();?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.paroller.min.js"></script>
    <script>
        // img

        var layer1 = document.getElementById('img-blog1')
        scroll = window.pageYOffset;
        document.addEventListener('scroll', function (e) {
            var offset = window.pageYOffset;
            scroll = offset;
            layer1.style.width = (100 + scroll / 50) + '%';
            layer1.style.right = scroll / 10000 + '%'

        });

        // create url otomatis

        function createUrl(){
            let title = $('#title').val();
            $('#url').val(string_to_url(title));
        }

        function string_to_url(str) {
        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();

        // remove accents, swap ñ for n, etc
        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
        var to = "aaaaeeeeiiiioooouuuunc------";
        for (var i = 0, l = from.length; i < l; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }

        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

        return str;
        }


// MODAL
        $(document).ready(function ()  {
    $('.reply-comment').on('click', function(){
        const url = $(this).data('url');
        const komen = $(this).data('comment');
        const kode = $(this).data('kode');
        $('.modal-header p span').html(komen);
        $('.modal-body input#url').val(url);
        $('.modal-body input#kode').val(kode);
        // $.ajax({
        //     url: 'http://localhost/yudhacodeVCI/index.php/blog/replyComment',
        //     data: {
        //         id: id
        //     },
        //     method: 'post',
        //     dataType: 'json',
        //     success: function (data) {
        //        console.log(data);
        //     }

        // });
    });
});
    </script>
</body>

</html>