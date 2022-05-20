@extends('layouts.d-app')
@section('content')

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Talab Now Dashboard Admin</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <br>@include('flash-message')<br>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="container">
                        <div class="card">
                            <center><br>
                            <div class="card-title"><i class="far fa-user"></i> Fullname : {{ $data['message']->fullname }}</div>
                            <div class="card-title">Subject : {{ $data['message']->subject }}</div>
                            
                            <div class="card-body"><i class="fas fa-envelope-square"></i> Message : {{ $data['message']->message }}</div>
                            <div class="card-footer"><i class="fas fa-clock"></i> {{ $data['message']->created_at }}</div>
                        </center>
                        </div>
                        <div class="card">
                            <textarea name="editor1"></textarea>
                                <script>
                                        CKEDITOR.replace( 'editor1' );
                                </script>
                        </div>


                  
                    </div>
                </div>
            </div>


@endsection