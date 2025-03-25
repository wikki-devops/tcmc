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
                                    <th>Zone</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Party Name</th>
                                    <th>Image</th>
                                    <th style="width:80px;">Edit</th>
                                    <th style="width:80px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($people as $variable): ?>
                                    <tr data-id="<?= $variable['id']; ?>">
                                        <form class="updateForm">
                                            <td><?php echo $no++; ?></td>
                                            <td><?= $variable['id']; ?></td>
                                            <td>
                                                <span class="text"><?= $variable['ward_no']; ?></span>
                                                <input type="text" name="ward_no" class="edit-input d-none form-control"
                                                    value="<?= $variable['ward_no']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['zone']; ?></span>
                                                <input type="text" name="zone" class="edit-input d-none form-control"
                                                    value="<?= $variable['zone']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['name']; ?></span>
                                                <input type="text" name="name" class="edit-input d-none form-control"
                                                    value="<?= $variable['name']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['designation']; ?></span>
                                                <input type="text" name="designation" class="edit-input d-none form-control"
                                                    value="<?= $variable['designation']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['address']; ?></span>
                                                <input type="text" name="address" class="edit-input d-none form-control"
                                                    value="<?= $variable['address']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['contact_no']; ?></span>
                                                <input type="text" name="contact_no" class="edit-input d-none form-control"
                                                    value="<?= $variable['contact_no']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['email_id']; ?></span>
                                                <input type="text" name="email_id" class="edit-input d-none form-control"
                                                    value="<?= $variable['email_id']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['partyname']; ?></span>
                                                <input type="text" name="partyname" class="edit-input d-none form-control"
                                                    value="<?= $variable['partyname']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['image']; ?></span>
                                                <input type="text" name="image" class="edit-input d-none form-control"
                                                    value="<?= $variable['image']; ?>">
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