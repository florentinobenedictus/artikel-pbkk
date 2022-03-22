<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validasi</title>
	
	<!-- js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
					
						<div class="alert alert-success alert-dismissible fade show">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong>Data berhasil tersimpan!</strong>
						</div>
								
                        <!--<h3>PBKK</h3>-->
						<img src='{{ "img/".$data->gambar->getClientOriginalName() }}' width=500 height=auto>
                        <h3 class="my-4">Data yang diinput : </h3>
						
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{ $data->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>{{ $data->usia }}</td>
                            </tr>
							<tr>
                                <td>Jawaban</td>
                                <td>{{ $data->jawaban }}</td>
                            </tr>
							<tr>
                                <td>Yakin</td>
                                <td>{{ "$data->yakin%" }}</td>
                            </tr>
                        </table>

                        <a href="/input" class="btn btn-primary">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html> 