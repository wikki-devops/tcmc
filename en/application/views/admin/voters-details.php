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
                                    <th>Ward No</th>
                                    <th>Male</th>
                                    <th>Female</th>
                                    <th>Others</th>
                                    <th>Total</th>
                                    <th style="width:80px;">Edit</th>
                                    <th style="width:80px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($voters as $voter):?>
                                    <tr data-id="<?= $voter['id']; ?>">
                                        <form class="updateForm">
                                            <td><?php echo $no++ ?></td>
                                            <td>
                                                <?php echo $voter['id']; ?>
                                            <td>
                                                <span class="text"><?= $voter['ward_no']; ?></span>
                                                <input type="text" name="ward_no" class="edit-input d-none form-control"
                                                    value="<?= $voter['ward_no']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $voter['male']; ?></span>
                                                <input type="text" name="male" class="edit-input d-none form-control"
                                                    value="<?= $voter['male']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $voter['female']; ?></span>
                                                <input type="text" name="female" class="edit-input d-none form-control"
                                                    value="<?= $voter['female']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $voter['others']; ?></span>
                                                <input type="text" name="others" class="edit-input d-none form-control"
                                                    value="<?= $voter['others']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $voter['total']; ?></span>
                                                <input type="text" name="total" class="edit-input d-none form-control"
                                                    value="<?= $voter['total']; ?>">
                                            </td>
                                            <td>
                                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i></a>
                                                <button type="submit"
                                                    class="save-btn d-none btn btn-link text-success p-0 border-0">
                                                    <i class="fas fa-save"></i>
                                                </button>
                                            </td>
                                            <td>
                                                <!-- <a href="#" class="delete-btn"><i class="fas fa-trash"></i></a> -->
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
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->