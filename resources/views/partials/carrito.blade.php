<div>
    @if (auth()->user()->type_user != 'cliente')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/shop">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>   
    @endif
    
    @if(session()->has('success_msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success_msg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    @if(session()->has('alert_msg'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session()->get('alert_msg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    @if(count($errors) > 0)
        @foreach($errors0>all() as $error)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endforeach
    @endif
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <br>
            @if(\Cart::getTotalQuantity()>0)
                <h4>{{ \Cart::getTotalQuantity()}} Producto(s) en el carrito</h4><br>
            @else
                <h4>No hay producto(s) en tu carrito</h4><br>
                <a 
                    @if(auth()->user()->type_user != 'cliente') 
                        href="/shop" 
                    @else
                        href="/cliente#portfolio"
                    @endif class="btn btn-dark">Continue en la tienda</a>
            @endif

            @foreach($cartCollection as $item)
                
                <div class="row">
                    <div class="col-lg-3">
                        <img src="/images/{{ $item->attributes->image ? $item->attributes->image : 'default.png' }}" class="img-thumbnail" width="200" height="200">

                    </div>
                    <div class="col-lg-5">
                        <p>
                            <b>{{ $item->name }}</b><br>
                            <b>Precio: </b>${{ $item->price }}<br>
                            <b>Sub Total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>

                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div style="display:flex" >
                            
                                <form action="{{ route('cart.update') }}" method="POST">
                                    {{ csrf_field() }}
                                        <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                        <input type="number" class="form-control form-control-sm d-inline" value="{{ $item->quantity }}"
                                            id="quantity" name="quantity" min="1" max="{{$item->attributes->unidades-1}}" style="width: 70px;">
                                        <button class="btn btn-secondary btn-sm " style="margin-right: 5px;"><i class="fa fa-edit"></i></button>
                                </form>
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button class="btn btn-dark btn-sm"><i class="fa fa-trash "></i></button>
                                </form> 
                        
                        </div>
                    </div>
                        
                </div>
                <hr>
            @endforeach
            @if(count($cartCollection)>0)
                <form action="{{ route('cart.clear') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-secondary btn-md"><i class="ri-delete-bin-line mx-1"></i>Borrar Carrito</button> 
                </form>
            @endif
        </div>
        @if(count($cartCollection)>0)
            <div class="col-lg-5">
                
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>
                        </ul>
                    </div>
                <div style="display:flex" >    
                    <a 
                    @if(auth()->user()->type_user != 'cliente') 
                        href="/shop" 
                    @else
                        href="/cliente#portfolio"
                    @endif class="btn btn-dark">Continue en la tienda</a>
                    <form action="{{ route('venta.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ \Cart::getTotal() }}" id="total" name="total">
                        <button class="btn btn-success mx-2"><i class="bx bx-credit-card me-1"></i>Confirmar compra</button>
                    </form> 
                </div>
            </div>
        @endif
    </div>
    <br><br>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</div>