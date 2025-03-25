<div class="page-content">
    <div class="container-fluid">
        <?php $this->load->view('admin/page-title', ['pagetitle' => $maintitle, 'title' => $pagetitle]); ?>
        <div class="row">

        <!-- updates -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Updates</h4>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-hover table-bordered table-striped dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Updates</th>
                                    <th>Link</th>
                                    <th>Tag</th>
                                    <th style="width:80px;">Edit</th>
                                    <th style="width:80px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($updates as $variable): ?>
                                    <tr>
                                        <td><?= $variable['id']; ?></td>
                                        <td><?= $variable['updates']; ?></td>
                                        <td><?= $variable['link']; ?></td>
                                        <td><?= $variable['tags']; ?></td>
                                        <td style="width:80px;"><a href=""><i class="fas fa-edit"></i></a></td>
                                        <td style="width:80px;"><a href=""><i class="fas fa-trash"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->

            <!-- Area of Glance -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Area of Glance</h4>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-hover table-bordered table-striped dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Icon</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th style="width:80px;">Edit</th>
                                    <th style="width:80px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($areaglance as $variable): ?>
                                    <tr>
                                        <td><?= $variable['id']; ?></td>
                                        <td><?= $variable['icon']; ?></td>
                                        <td><?= $variable['title']; ?></td>
                                        <td><?= $variable['content']; ?></td>
                                        <td style="width:80px;"><a href=""><i class="fas fa-edit"></i></a></td>
                                        <td style="width:80px;"><a href=""><i class="fas fa-trash"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->

            <!-- commissioner -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">People   </h4>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-hover table-bordered table-striped dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Updates</th>
                                    <th>Link</th>
                                    <th>Tag</th>
                                    <th style="width:80px;">Edit</th>
                                    <th style="width:80px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($updates as $variable): ?>
                                    <tr>
                                        <td><?= $variable['id']; ?></td>
                                        <td><?= $variable['updates']; ?></td>
                                        <td><?= $variable['link']; ?></td>
                                        <td><?= $variable['tags']; ?></td>
                                        <td style="width:80px;"><a href=""><i class="fas fa-edit"></i></a></td>
                                        <td style="width:80px;"><a href=""><i class="fas fa-trash"></i></a></td>
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