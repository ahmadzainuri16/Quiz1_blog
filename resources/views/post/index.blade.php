@extends('layouts.app')

@section('content')

    <div class="container">
    
    <h3> Data Post </h3>
        <p>
        <br><a href="{{ url('/post/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a> </br>

            <table class="table table-bordered">
                <tr>
                    <th>TANGGAL</th>
                    <th>SLUG</th>
                    <th>TITLE</th>
                    <th>KETERANGAN</th>
                    <th>ID_KATEGORI</th>
                    <th>AKSI</th>
                    <th>AKSI</th>
                </tr>

            @foreach($rows as $row)
                <tr>
                    <td>{{ $row->tanggal }}</td>
                    <td>{{ $row->slug }}</td>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->keterangan }}</td>
                    <td>{{ $row->id_cat }}</td>
                    <td><a href="{{ url('post/' . $row->id_post . '/edit') }}" class="btn btn-primary btn-sm btn-danger">Edit</a> 
                    <td> <form action="{{url('/post/' .$row->id_post) }}" method="POST">
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