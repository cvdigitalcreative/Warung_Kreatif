<div class="tp-fullscreen-container revolution">
    <div class="tp-fullscreen">
      <ul>
        <?php foreach ($header->result() as $row): ?>
          <li data-transition="fade"> <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
            <div class="tp-caption medium-large text-center sfb" data-x="center" data-y="293" data-speed="900" data-start="800" data-easing="Sine.easeOut"><?php echo $row->galeri_judul;?></div>
            <div class="tp-caption medium text-center sfb" data-x="center" data-y="387" data-speed="900" data-start="1500" data-easing="Sine.easeOut"><?php echo $row->galeri_deskripsi;?></div>
          </li>
        <?php endforeach;?>
      </ul>
      <div class="tp-bannertimer tp-bottom"></div>
    </div>
    <!-- /.tp-fullscreen-container --> 
  </div>
  <!-- /.revolution -->
  
  <div class="dark-wrapper">
    <div class="container inner">
      <?php foreach ($layanan->result() as $row): ?>
        <div class="thin">
          <h3 class="section-title text-center"><?php echo $row->galeri_judul;?></h3>
          <p class="text-center"><?php echo $row->galeri_deskripsi; ?></p>
        </div>
      <?php endforeach;?>
      <!-- /.thin -->
      <div class="divide10"></div>

      <div class="row">
        <?php foreach ($foto_layanan->result() as $row): ?>
          <div class="col-sm-4">
            <div class="caption-overlay">
              <figure><a href="#"><img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="" /> </a></figure>
              <div class="caption bottom-right">
                <div class="title">
                  <h3 class="main-title layer"><?php echo $row->galeri_judul?></h3>
                </div>
                <!--/.title --> 
              </div>
              <!--/.caption --> 
            </div>
          </div>
          <!-- /column -->
        <?php endforeach;?>
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
  
  <!--Produk Terbaru Part Description-->
 <div class="light-wrapper">
    <div class="container inner">
      <h3 class="section-title text-center">Portofolio Kami</h3>
      <div class="divide10"></div>
      <div class="carousel-wrapper">
        <div class="carousel carousel-boxed blog">
          
          <?php foreach ($portofolio_multimedia->result() as $row): ?>
          <div class="item post">
            <figure class="main"><a target="_blank" href="<?php echo base_url().'Home/'.$row->tulisan_slug?>"><img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="" /></a></figure>
            <div class="box text-center">
              <div class="category cat5"><span><a><?php echo $row->tulisan_kategori_nama?></a></span></div>
              <h4 class="post-title"><a><?php echo $row->tulisan_judul?></a></h4>
              <div class="meta"><span class="date"><?php echo $row->tanggal?></span>
              </div>
            </div>
          </div>
          <?php endforeach;?>
          
          <?php foreach ($portofolio_website->result() as $row): ?>
          <div class="item post">
            <figure class="main"><a target="_blank" href="<?php echo base_url().'Home/'.$row->tulisan_slug?>"><img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="" /></a></figure>
            <div class="box text-center">
              <div class="category cat12"><span><a><?php echo $row->tulisan_kategori_nama?></a></span></div>
              <h4 class="post-title"><a><?php echo $row->tulisan_judul?></a></h4>
              <div class="meta"><span class="date"><?php echo $row->tanggal?></span>
              </div>
            </div>
          </div>
          <?php endforeach;?>

          
          <?php foreach ($portofolio_mobile->result() as $row): ?>
          <div class="item post">
            <figure class="main"><a target="_blank" href="<?php echo base_url().'Home/'.$row->tulisan_slug?>"><img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="" /></a></figure>
            <div class="box text-center">
              <div class="category cat6"><span><a><?php echo $row->tulisan_kategori_nama?></a></span></div>
              <h4 class="post-title"><a><?php echo $row->tulisan_judul?></a></h4>
              <div class="meta"><span class="date"><?php echo $row->tanggal?></span>
              </div>
            </div>
          </div>
          <?php endforeach;?>
        
        </div>
       
      </div>
   
    </div>
  </div>

  <div class="dark-wrapper">
    <div class="container inner">
      <div class="thin">
        <h3 class="section-title text-center">Gallery Kami</h3>
        <p class="text-center">Pelayanan dengan hasil terbaik yang telah kami selesaikan adalah bagian dari kinerja maksimal kami.</p>
      </div>
      <!-- /.thin -->
      <div class="divide10"></div>
      <div class="cbp-panel">
        <div id="js-filters-mosaic" class="cbp-filter-container text-center">
          <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
          <div data-filter=".aplikasimobile" class="cbp-filter-item"> Aplikasi Mobile </div>
          <div data-filter=".website" class="cbp-filter-item"> Website </div>
          <div data-filter=".multimedia" class="cbp-filter-item"> Multimedia </div>
          <div data-filter=".photoproduk" class="cbp-filter-item"> Photo Produk </div>
          <div data-filter=".alkena" class="cbp-filter-item"> alkena </div>
          <div data-filter=".branding" class="cbp-filter-item"> Branding </div>
        </div>
        <div id="js-grid-mosaic" class="cbp">
          
          <?php foreach ($alkena->result() as $row): ?>
            <div class="cbp-item <?php echo $row->album_nama?>"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" data-title-id="title-2">
              <div class="cbp-caption-defaultWrap"> <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="" /> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title"></span></div>
                  </div>
                </div>
              </div>
              <!--/.cbp-caption-activeWrap --> 
              </a>
              <!-- /.hidden --> 
            </div>
            <!--/.cbp-item -->
          <?php endforeach;?>

          <?php foreach ($photoproduk->result() as $row): ?>
            <div class="cbp-item <?php echo $row->album_nama?>"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" data-title-id="title-2">
              <div class="cbp-caption-defaultWrap"> <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="" /> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title"></span></div>
                  </div>
                </div>
              </div>
              <!--/.cbp-caption-activeWrap --> 
              </a>
              <!-- /.hidden --> 
            </div>
            <!--/.cbp-item -->
          <?php endforeach;?>

           <?php foreach ($branding->result() as $row): ?>
            <div class="cbp-item <?php echo $row->album_nama?>"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" data-title-id="title-2">
              <div class="cbp-caption-defaultWrap"> <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="" /> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title"></span></div>
                  </div>
                </div>
              </div>
              <!--/.cbp-caption-activeWrap --> 
              </a>
              <!-- /.hidden --> 
            </div>
            <!--/.cbp-item -->
          <?php endforeach;?>

          <?php foreach ($multimedia->result() as $row): ?>
            <div class="cbp-item <?php echo $row->album_nama?>"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" data-title-id="title-2">
              <div class="cbp-caption-defaultWrap"> <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="" /> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title"></span></div>
                  </div>
                </div>
              </div>
              <!--/.cbp-caption-activeWrap --> 
              </a>
              <!-- /.hidden --> 
            </div>
            <!--/.cbp-item -->
          <?php endforeach;?>

          <?php foreach ($aplikasimobile->result() as $row): ?>
            <div class="cbp-item <?php echo $row->album_nama?>"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" data-title-id="title-2">
              <div class="cbp-caption-defaultWrap"> <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="" /> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title"></span></div>
                  </div>
                </div>
              </div>
              <!--/.cbp-caption-activeWrap --> 
              </a>
              <!-- /.hidden --> 
            </div>
            <!--/.cbp-item -->
          <?php endforeach;?>

          <?php foreach ($website->result() as $row): ?>
            <div class="cbp-item <?php echo $row->album_nama?>"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" data-title-id="title-2">
              <div class="cbp-caption-defaultWrap"> <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="" /> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title"></span></div>
                  </div>
                </div>
              </div>
              <!--/.cbp-caption-activeWrap --> 
              </a>
              <!-- /.hidden --> 
            </div>
            <!--/.cbp-item -->
          <?php endforeach;?>
        
          
        </div>
        <!--/.cbp --> 
        
      </div>
      <!--/.cbp-panel -->
      
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.dark-wrapper -->
  
  <!--About Part Description-->
  <!--<div class="light-wrapper">
    <div class="col-image">
      <div class="bg-wrapper col-md-6">
        <div class="bg-holder" style="background-image: url(style/images/art/about.jpg);"></div>
      </div>
      <!--/.bg-wrapper -->
      <!-- <div class="container">
        <div class="row">
          <div class="col-md-5 col-md-offset-7 inner-col">
            <h3 class="section-title">a little about me</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismod.</p>
            <ul class="progress-list">
              <li>
                <p>Photoshop <em>90%</em></p>
                <div class="progress plain">
                  <div class="bar" data-width="90"></div>
                </div>
              </li>
              <li>
                <p>Final Cut <em>80%</em></p>
                <div class="progress plain">
                  <div class="bar" data-width="80"></div>
                </div>
              </li>
              <li>
                <p>Studio Photography <em>85%</em></p>
                <div class="progress plain">
                  <div class="bar" data-width="85"></div>
                </div>
              </li>
              <li>
                <p>Motion Video <em>75%</em></p>
                <div class="progress plain">
                  <div class="bar" data-width="75"></div>
                </div>
              </li>
            </ul>    
          </div>
        </div>
      </div>
    </div>
  </div>-->


  <!-- /.dark-wrapper -->
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-4 col-md-3">
          <h2>Instagram Feed</h2>
          <p>🏢IT & Multimedia Company 
            <br>📂 Mobile App • Web App • Multimedia Design • Photography • Videography 
            <br>🔥️We Mix Your Idea With Our Digital Creativity</p>
          <div class="divide10"></div>
          <a target="_blank" href="https://www.instagram.com/digital_creative/" class="btn btn-icon"><i class="icon-s-instagram"></i> Instagram Page</a> </div>
        <!--/column -->
        <div class="col-sm-8 col-md-9">
          <div class="image-grid col5">
            <div class="items-wrapper">
              <div id="instafeed" class="items" data-limit="4">
              </div>
              
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
   