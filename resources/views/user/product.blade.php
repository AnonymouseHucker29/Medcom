<head>
  <style>
    .btn {
      background-color: orangered;
      border-color: orangered;
      color: #fff;
    }.btn:hover {
      background-color: orange;
      border-color: orange;
    }
  </style>
</head>
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products">See products page <i class="fa fa-angle-right"></i></a>

              <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding: 10px;">

               <input class="form-control" type="search" name="search" placeholder="Search">
                &nbsp;
               <button type="submit" class="btn btn-success">Search</button>

              
              </form>

            </div>
          </div>
            
          @foreach($data as $product)
          
          <div class="col-md-4">
            <div class="product-item">
              <img height="250" width="100" src="/productimage/{{$product->image}}" alt="">
              <div class="down-content">
                <h4>{{$product->title}}</h4>
                <h6>₱{{$product->price}}</h6>
                <p>{{$product->description}}</p>
             
            <form action="{{url('addcart', $product->id)}} " method="POST">

            @csrf

            Quantity:
            <input type="number" value="0" min="1" class="form-control" style="width: 100px" name="quantity">

            <br>

            <button class="btn btn-primary" type="submit">Add to Cart</button>

            </form>   
                
              </div>
            </div>
          </div>
          
          @endforeach

          @if(method_exists($data,'links'))

          <div class="d-flex justify-content-center">
           
           {!! $data->links() !!}
            
          </div>

          @endif

           

        </div>
      </div>
    </div>