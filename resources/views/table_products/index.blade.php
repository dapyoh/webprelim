@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Brand</th>
    </tr>
    <tr>
        <td>Molten
        <img src="/molten.jpg" alt="">
        </td>
    </tr>
    <tr>
        <td>Spalding
        <img src="/spalding.png" alt="">
        </td>
    </tr>
    <tr>
         <td>Wilson
        <img src="/Wilson.png" alt="">
        </td>
</table>
</div>
    </tr>
@endsection
<style>
table, th, td{
    border:20px solid black;
    padding:10px;
    background-color: white;
    width: 900px;
    height: 150px;
    text-align: center;
    }
   img{
       width: 300px;
       height: 300px;
   }
</style>
