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
                        <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                        
                                        <th>E-mail</th>
                                        <th>Fullname</th>
                                        <th>Subject</th>
                                        <th>le</th>
                                        <th>Setting</th>
                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['messages'] as $message)
                                    <tr>
                        
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->fullname }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ $message->created_at }}</td>
                                        <td>
                                          <a href="/dashboard/messages/{{ $message->id }}" class="fas fa-eye"></a>
                                          <a href="" onclick="return confirm('Are You Sure For Delete?')" class="fas fa-trash" style="color: red;"></a>
                        
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                  
            
                    </div>
                </div>
            </div>


@endsection