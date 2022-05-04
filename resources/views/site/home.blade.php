@extends('layouts.app')

@section('content')


<div class="super_container">


    <!-- Header -->
    @include('layouts._header')
    
    <!-- Slider -->
    <div class="row blogs_container">
      <div class="owl-carousel owl-theme sliders-carousel">
       @foreach($sliders as $slider)
    
       <div class="main_slider item" style="background-image:url({{url('uploads/slider_images', $slider->image)}})">
          <div class="container fill_height">
           <div class="row align-items-center fill_height">
             <div class="col">
               <div class="main_slider_content">
                 <h1>{{$slider->title}}</h1>
                 <div class="red_button shop_now_button"><a href="#">shop now</a></div>
               </div>
             </div>
           </div>
         </div>
       </div>
       @endforeach
     </div>
    </div>
    
    <!-- Banner -->
    
    <div class="banner">
      <div class="container">
        <div class="row">
    
            @foreach($banners as $banner)
            <div class="col-md-4">
                <div class="banner_item align-items-center" style="background-image:url({{url('uploads/banner_images', $banner->image)}})">
                  <div class="banner_category">
                    <a href="#">@lang('site.buy_now')</a>
                  </div>
                </div>
              </div>
            @endforeach
    
        </div>
      </div>
    </div>

    <!-- New Arrivals -->
    
    <div class="new_arrivals">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="section_title new_arrivals_title">
              <h2>@lang('site.our_services')</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
            
            @foreach($products as $product)  
              <div class="product-item men">
                <div class="product discount product_filter">
                  <div class="product_image">
                    <img src="{{url('uploads/product_images', $product->image)}}" alt="">
                  </div>
                  <div class="favorite favorite_left"></div>
                  @if ($product->id==3||$product->id==7)
                  <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-20</span></div>
                  @endif
                  <div class="product_info">
                    <h6 class="product_name"><a href="#">{{$product->name}}</a></h6>
                    <div class="product_price">{{$product->purchase_price}} SDG<span>{{$product->sale_price}} SDG</span></div>
                  </div>
                </div>
                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
              </div>
            @endforeach
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Deal of the week -->
    
    <div class="deal_ofthe_week" style="background-image:url('assets/images/offers.jpg')">
      <div class="container">
        <div class="row align-items-center" >
          <div class="col-lg-6">
            <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                <h2>@lang('site.offers_info')</h2>
              </div>
          </div>
          <div class="col-lg-6 text-right deal_ofthe_week_col">
            <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
             <div class="red_button deal_ofthe_week_button"><a href="#">@lang('site.view_offers')</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Our Advantage -->
    
    <div class="best_sellers">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="section_title new_arrivals_title">
              <h2>@lang('site.our_advantage')</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Benefit -->
    
    <div class="benefit">
      <div class="container">
        <div class="row benefit_row">
            @php
              $benefits = [
                  ['rocket', 'تسليم فوري', 'احصل على البطاقات التي اشتريتها في نفس اللحظة عند اتمام عملية الدفع.'],
                  ['credit-card', 'أمان تام', 'اشتر وتصفح منتجاتك بأمان تام وخصوصية كاملة'],
                  ['headphones', 'دعم 24/7', 'فريق الدعم في خدمتك لمساعدتك طوال ايام الاسبوع']
              ];
            @endphp
            @foreach($benefits as $benefit)  
            <div class=" vc_column_container col-md-4">
                <div class="wpb_wrapper vc_column-inner">
                    <div class="porto-sicon-box px-2 px-xl-4 style_1 top-icon">
                        <div class="porto-sicon-top">
                            <div id="porto-icon-18700836676275655fa9796" class="porto-just-icon-wrapper" style="text-align:center;">
                              <div class="porto-icon advanced" style="color:#ffffff;background:#0e0f11;width:80px;height:80px;line-height:80px;border-radius:40px;font-size:35px;display:inline-block;">
                                <i class="fa fa-{{$benefit[0]}}"></i>
                              </div>
                            </div>
                        </div>
                        <div class="porto-sicon-header">
                            <h3 class="porto-sicon-title" style="font-weight:700;font-size:16px;color:#000000;">{{$benefit[1]}}</h3>
                        </div> 
                        <!-- header -->
                        <div class="porto-sicon-description" style="font-size:13px;color:#687176;">{{$benefit[2]}}</div> 
                        <!-- description -->
                   </div>
                   <!-- porto-sicon-box -->
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>
    
    <!-- Packed Via -->
    
    <div class="blogs">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="section_title">
              <h2>@lang('site.packed_via')</h2>
            </div>
          </div>
        </div>
        <div class="row blogs_container">
          <div class="owl-carousel owl-theme services-carousel">
            @foreach($services as $service) 
          <div class="item">
            <div class="blog_item">
              <div class="blog_background" style="background-image:url({{url('uploads/service_images', $service->image)}})"></div>
              <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                <h4 class="blog_title">{{$service->name}}</h4>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    @include('layouts._header')
    
    </div>
    
@endsection

@push('scripts')

<script>
    $('.sliders-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      autoplay:true,
      autoplayTimeout:3000,
      dots:false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  })
  $('.services-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      autoplay:true,
      autoplayTimeout:3000,
      stagePadding:8,
      dots:false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
      }
  })
  </script>

@endpush