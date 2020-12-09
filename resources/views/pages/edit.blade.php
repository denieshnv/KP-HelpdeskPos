@extends('layouts.master')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Masalah</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>    
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">Form Edit Masalah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
              <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputMasalah">Tipe Masalah</label>
                    <input type="text" class="form-control" id="InputMasalah" placeholder="Deskripsi masalah">
                  </div>
                  <div class="form-group">
                    <label for="InputNamaMasalah">Nama Masalah</label>
                    <input type="text" class="form-control" id="InputNamaMasalah" placeholder="Nama masalah">
                  </div>
                  <div class="form-group">
                  <label>Banyak Query</label>
                    <input type="text" id ="query"  name ="query" class="form-control" id="InputJumlahQuery" placeholder="Masukkan jumlah query">
                        <a href="#" id="filldetails" onclick="addFields()" style="color: #fd7e14">Buat Form</a>                    
                  </div>
                  <div class="form-group">
                    <label for="InputQuery">Query</label>
                        <div id="formquery">
                        </div>
                  </div>                  
                  <div class="form-group">
                    <label for="InputIPDB">IP Database</label>
                    <input type="text" class="form-control" id="InputIPDB" placeholder="IP Database">
                  </div>
                  <div class="form-group">
                    <label for="InputTipeDB">Tipe Database</label>
                    <input type="text" class="form-control" id="InputTipeDB" placeholder="Tipe Database">
                  </div>                  

                </div>
                <!-- /.card-body -->
              </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-secondary toastsDefaultSuccess" style="background-color: #fd7e14">Ubah</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>    
            <!-- /.card -->

    @endsection