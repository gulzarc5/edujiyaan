        @extends('web.template.master')
        <!-- Head & Header Section -->
        @section('content') 
        <!-- breadcrumbs-area-start -->
        <div class="breadcrumbs-area mb-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#" class="active">checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs-area-end -->
        <!-- entry-header-area-start -->
        <div class="entry-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-5 mb-30" style="text-align: center;">
                            <h2>User Detail</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- entry-header-area-end -->
        <!-- checkout-area-start -->
        <div class="checkout-area membership user-detail mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-3 card_main bronze">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Bronze</h3>
                            </div>
                            <div class="panel-body">
                                <div class="the-price">
                                    <h1>Rs 200<span class="subscript"></span></h1>
                                    <small>For 3 month</small>
                                </div>
                                <div class="facility">
                                    <p>Veiw all megazine</p>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="#" class="btn btn-success" role="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 silver">
                        <div class="panel panel-success">
                            <div class="cnrflash">
                                <div class="cnrflash-inner">
                                    <span class="cnrflash-label">MOST<br>POPULAR</span>
                                </div>
                            </div>
                            <div class="panel-heading">
                                <h3 class="panel-title">Silver</h3>
                            </div>
                            <div class="panel-body">
                                <div class="the-price">
                                    <h1>
                                        Rs 400<span class="subscript"></span></h1>
                                    <small>For 6 month</small>
                                </div>
                                <div class="facility">
                                    <p>Veiw all megazine</p>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="#" class="btn btn-success" role="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 gold">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Gold</h3>
                            </div>
                            <div class="panel-body">
                                <div class="the-price">
                                    <h1>Rs 800<span class="subscript">/mo</span></h1>
                                    <small>For 1 year</small>
                                </div>
                                <div class="facility">
                                    <p>Veiw all megazine</p>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="#" class="btn btn-success" role="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout-area-end -->
        @endsection