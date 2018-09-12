@extends('durgapuja.header')
@section('content')
<!-- Banner_slider div START -->
<div class="sliderDiv">
  <div class="sliderDiv_inner">
    <!-- <div class="sliderDiv_innerAlign"> -->
      <!-- owl_carousel START -->
      <div id="owl_demo_homepage" class="owl-carousel">
        <!-- 1 -->                          
        <div class="item">
          <!-- <img class="img-responsive slider_images" src="/content2/images/home/slider1.jpg" alt="slider1_image"> -->
          <img class="img-responsive mob_slider_banner visible-xs" src="/content2/images/nik-prod-images/nik-prod-mobilebnr1.jpg" alt="Home_slider_banner_1"> 
          <!-- <img class="img-responsive iam_middleimg visible-xs" src="/content2/images/home/iam_image3.png" alt="iam_middleimage3">  -->
          <!--<div class="durga-txt hidden-xs">
            <img src="/content2/images/nik-prod-images/durga-text.png" class="img-responsive" alt="">
          </div>-->
        </div>
        <!-- 2 -->                          
        <div class="item">
          <!-- <img class="img-responsive slider_images" src="/content2/images/home/slider1.jpg" alt="slider1_image"> -->
          <img class="img-responsive mob_slider_banner visible-xs" src="/content2/images/nik-prod-images/nik-prod-mobilebnr2.jpg" alt="Home_slider_banner_1"> 
          <!-- <img class="img-responsive iam_middleimg visible-xs" src="/content2/images/home/iam_image3.png" alt="iam_middleimage3">  -->
          <!--<div class="durga-txt hidden-xs">
            <img src="/content2/images/nik-prod-images/durga-text-2.png" class="img-responsive" alt="">
          </div>-->
        </div>
        <!-- 3 -->                          
        <!-- <div class="item">
          <img class="img-responsive slider_images" src="/content2/images/home/slider1.jpg" alt="slider1_image">
          <img class="img-responsive mob_slider_banner visible-xs" src="/content2/images/sale-banner-mobile.jpg" alt="Home_slider_banner_1"> 
          <img class="img-responsive iam_middleimg visible-xs" src="/content2/images/home/iam_image3.png" alt="iam_middleimage3"> 
          </div> -->
      </div>
      <!-- owl_carousel END -->
    <!-- </div> -->
  </div>
</div>
<!-- Banner_slider div CLOSE -->
<!-- section 1 START -->
<section class="section1">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <div class="section1Inner">
          <div class="section1Vertical_Middle">
            <div class="section1Vertical_Mid_inner">
              <div class="iam_expressDiv">
                <!-- Desktop i_am_expressing_myself image start -->
                <!-- <img class="img-responsive iam_expressing_image wow fadeInUp hidden-xs" data-wow-delay=".6s"  src="/content2/images/nik-prod-images/nik-participate.png" alt="iam_expressing_image"> -->
                <!-- Desktop i_am_expressing_myself image close -->
                <!-- Mobile i_am_expressing_myself image start -->
                <!--<img class="img-responsive iam_expressing_image wow fadeInUp visible-xs" data-wow-delay=".6s"  src="/content2/images/home/i_am_expressing_myself_mob.png" alt="iam_expressing_image_mobile">-->
                <!-- Mobile i_am_expressing_myself image close -->
                <div class="enter_contestDiv hidden">
                  <button type="button" id="enter_contest" class="btn enterbtn_contest wow fadeInUp" data-wow-delay=".6s">Thank You for your participation.<br /> The contest is now closed. <br /> We shall announce winners <br /> in few days.</button>                          
                </div>
              </div>
              <!-- <img class="img-responsive iam_middleimg" src="/content2/images/home/iam_image.png" alt="iam_middleimage">  -->
            </div>
          </div>
          <!-- bottom content START -->
          <div class="bottomDIv">
            <div class="bottomDIv_Inner">
              <div class="horizontal_border hidden"> </div>
              <div class="bottomRight pull-right wow fadeInRight" data-wow-delay="1.2s">
                <img class="img-responsive product_image hidden-xs" src="/content2/images/nik-prod-images/d750-nik-sideimg.png" alt="D750_product_image"> 
                <div class="bottomRight_inner">
                  <!-- owl_carousel START -->
                  <div id="owl_demo_camera" class="owl-carousel">
                    <!-- 1 -->                          
                    <div class="item">
                      <div class="ProductDiv">
                        <a href="/product-d750">
                          <!-- <img class="img-responsive product_image hidden-xs" src="/content2/images/nik-prod-images/nik-prod-cam-d750.png" alt="D750_product_image">   -->
                          <img class="img-responsive product_image visible-xs" src="/content2/images/nik-prod-images/d750-nik-mob.png" alt="d750_product_image_mobile"> 
                        </a>
                        <div class="know_moreDiv">
                          <a target="_blank" href="/product-d750" id="knowmorebtn" class="btn know_more_btn visible-xs">know more</a>                  
                        </div>
                      </div>
                    </div>
                    <!-- 2 -->                            
                    <div class="item">
                      <div class="ProductDiv">
                        <a href="/product-d5600">
                          <!-- <img class="img-responsive product_image hidden-xs" src="/content2/images/camera_d5300_image-white.png" alt="d5300_product_image">  -->
                          <img class="img-responsive product_image visible-xs" src="/content2/images/nik-prod-images/d5600-nik-mob.png" alt="d5600_product_image_mobile"> 
                        </a>
                        <div class="know_moreDiv">
                          <a target="_blank" href="/product-d5600" id="knowmorebtn2" class="btn know_more_btn visible-xs">know more</a>                  
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- owl_carousel END -->
                </div>
              </div>
              <div class="bottomLeft wow fadeInLeft" data-wow-delay="1.2s">
                <img class="img-responsive right_headerLogo hidden-xs" src="/content2/images/nik-prod-images/d5600-nik-leftside-img.png" alt="nikon_tollfree_number_footer">
                <!-- vector image start -->
                <img class="img-responsive vectorL_shape_right visible-xs" src="/content2/images/logos/vector_footer_Lshape_left.png" alt="vectorimage_L_shape_right">
                <!-- vector image close -->
                <!-- mobile tollfree number start -->
                <!-- <a class="footer_tollfree_number visible-xs" href="javascript:void(0)">
                  <img class="img-responsive right_headerLogo" src="/content2/images/logos/nikon_tollfree_number_mob.png" alt="nikon_tollfree_number_footer">
                  
                  </a> -->
                <!-- mobile tollfree number close -->  
                <!-- <ul>
                  <li><a href="javascript:void(0)" class="grow"></a></li>
                  <li><a href="https://www.facebook.com/NikonIndia" target="_blank" class="grow" title="facebook"></a></li>
                  <li><a href="https://twitter.com/NikonIndia" target="_blank" class="grow" title="Twitter"></a></li>
                  <li><a href="https://www.instagram.com/nikonindiaofficial/" target="_blank" class="grow" title="instagram"></a></li>
                  <li><a href="https://www.youtube.com/user/nikonind" target="_blank" class="grow" title="youtube"></a></li>
                  </ul> -->
                <!-- vector image start -->
                <!-- <img class="img-responsive vectorL_shape_left visible-xs" src="/content2/images/logos/vector_footer_Lshape_left.png" alt="vectorimage_L_shape_left"> -->
                <!-- vector image close -->
              </div>
            </div>
          </div>
          <!-- bottom content CLOSE -->
        </div>
      </div>
    </div>
  </div>
</section>

@stop