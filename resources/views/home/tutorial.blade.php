@extends('layouts.app')
@section('content')
<br><br><br><br><br><br>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

<div class="container mt-100 mt-60">
    <div class="row">
        <div class="col-12 text-center">
            <div class="section-title mb-4 pb-2">
                <h4 class="title mb-4">Latest Blog &amp; News</h4>
                <p class="text-muted para-desc mx-auto mb-0">Chose the best tutorial to grow up your business with "Talab Now"</p>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div class="blog-post rounded border">
                <div class="blog-img d-block overflow-hidden position-relative">
                    <img src="https://via.placeholder.com/350x280/FF7F50/000000" class="img-fluid rounded-top" alt="">
                    <div class="overlay rounded-top bg-dark"></div>
                    <div class="post-meta">
                        <a href="javascript:void(0)" class="text-light d-block text-right like"><i class="mdi mdi-heart"></i> 33</a>
                        <a href="javascript:void(0)" class="text-light read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="content p-3">
                    <small class="text-muted p float-right">19th Oct, 19</small>
                    <small><a href="javascript:void(0)" class="text-primary">Marketing</a></small>
                    <h4 class="mt-2"><a href="javascript:void(0)" class="text-dark title">Quick guide on business with friends.</a></h4>
                    <p class="text-muted mt-2">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space.</p>
                    <div class="pt-3 mt-3 border-top d-flex">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid avatar avatar-ex-sm rounded-pill mr-3 shadow" alt="">
                        <div class="author mt-2">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark name">Lisa Marvel</a></h6>
                        </div>
                    </div>
                </div>
            </div><!--end blog post-->
        </div><!--end col-->
        
        <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div class="blog-post rounded border">
                <div class="blog-img d-block overflow-hidden position-relative">
                    <img src="https://via.placeholder.com/350x280/6495ED/000000" class="img-fluid rounded-top" alt="">
                    <div class="overlay rounded-top bg-dark"></div>
                    <div class="post-meta">
                        <a href="javascript:void(0)" class="text-light d-block text-right like"><i class="mdi mdi-heart"></i> 33</a>
                        <a href="javascript:void(0)" class="text-light read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="content p-3">
                    <small class="text-muted p float-right">19th Oct, 19</small>
                    <small><a href="javascript:void(0)" class="text-primary">Event</a></small>
                    <h4 class="mt-2"><a href="javascript:void(0)" class="text-dark title">Become more money-minded</a></h4>
                    <p class="text-muted mt-2">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space.</p>
                    <div class="pt-3 mt-3 border-top d-flex">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid avatar avatar-ex-sm rounded-pill mr-3 shadow" alt="">
                        <div class="author mt-2">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark name">Joya Aafri</a></h6>
                        </div>
                    </div>
                </div>
            </div><!--end blog post-->
        </div><!--end col-->
        
        <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div class="blog-post rounded border">
                <div class="blog-img d-block overflow-hidden position-relative">
                    <img src="https://via.placeholder.com/350x280/FF1493/000000" class="img-fluid rounded-top" alt="">
                    <div class="overlay rounded-top bg-dark"></div>
                    <div class="post-meta">
                        <a href="javascript:void(0)" class="text-light d-block text-right like"><i class="mdi mdi-heart"></i> 33</a>
                        <a href="javascript:void(0)" class="text-light read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="content p-3">
                    <small class="text-muted p float-right">19th Oct, 19</small>
                    <small><a href="javascript:void(0)" class="text-primary">Software</a></small>
                    <h4 class="mt-2"><a href="javascript:void(0)" class="text-dark title">Quick guide on business with friends.</a></h4>
                    <p class="text-muted mt-2">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space.</p>
                    <div class="pt-3 mt-3 border-top d-flex">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid avatar avatar-ex-sm rounded-pill mr-3 shadow" alt="">
                        <div class="author mt-2">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark name">Martin Sobhe</a></h6>
                        </div>
                    </div>
                </div>
            </div><!--end blog post-->
        </div><!--end col-->
    </div><!--end row-->
</div>
<br><br><br><br><br><br>
  @endsection