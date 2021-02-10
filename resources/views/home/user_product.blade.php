@section('title','My Notes')
    <!DOCTYPE html>
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Kahtalı Miçe">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets')}}/images/fevicon.png" type="image/gif"/>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

@include('home._header')

<section id="aa-error-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-error-area">
                    <a href="{{route('homepage')}}">Home</a>
                    <br>User Profile<br>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div id=aside class="col-md-2">
                        @include('home.usermenu')
                    </div>
                    <div id=aside class="col-md-10">
                        <div class="row page-titles">
                            <div class="col-md-5 align-self-center">
                                <h4 class="text-themecolor">Products</h4>
                            </div>
                            <div class="col-md-7 align-self-center text-right">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="{{route('user_product_add')}}"
                                       class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i>
                                        Add
                                        Product </a>
                                    @include('home.message')
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Bread crumb and right sidebar toggle -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Start Page Content -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive m-t-40">
                                                    <table id="myTable" class="table table-bordered table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>id</th>
                                                            <th>Category</th>
                                                            <th>Title</th>
                                                            <th>Keywords</th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th>Slug</th>
                                                            <th>Lectures</th>
                                                            <th>Subject</th>
                                                            <th>Grade</th>
                                                            <th>Department</th>
                                                            <th>Teacher</th>
                                                            <th>School</th>
                                                            <th>Detail</th>
                                                            <th>Image</th>
                                                            <th>Files</th>
                                                            <th>Image Gallery</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>

                                                        </thead>
                                                        <tbody>
                                                        @foreach($datalist as $rs)
                                                            <tr>
                                                                <td>{{$rs -> id}}</td>
                                                                <td>
                                                                    {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}
                                                                </td>
                                                                <td>{{$rs -> title}} </td>
                                                                <td>{{$rs -> keywords}} </td>
                                                                <td>{{$rs -> description}}</td>
                                                                <td>{{$rs -> status}} </td>
                                                                <td>{{$rs -> slug}} </td>
                                                                <td>{{$rs -> lectures}} </td>
                                                                <td>{{$rs -> subject}} </td>
                                                                <td>{{$rs -> grade}} </td>
                                                                <td>{{$rs -> department}} </td>
                                                                <td>{{$rs -> teacher}} </td>
                                                                <td>{{$rs -> school}} </td>
                                                                <td>{{$rs -> detail}} </td>
                                                                <td>
                                                                    @if ($rs->image)
                                                                        <img src="{{Storage::url($rs->image)}}"
                                                                             height="30"
                                                                             alt="">
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if ($rs->files)
                                                                        <img src="{{Storage::url($rs->files)}}"
                                                                             height="30"
                                                                             alt="">
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <a href="{{route('user_image_add',['product_id'=> $rs->id])}}"
                                                                       onclick="return window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                                                        <img
                                                                            src="{{asset('assets/admin/images')}}/gallery-3.png"
                                                                            height="25"> </a></td>
                                                                <td>
                                                                    <a href="{{route('user_product_edit',['id'=> $rs->id])}}"
                                                                       onclick=""> <img
                                                                            src="{{asset('assets/admin/images')}}/edit.png"
                                                                            height="25"> </a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{route('user_product_delete', ['id'=> $rs->id])}}"
                                                                       onclick="return confirm('Delete! Are you sure ?')">
                                                                        <img
                                                                            src="{{asset('assets/admin/images')}}/delete.jpg"
                                                                            height="25"> </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
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
    </div>
</section>

@include('home._footer')
