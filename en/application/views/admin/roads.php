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
                                    <th>Name of the Scheme</th>
                                    <th>No. of Package</th>
                                    <th>No. of Roads</th>
                                    <th>Length in KM</th>
                                    <th>Project Cost Rs</th>
                                    <th style="width:80px;">Edit</th>
                                    <th style="width:80px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($roadproject as $road): ?>
                                    <tr data-id="<?= $road['id']; ?>">
                                        <form class="updateForm">
                                            <td><?php echo $no++; ?></td>
                                            <td><?= $road['id']; ?></td>
                                            <td>
                                                <span class="text"><?= $road['name']; ?></span>
                                                <input type="text" name="name" class="edit-input d-none form-control"
                                                    value="<?= $road['name']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $road['package']; ?></span>
                                                <input type="text" name="package" class="edit-input d-none form-control"
                                                    value="<?= $road['package']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $road['roads']; ?></span>
                                                <input type="text" name="roads" class="edit-input d-none form-control"
                                                    value="<?= $road['roads']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $road['length']; ?></span>
                                                <input type="text" name="length" class="edit-input d-none form-control"
                                                    value="<?= $road['length']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $road['project']; ?></span>
                                                <input type="text" name="project" class="edit-input d-none form-control"
                                                    value="<?= $road['project']; ?>">
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