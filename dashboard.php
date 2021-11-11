<?php
$page = "dashboard";
include "templates/header.php";
include "templates/navbar.php";
?>
<div class="container container-fluid main-content m-0 p-0">
    <div class="row m-0">
        <div class="col-md-3 pl-4">
            <?php include "templates/side-content.php"; ?>
        </div>
        <div class="col-md-9 pr-5">
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card overview-card">
                        <div class="card-body text-center">
                            <h2 class="card-title"><i class="bi bi-file-earmark-text"></i>&nbsp;25</h2>
                            <h5 style="color: #dadbe8;">Pages</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card overview-card">
                        <div class="card-body text-center">
                            <h2 class="card-title"><i class="bi bi-pencil-square"></i>&nbsp;100</h2>
                            <h5 style="color: #dadbe8;">Posts</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card overview-card">
                        <div class="card-body text-center">
                            <h2 class="card-title"><i class="bi bi-people"></i>&nbsp;12</h2>
                            <h5 style="color: #dadbe8;">Users</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card overview-card">
                        <div class="card-body text-center">
                            <h2 class="card-title"><i class="bi bi-bar-chart-fill"></i>&nbsp;212</h2>
                            <h5 style="color: #dadbe8;">Visitors</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card dashboard-card">
                <div class="card-header">
                    Latest Login
                </div>
                <div class="card-body">
                    <table class="table table-sm" id="table-latest-login">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Logged In At</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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

        $.ajax({
            type: "GET",
            url: "api/dummy_data/last-login.json",
            success: function(response) {
                let data = response.data;
                for (let i = 1; i <= data.length; i++) {
                    let table_row = '<tr>' +
                        '<th scope="row">' + i + '</th>' +
                        '<td>' + data[i - 1].username + '</td>' +
                        '<td>' + data[i - 1].email + '</td>' +
                        '<td>' + data[i - 1].logged_in_at + '</td>' +
                        '</tr>';
                    $("#table-latest-login").find("tbody").append(table_row);
                };
            }
        });
    });
</script>
</body>

</html>