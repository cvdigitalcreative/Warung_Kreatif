<footer class="footer inverse-wrapper">
    <div class="container inner">
      <div class="row">
        
        <div class="col-sm-2">
          <?php foreach ($footer->result() as $row): ?>
          <!-- /.widget -->
          
          <div class="widget">
            <h4 class="widget-title">Media Sosial Kami</h4>
            <ul class="social">
              <li><a href="<?php echo $row->link_option_1;?>" target="blank"><i class="icon-s-facebook"></i></a></li>
              <li><a href="<?php echo $row->link_option_2;?>" target="blank"><i class="icon-s-instagram"></i></a></li>

            </ul>
            <!-- .social --> 
            
          </div>
        </div>
        <!-- /Tags column -->

        
        <!-- /Produk Terbaru column -->
        
        <div class="col-sm-5">
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title"><a href="kontak-kami.html">Hubungi Kami</a></h4>
            <div class="contact-info"> 
              <i class="icon-location"></i> <?php echo $row->tentang_bijak;?> <br />
              <i class="icon-phone"></i><?php echo $row->tentang_jabatan;?> <br />
              <i class="icon-mail"></i><?php echo $row->tentang_nama;?></div>
          </div>
          <!-- /.widget --> 
          
        </div>
        <!-- /Search column --> 
      <?php endforeach;?>
        
      </div>
      <!-- /.row --> 
    </div>
    <!-- .container -->
    
    <div class="sub-footer">
      <div class="container inner">
        <p class="text-center">© 2018 Warung Kreatif. Software Company.</p>
      </div>
      <!-- .container --> 
    </div>
    <!-- .sub-footer --> 
  </footer>
  <!-- /footer --> 
  
</main>
<!--/.body-wrapper --> 
<script src="https://www.w3schools.com/lib/w3data.js"></script>
<script src="<?php echo base_url()?>assets/style/js/jquery.min.js"></script> 
<script src="<?php echo base_url()?>assets/style/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url()?>assets/style/js/plugins.js"></script> 
<script src="<?php echo base_url()?>assets/style/js/classie.js"></script> 
<script src="<?php echo base_url()?>assets/style/js/jquery.themepunch.tools.min.js"></script> 
<script src="<?php echo base_url()?>assets/style/js/scripts.js"></script>

</body>
</html>