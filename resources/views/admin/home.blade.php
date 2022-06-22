<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>

  @include('admin.css')

</head>

<body>

  @include('admin.sidebar')

  <!-- partial -->

  @include('admin.navbar')

  <!-- partial -->

  <div class="container-fluid page-body-wrapper">
    <div class="container" align="center">

      @if(session()->has('message'))

      <div class="alert alert-success">
        {{session()->get('message')}}
        <button type="button" class="close" data-bs-dismiss="alert">x</button>
      </div>

      @endif

      <table>

        <tr style="background-color: orangered;">
          <td style="padding:20px;">Title</td>
          <td style="padding:20px;">Description</td>
          <td style="padding:20px;">Quantity</td>
          <td style="padding:20px;">Price</td>
          <td style="padding:20px;">Image</td>
          <td style="padding:20px;"></td>
          <td style="padding:20px;"></td>
        </tr>

        @foreach($data as $product)

        <tr align="center" style="background-color: black;">

          <td style="padding:20px;">{{$product->title}}</td>
          <td style="padding:20px;">{{$product->description}}</td>
          <td style="padding:20px;">{{$product->quantity}}</td>
          <td style="padding:20px;">{{$product->price}}</td>
          <td>

            <img height="150px" width="100px" src="/productimage/{{$product->image}}">

          </td>

          <td>
            <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Update</a>

          </td>

          <td>
            <a class="btn btn-danger" onclick="return 
              confirm('Are You sure')" href="{{url('deleteproduct',$product->id)}}">Delete</a>

          </td>

        </tr>

        @endforeach

      </table>


    </div>
  </div>

  <!-- partial -->
  @include('admin.script')
</body>

</html>