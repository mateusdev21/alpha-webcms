<?php
$page = "dashboard";
include "templates/header.php";
include "templates/navbar.php";
?>
<div class="container container-fluid main-content m-0 p-0">
    <div class="row m-0">
        <div class="col-md-3">
            <?php include "templates/list-group.php"; ?>
        </div>
        <div class="col-md-9"></div>
    </div>
</div>

<!-- Javascript -->
<script src="vendors/js/jquery.min.js"></script>
<script src="vendors/js//bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    $(document).ready(function() {

        // Navbar Active Handler
        $("li").removeClass("active");
        $("li[id='<?= $page ?>']").addClass("active");
        
        // List Group Active Handler
        $(".list-group-item").removeClass("active");
        $(".list-group-item[id='<?= $page ?>-list']").addClass("active");
    });
</script>
</body>

</html>