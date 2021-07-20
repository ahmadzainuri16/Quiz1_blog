@extends('layouts.app')

 @section('content')

 <div class="container">

    <h3>Tambah Data Kategori</h3>
    <form action="{{ url('/kategori') }}" method="POST">
         @csrf
         <div class="form-group">
            <label for="">NAMA</label>
            <input type="text" name="nama" class="form-control">
         </div>

         <div class="form-group">
            <label for="">KETERANGAN</label>
            <textarea name="keterangan" class="form-control"></textarea>
                    </div>

         <div class="form-group">
         <input type="submit" value="SIMPAN" class="btn btn-primary">
         </div>


        </table>
    </form>
    </div>

    @endsection