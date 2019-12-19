@extends('layouts.app')
@section('assets')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('css/footer.css')}}">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/carrito.css')}}">

@endsection

@section('content')

<div class="container col-10">
    <section class="row">
        @if (session()->get('user.cart'))

        <article class="col-12">
            <br>
            <section class="table-responsive">
            <h3>CARRITO DE COMPRAS</h3>
                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th scope="col">Producto</th>
                            <th scope="col" class="text-center">Cantidad</th>
                            <th scope="col" class="text-center">Precio</th>
                            <th scope="col" ></th>
                        </tr>
                    </thead>
                    <tbody>
            
                                                                                                                                                                                    @php
                                                                                                                                                                                    $total = 0;
                                                                                                                                                                                    @endphp
                        @foreach (session()->get('user.cart') as $product)
                            
                                                                                                                                            @php
                                                                                                                                                $total = $total + $product['price']
                                                                                                                                            @endphp

                            <tr>
                                <td><img src="{{asset($product['image'])}}" width="10%"/> </td>
                                <td><input id="quantity" class="form-control" type="number" value="1" /></td>
                                <p id="errorQuantity"></p>
                                <td class="text-right">$ {{$product['price']}}</td>
                            <td class="text-right"><a href="{{route('cart.remove', $product['id'])}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                            </tr>


                        @endforeach
                        
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Sub-Total</td>
                        <td></td>
                        <td class="text-right" id="subtotal">$ {{$total}}</td>
                        <td></td>

                    </tr>
                
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td></td>
                    <td class="total"></td>
                        <td></td>

                        </tr>
                    </tbody>
                </table>
            </section>
        </article>
        <section class="col mb-2">
            <article class="row">
                <section class="col-sm-12  col-md-6">
                <a href="{{route('men')}}" class="btn btn-block btn-light">Seguir Comprando</a>
                </section>
                <section class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </section>
            </article>
            <br>
        </section>
            
            @else
            <div class='container mb-5 mt-5'>
                <h2 class='text-center mb-5 mt-5'> No hay productos en el carrito </h2>
            </div>
            @endif  


            <div class="infoPago col-auto">
                    <h4>Información de Pago</h4>
                    <hr>
                    <form action="">
                        <div class="col-auto my-1">
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Metodo de pago..</option>
                            <option value="1">Visa</option>
                            <option value="2">MasterCard</option>
                            <option value="3">Paypal</option>
                        </select>
                        </div>
                        <hr>
                        <div class="form-group col-auto my-2 owner">
                            <label for="titular">Titular de la Tarjeta</label>
                            <input type="text" class="form-control" id="titular" >
                        </div>
                        <div class="form-group col-auto my-2">
                            <label for="tarjeta">Numero de Cuenta</label>
                            <input type="text" class="form-control" id="tarjeta">
                        </div>
                        <div class="form-group col-auto my-2 mr-4 col-md-3 d-inline-flex" >
                            <label class="mr-3 mt-1" for="cvv">CVV</label>
                            <input type="password" class="form-control" id="cvv" maxlength="4" minlength="3">
                        </div>
                        <div class="form-group col-auto my-2 col-md-9 d-inline-flex">
                            <label class="mr-3 mt-1">Ven.</label>
                            <select class="custom-select mr-1">
                                <option value="01">Enero</option>
                                <option value="02">Febrero</option>
                                <option value="03">Marzo</option>
                                <option value="04">Abril</option>
                                <option value="05">Mayo</option>
                                <option value="06">Junio</option>
                                <option value="07">Julio</option>
                                <option value="08">Agosto</option>
                                <option value="09">Septiembre</option>
                                <option value="10">Octubre</option>
                                <option value="11">Noviembre</option>
                                <option value="12">Diciembre</option>
                            </select>
                            <select class="custom-select">
                                <option value="16"> 2020</option>
                                <option value="17"> 2021</option>
                                <option value="18"> 2022</option>
                                <option value="19"> 2023</option>
                                <option value="20"> 2024</option>
                                <option value="21"> 2025</option>
                                <option value="20"> 2026</option>
                                <option value="21"> 2027</option>
                            </select>
                        </div>
                        <div class="form-group col-auto my-2">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Confirmar</button>
                        </div>
                    </form>

                </div>
</section>
</div>


<script src ="{{asset('js/cart.js')}}"></script>
@endsection
