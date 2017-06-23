<?php $this->load->view('yonetim/include/sidebar.php'); ?>
        <!-- MAIN -->
        <div class="main">

            <!-- NAVBAR -->
                <?php $this->load->view('yonetim/include/header.php'); ?>
            <!-- END NAVBAR -->

            <!-- MAIN CONTENT -->
            <?php echo $this->session->flashdata('bilgi'); ?>

            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- RECENT PURCHASES -->
                            <div class="panel">
                                <div class="panel-body no-padding">
                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Mesaj Sayısı</th>
                                                <th>Gönderen Kişi</th>
                                                <th>Konu</th>
                                                <th>Mesaj</th>
                                                <th>E-Mail</th>
                                                <th>Gönderim Tarihi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach ($bilgi as $bilgi) { ?>
                                            <tr>
                                                <td><?php echo $bilgi->mesajID; ?></td>
                                                <td><?php echo $bilgi->gonderen_ad; ?></td>
                                                <td><?php echo $bilgi->konu; ?></td>
                                                <td><?php echo $bilgi->mesaj; ?></td>
                                                <td><?php echo $bilgi->mail; ?></td>
                                                <td><?php echo $bilgi->mesaj_tarih; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i><?php echo date('F j ,Y / H:i:s');  ?></span></div>
                                        <div class="col-md-6 text-right"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END RECENT PURCHASES -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- END MAIN CONTENT -->
            
        </div>
        
        <!-- END MAIN -->
    </div>
    <!-- END WRAPPER -->

    <!-- Javascript -->
    <script src="<?php  echo base_url(); ?>assets/backend/assets/js/jquery/jquery-2.1.0.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/backend/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/backend/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/backend/assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/backend/assets/js/plugins/chartist/chartist.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/backend/assets/js/klorofil.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/backend/assets/js/mesajlar-js.js"></script>
    <script src="<?php  echo base_url(); ?>assets/backend/assets/js/mesajlar-js1.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</body>
</html>
