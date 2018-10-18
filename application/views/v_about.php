  
<?php foreach ($header->result() as $row): ?>
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url(<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>);">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2><p><?php echo $row->galeri_judul;?></p></h2>
        <p class="lead"><?php echo $row->galeri_deskripsi;?></p>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  <?php endforeach;?>
  
  <div class="dark-wrapper">
    <div class="container inner">
      <h3 class="section-title text-center">Voilà!! The Hero Digital Creative</h3>
      <div class="row grid-view">
      
      <?php foreach ($team->result() as $row): ?>  
        <div class="col-sm-3 text-center">
          <figure><img src="<?php echo base_url().'assets/images/'.$row->tentang_gambar;?>" alt="" /></figure>
          <h4 class="post-title"><?php echo $row->tentang_nama;?></h4>
          <div class="meta"><?php echo $row->tentang_jabatan;?></div>
          <p><?php echo $row->tentang_bijak;?></p>
          <ul class="social naked bigger text-center">
            <li><a target="_blank" href="<?php echo $row->link_option_1;?>"><i class="icon-s-instagram"></i></a></li>
            <li><a target="_blank" href="<?php echo $row->link_option_2;?>"><i class="icon-s-facebook"></i></a></li>
          </ul>
        </div>
        <!-- /column -->
      <?php endforeach;?>  
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
  </div>
  <!-- /.dark-wrapper -->
  
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">

        <?php foreach ($quote->result() as $row): ?>  
        <div class="col-sm-5">
          <figure><img src="<?php echo base_url().'assets/images/'.$row->tentang_gambar;?>" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-sm-7">
          <h3 class="section-title"><?php echo $row->tentang_nama;?></h3>
          <p><?php echo $row->tentang_bijak;?></p>
          <div class="small-quote">
            <blockquote>
              <p><?php echo $row->tentang_jabatan;?></p>
            </blockquote>
          </div>
          <p><?php echo $row->link_option_1;?></p>
        </div>
        <!--/column -->
        <?php endforeach;?>  

      </div>
      <!--/.row -->
      <div class="divide50"></div>
      <div class="row">
  <div class="light-wrapper">
    <div class="container inner">
      <div class="thin">
        <?php foreach ($touch->result() as $row): ?>
        <h3 class="section-title text-center"><?php echo $row->tentang_nama;?></h3>
        <p class="text-center"><?php echo $row->tentang_bijak;?></p>
        <ul class="contact-info text-center">
          <li><i class="icon-location"></i><?php echo $row->tentang_jabatan;?></li>
          <li><i class="icon-phone"></i><?php echo $row->link_option_1;?></li>
          <li><i class="icon-mail"></i><a href="first.last@email.com"><?php echo $row->link_option_2;?></a> </li>
        </ul>
        <?php endforeach;?>  
        <div class="divide50"></div>
        <div class="form-container">
          <form action="<?php echo base_url()?>Tentang/kirim_pesan" method="post" >
            <div class="row">
              <div class="col-sm-6">
                <div class="form-field">
                  <label>
                    <input type="text" name="name" placeholder="Your name" required="required">
                  </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column -->
              <div class="col-sm-6">
                <div class="form-field">
                  <label>
                    <input type="email" name="email" placeholder="Your e-mail" required="required">
                  </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <textarea name="message" placeholder="Type your message here..." required="required"></textarea>
            <input type="submit" class="btn" value="Send"  data-processing="Sending..." >
            <footer class="notification-box"><?php echo $this->session->flashdata('msg');?></footer>
          </form>
          <!--/.vanilla-form --> 
        </div>
        <!--/.form-container --> 
      </div>
      <!-- /.thin --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
       
      </div>
      <!--/.row -->
    </div>
    <!--/.container --> 
  </div>
  <!-- /.light-wrapper -->
  
  <div class="dark-wrapper">
    
    <!--/.container --> 
  </div>
  <!--/.dark-wrapper -->
  
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-4 col-md-3">
          <h2>🏢 Instagram Feed</h2>
          <p>📂 IT & Multimedia Company • Mobile App • Web App • Multimedia Design • Photography • Videography 
            <br>🔥️We Mix Your Idea With Our Digital Creativity</br></p>
          <div class="divide10"></div>
          <a target="_blank" href="https://www.instagram.com/digital_creative/" class="btn btn-icon"><i class="icon-s-instagram"></i> Instagram Page</a> </div>
        <!--/column -->
        <div class="col-sm-8 col-md-9">
          <div class="image-grid col5">
            <div class="items-wrapper">
              <div id="instafeed" class="isotope items" data-limit="5"></div>
              
              <!--/.isotope --> 
            </div>
            <!--/.items-wrapper --> 
          </div>
          <!--/.image-grid --> 
        </div>
        <!--/column --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
  </div>
  <!-- /.light-wrapper -->
  
   