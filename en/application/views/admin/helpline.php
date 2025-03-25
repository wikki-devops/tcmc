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
                        <th>Helpline</th>
                        <th>Icons</th>
                        <th>Address</th>
                        <th>Area</th>
                        <th>Contact No</th>
                        <th style="width:80px;">Edit</th>
                        <th style="width:80px;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($helpline as $variable): ?>
                        <tr data-id="<?= $variable['id']; ?>">
                            <form class="updateForm">
                                <td><?php echo $no++; ?></td>
                                <td><?= $variable['id']; ?></td>
                                <td>
                                    <span class="text"><?= $variable['helpline']; ?></span>
                                    <input type="text" name="helpline" class="edit-input d-none form-control" 
                                        value="<?= $variable['helpline']; ?>">
                                </td>
                                <td>
                                    <span class="text"><?= $variable['icons']; ?></span>
                                    <input type="text" name="icons" class="edit-input d-none form-control" 
                                        value="<?= $variable['icons']; ?>">
                                </td>
                                <td>
                                    <span class="text"><?= $variable['address']; ?></span>
                                    <input type="text" name="address" class="edit-input d-none form-control" 
                                        value="<?= $variable['address']; ?>">
                                </td>
                                <td>
                                    <span class="text"><?= $variable['area']; ?></span>
                                    <input type="text" name="area" class="edit-input d-none form-control" 
                                        value="<?= $variable['area']; ?>">
                                </td>
                                <td>
                                    <span class="text"><?= $variable['phone']; ?></span>
                                    <input type="text" name="phone" class="edit-input d-none form-control" 
                                        value="<?= $variable['phone']; ?>">
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