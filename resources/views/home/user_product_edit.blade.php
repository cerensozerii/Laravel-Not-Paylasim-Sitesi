@section('title','Edit Product')
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
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
                    <li><h2>User Profile</h2></li>
                    <li><a href="{{route('homepage')}}">Home</a></li>
                    <li>User Profile</li>
                </div>
            </div>
            <div class="col-md-12">
                <div class="aa-error-area">
                    <li><h2>User Profile</h2></li>
                    <li><a href="{{route('homepage')}}">Home</a></li>
                    <li>User Profile</li>
                </div>
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
                    <div class="card-body">
                        <div class="card">
                            <form class="form p-t-20" action="{{route('user_product_update',['id'=>$data->id])}}"
                                  method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control select2" name="category_id">
                                        @foreach($datalist as $rs)
                                            <option value="{{ $rs->id }}"
                                                    @if($rs->id == $data->category_id) selected="selected" @endif>
                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pwd1">Title</label>
                                    <div class="input-group mb-3">
                                        <input type="text" id="title" name="title" value="{{$data->title}}"
                                               class="form-control" placeholder="Title" aria-label="Password"
                                               aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd1">Keywords</label>
                                    <div class="input-group mb-3">

                                        <input type="text" name="keywords" value="{{$data->keywords}}"
                                               class="form-control" placeholder="Keywords" aria-label="Password"
                                               aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd1">Description</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="description" value="{{$data->description}}"
                                               class="form-control" placeholder="Description" aria-label="Password"
                                               aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2" name="status" style="left:25px">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pwd1">Slug</label>
                                    <div class="input-group mb-3">
                                        <input type="string" name="slug" value="{{$data->slug}}" class="form-control"
                                               placeholder="slug" aria-label="Password"
                                               aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd1">Lectures</label>
                                    <div class="input-group mb-3">
                                        <input type="string" name="lectures" value="{{$data->lectures}}"
                                               class="form-control" placeholder="lectures" aria-label="Password"
                                               aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd1">Subject</label>
                                    <div class="input-group mb-3">
                                        <input type="string" name="subject" value="{{$data->subject}}"
                                               class="form-control" placeholder="subject" aria-label="Password"
                                               aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd1">Grade</label>
                                    <div class="input-group mb-3">
                                        <input type="integer" name="grade" value="{{$data->grade}}" class="form-control"
                                               placeholder="grade" aria-label="Password"
                                               aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd1">Department</label>
                                    <div class="input-group mb-3">
                                        <input type="string" name="department" value="{{$data->department}}"
                                               class="form-control" placeholder="department" aria-label="Password"
                                               aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd1">Teacher</label>
                                    <div class="input-group mb-3">
                                        <input type="string" name="teacher" value="{{$data->teacher}}"
                                               class="form-control" placeholder="teacher" aria-label="Password"
                                               aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd1">School</label>
                                    <div class="input-group mb-3">
                                        <input type="string" name="school" value="{{$data->school}}"
                                               class="form-control" placeholder="school" aria-label="Password"
                                               aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd1">detail</label>
                                    <div class="input-group mb-3">
                                        <textarea name="detail" id="detail"
                                                  class="detail"> value="{{$data->detail}}" </textarea>
                                        <script>
                                            CKEDITOR.replace('detail');
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd1">Image</label>
                                    <div class="input-group mb-3">
                                        <input type="file" name="image" value="{{$data->image}}">
                                        @if ($data->image)
                                            <img src="{{Storage::url($data->image)}}" height="30" alt="">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="pwd1">Files</label>
                                    <div class="input-group mb-3">
                                        <input type="file" name="files" value="{{$data->files}}">
                                        @if ($data->files)
                                            <img src="{{Storage::url($data->files)}}" height="30" alt="">
                                        @endif
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                                    Product
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('home._footer')

