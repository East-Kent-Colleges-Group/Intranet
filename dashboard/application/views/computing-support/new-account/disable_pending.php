<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
    <div class="row">
        <?php $this->load->view('templates/toolbars/computing-support/disable_account.php'); ?>
        <div class="col-lg-12">   
            <h1 class="page-header">Pending Disable</h1>
            <?= $output; ?>
        </div> <!-- END col-lg-12 -->
    </div> <!-- END row -->
</div> <!-- END container-fluid -->