@extends ('layouts.master')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <br>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List daftar masalah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body accent-orange">
                <table id="example1" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th>Tipe Masalah</th>
                    <th>Nama Masalah</th>
                    <th>IP DB</th>
                    <th>Tipe DB</th>
                    <th style="text-align: center">Aksi</th>
                   
                   
                  </tr>
                  </thead>
                  <tbody>                	
                  	@foreach ($data_masalah as $masalah)
                  	<tr>	
                  		<td>{{$masalah->desc_masalah}}</td>
                  		<td>{{$masalah->nama_masalah}}</td>
                  		<td>{{$masalah->ip_db}}</td>
                  		<td>{{$masalah->tipe_db}}</td>
                      <td align="center">
                        <a href="/detailmasalah/{{$masalah->id_masalah}}" class ="btn btn-sm" style="background-color: #FF851B; margin: 3px; ">LIHAT </a>
                         
                        <a href="/edit/{{$masalah->id_masalah}}" class ="btn btn-sm" style="background-color: #F0D500; margin: 3px; ">UBAH</a>
                        
                        <btn class ="btn btn-sm" style="background-color: #d92027; color: #f7f5dd; margin: 3px; "><i class="far fa-trash-alt"></i> 
                      </td>
                       
                  	</tr>
                  	@endforeach  
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>



@endsection
