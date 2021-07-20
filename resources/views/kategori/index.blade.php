@extends('layouts.app')

@section('content')

    <div class="container">
    
    <h3>
        Data Kategori
        <a href="{{ url('/kategori/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a> </br>

            </h3>

        
            <table class="table table-bordered">
                <tr>
                    <th>NAMA</th>
                    <th>KETERANGAN</th>
                    <th>EDIT</th> 
                    <th>DELETE</th>

                </tr>

            @foreach($rows as $row)
                <tr>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->keterangan }}</td>
                    <td><a href="{{ url('/kategori/' . $row->id_kategori . '/edit') }}" class="btn btn-sm btn-danger">Edit</a> 
                    <td>
                    <form action="{{url('/kategori/' .$row->id_kategori) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <button class="btn btn-sm btn-primary">Hapus</button>
                        </form>
                    </td>   
                </tr>
            @endforeach
            </table>
         </p>
   
    </div> 

@endsection