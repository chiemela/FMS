<?php
$nav_id_edit_photo = "&nav_id=PERSONAL_INFO_EDIT";
$nav_id_send_mail = "&nav_id=PERSONAL_INFO_VIEW";
?>
<style>
    
    .file-upload {
    background-color: #ffffff;
    width: 100%;
    margin: 0 auto;
    padding: 20px;
    }

    .file-upload-btn:active {
    border: 0;
    transition: all .2s ease;
    }

    .file-upload-content {
    display: none;
    text-align: center;
    }

    .file-upload-input {
    position: absolute;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    outline: none;
    opacity: 0;
    cursor: pointer;
    }

    .image-upload-wrap {
    margin-top: 20px;
    border: 4px dashed #1FB264;
    position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
    background-color: #1FB264;
    border: 4px dashed #ffffff;
    }

    .image-title-wrap {
    padding-top: 15px;
    }

    .drag-text {
    text-align: center;
    }

    .drag-text h3 {
    font-weight: 100;
    text-transform: uppercase;
    color: #15824B;
    padding: 60px 0;
    }

    .file-upload-image {
    max-height: 200px;
    max-width: 200px;
    margin: auto;
    padding: 20px;
    }

    .remove-image {
    width: 200px;
    margin: 0;
    color: #fff;
    background: #cd4535;
    border: none;
    padding: 10px;
    border-radius: 4px;
    border-bottom: 4px solid #b02818;
    transition: all .2s ease;
    outline: none;
    text-transform: uppercase;
    font-weight: 700;
    }

    .remove-image:hover {
    background: #c13b2a;
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
    }

    .remove-image:active {
    border: 0;
    transition: all .2s ease;
    }

</style>
<div class="d-flex flex-column align-items-center text-center">
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
            $('.image-upload-wrap').hide();

            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();
            $('.file-upload-content2').hide();

            $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
        }

        function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function () {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function () {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
    </script>
    <div class="file-upload-content2">
        <img class="rounded-circle" src="img/undraw_profile.svg" alt="Admin" width="150">
        <br/>
        Profile Photo Preview
        <div style='line-height:80%;'>
            <br>
        </div>
        <hr>
        <div style='line-height:30%;'>
            <br>
        </div>
    </div>
    <div class="mt-3">
        <div class="file-upload">
            <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                <div class="drag-text">
                <h3>Drag and drop a file or select "Choose Photo"</h3>
                </div>
            </div>
            <div class="file-upload-content">
                <img class="file-upload-image rounded-circle" src="#" alt="your image" />
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <button class="justify-content-center btn btn-primary file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">
                    Choose Photo
                </button>
            </div>
            <div class="col-2"></div>
            <div style='line-height:10%;'>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="file-upload-content">
                    <div class="image-title-wrap">
                        <button type="button" onClick="document.location.reload(true)" class="justify-content-center btn btn-danger">
                            <i class="fa fa-times-circle text-white-50" aria-hidden="true"></i> 
                            Remove 
                            <span class="image-title">
                                Uploaded Image
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
            <div style='line-height:-10px;'>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="file-upload-content">
                    <div class="image-title-wrap">
                        <button class="justify-content-center btn btn-outline-primary">
                            <i class="fa fa-upload" aria-hidden="true"></i> 
                            Save 
                            <span class="image-title">
                                Uploaded Image
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</div>