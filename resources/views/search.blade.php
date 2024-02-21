@extends('layouts.app')


@section('content')
 <!-- Row -->
 <div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-body pb-0">
                <form action="{{ route('search_process') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search_request" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
                    </div>
                </form>

                <div class="tabs-menu search-tabs">
                    <ul class="nav panel-tabs">
                        <li><a href="#tab5" class="active" data-bs-toggle="tab">All</a></li>
                        <li><a href="#tab6" data-bs-toggle="tab" class="text-dark">Students</a></li>
                        <li><a href="#tab7" data-bs-toggle="tab" class="text-dark">Groups</a></li>
                        <li><a href="#tab8" data-bs-toggle="tab" class="text-dark">News</a></li>
                        <li><a href="#tab9" data-bs-toggle="tab" class="text-dark">Videos</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body p-5">
                {{-- <p class="text-muted mb-0 ps-3">About 12,546,90000 results (0.56 Seconds)</p> --}}
            </div>
        </div>
        <div class="panel-body tabs-menu-body p-0 border-0">
            <div class="tab-content">
                <div class="tab-pane active" id="tab5">
                    @isset($result)
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <a href="javascript:void(0)" class="h4 text-dark">No results found</a>
                            </div> 
                        </div>
                    </div>
                    @endisset
                    @foreach ($result['groups'] as $group)
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <a href="javascript:void(0)" class="h4 text-dark">{{ $group->name }}</a>
                            </div> 
                            <div class="tags mb-2">
                                <span class="tag">
                                    {{ $group->subject->name }}
                                    <a href="javascript:void(0)" class="tag-addon"><i class="fe fe-eye"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="tab-pane" id="tab6">
                    <div class="demo-gallery card">
                        <div class="card-body">
                            <ul id="lightgallery" class="list-unstyled row">
                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-5 border-bottom-0" data-responsive="../assets/images/media/1.jpg" data-src="../assets/images/media/1.jpg" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                    <a href="javascript:void(0)">
                                        <img class="img-responsive br-5" src="../assets/images/media/1.jpg" alt="Thumb-1">
                                    </a>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-5 border-bottom-0" data-responsive="../assets/images/media/2.jpg" data-src="../assets/images/media/2.jpg" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                    <a href="javascript:void(0)">
                                        <img class="img-responsive br-5" src="../assets/images/media/2.jpg" alt="Thumb-2">
                                    </a>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-5 border-bottom-0" data-responsive="../assets/images/media/3.jpg" data-src="../assets/images/media/3.jpg" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                    <a href="javascript:void(0)">
                                        <img class="img-responsive br-5" src="../assets/images/media/3.jpg" alt="Thumb-1">
                                    </a>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-5 border-bottom-0" data-responsive="../assets/images/media/4.jpg" data-src="../assets/images/media/4.jpg" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                    <a href="javascript:void(0)">
                                        <img class="img-responsive br-5" src="../assets/images/media/4.jpg" alt="Thumb-2">
                                    </a>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/5.jpg" data-src="../assets/images/media/5.jpg" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                    <a href="javascript:void(0)">
                                        <img class="img-responsive br-5" src="../assets/images/media/5.jpg" alt="Thumb-1">
                                    </a>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/6.jpg" data-src="../assets/images/media/6.jpg" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                    <a href="javascript:void(0)">
                                        <img class="img-responsive br-5" src="../assets/images/media/6.jpg" alt="Thumb-2">
                                    </a>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/7.jpg" data-src="../assets/images/media/7.jpg" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                    <a href="javascript:void(0)">
                                        <img class="img-responsive br-5" src="../assets/images/media/7.jpg" alt="Thumb-1">
                                    </a>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-5 border-bottom-0" data-responsive="../assets/images/media/8.jpg" data-src="../assets/images/media/8.jpg" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                    <a href="javascript:void(0)">
                                        <img class="img-responsive br-5" src="../assets/images/media/8.jpg" alt="Thumb-2">
                                    </a>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-5 border-bottom-0" data-responsive="../assets/images/media/9.jpg" data-src="../assets/images/media/9.jpg" data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                    <a href="javascript:void(0)">
                                        <img class="img-responsive mb-0 br-5" src="../assets/images/media/9.jpg" alt="Thumb-1">
                                    </a>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-xl-0 mb-md-0 mb-md-0 mb-5 border-bottom-0" data-responsive="../assets/images/media/10.jpg" data-src="../assets/images/media/10.jpg" data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                    <a href="javascript:void(0)">
                                        <img class="img-responsive mb-0 br-5" src="../assets/images/media/10.jpg" alt="Thumb-2">
                                    </a>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-5 mb-md-0 mb-xl-0  border-bottom-0" data-responsive="../assets/images/media/11.jpg" data-src="../assets/images/media/11.jpg" data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                    <a href="javascript:void(0)">
                                        <img class="img-responsive mb-0 br-5" src="../assets/images/media/11.jpg" alt="Thumb-1">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab7">
                    @foreach ($result['groups'] as $group)
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <a href="javascript:void(0)" class="h4 text-dark">{{ $group->name }}</a>
                            </div> 
                            <div class="tags mb-2">
                                <span class="tag">
                                    {{ $group->subject->name }}
                                    <a href="javascript:void(0)" class="tag-addon"><i class="fe fe-eye"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="tab-pane" id="tab8">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <a href="javascript:void(0)" class="h4 text-dark">Zendash template related Images</a>
                            </div>
                            <div class="tags mb-2">
                                <span class="tag">
                            background
                            <a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
                        </span>
                                <span class="tag">
                            admin template
                            <a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
                        </span>
                                <span class="tag">
                            UX designs
                            <a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
                        </span>
                                <span class="tag">
                            Presentation
                            <a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
                        </span>
                            </div>
                            <div class="mb-2">
                                <a href="javascript:void(0)" class="h4 text-dark">Zendash - Bootstrap HTML Dashboard Template</a>
                            </div>
                            <a href="javascript:void(0)" class="text-primary">https://www.spruko.com/demo/zendash/html/</a>
                            <p class="text-muted mt-2 mb-1">Treal Template included in 30 versions. In the demo 30 versions is shown in 4 floders. And In the final each version has single floder corresponding to that ...</p>
                            <p class="text-muted  mb-2">Tags: admin, admin dashboard, admin panel, admin template, backend, bootstrap, bootstrap 4, clean, dashboard, flat, jquery, modern, premium admin templates ...</p>
                            <div>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)" class="me-4 d-inline-block"> (48) Reviews</a>
                                <a href="javascript:void(0)" class="fw-semibold">USD-$24</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <a href="javascript:void(0)" class="h4 text-dark">Eduserv Website Templates from ThemeForest</a>
                            </div>
                            <a href="javascript:void(0)" class="text-primary">https://spruko.com/demo/eduserv/html/</a>
                            <p class="text-muted mt-2 mb-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <div>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)" class="me-4 d-inline-block"> (18) Reviews</a>
                                <a href="javascript:void(0)" class="fw-semibold">USD-$12</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <a href="javascript:void(0)" class="h4 text-dark">HostOne – Web Hosting HTML Creative Responsive Clean Template</a>
                            </div>
                            <a href="javascript:void(0)" class="text-primary">https://www.spruko.com/demo/hostone/html/</a>
                            <p class="text-muted mt-2 mb-1"> HostOne - Web Hosting HTML Creative Responsive Clean Template by sprukosoft HostOne -HTML Templates is a Clean, Simple Responsive Template Design.</p>
                            <p class="text-muted  mb-2">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim
                                ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                            <div>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)" class="me-4 d-inline-block"> (18) Reviews</a>
                                <a href="javascript:void(0)" class="fw-semibold">USD-$12</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab9">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <a href="javascript:void(0)" class="h4 text-dark">Eduserv Website Templates from ThemeForest</a>
                            </div>
                            <a href="javascript:void(0)" class="text-primary">https://spruko.com/demo/eduserv/html/</a>
                            <p class="text-muted mt-2 mb-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <div>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)" class="me-4 d-inline-block"> (18) Reviews</a>
                                <a href="javascript:void(0)" class="fw-semibold">USD-$12</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <a href="javascript:void(0)" class="h4 text-dark">HostOne – Web Hosting HTML Creative Responsive Clean Template</a>
                            </div>
                            <a href="javascript:void(0)" class="text-primary">https://www.spruko.com/demo/hostone/html/</a>
                            <p class="text-muted mt-2 mb-1"> HostOne - Web Hosting HTML Creative Responsive Clean Template by sprukosoft HostOne -HTML Templates is a Clean, Simple Responsive Template Design.</p>
                            <p class="text-muted  mb-2">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim
                                ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                            <div>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                <a href="javascript:void(0)" class="me-4 d-inline-block"> (18) Reviews</a>
                                <a href="javascript:void(0)" class="fw-semibold">USD-$12</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->

@endsection
