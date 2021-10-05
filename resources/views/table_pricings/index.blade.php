@extends('layouts.app')

@section('content')

<div class="container">
    <table>
    <tr>
        <th>MOLTEN</th>
        <th>SPALDING</th>
        <th>WILSON</th>
    </tr>
    <tr>
    <td>Molten<img src="/molten.jpg" alt="">
    </td>
    <td>Spalding<img src="/spalding.png" alt="">
    </td>
    <td>Wilson<img src="/wilson.png" alt="">
    </td>
    </tr>
    <tr>
        <th><span>&#8369;</span>755.00</th>
        <th><span>&#8369;</span>3,234.00</th>
        <th><span>&#8369;</span>3,639.00</th>
    </tr>
   
</table>
</div>
    </tr>

@endsection

<style>
table, th, td{
    border:50px solid black;
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