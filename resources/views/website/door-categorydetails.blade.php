@extends('website.layouts.app')
@section('title')   {{$categorydet->titletype}}   @endsection
@section('mainsection')
<main>
     <!-- details area start -->
     <div class="product-details-area tp-about-wrapper">
         <div class="tp-product-details-top pb-70">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-6">
                     <div class="tp-product-details-thumb-wrapper tp-tab">
                        <div class="tab-content m-img" id="productDetailsNavContent">
                           <div class="tab-pane fade active show" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab"
                              tabindex="0">
                              <div class="tp-product-details-nav-main-thumb">
                                 <img src="{{asset('website/doortype/'.$categorydet->image5)}}" alt="">
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab"
                              tabindex="0">
                              <div class="tp-product-details-nav-main-thumb">
                                 <img src="{{asset('website/doortype/'.$categorydet->image2)}}" alt="">
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab"
                              tabindex="0">
                              <div class="tp-product-details-nav-main-thumb">
                                 <img src="{{asset('website/doortype/'.$categorydet->image3)}}" alt="">
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab"
                              tabindex="0">
                              <div class="tp-product-details-nav-main-thumb">
                                 <img src="{{asset('website/doortype/'.$categorydet->image4)}}" alt="">
                              </div>
                           </div>
                        </div>
                        <nav>
                           <div class="nav nav-tabs d-flex justify-content-center justify-content-lg-start"
                              id="productDetailsNavThumb" role="tablist">
                              <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab"
                                 data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1"
                                 aria-selected="true">
                                 <img src="{{asset('website/doortype/'.$categorydet->image5)}}" alt="">
                              </button>
                              <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2"
                                 type="button" role="tab" aria-controls="nav-2" aria-selected="false" tabindex="-1">
                                 <img src="{{asset('website/doortype/'.$categorydet->image2)}}" alt="">
                              </button>
                              <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3"
                                 type="button" role="tab" aria-controls="nav-3" aria-selected="false" tabindex="-1">
                                 <img src="{{asset('website/doortype/'.$categorydet->image3)}}" alt="">
                              </button>
                              <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4"
                                 type="button" role="tab" aria-controls="nav-4" aria-selected="false" tabindex="-1">
                                 <img src="{{asset('website/doortype/'.$categorydet->image4)}}" alt="">
                              </button>
                           </div>
                        </nav>
                     </div>
                  </div>
                  <!-- col end -->
                  <div class="col-xl-6 col-lg-6">
                     <div class="tp-product-details-wrapper">
                        <div class="tp-product-details-title-content">
                           <h3 class="single-product-title d-inline-block mb-20">{{$categorydet->titletype}}</h3>
                        </div>
                        <!-- inventory details -->
                        <div class="tp-product-details-inventory d-sm-flex flex-wrap align-items-center mb-20">
                           <div class="tp-product-details-stock">
                              <h4>Brand: <span class="brand-type"> {{$categorydet->doorbrand}}</span></h4>
                           </div>
                        </div>
                        <p class="tp-product-details-price-dsc mb-25">{!! $categorydet->description !!} </p>
                        <!-- model -->
                        <div class="tp-product-details-model">
                           <h4>Model: <span> {{$categorydet->doormodel}}</span></h4>
                        </div>
                        <!-- actions -->
                        <div class="tp-product-details-action-wrapper">
                           <h3 class="tp-product-details-action-title mb-10">Door Size (WxH)</h3>
                           <div class="tp-product-filter tp-product-details-size-filter mb-60">
                              <select class="" id="doorSizeSelect" >
                                 @foreach($doorsection as $section)
                                 {{-- @if($section->sub_category_id == $categorydet->id) --}}
                                 <option >{{$section->size}}</option>
                                
                                 @endforeach
                              </select>
                              {{-- <div class="nice-select" tabindex="0">
                                 <span class="current">36''x96'' (3'-0"x8'-0")</span>
                                 <ul class="list">
                                    @foreach($doorsection as $section)
                                    @if($section->sub_category_id == $categorydet->id)
                                        <li data-value="Default Sorting" class="option selected focus">
                                            {{$section->size}}
                                        </li>
                                    @endif
                                @endforeach
                                 </ul>
                              </div> --}}
                           </div>
                           <br>
                        </div>
                        {{-- <p id="selectedValue">Selected value will be displayed here.</p> --}}
                        <!-- price -->
                        <div class="tp-product-details-price-wrapper d-flex align-items-center mb-35">
                        <span class="tp-product-details-price new-price">{{$categorydet->saleprice}}</span>
                           <span class="tp-product-details-price old-price">{{$categorydet->price}}</span>
                        </div>
                        <div
                           class="tp-product-details-action-item-wrapper mb-30 d-sm-flex flex-wrap align-items-center">
                           <div class="tp-product-details-add-to-cart">
                            <a href="{{route('contact')}}" > <button class="tp-product-details-add-to-cart-btn w-100">Get In Touch</button></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tp-product-details-bottom grey-bg">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-product-details-tab-box tp-tab">
                        <nav class="product-details-section">
                            <div class="nav nav-tabs tp-product-tab" id="navPresentationTab" role="tablist">
                              <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                                 data-bs-target="#nav-description" type="button" role="tab"
                                 aria-controls="nav-description" aria-selected="false" tabindex="-1">PRODUCT
                                 DETAILS</button>
                              <button class="nav-link" id="nav-addInfo-tab" data-bs-toggle="tab"
                                 data-bs-target="#nav-addInfo" type="button" role="tab" aria-controls="nav-addInfo"
                                 aria-selected="true">ADDITIONNAL INFORMATION</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="navPresentationTabContent">
                           <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                              aria-labelledby="nav-description-tab" tabindex="0">
                              <div class="tp-product-details-desc-wrapper pt-80">
                                 <h3 class="mb-30">{{$categorydet->titletype}}</h3>
                                 <p class="mb-30">{{strip_tags($categorydet->paragraph)}}</p>
                                 <div class="tp-product-details-desc-inner">
                                    <h3 class="inner-title mb-30">More Details</h3>
                                    <div class="row align-items-center mb-45">
                                       <div class="col-lg-6">
                                          <div class="">
                                             <ul >
                                                <li>{!! $categorydet->moredetails !!}</li>
                                                {{-- <li>
                                                   <span>
                                                      <svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                            d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z"
                                                            fill="currentColor"></path>
                                                      </svg>
                                                   </span> {!! $categorydet->moredetails !!}
                                                </li> --}}
                                                {{-- <li>
                                                   <span>
                                                      <svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                            d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z"
                                                            fill="currentColor"></path>
                                                      </svg>
                                                   </span> Lorem Ipsum generators on the tend to repeat.
                                                </li>
                                                <li>
                                                   <span>
                                                      <svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                            d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z"
                                                            fill="currentColor"></path>
                                                      </svg>
                                                   </span> Lorem Ipsum generators on the tend to repeat.
                                                </li>
                                                <li>
                                                   <span>
                                                      <svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                            d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z"
                                                            fill="currentColor"></path>
                                                      </svg>
                                                   </span> If you are going to use a passage.
                                                </li> --}}
                                             </ul>
                                          </div>
                                       </div>
                                       {{-- <div class="col-lg-6">
                                          <div class="postbox-list-wrapper">
                                             <ul>
                                                <li>
                                                   <span>
                                                      <svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                            d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z"
                                                            fill="currentColor"></path>
                                                      </svg>
                                                   </span>Lorem Ipsum generators on the tend to repeat.
                                                </li>
                                                <li>
                                                   <span>
                                                      <svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                            d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z"
                                                            fill="currentColor"></path>
                                                      </svg>
                                                   </span> If you are going to use a passage.
                                                </li>
                                                <li>
                                                   <span>
                                                      <svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                            d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z"
                                                            fill="currentColor"></path>
                                                      </svg>
                                                   </span> Lorem Ipsum generators on the tend to repeat.
                                                </li>
                                                <li>
                                                   <span>
                                                      <svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                            d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z"
                                                            fill="currentColor"></path>
                                                      </svg>
                                                   </span> Lorem Ipsum generators on the tend to repeat.
                                                </li>
                                                <li>
                                                   <span>
                                                      <svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                            d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z"
                                                            fill="currentColor"></path>
                                                      </svg>
                                                   </span> If you are going to use a passage.
                                                </li>
                                             </ul>
                                          </div>
                                       </div> --}}
                                    </div>
                                 </div>

                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-addInfo" role="tabpanel" aria-labelledby="nav-addInfo-tab"
                              tabindex="0">
                              <div class="tp-product-details-additional-info">
                                 <div class="row">
                                    <div class="col-xl-10">
                                       <table>
                                          <tbody>
                                             <tr>
                                                <td>Color</td>
                                                <td>{{$categorydet->color}}</td>
                                             </tr>
                                             <tr>
                                                <td>Wood Type</td>
                                                <td>{{$categorydet->woodtype}}</td>
                                             </tr>
                                             <tr>
                                                <td>Door Type</td>
                                                <td>{{$categorydet->titletype}}</td>
                                             </tr>
                                             <tr>
                                                <td>Product Dimensions</td>
                                                <td  id="selectedValue"></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- details area end -->
      <!-- product area start -->
      <div class="tp-product-area tp-about-wrapper p-relative fix">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-product-title-box mb-50">
                     <span class="tp-section-subtitle">Featured Window & Door Product</span>
                     <h3 class="tp-section-title">Releated Products</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-prduct-wrapper">
                     <div class="swiper-container tp-product-active-3">
                        <div class="swiper-wrapper">
                           @foreach($category as $item)
                           <div class="swiper-slide">
                              <div class="tp-product-item p-relative">
                                 <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="{{url('door-category',$item->slug1)}}">
                                       <img class="image-1" src="{{asset('website/doortype/'.$item->image1)}}" alt=" {{$item->titletype}}">
                                       <img class="image-2" src="{{asset('website/doortype/'.$item->image2)}}" alt=" {{$item->titletype}}">
                                    </a>
                                 </div>
                                 <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title"><a href="{{url('door-category',$item->slug1)}}" class="text-anim">
                                       {{$item->titletype}}</a></h4>
                                    <span>{{$item->saleprice}}</span>
                                 </div>
                              </div>
                           </div>
                          
                           @endforeach 
                           {{-- <div class="swiper-slide">
                              <div class="tp-product-item p-relative">
                                 <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="shop-details.html">
                                       <img class="image-1" src="assets/img/product/img-2.jpg" alt="">
                                       <img class="image-2" src="assets/img/product/img-3.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-product-item-sale">
                                    <span>Sale</span>
                                 </div>
                                 <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title"><a href="shop-details.html" class="text-anim">Solid
                                          Wooden Glass
                                          Door</a></h4>
                                    <span>23062.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-product-item p-relative">
                                 <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="shop-details.html">
                                       <img class="image-1" src="assets/img/product/img-3.jpg" alt="">
                                       <img class="image-2" src="assets/img/product/img-4.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-product-item-sale">
                                    <span>Sale</span>
                                 </div>
                                 <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title"><a href="shop-details.html" class="text-anim">Plain
                                          Veneered Flush
                                          Door</a></h4>
                                    <span>22362.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-product-item p-relative">
                                 <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="shop-details.html">
                                       <img class="image-1" src="assets/img/product/img-4.jpg" alt="">
                                       <img class="image-2" src="assets/img/product/img-6.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title"><a href="shop-details.html"
                                          class="text-anim">Knock-Down Door Frame</a>
                                    </h4>
                                    <span>25362.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-product-item p-relative">
                                 <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="shop-details.html">
                                       <img class="image-1" src="assets/img/product/img-6.jpg" alt="">
                                       <img class="image-2" src="assets/img/product/img-7.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title"><a href="shop-details.html" class="text-anim"> Wooden
                                          Double-Leaf
                                          Door</a></h4>
                                    <span>30362.00</span>
                                 </div>
                              </div>
                           </div> --}}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- product area end -->
      <script>
         document.addEventListener('DOMContentLoaded', function() {
             var selectElement = document.getElementById('doorSizeSelect');
             var displayParagraph = document.getElementById('selectedValue');
     
             selectElement.addEventListener('change', function() {
                 var selectedValue = selectElement.value;
                 displayParagraph.innerText = ' ' + selectedValue;
             });
     
             // Optionally, initialize the paragraph with the first selected value
             displayParagraph.innerText = '' + selectElement.value;
         });
     </script>
      </script>
 @endsection