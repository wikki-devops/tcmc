<?php $this->load->view('admin/header'); ?>

<div id="layout-wrapper">
    <?php $this->load->view('admin/topbar'); ?>
    <?php $this->load->view('admin/sidebar'); ?>

    <div class="main-content">
        <?php $this->load->view($viewpage); ?>
    </div>
</div>

<?php $this->load->view('admin/footer'); ?>