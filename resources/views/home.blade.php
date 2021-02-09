@extends('inventory.master')
@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a class="btnhome" href="/home">{{ __('Products') }}</a>
                </div>
        <h1><b>Vape Juice</b></h1>
        <table>
            <tr>
            <th class="texttitle">Cheesecake Supreme</th>
            <th class="texttitle">White Rabbit</th>
            <th class="texttitle">Sampelot Killer</th>
            <th class="texttitle">Lemon Amol</th>
        </tr>
        <tr>
            <td><img class="juice" src="/image/juice.jpeg"></td>
            <td><img class="juice" src="/image/juice1.jpeg"></td>
            <td><img class="juice" src="/image/juice2.jpeg"></td>
            <td><img class="juice" src="/image/juice3.jpeg"></td>
        </tr>
        <tr>
            <th class="texttitle">Salted Carammel Donut</th>
            <th class="texttitle">Yakolt</th>
        </tr>
        <tr>
            <td><img class="juice" src="/image/juice4.jpeg"></td>
            <td><img class="juice" src="/image/juice5.jpeg"></td>
        </tr>
    </table>
    <h1><b>Vape</b></h1>
    <table>
        <tr>
            <th class="texttitle">VOOPOO</th>
            <th class="texttitle">OXVA</th>
            <th class="texttitle">AEGIS</th>
            <th class="texttitle">VOOPOO</th>
        </tr>
        <tr>
            <td><img class="juice" src="/image/vape.jpeg"></td>
            <td><img class="juice" src="/image/vape1.jpeg"></td>
            <td><img class="juice" src="/image/vape2.jpeg"></td>
            <td><img class="juice" src="/image/vape3.jpeg"></td> 
        </tr>
        <tr>
            <th class="texttitle">OXVA</th>
            <th class="texttitle">AEGIS</th>
        </tr>
        <tr>
            <td><img class="juice" src="/image/vape4.jpeg"></td>
            <td><img class="juice" src="/image/vape5.jpeg"></td>
        </tr>
    </table>


    <button><a class="add" href="add">Add Order</a></button>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection