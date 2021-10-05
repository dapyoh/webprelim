@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Molten<img src="/molten.jpg" alt="">
    </th>
        <th>Spalding<img src="/Spalding.png" alt=""></th>
        <th>Wilson<img src="/Wilson.png" alt=""></th>
    </tr>
    <tr>
    <td>ON SALE</td>
    <td>ON SALE</td>
    <td>ON SALE</td>
    </tr>
    <tr>
        <th>999 Pieces/Buy 4 get 1 free</th>
        <th>999 Pieces/Buy 4 get 1 free</th>
        <th>999 Pieces/Buy 4 get 1 free</th>
    </tr>
   
</table>
</div>
    </tr>
@endsection
<style>
table, th, td{
    border:100zpx solid black;
    padding:1px;
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
