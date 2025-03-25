<footer class="footer">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © TAMBARAM CORPORATION.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank"
                        class="text-muted">God Particles</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- ✅ SUCCESS TOAST -->
<div style="z-index: 1003; position: fixed; top: 20px; right: 20px;">
    <div id="borderedToast1" class="toast overflow-hidden mt-3" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="align-items-center text-white bg-primary border-0">
            <div class="d-flex">
                <div class="toast-body">Success!</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>

<!-- ❌ ERROR TOAST -->
<div style="z-index: 1003; position: fixed; top: 20px; right: 20px;">
    <div id="borderedToast4" class="toast overflow-hidden mt-3" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="align-items-center text-white bg-danger border-0">
            <div class="d-flex">
                <div class="toast-body">Error!</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Deletion</h5>
            </div>
            <div class="modal-body">
                <p class="text-muted">Are you sure you want to delete this record?</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-danger confirm-delete-btn">Delete</button>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('../assets/admin/libs/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('../assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('../assets/admin/libs/metismenu/metisMenu.min.js'); ?>"></script>
<script src="<?= base_url('../assets/admin/libs/simplebar/simplebar.min.js'); ?>"></script>
<script src="<?= base_url('../assets/admin/libs/node-waves/waves.min.js'); ?>"></script>

<script src="<?= base_url('../assets/admin/libs/apexcharts/apexcharts.min.js'); ?>"></script>
<script src="<?= base_url('../assets/admin/js/pages/dashboard.init.js'); ?>"></script>

<script src="<?= base_url('../assets/admin/libs/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('../assets/admin/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js'); ?>"></script>

<!-- ✅ Load DataTables Responsive -->
<script src="<?= base_url('../assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('../assets/admin/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js'); ?>"></script>

<script src="https://cdn3.devexpress.com/jslib/19.2.5/js/dx.all.js"></script>

<!-- ✅ Datatable init JS (Must be last) -->
<script src="<?= base_url('../assets/admin/js/pages/datatables-base.init.js'); ?>"></script>

<script>
    $(document).ready(function () {
        $(document).on("click", ".edit-btn", function (e) {
            e.preventDefault();
            var row = $(this).closest("tr");

            // Store original values for cancel action
            row.find(".edit-input").each(function () {
                $(this).data("original", $(this).val());
            });

            // Show input fields and hide static text
            row.find(".text").addClass("d-none");
            row.find(".edit-input").removeClass("d-none");

            // Show Save & Cancel, Hide Edit & Delete
            row.find(".edit-btn, .delete-btn").addClass("d-none");
            row.find(".save-btn, .cancel-btn").removeClass("d-none");
        });

        $(document).on("click", ".cancel-btn", function (e) {
            e.preventDefault();
            var row = $(this).closest("tr");

            // Restore original values
            row.find(".edit-input").each(function () {
                $(this).val($(this).data("original"));
            });

            // Show static text and hide input fields
            row.find(".text").removeClass("d-none");
            row.find(".edit-input").addClass("d-none");

            // Restore Edit & Delete buttons
            row.find(".edit-btn, .delete-btn").removeClass("d-none");
            row.find(".save-btn, .cancel-btn").addClass("d-none");
        });

        $(document).on("click", ".save-btn", function (e) {
            e.preventDefault();

            var row = $(this).closest("tr");
            var id = row.data("id");
            var table = row.closest("table").attr("data-table"); // Get table name dynamically

            var formData = {};
            row.find(".edit-input").each(function () {
                var column = $(this).attr("name");
                var value = $(this).val();
                formData[column] = value;
            });

            formData["id"] = id; // Include ID
            formData["table"] = table; // Include table name

            $.ajax({
                url: "<?= base_url('admin/updateData') ?>",
                type: "POST",
                data: formData,
                dataType: "json",
                success: function (response) {
                    if (response.status === "success") {
                        showToast("borderedToast1", "Updated successfully!");
                        setTimeout(() => location.reload(), 2000); // Reload after 2 seconds
                    } else {
                        showToast("borderedToast4", "Update failed!"); // Error Toast
                    }
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error:", xhr.responseText);
                }
            });
        });

        function showToast(toastId, message) {
            var toastEl = document.getElementById(toastId);
            if (toastEl) {
                toastEl.querySelector(".toast-body").innerText = message; // Update Message
                var toast = new bootstrap.Toast(toastEl); // Initialize Toast
                toast.show(); // Show Toast
            }
        }


        $(document).on("click", ".delete-btn", function (e) {
            e.preventDefault();
            var row = $(this).closest("tr"); // Get the row
            var id = row.data("id"); // Fetch ID from tr
            var table = row.closest("table").attr("data-table"); // Fetch table name from table

            if (!id || !table) {
                alert("Error: ID or Table Name is missing.");
                return;
            }

            // Store values in modal's confirm button
            $(".confirm-delete-btn").data("id", id).data("table", table);
        });


        $(document).on("click", ".confirm-delete-btn", function () {
            var id = $(this).data("id");
            var table = $(this).data("table");

            $.ajax({
                url: "<?= base_url('admin/deleteRow') ?>",
                type: "POST",
                data: { id: id, table: table },
                dataType: "json",
                success: function (response) {
                    if (response.status === "success") {
                        $(`tr[data-id="${id}"]`).remove();
                        $("#deleteModal").modal("hide");
                        showToast("borderedToast1", "Deleted successfully!");
                        setTimeout(() => location.reload(), 2000);
                    } else {
                        showToast("borderedToast4", "Deletion failed!"); // Error Toast
                    }
                },
                error: function (xhr) {
                    console.error("AJAX Error:", xhr.responseText);
                }
            });
        });
    });
</script>

<script>
$(function () {
    $("#file-manager").dxFileManager({
        name: "fileManager",
        fileProvider: "<?= site_url('filemanager/file_system') ?>",
            itemView: {
                mode: "thumbnails"
            },
            height: 450,
            permissions: {
                create: true,
                copy: true,
                move: true,
                remove: true,
                rename: true,
                upload: true
            },
            customizeThumbnail: function (fileManagerItem) {
                if (fileManagerItem.isDirectory) {
                    return "https://js.devexpress.com/Demos/WidgetsGallery/JSDemos/images/thumbnails/folder.svg";
                }

                var extension = fileManagerItem.getFileExtension().toLowerCase();
                var filePath = "<?= base_url() ?>" + "/" + fileManagerItem.dataItem.path;

                // ✅ Show actual image for image files
                if (['.jpg', '.jpeg', '.png', '.gif'].includes(extension)) {
                    return filePath;
                }

                // ✅ Default icons for other file types
                var fileIcons = {
                    '.pdf': "https://example.com/pdf-icon.svg",
                    '.doc': "https://example.com/doc-icon.svg",
                    '.docx': "https://example.com/doc-icon.svg",
                    '.txt': "https://js.devexpress.com/Demos/WidgetsGallery/JSDemos/images/thumbnails/doc-txt.svg"
                };

                return fileIcons[extension] || "https://example.com/default-file-icon.svg";
            }
        });
    });


</script>

<script src="<?= base_url('../assets/admin/js/app.js'); ?>"></script>
</body>

</html>