<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  </head>
  <body>
  

    <div class="container">
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <marquee behavior="" direction="">
            <h2 class="my-5 text-center" style="color: blue">Ajax Crud Operation </h2>
          </marquee>
           
          
     <a href=""class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#addModal">ADD PRODUCT</a>  
     <!-- Button trigger modal -->
  
    <table class="table table-bordered">
        <thead>
          <tr>
          
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
       
            @foreach ($products  as $product )
                
           
          <tr>
            <th scope="row">{{$product->id}}</th>
         
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
           <td>
            <a href="" class="btn btn-info update_productform"
            data-bs-toggle="modal" data-bs-target="#updateModal"
            data-id = "{{$product->id}}"
            data-name = "{{$product->name}}"
            data-price = "{{$product->price}}"
            data-description = "{{$product->description}}"
            >
              <i class="las la-edit"></i>
            </a>
            <a href="" class="btn btn-danger delete_product"
            data-id = "{{$product->id}}"
            >
              <i class="las la-trash-alt"></i>
            </a>
           </td>
          </tr>
          @endforeach
        
        </tbody>
     
      </table>
      {!!$products->links()!!}
    </div>

</div></div>
@include('productjs')
@include('addproduct')
@include('update')
  </body>
</html>