<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PBKK</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Formulir Submit Foto</h3>
                            <br/>
 
                            <br/>
                             <!-- form validasi -->
                             <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror">
                                        @error('nama')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input class="form-control" type="text" name="pekerjaan" value="{{ old('pekerjaan') }}" class="@error('pekerjaan') is-invalid @enderror">
                                        @error('pekerjaan')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="usia">Usia</label>
                                        <input class="form-control" type="text" name="usia" value="{{ old('usia') }}" class="@error('usia') is-invalid @enderror">
                                        @error('usia')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <input class="form-control-file" type="file" name="gambar" value="{{ old('gambar') }}" class="@error('gambar') is-invalid @enderror">
                                        @error('gambar')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nilai">Nilai Foto</label>
                                        <input class="form-control" type="text" name="nilai" value="{{ old('nilai') }}" class="@error('nilai') is-invalid @enderror">
                                        @error('nilai')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" value="Proses">
                                    </div>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>