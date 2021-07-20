@extends('layouts.app')

@section('content')

    <div class="container">
    
    <h3> Data Photo</h3>
        <p>
        <br><a href="{{ url('/photo/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a> </br>

            <table class="table table-bordered">
                <tr>
                    <th>ID_PHOTO</th>
                    <th>TANGGAL</th>
                    <th>TITLE</th>
                    <th>KETERANGAN</th>
                    <th>POST_ID</th>
                    <th>AKSI</th>
                </tr>

            @foreach($rows as $row)
                <tr>
                <td>{{ $row->id_photo }}</td>
                    <td>{{ $row->tanggal }}</td>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->keterangan }}</td>
                    <td>{{ $row->post_id }}</td>
                    <td><a href="{{ url('/photo/' . $row->id_photo . '/edit') }}" class="btn btn-primary btn-sm btn-danger">Edit</a> 
                    <td> <form action="{{url('/photo/' .$row->id_photo) }}" method="POST">
                            <input type="hidden" name="_method" value="delete">
                            @csrf
                            <button class="btn btn-sm btn-primary">Hapus</button>   
                    </td>
                                 
                </tr>
            @endforeach
            </table>
         </p>
   
    </div> 

@endsection