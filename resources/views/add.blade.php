@extends('inventory.master')
@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
            <button class="add"><a href='/'>Back</a></button>
        
 <div>
        <h2>Buy Products</h2>
        <br>
        <form method="POST" action="{{url('inventory')}}">
                     <div>
                         <label>Product Name</label>
                    <input type="text" name="productname">
                     </div>
                    <div>
                       <label>Price</label>
                    <input type="text" name="price"> 
                    </div>
                    <div>
                        <label>Quantity</label>
                    <input type="number" name="quantity">
                    </div>
                    <div>
                      <input type="submit" name="btnsubmit" value="Submit">  
                    </div> 
                </form>
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
@endsection
 </div>
            </div>
        </div>
    </div>
</div>