@extends('layouts.master')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil Query</h1>
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
                <h3 class="card-title">Cek Status Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Paramater">Status Barang</label>
                    <br>
                    Status barang dari nomor resi 097722923223 adalah 0
                  </div>
                </div>
                <!-- /.card-body -->

             
              </form>
            </div>
          </div>
        </div>
      </div> </section>    
            <!-- /.card -->

    @endsection