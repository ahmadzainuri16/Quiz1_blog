@extends('layouts.app')

 @section('content')

 <div class="container">

    <h3>Tambah Data Photo</h3>
    <form action="{{ url('/data photo') }}" method="POST">
         @csrf

         <div class="form-group">
            <label for="">ID_PHOTO</label>
            <input type="text" name="id_photo" class="form-control">
         </div>

         <div class="form-group">
            <label for="">TANGGAL</label>
            <input type="text" name="tanggal" class="form-control">
         </div>

         <div class="form-group">
            <label for="">TITLE</label>
            <input type="text" name="title" class="form-control">
         </div>

         <div class="form-group">
            <label for="">KETERANGAN</label>
            <textarea name="keterangan" class="form-control"></textarea>
                    </div>

         <div class="form-group">
            <label for="">POST_ID</label>
            <input type="text" name="post_id" class="form-control">
         </div>

         <div class="form-group">
         <input type="submit" value="SIMPAN" class="btn btn-primary">
         </div>


        </table>
    </form>
    </div>

    @endsection