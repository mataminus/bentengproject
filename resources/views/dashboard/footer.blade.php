<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2016 &copy; KPPN Benteng.

    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/css/dashboard/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/css/dashboard/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>

<script src="/css/dashboard/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>

{{--EDITOR  --}}
<script src="/css/dashboard/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>


<script src="/css/dashboard/assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
{{--FILE UPLOAD  --}}
<script src="/css/dashboard/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js" type="text/javascript"></script>
<script src="/css/dashboard/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js" type="text/javascript"></script>
  <script src="/css/dashboard/assets/pages/scripts/form-fileupload.min.js" type="text/javascript"></script>
{{--END FILE UPLOAD  --}}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/css/dashboard/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/css/dashboard/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/css/dashboard/assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>

<script src="/css/dashboard/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>

<script type="text/javascript">
  jQuery(document).ready(function(){
    jquery('#summernote_1').summernote({
      callbacks:{
        onImageUpload: function(files,editor,$editable){
          alert('evoked');
          sendFile(files[0],editor,$editable);
        }
      }
    });
    function sendFile(file,editor,welEditable){
      data = new FormData();
      data.append("file",file);
      jQuery.ajax({
        url: "{{public_path().'/image/blog'}}",
        data:data,
        cache:false,
        contentType:false,
        processData:false,
        type: 'POST',
        success: function(s){
          jQuery('#summernote_1').summernote("insertImage",s);
        },
        error:function(jqXHR,textStatus,errorThrown){
          console.log(textStatus+" "+errorThrown);
        }
      });
    }
  });
</script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>
