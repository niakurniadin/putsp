<div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item active"><a href="<?=base_url()?>" class="nav-link">Home </i></a></li>
                      <li class="nav-item"><a class="nav-link" href="<?=base_url()?>about">Tentang PUT </a></li>
                      
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layanan <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?=base_url()?>layanan/topografi">Pengukuran Topografi</a></li>
                            <li><a href="<?=base_url()?>layanan/fotoudara">Pemetaan Foto Udara</a></li>
                            <li><a href="<?=base_url()?>layanan/bm">Pengamatan dan Pembuatan BM</a></li>
                            <li><a href="<?=base_url()?>layanan/pengolahan">Pengolahan Data</a></li>
                          </ul>
                      </li> 
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Permohonan <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?=base_url()?>permohonan/ajukan">Ajukan Permohonan</a></li>
                            <li><a href="<?=base_url()?>permohonan/status">Status Permohonan</a></li>
                          </ul>
                      </li>
                            
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
        
        <!-- <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div> -->
        <!-- Search end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div>
        <!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->