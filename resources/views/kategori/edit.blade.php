@extends('layouts.app')   
    
 @section('content')   
   
<div class="container">   
    
     <h3>Edit Data Keterangan</h3>   
     <form action="{{ url('/keterangan') }}">   
         @csrf   
         <table>   
             <tr>   
                 <td>NAMA</td>   
                 <td><input type="text" name="edit_nama"></td>   
             </tr>   
             <tr>   
                 <td>KETERANGAN</td>   
                 <td><input type="text" name="edit_keterangan"></td>   
             </tr>        
             
                 <td></td>   
                 <td><input type="submit" value="SIMPAN"></td>   
             </tr>   
         </table>

         </form>   
</div>   
  
@endsection  