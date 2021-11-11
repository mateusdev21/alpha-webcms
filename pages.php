<?php
$page = "pages";
include "templates/header.php";
include "templates/navbar.php";
?>
<div class="container container-fluid main-content m-0 p-0">
    <div class="row m-0">
        <div class="col-md-3">
            <?php include "templates/side-content.php"; ?>
        </div>
        <div class="col-md-9">
            <div class="card dashboard-card">
                <div class="card-header d-flex">
                    <div class="mr-auto p-2">Table Pages</div>
                    <div>
                        <button class="btn btn-create" data-toggle="modal" data-target="#create-page"><i class="bi bi-plus-square mr-2"></i>&nbsp;Create</button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm" id="table-pages">
                        <thead>
                            <tr>
                                <th scope="col" width="10%" class="text-center">No</th>
                                <th scope="col" width="50%">Title</th>
                                <th scope="col" width="20%">Author</th>
                                <th scope="col" width="20%">Created At</th>
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

<!-- Create Page Modal -->
<div class="modal fade" id="create-page" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Page</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="input-title">Page Title</label>
                        <input type="text" class="form-control" id="input-title" placeholder="Enter Page Title">
                    </div>
                    <div class="form-group">
                        <label for="input-body">Page Body</label>
                        <textarea name="input-body" id="input-body" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="input-tags">Meta Tags</label>
                        <input type="text" class="form-control" id="input-tags" placeholder="Enter Meta Tags">
                    </div>
                    <div class="form-group">
                        <label for="input-desc">Meta Description</label>
                        <input type="text" class="form-control" id="input-desc" placeholder="Enter Meta Description">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="vendors/js/jquery.min.js"></script>
<script src="vendors/js//bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script src="assets/js/main.js"></script>
<script>
    CKEDITOR.replace( 'input-body' );
    $(document).ready(function() {

        // Navbar Active Handler
        $("li").removeClass("active");
        $("li[id='<?= $page ?>']").addClass("active");

        // List Group Active Handler
        $(".list-group-item").removeClass("active");
        $(".list-group-item[id='<?= $page ?>-list']").addClass("active");

        $.ajax({
            type: "GET",
            url: "api/dummy_data/pages.json",
            success: function(response) {
                let data = response.data;
                for (let i = 1; i <= data.length; i++) {
                    let table_row = '<tr>' +
                        '<th scope="row">' + i + '</th>' +
                        '<td>' + data[i - 1].title + '</td>' +
                        '<td>' + data[i - 1].author + '</td>' +
                        '<td>' + data[i - 1].created_at + '</td>' +
                        '</tr>';
                    $("#table-pages").find("tbody").append(table_row);
                };
            }
        });
    });
</script>
</body>

</html>