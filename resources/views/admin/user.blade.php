@extends('layout.master')

@section('content')
    <DOCTYPE html>
        <html>

        <head>
            <title></title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        </head>

        <body>
            <div class="container">

                <div class="row">
                    <div class="col-11">
                        <h5 class="card-title">Data User PeduliDiri </h5>
                        <div class="row">
                            <form action="/user/cari" method="GET">
                                <input type="text" name="cari" placeholder="Cari user .." value="{{ old('cari') }}">
                                <input type="submit" value="CARI">
                            </form>
                            <div class="col-md-12 d-flex justify-content-end">
                            <a href="/admin/cetak/user_pdf" class="btn btn-primary" target="_blank">CETAK DATA AKUN PDF</a>
                              {{-- fixing  --}}
                            <a href="/admin/cetak/hanyaUser_pdf" class="btn btn-warning" style="margin-left:20px; " target="_blank">CETAK DATA HANYA USER PDF</a>
                      
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">nik</th>
                                    <th scope="col">nama</th>
                                    <th scope="col">alamat</th>
                                    <th scope="col">email</th>
                                    <th colspan="2" scope="col" ><center > aksi </center></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $no =>$a )
                                <tr>
                                    <td>{{$no+1}}</td>                                       
                                    <td>{{ $a->nik }}</td>
                                    <td>{{ $a->name }}</td>
                                    <td>{{ $a->alamat }}</td>
                                    <td>{{ $a->email }}</td>

                                    
                                    
                                    @if ($a->role !== 'admin')
                                            <td><a href="/admin/delete/{{ $a->id }}"
                                                    class="btn btn-sm btn-danger">delete</a>
                                                    
                                                </td>
                                                <td>
                                                    <a href="/admin/ubahUser/{{ $a->id }}"
                                                        class="btn btn-sm btn-success">Jadikan Admin</a>
                                                    </td>
                                                    @elseif($a->role == 'admin' && Auth::user()->id != $a->id)
                                                    <td>
                                                        <a href="/admin/ubahAdmin/{{ $a->id }}"
                                                            class="btn btn-sm btn-warning">Batalkan admin</a>
                                                        </td>
                                                        @elseif(Auth::user()->id == $a->id)
                                                        <td colspan="2">
                                                             <h4>
                                                                 
                                                                 <center>
                                                                     (ANDA)
                                                                     
                                                                </center>
                                                            </h4>
                                                        </td>
                                                    
                                                    @endif


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>




                    <!-- Default Table -->
                </div>


            </div>


            <!-- End Default Table Example -->

        </body>

        </html>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
