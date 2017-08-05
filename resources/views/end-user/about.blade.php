
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            @include('partials.menu')
            <div class="breadcrumb">
                <div class="container">
                    <div class="breadcrumb-inner">
                        <ul class="list-inline list-unstyled">
                            <li><a href="home">Home</a></li>
                            <li class="active">About us</li>
                        </ul>
                    </div><!-- /.breadcrumb-inner -->
                </div><!-- /.container -->
            </div>
            <div class="checkout-box faq-page">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-title">About Us</h2>
                      <div class="panel-group checkout-steps" id="accordion">
                        <!-- checkout-step-01  -->
                        <div class="panel panel-default checkout-step-01">

                          Shopersquare is an online shopping company & qualified experts from India. We have ventured in the Online shopping world to provide you high quality, unique products at the lowest and most affordable prices. Delivering exactly what the customer needs at the best price. We provide you with the most user friendly online shop with a wide range of products that you are looking for in health, beauty, cloths, shoes, electronic,etc. field.You will find best prices and bargains for the latest and greatest products! We are one of the fastest growing online shopping company. As we are an online business, you can shop our site for bargains all year round â€“ 24 hours a day, 7 days a week.
             
                        </div> 
                          <div class="panel panel-default checkout-step-01">
                          Shopersquare  believes in the importance of ensuring our customerâ€™s satisfaction and we always place you â€“ the customer â€“ first! As such, we have expanded swiftly, mostly by word of mouth from our existing customers.
                          </div>
                          <div class="panel panel-default checkout-step-01"> Who have been delighted with the superior service we provide. </div>

                          <div class="panel panel-default checkout-step-01">Shopersquare  prides itself on providing fast and efficient customer service. Our hardworking Customer Service team strives to make every transaction a quality experience by providing outstanding service and assistance. </div>

                          <div class="panel panel-default checkout-step-01"> With your trust and support our mission is to provide more and more high quality unique products to our customers through continuous research, partnering with worldâ€™s leading brands and highly appreciated customer service. Nevertheless at a price you will be happily willing to pay!!! </div>

                           
                        
                    </div><!-- /.checkout-steps -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        @stop