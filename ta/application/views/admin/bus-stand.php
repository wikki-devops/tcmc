<div class="page-content">
    <div class="container-fluid">
        <?php $this->load->view('admin/page-title', ['pagetitle' => $maintitle, 'title' => $pagetitle]); ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?php echo $pagetitle; ?></h4>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-hover table-bordered table-striped dt-responsive nowrap"
                            data-table="<?php echo $tablename; ?>"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Filter</th>
                                    <th style="width:80px;">Edit</th>
                                    <th style="width:80px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($busstand as $bus): ?>
                                    <tr data-id="<?= $bus['id']; ?>">
                                        <form class="updateForm">
                                            <td><?php echo $no++; ?></td>
                                            <td><?= $bus['id']; ?></td>
                                            <td>
                                                <span class="text"><?= $bus['name']; ?></span>
                                                <input type="text" name="name" class="edit-input d-none form-control"
                                                    value="<?= $bus['name']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $bus['filter']; ?></span>
                                                <input type="text" name="filter" class="edit-input d-none form-control"
                                                    value="<?= $bus['filter']; ?>">
                                            </td>
                                            <td>
                                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i></a>
                                                <button type="submit" class="save-btn d-none btn btn-link text-success p-0 border-0">
                                                    <i class="fas fa-save"></i>
                                                </button>
                                            </td>
                                            <td>
                                                <button class="delete-btn btn btn-link text-success p-0 border-0" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                <a href="#" class="cancel-btn d-none"><i class="fas fa-times text-danger"></i></a>
                                            </td>
                                        </form>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->