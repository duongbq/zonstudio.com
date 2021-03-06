<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo $package_name; ?></h3>
</div>

<div class="modal-body">

    <form method="post" enctype="multipart/form-data" class="form-inline">
        <input type="file" name="userfile" id="userfile" multiple accept="image/*"/>  
        <button type="submit" id="btn"></button>  
    </form> 

    <div class="clear">&nbsp;</div>

    <div id="response"></div>
    <div id="list">
        <?php $this->load->view('images_list'); ?>
    </div>
</div>

<script>

    function set_package_slider($image_id, $package_id) {

        $.ajax({
            type: "post",
            url: "<?php echo site_url('packages/set_package_slider'); ?>",
            data: {
                image_id: $image_id,
                package_id: $package_id
            },
            success: function(response) {

                $('#list').html(response);
                
            }
        });
    }

    function remove_image($image_id, $package_id) {

        if (!confirm('Bạn có thực sự muốn xóa ảnh này không?'))
            return;

        $.ajax({
            type: "post",
            url: "<?php echo site_url('packages/remove_package_image'); ?>",
            data: {
                image_id: $image_id,
                package_id: $package_id
        
            },
            success: function(response) {
                $('#response').html('Đã xóa ảnh...');
                $('#response').addClass('alert alert-info');
                $('#list').html(response);
            }
        });


    }

    (function() {


        var input = document.getElementById("userfile");
        var formdata = false;
        var btn = document.getElementById("btn");

        if (window.FormData) {
            formdata = new FormData();
            btn.style.display = "none";
        }

        input.addEventListener("change", function(evt) {

            var list = document.getElementById("list");
            var response = document.getElementById("response");
            response.innerHTML = 'Đang tải ảnh lên...';
            response.className = 'alert alert-info';

            var reader;
            var file;
            for (i = 0; i < this.files.length; i++) {

                file = this.files[i];

                if (!!file.type.match(/image.*/)) {
                    if (window.FileReader) {
                        reader = new FileReader();
                        reader.readAsDataURL(file);
                    }
                    if (formdata) {
                        formdata.append("userfile", file);
                    }
                }
            }

            if (formdata) {
                $.ajax({
                    url: '<?php echo site_url('packages/upload_package_image/'.  $package_id); ?>',
                    type: 'POST',
                    data: formdata,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('.form-inline').attr('style', 'display: none;');
                    },
                    success: function(res) {
                        if (res == '0') {
                            response.innerHTML = 'Có lỗi trong quá trình tải ảnh >.<';
                            response.className = 'alert alert-error';
                        } else {
                            response.innerHTML = 'Tải ảnh thành công';
                            response.className = 'alert alert-success';
                            list.innerHTML = res;
                        }
                        $('.form-inline').removeAttr('style');
                    }
                });
            }

        }, false);
    }());



</script>