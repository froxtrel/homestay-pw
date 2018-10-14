<footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="#" target="_blank">Stunning Homestay</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url();?>admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url();?>admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>admin/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>admin/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url();?>admin/js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script src="<?php echo base_url();?>admin/js/main.js"></script>

  <script type='text/javascript'>

			$(document).ready(function(){

					$("#pol_pets option:contains(" +  '<?php echo @$userLodging['0']['is_pet'];?>' + ")").attr('selected', 'selected');
					$("#pol_children_bed option:contains(" +  '<?php echo @$userLodging['0']['is_children_bed'];?>' + ")").attr('selected', 'selected');

			});

</script>
</body>

</html>