@extends('layouts.app')

 @section('content')

 <div class="container">

    <h3>Tambah Data Album</h3>
    <form action="{{ url('/data album') }}" method="POST">
         @csrf
         <div class="form-group">
            <label for="">ID_ALBUM</label>
            <input type="text" name="id_album" class="form-control">
         </div>

         <div class="form-group">
            <label for="">NAMA</label>
            <input type="text" name="nama" class="form-control">
         </div>

         <div class="form-group">
            <label for="">KETERANGAN</label>
            <textarea name="keterangan" class="form-control"></textarea>
                    </div>


         <div class="form-group">
            <label for="">PHOTO_ID</label>
            <input type="text" name="photo_id" class="form-control">
         </div>


         
         <div class="form-group">
         <input type="submit" value="SIMPAN" class="btn btn-primary">
         </div>


        </table>
    </form>
    </div>

    @endsection