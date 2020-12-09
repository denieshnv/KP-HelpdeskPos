@extends('layouts.master')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Penyelesaian Masalah</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>    
     <!-- Main content -->
    <section class="content">      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">{{$data_masalah->nama_masalah}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputParamater">Masukkan parameter</label>
                    <input type="text" class="form-control" id="InputParamater" placeholder="Parameter">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                	<a href="/result" class ="btn btn" style="background-color: #FF851B; margin: 3px; ">Masukkan </a>
              
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div> </section>    
            <!-- /.card -->

    @endsection