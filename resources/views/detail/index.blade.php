@extends('layouts.master')
@section('title')
    Siam Smile - Detail
@endsection
@section('css')
<!-- Font files -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i%7CLato:400,700" rel="stylesheet">
<link href="{{ asset('fonts/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('fonts/fontawesome/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css">
<!-- Fav icons -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
<!-- Bootstrap core CSS -->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- style CSS -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- plugins CSS -->
<link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
<!-- Colors CSS -->
<link href="{{ asset('styles/maincolors.css') }}" rel="stylesheet">
<!-- Prefix free -->
<script src="{{ asset('js/prefixfree.min.js') }}"></script>
@endsection
@section('content')
<!-- ===== content starts  ===== -->
<div id="content" class="col-md-10 split pages">
    <div class="blog-head col-md-12 text-center">
        <!-- Heading -->
        <h1>Our Spa Events</h1>
        <!-- Breadcrumb -->
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="blog-home.html">Blog Home</a></li>
            <li class="active">Our Spa Events</li>
        </ul>
    </div>
    <!-- /col-md-12 -->
    <!-- blog -->
    <div class="col-md-12">
        <!-- Blog page -->
        <div id="blog-container" class="col-md-8">
            <!-- Post Info -->
            <div class="post-info">
                <p><i class="fa fa-clock-o"></i>Posted on Aug 24, 2018 at 9:00 PM</p>
                <p><i class="fa fa-user"></i>by <a href="#">John Doe</a></p>
                <!-- Post Comments -->
                <p><i class="fa fa-comment"></i>3 Comments</p>
            </div>
            <!-- post-info -->
            <div class="blog-single post-main">
                <!-- Image -->
                <img class="img-responsive" src="{{ asset('img/blog/blogmain1.jpg') }}" alt="">
                <!-- Post Content -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis tincidunt rhoncus. Integer
                    pulvinar elit ligula, laoreet imperdiet magna consectetur vel. Nullam tempus, tellus sed laoreet
                    porttitor, urna quam efficitur magna, id vestibulum arcu massa eget risus. Mauris sagittis elit nec
                    magna congue aliquam. Nam sollicitudin urna nunc, eu iaculis leo vulputate vel. Donec ultrices ipsum
                    laoreet suscipit consectetur. In pulvinar diam arcu, eu tincidunt arcu mollis quis. Sed vulputate
                    pharetra enim ac pretium. Quisque at rutrum nunc, nec dictum ligula. Vestibulum magna nibh, dapibus
                    at eros et, auctor sagittis ipsum.</p>
                <blockquote>Men dolor sit amet, consectetur adipisiras sit amet nibh libero, in gravida nulla ulla vel
                    metus scelerisque ante sollicitudin commodo cras purus.</blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis
                    unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat
                    perspiciatis. Enim, iure!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis tincidunt rhoncus. Integer
                    pulvinar elit ligula, laoreet imperdiet magna consectetur vel. Nullam tempus, tellus sed laoreet
                    porttitor, urna quam efficitur magna, id vestibulum arcu massa eget risus. Mauris sagittis elit nec
                    magna congue aliquam. Nam sollicitudin urna nunc, eu iaculis leo vulputate vel. Donec ultrices ipsum
                    laoreet suscipit consectetur. In pulvinar diam arcu, eu tincidunt arcu mollis quis. Sed vulputate
                    pharetra enim ac pretium. Quisque at rutrum nunc, nec dictum ligula. Vestibulum magna nibh, dapibus
                    at eros et, auctor sagittis ipsum.</p>
                <div class="post-info">
                    <!-- Tags -->
                    <div class="blog-tags">
                        <p><i class="fa fa-tags"></i>Tags:</p>
                        <a href="#">Massage</a> <a href="#">Wellbeing</a> <a href="#">Experience</a> <a href="#">Hot
                            Stones</a>
                    </div>
                </div>
                <!-- /post-info -->
            </div>
            <!-- /blog-single -->
            <!-- Comments Form -->
            <div class="row">
                <div class="col-md-8 col-centered">
                    <div class="media comment-form">
                        <h5>Leave a Comment:</h5>
                        <!-- Form Starts -->
                        <div class="form-group margin1">
                            <label>Name<span class="required">*</span></label>
                            <input type="text" name="name" class="form-control input-field" required="">
                            <label>Email Adress <span class="required">*</span></label>
                            <input type="email" name="email" class="form-control input-field" required="">
                            <label>Comment<span class="required">*</span></label>
                            <textarea name="comment" id="comment" class="textarea-field form-control" rows="3"
                                required=""></textarea>
                        </div>
                        <!--  Button -->
                        <button type="submit" id="comment_btn" value="Submit" class="btn btn-primary">Send
                            Comment</button>
                    </div>
                </div>
                <!-- /col-md-7 -->
            </div>
            <!-- /row -->
            <!-- Posted Comments -->
            <div class="comments-block">
                <hr>
                <h5 class="text-center">Comments</h5>
                <!-- Comment -->
                <div class="comment media">
                    <a href="#">
                        <img class="media-object  img-responsive" src="{{ asset('img/blog/comment1.jpg') }}" alt="">
                    </a>
                    <div class="media-body">
                        <a href="#">
                            <h6 class="media-heading">Maria Silva
                                <small>August 25, 2018 at 9:30 PM</small>
                            </h6>
                        </a>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                            commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                            condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <!-- Reply Button -->
                        <a class="btn text-right">Reply</a>
                    </div>
                </div>
                <!-- /media -->
                <!-- Comment -->
                <div class="comment media">
                    <a href="#">
                        <img class="media-object  img-responsive" src="{{ asset('img/blog/comment2.jpg') }}" alt="">
                    </a>
                    <div class="media-body">
                        <a href="#">
                            <h6 class="media-heading">Jonas Lindberg
                                <small>August 25, 2018 at 9:30 PM</small>
                            </h6>
                        </a>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                            commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                            condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <!-- Reply Button -->
                        <a class="btn text-right">Reply</a>
                        <!-- Nested Comment -->
                        <div class="comment media nested">
                            <a href="#">
                                <img class="media-object img-responsive" src="{{ asset('img/blog/comment3.jpg') }}" alt="">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    <h6 class="media-heading">Nested Comment
                                        <small>August 25, 2018 at 9:30 PM</small>
                                    </h6>
                                </a>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                    turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                    felis in faucibus.
                                </p>
                                <!-- Reply Button -->
                                <a class="btn text-right">Reply</a>
                            </div>
                        </div>
                        <!-- /media -->
                        <!-- End Nested Comment -->
                    </div>
                </div>
                <!-- /media -->
            </div>
            <!-- /comments block -->
        </div>
        <!-- /blog-container col-md-8 -->
        <!-- Sidebar Column -->
        <div class="sidebar col-md-4">
            <!-- Blog Search -->
            <div class="well">
                <h5 class="sidebar-header">Search</h5>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /form-group -->
            </div>
            <!-- /well -->
            <div class="well">
                <h5 class="sidebar-header">Popular Posts</h5>
                <div class="row">
                    <!-- Popular Post posts 1 -->
                    <div class="blog-popular col-xs-12">
                        <a href="blog-single.html">
                            <div class="col-xs-5">
                                <img src="{{ asset('img/blog/blogpopular1.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="col-xs-7">
                                <h6>The benefits of Feet Massage</h6>
                                <p>Posted on 12 dec 2016</p>
                            </div>
                        </a>
                    </div>
                    <!-- Popular Post posts 2 -->
                    <div class="blog-popular col-xs-12">
                        <a href="blog-single.html">
                            <div class="col-xs-5">
                                <img src="{{ asset('img/blog/blogpopular1.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="col-xs-7">
                                <h6>New Spa Services</h6>
                                <p>Posted on 29 dec 2016</p>
                            </div>
                        </a>
                    </div>
                    <!-- Popular Post posts 3 -->
                    <div class="blog-popular col-xs-12">
                        <a href="blog-single.html">
                            <div class="col-xs-5">
                                <img src="{{ asset('img/blog/blogpopular1.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="col-xs-7">
                                <h6>Day Spa for couples</h6>
                                <p>Posted on 22 jan 2018</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /well -->
            <!-- About us Widget -->
            <div class="well">
                <h5 class="sidebar-header">About Us</h5>
                <div class="text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci
                        accusamus laudantium.</p>
                    <!-- Social Media icons -->
                    <div class="social-media ">
                        <a href="#" title=""><i class="fab fa-twitter"></i></a>
                        <a href="#" title=""><i class="fab fa-facebook"></i></a>
                        <a href="#" title=""><i class="fab fa-google-plus"></i></a>
                        <a href="#" title=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- /well -->
            <!-- Blog Categories -->
            <div class="well">
                <h5 class="sidebar-header">Categories</h5>
                <div class="row">
                    <ul class="custom">
                        <li><a href="#">Our Story</a>
                        </li>
                        <li><a href="#">Events and News</a>
                        </li>
                        <li><a href="#">Offers</a>
                        </li>
                        <li><a href="#">Our Spa</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /well -->
            <!-- Tags Widget -->
            <div class="well">
                <h5 class="sidebar-header">Tags</h5>
                <div class="blog-tags">
                    <a href="#">Massage</a> <a href="#">Offers</a> <a href="#">Events</a> <a href="#">Wellbeing</a> <a
                        href="#">Experience</a> <a href="#">Hot Stones</a>
                </div>
            </div>
            <!-- /well -->
        </div>
        <!-- /sidebar col-md-3 -->
    </div>
    <!-- /col-md-12-->
</div>
<!-- /content -->
</div>
<!-- /container-fluid -->
@endsection
@section('script')
<!-- Active menu -->
<script>
    document.getElementById("menu-services-fusion").style.background = "#ffcb57";
</script>
<!-- Bootstrap core & Jquery -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
@endsection