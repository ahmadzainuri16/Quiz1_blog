@extends('layouts.app')

 @section('content')

 <div class="container">

    <h3>Tambah Data Post</h3>
    <form action="{{ url('/data post') }}" method="POST">
         @csrf
         <div class="form-group">
            <label for="">ID_POST</label>
            <input type="text" name="id_post" class="form-control">
         </div>

         <div class="form-group">
            <label for="">TANGGAL</label>
            <input type="text" name="tanggal" class="form-control">
         </div>

         <div class="form-group">
            <label for="">SLUG</label>
            <textarea name="slug" class="form-control"></textarea>
                    </div>

         <div class="form-group">
            <label for="">TITLE</label>
            <input type="text" name="title" class="form-control">
         </div>

         <div class="form-group">
            <label for="">ID_CAT</label>
            <input type="text" name="id_cat"   class="form-control">
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