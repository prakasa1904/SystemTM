<article class='col-xs-12'>
<div class="row">
    <div class='col-xs-3'>
        <?php echo admin_sidebar('home'); ?>
    </div>
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?=ucfirst($this->uri->segment(2))?> Artikel
                </div>
                <div class="panel-body">
                        <form role="form" method="POST" enctype="multipart/form-data">
                        <?php if( $this->uri->segment(2) == 'tambah' ): ?>
                        <input type="hidden" value="<?=date('Y-m-d h:i:s'); ?>" name="article_created" >
                        <?php else: ?>
                            <input type="hidden" value="<?=date('Y-m-d h:i:s'); ?>" name="article_modified" >
                        <?php  endif; ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Judul *</label>
                                <input id="article_name" name="article_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <p class="help-block" style="font-size: 12px;">http://<?=strtolower($portal->portal_name)?>.terpusat.com/artikel/read/../<span id="show-post-uri">...</span> <span id="post-uri"><input id="article_slug" type="text" class="form-control input-sm" name="article_slug" ></span><button id="uri-edited" type="button" class="btn btn-outline btn-primary btn-xs">Edit</button></p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Fotografer</label>
                                <select name="article_photograph" class="form-control">
                                    <option value="">--Pilih Fotografer--</option>
                                <?php foreach($member as $Fotografer): ?>
                                    <option value="<?php echo $Fotografer->member_id ?>"><?php echo $Fotografer->fullname ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Penulis</label>
                                <select name="article_author" class="form-control">
                                    <option value="">--Pilih Penulis--</option>
                                <?php foreach($member as $Penulis): ?>
                                    <option value="<?php echo $Penulis->member_id ?>"><?php echo $Penulis->fullname ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Editor</label>
                                <select name="article_editor" class="form-control">
                                    <option value="">--Pilih Editor--</option>
                                <?php foreach($member as $Editor): ?>
                                    <option value="<?php echo $Editor->member_id ?>"><?php echo $Editor->fullname ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label></label>
                                <button style="margin-top: 5px;" id="get-image" data-toggle="modal" data-target="#myModal" class="btn btn-primary form-control" type="button"><i class="fa fa-image"></i> Media</button>
                                <input id="article_img" name="article_img" type="hidden">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Ringkasan *</label>
                                <textarea maxlength="150" name="article_excerpt" rows="3" style="resize:none;" class="article_excerpt form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Konten *</label>
                                <textarea name="article_content" id="article_content" rows="3" class="article_content form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <label>Topik</label>
                            <div class="form-group input-group">
                                <input name="topic_id" type="text" class="form-control">
                                <span id="get-topik" data-toggle="modal" data-target="#myModal" style="cursor:pointer;" class="input-group-addon"><i class="fa fa-arrows"></i></span></a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>Komentar</label>
                                <select name="comment" class="form-control">
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="article_status" class="form-control">
                                    <option value="1">Publish</option>
                                    <option value="0">Draft</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-default">Save</button>
                            <a href="http://localhost/terpusat/administrator/artikel/" class="btn btn-default">Cancel</a>                         
                        </div>
                    </div>
                        <!-- /.row (nested) -->
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</article>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"></h4>
                                        </div>
                                        <div class="modal-body"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="closed-modal btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
<!-- Timmy MCE -->
<script src="<?php echo base_url(); ?>assets/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
var count = 0;
$('.article_excerpt').keyup(function(e){
    var maxlength = 225;
    var disable = [18, 17, 16, 20, 9, 42, 38, 39, 37, 40, 91, 27];
    var then = disable.indexOf(e.keyCode);
    if(then == -1){
        if(e.keyCode != 8 && e.keyCode != 46){
                ++count;
        }else{
            --count;
        }
    }
    // Then what must we do for match condition
    if(count > maxlength){
        alert("Jumlah Karakter Berlebihan");
    }
});
    /* Ringkasan Tinymce Init */
/*    tinymce.init({
        mode : "specific_textareas",
        editor_selector : "article_excerpt",
        height : 100,
        plugins: "wordcount",
        toolbar: "false",
        menubar: "false",
        setup : function(ed) {
            var maxlength = 10;
            var count = 0;
            var disable = [18, 17, 16, 20, 9, 42, 38, 39, 37, 40, 91, 27];
            ed.on('keyup', function(e){
                var then = disable.indexOf(e.keyCode);
                if(then != 1){
                    if(e.keyCode != 8 && e.keyCode != 46){
                            ++count;
                    }else{
                        --count;
                    }
                }

                // Then what must we do for match condition
                if(count >= maxlength){
                    alert(tinyMCE.activeEditor.getContent());
                }
            });
        }
    }); */

    /* Konten Tinymce Init */
    tinymce.init({
        mode : "specific_textareas",
        height : 400,
        width : "99.2%",
        editor_selector : "article_content",
        plugins : "link,table,wordcount,code, print, image, table, media, example, legacyoutput"

    });

    // $(document).ready(function() {
    //     $('#article_excerpt_ifr').css('height', '100px');
    // });
</script>
<script type="text/javascript">
    $('#article_name').bind("change", function () {
        var value = $(this).val();
        var uri = value.toLowerCase(value);
        var uri = uri.replace(/-/g, ' ');
        
        /* Value To Array */
        arr = [];
        var iChars = "'\!@#$%^&*()+=~_-[]\';,./{}|\":<>?|";
        for (var i = 0; i < uri.length; i++) {
            if (iChars.indexOf(uri.charAt(i)) == -1) {
                if (i > 0) {
                    if (uri.charAt(i) != " ") {
                        arr.push(uri.charAt(i));
                    } else {
                        if(uri.charAt(i) != uri.charAt(i-1)){
                            arr.push(uri.charAt(i));
                        }
                    }
                } else {
                    if(uri.charAt(i) != " ")
                        arr.push(uri.charAt(i));
                }
            }
        }
        
        /* URI create FROM array */
        var  string = arr.toString();
        var string = string.replace(/,/g,'');
        var  string = string.trim();
        var uri_result = string.replace(/ /g, '-');
            /* Final Check To Remove Multi [-] */
            finalarr =[];
            for (var i = 0; i < uri_result.length; i++) {
                if(i > 0){
                    if(uri_result.charAt(i) != "-"){
                        finalarr.push(uri_result.charAt(i));
                    } else{
                        if(uri_result.charAt(i) != uri_result.charAt(i-1)){
                            finalarr.push(uri_result.charAt(i));
                        }
                    }
                } else {
                    if(uri_result.charAt(i) != "-")
                        finalarr.push(uri_result.charAt(i));
                }
            }
            /* Final Check To Remove Multi [-] */
        var uri_result = finalarr.toString();
        var uri_result = uri_result.trim();
        var uri_result = uri_result.replace(/,/g,'');
        var html = uri_result.substr(0, 15);
        $("#show-post-uri").html(html + " ...");
        $("#article_slug").val(uri_result);
    });

    $("#uri-edited").bind('click', function() {
        $("#article_slug").toggle();
        $("#show-post-uri").toggle();
    });
</script>


<!-- Get Image JS -->
<script type="text/javascript">
    $('#get-image').click(function(){
        $('#myModalLabel').html('Ambil Data Media');
        $.get("<?php echo admin_url(); ?>image", function(data, status){
            if(status != 'success'){
                $('.modal-body').html('Gagal Mengambil Media');
            }else{
                $('.modal-body').html(data);
            }
        });
    });
</script>

<!-- Get Topic JS -->
<script type="text/javascript">
    $('#get-topik').click(function(){
        $('#myModalLabel').html('Ambil Data Topik');
        $.get("<?php echo admin_url(); ?>artikel/ajax", function(data, status){
            if(status != 'success'){
                $('.modal-body').html('Gagal Mengambil List Topik');
            }else{
                $('.modal-body').html(data);
            }
        });
    });
</script>

<script type="text/javascript">
// File Reader Image Selected
    /*$("#foto1").change(function(){
        console.log(this.files[0]);
        var preview = $(this).next();
        if(this.files[0]['type'].match(/image/g) == 'image'){
            if(this.files[0]['size'] < 10000000){
                $(this).parent().attr('style', 'border:none;');
                var reader = new FileReader();
                reader.onload = function (e) {
                    preview.attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
                $('.btn_red').removeAttr('disabled');
            }else{
                $('.btn_red').attr('disabled', 'disabled');
                preview.attr('src', image);
                $(this).parent().attr('style', 'border:1px solid #ff0000;');
            }
        }else{
            $('.btn_red').attr('disabled', 'disabled');
            preview.attr('src', image);
            $(this).parent().attr('style', 'border:1px solid #ff0000;');
        }
    });*/
</script>
<script type="text/javascript">
    function selectImage(path){
        $('#article_img').val(path);
        $('.closed-modal').click();
    }
</script>