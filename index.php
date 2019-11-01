<?php include("components/head.php"); ?>
<?php include("components/header.php"); ?>
<?php include("components/content.php"); ?>
<?php include("components/download.php") ?>
<?php include("components/video.php"); ?>
<?php include("components/footer.php"); ?>
<?php include("components/foot.php"); ?>


<script type="text/javascript">
$(document).on("click","a",function(e){
        e.preventDefault();
        var id = $(this).attr("href"),
            topSpace = 30;
        $('html, body').animate({
          scrollTop: $(id).offset().top - topSpace
        }, 800);
    });

</script>

