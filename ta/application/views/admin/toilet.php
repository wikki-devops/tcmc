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
                                    <th>Male</th>
                                    <th>Female</th>
                                    <th>Differently Abled</th>
                                    <th>Child Seats</th>
                                    <th>Transgender Seats</th>
                                    <th>Zone</th>
                                    <th style="width:80px;">Edit</th>
                                    <th style="width:80px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($toilet as $variable): ?>
                                    <tr data-id="<?= $variable['id']; ?>">
                                        <form class="updateForm">
                                            <td><?php echo $no++; ?></td>
                                            <td>
                                                <?php echo $variable['id']; ?>
                                            <td>
                                                <span class="text"><?= $variable['male']; ?></span>
                                                <input type="text" class="edit-input d-none form-control" name="male"
                                                    value="<?= $variable['male']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['female']; ?></span>
                                                <input type="text" class="edit-input d-none form-control" name="female" value="<?= $variable['female']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['differently_abled']; ?></span>
                                                <input type="text" class="edit-input d-none form-control" name="differently_abled" value="<?= $variable['differently_abled']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['child_seats']; ?></span>
                                                <input type="text" class="edit-input d-none form-control" name="child_seats"
                                                    value="<?= $variable['child_seats']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['transgender_seats']; ?></span>
                                                <input type="text" class="edit-input d-none form-control" name="transgender_seats"
                                                    value="<?= $variable['transgender_seats']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['zone']; ?></span>
                                                <input type="text" class="edit-input d-none form-control" name="zone
                                                    " value="<?= $variable['zone']; ?>">
                                            </td>
                                            <td>
                                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i></a>
                                                <button type="submit"
                                                    class="save-btn d-none btn btn-link text-success p-0 border-0">
                                                    <i class="fas fa-save"></i>
                                                </button>
                                            </td>
                                            <td>
                                                <button class="delete-btn btn btn-link text-success p-0 border-0"
                                                    data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                <a href="#" class="cancel-btn d-none"><i
                                                        class="fas fa-times text-danger"></i></a>
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