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
                                    <th>Image</th>
                                    <th>Distance</th>
                                    <th>Place</th>
                                    <th>Brief</th>
                                    <th>Scroll</th>
                                    <th style="width:80px;">Edit</th>
                                    <th style="width:80px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($poi as $variable): ?>
                                    <tr data-id="<?= $variable['id']; ?>">
                                        <form class="updateForm">
                                            <td><?php echo $no++; ?></td>
                                            <td><?= $variable['id']; ?></td>
                                            <td>
                                                <span class="text"><?= $variable['image']; ?></span>
                                                <input type="text" name="image" class="edit-input d-none form-control"
                                                    value="<?= $variable['image']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['distance']; ?></span>
                                                <input type="text" name="distance" class="edit-input d-none form-control"
                                                    value="<?= $variable['distance']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['place']; ?></span>
                                                <input type="text" name="place" class="edit-input d-none form-control"
                                                    value="<?= $variable['place']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['brief']; ?></span>
                                                <input type="text" name="brief" class="edit-input d-none form-control"
                                                    value="<?= $variable['brief']; ?>">
                                            </td>
                                            <td>
                                                <span class="text"><?= $variable['scroll']; ?></span>
                                                <input type="text" name="scroll" class="edit-input d-none form-control"
                                                    value="<?= $variable['scroll']; ?>">
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