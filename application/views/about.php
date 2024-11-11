  <style>
    .abus{
      font-size: 20px;
    font-weight: 300;
    line-height: 1.5;
    }
  </style>
  <!-- end page-header -->
  <section id="aboutus" style="padding-bottom:0px; " class="text-content-block" >
    <div class="container">
      <div class="row">

        <div class="col-12 wow" data-splitting >
          <h3 class="section-title"> OUR PROMISE <br/><span style="font-size:35px;">Better Results – Better Bottom Line - Better Environment </span>
            </h3>
        </div>
        <!-- end col-12 -->
        <div class="col-md-12 col-12 wow" data-splitting >
          <h5 class="text-black abus" style="margin-bottom:0px; padding-right:0px">
          We provide products & solutions based on innovative thinking, improved safety, maximum quality control, 
          increased cost savings and zero environmental impact.  
          WE3MINDS has the physical resources, the knowledge and technical experience to meet or exceed our client’s expectations.
                   <br /><br />
          The corporation reflects many years of professionalism and experience acquired serving the needs of the regional business community. <br /><br /> 
              </h5>
        </div>
     
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end text-content-block -->
  <!-- end intro -->
  <section class="intro-image light" style="background: #fff;" >
    <div class="container" style="background: #fff;">
      <div class="row">
        <div class="col-12">
          <div class="office-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <figure class="reveal-effect masker wow"> <img src="<?php echo base_url('assets/images/img/b1.jpg');?>" alt="Image">
                  <figcaption>
                    <h6 style="color:#fff"> KIRKLAND LAKE OFFICE </h6>
                
                  </figcaption>
                </figure>
              </div>
              <div class="swiper-slide">
                <figure> <img src="<?php echo base_url('assets/images/img/b2.jpg');?>" alt="Image">
                  <figcaption>
                    <h6 style="color:#fff">DRILL BIT RECONDITIONING</h6>
                  </figcaption>
                </figure>
              </div>
              <!-- end swiper-slide --> 
           
              <!-- end swiper-slide -->
              <div class="swiper-slide">
                <figure> <img src="<?php echo base_url('assets/images/img/b3.jpg');?>" alt="Image">
                  <figcaption>
                    <h6 style="color:#fff"> ROAD STABILIZATION</h6>
                
                  </figcaption>
                </figure>
              </div>
              <!-- end swiper-slide -->
               </div>
            <!-- end swiper-wrapper -->
            <div class="swiper-pagination"></div>
            <!-- end swiper-pagination --> 
          </div>
        
          <!-- end office-slider --> 
        </div>
        <div class="col-md-12 col-12 wow" data-splitting>
        <br /><br />
        <h5 class="text-black abus">
        WE3MINDS was incorporated in August 2023 and subsequently purchased a 20,000 sq. ft. building located in Kirkland Lake, Ontario. This site is centrally situated to easily supply & service clients in both Ontario and Quebec.
The site has undergone extensive renovations to accommodate two uniquely separate lines of business.<br /><br />
The new premises include multiple servicing/production areas, warehousing & storage facilities and the Executive Offices of the Corporation.
<br /><br />
        </h5>
</div>
        <!-- end col-12 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end intro-image -->
  
  <script>
    window.onload = function() {
        var swiper = new Swiper('.office-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 2000, // 2 seconds
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
           
        });
    };
</script>