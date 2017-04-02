
@extends('layouts.master')
    @section('title', 'HOME')
        @section('header')
        <h1>Home</h1>
        @stop
        @section('content') 
            @include('partials.menu')
            <!-- Left side column. contains the logo and sidebar -->
            <div class="">
                <div class="shopping-cart">
                    <div class="shopping-cart-table ">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-romove item">Remove</th>
                                        <th class="cart-description item">Image</th>
                                        <th class="cart-product-name item">Product Name</th>
                                        <th class="cart-edit item">Edit</th>
                                        <th class="cart-qty item">Quantity</th>
                                        <th class="cart-sub-total item">Subtotal</th>
                                        <th class="cart-total last-item">Grandtotal</th>
                                    </tr>
                                </thead><!-- /thead -->
                                <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <div class="shopping-cart-btn">
                                                <span class="">
                                                    <a href="index.htm#" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                                                    <a href="index.htm#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>
                                                </span>
                                            </div><!-- /.shopping-cart-btn -->
                                        </td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td class="romove-item"><a href="index.htm#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                        <td class="cart-image">
                                            <a class="entry-thumbnail" href="detail.html">
                                                <img src="{{ asset('public/enduser/assets/images/products/p1.jpg') }}" alt="">
                                            </a>
                                        </td>
                                        <td class="cart-product-name-info">
                                            <h4 class="cart-product-description"><a href="detail.html">Floral Print Buttoned</a></h4>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="rating rateit-small rateit"><button style="display: none;" id="rateit-reset-2" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-2"></button><div aria-readonly="true" style="width: 70px; height: 14px;" id="rateit-range-2" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-2" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4"><div class="rateit-selected" style="height: 14px; width: 56px;"></div><div class="rateit-hover" style="height:14px"></div></div></div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="reviews">
                                                        (06 Reviews)
                                                    </div>
                                                </div>
                                            </div><!-- /.row -->
                                            <div class="cart-product-info">
                                                                <span class="product-color">COLOR:<span>Blue</span></span>
                                            </div>
                                        </td>
                                        <td class="cart-product-edit"><a href="index.htm#" class="product-edit">Edit</a></td>
                                        <td class="cart-product-quantity">
                                            <div class="quant-input">
                                                    <div class="arrows">
                                                      <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                      <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input value="1" type="text">
                                              </div>
                                        </td>
                                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">RS300.00</span></td>
                                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">RS300.00</span></td>
                                    </tr>
                                    <tr>
                                        <td class="romove-item"><a href="index.htm#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                        <td class="cart-image">
                                            <a class="entry-thumbnail" href="detail.html">
                                                <img src="{{ asset('public/enduser/assets/images/products/p2.jpg') }}" alt="">
                                            </a>
                                        </td>
                                        <td class="cart-product-name-info">
                                            <h4 class="cart-product-description"><a href="detail.html">Floral Print Buttoned</a></h4>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="rating rateit-small rateit"><button style="display: none;" id="rateit-reset-3" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-3"></button><div aria-readonly="true" style="width: 70px; height: 14px;" id="rateit-range-3" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-3" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4"><div class="rateit-selected" style="height: 14px; width: 56px;"></div><div class="rateit-hover" style="height:14px"></div></div></div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="reviews">
                                                        (06 Reviews)
                                                    </div>
                                                </div>
                                            </div><!-- /.row -->
                                            <div class="cart-product-info">
                                            <span class="product-color">COLOR:<span>Pink</span></span>
                                            </div>
                                        </td>
                                        <td class="cart-product-edit"><a href="index.htm#" class="product-edit">Edit</a></td>
                                        <td class="cart-product-quantity">
                                            <div class="cart-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                      <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                      <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input value="1" type="text">
                                              </div>
                                            </div>
                                        </td>
                                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">RS300.00</span></td>
                                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">RS300.00</span></td>
                                    </tr>
                                </tbody><!-- /tbody -->
                            </table><!-- /table -->
                        </div>
                    </div><!-- /.shopping-cart-table -->                
                    <div class="col-md-4 col-sm-12 estimate-ship-tax">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="estimate-title">Estimate shipping and tax</span>
                                        <p>Enter your destination to get shipping and tax.</p>
                                    </th>
                                </tr>
                            </thead><!-- /thead -->
                            
                        </table>
                    </div><!-- /.estimate-ship-tax -->

                    <div class="col-md-4 col-sm-12 estimate-ship-tax">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="estimate-title">Discount Code</span>
                                        <p>Enter your coupon code if you have one..</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input class="form-control unicase-form-control text-input" placeholder="You Coupon.." type="text">
                                            </div>
                                            <div class="clearfix pull-right">
                                                <button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
                                            </div>
                                        </td>
                                    </tr>
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div><!-- /.estimate-ship-tax -->

                    <div class="col-md-4 col-sm-12 cart-shopping-total">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="cart-sub-total">
                                            <span class="inner-left-md">Subtotal INR 600.00 </span>
                                        </div>
                                        <div class="cart-grand-total">
                                            <span class="inner-left-md">Total INR 600.00 </span>
                                        </div>
                                    </th>
                                </tr>
                            </thead><!-- /thead -->
                            <tbody>
                                    <tr>
                                        <td>
                                            <div class="cart-checkout-btn pull-right">
                                                <a href="{{route('order')}}">
                                                <button type="submit" class="btn btn-primary checkout-btn">PLACE ORDER</button>
                                                </a>
                                               
                                            </div>
                                        </td>
                                    </tr>
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div><!-- /.cart-shopping-total -->            
                </div><!-- /.shopping-cart -->
            </div> <!-- /.row -->
                    <!--  BRANDS CAROUSEL -->
         </div><!-- /.logo-slider -->
<!--BRANDS CAROUSEL : END  -->     
@stop