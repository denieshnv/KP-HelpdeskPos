@extends ('layouts.master')

@section('content')

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <br>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List daftar solusi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Masalah</th>
                    <th>Urutan</th>
                    <th>Query</th>
                    <th>Parameter</th>
                   
                  </tr>
                  </thead>
                  <tbody>                	
                    @foreach($data_query as $queries)
                  	<tr>	

                  		<td>{{$queries->nama_masalah}}</td>
                  		<td>{{$queries->urutan}}</td>
                  		<td>{{$queries->query}}</td>
                  		<td>{{$queries->parameter}}</td>
                  	</tr>
                    @endforeach 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nama Masalah</th>
                    <th>Urutan</th>
                    <th>Query</th>
                    <th>Parameter</th>
                  </tr>
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
