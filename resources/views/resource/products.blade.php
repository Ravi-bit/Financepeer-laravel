@extends('resource.header')
@section('title')
    My shopee | All products
@endsection
@section('content')
<h4 style="text-align: center; font-family:'Aclonica', sans-serif;font-weight: bold; margin-top:28px;margin-bottom:10px;">All Products</h4>

<div class="container">

@forelse($products as $p)
   <div class="boxing">
   <div class="card" style="border-radius: 20px; position:relative">
     <!-- <div class="card-header" style="font-weight: bold; text-align:center;">
   Product {{$p->id}}
    </div> -->
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" style="max-height:350px; min-height:350px;">
    <img
      src="{{asset('storage/products/'.$p->image)}}" alt="image"
      class="img-fluid contain"
    />
    <a data-mdb-toggle="modal" data-mdb-target="#Mymodal<?php echo $p->id; ?>">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
    </a>
  </div>
    <div class="card-body">
      <h5 class="card-title">{{$p->name}}</h5>

      <button class="btn btn-warning buttonsize" data-mdb-toggle="modal" data-mdb-target="#MyEditmodal<?php echo $p->id; ?>">Edit</button>
      <!--<a href="/products/{{$p->id}}/edit" class="btn btn-warning">Edit</a>-->
     <div style="display:inline-block;" class="buttonsize">
      <form action="/products/{{$p->id}}" method="POST" id="delete-user-form{{$p->id}}" class="deleteForm">
      @csrf
      {{method_field('DELETE')}}
       <!-- @method('DELETE') -->
      <button class="btn btn-danger deleting" data-id="{{$p->id}}">Delete</button>
      </form>

    </div>




     <!-- Details Modal-->
     <div class="modal top fade" id="Mymodal<?php echo $p->id; ?>" tabindex="-1"  aria-hidden="true"  data-mdb-keyboard="true">
  <div class="modal-dialog  modal-dialog-centered" style="padding: 10px;">
    <div class="modal-content">
      <div class="modal-header" style='border: none;background-color: rgb(41, 38, 38,0.8);'>
        <h5 class="modal-title" style="margin: 0 auto; font-family:'Aclonica', sans-serif;font-weight: bold; color:white">Product - {{$p->id}}</h5>
        <button type="button" class="rounded" aria-label="Close" data-mdb-dismiss="modal" style="border:0;width:25px">
              <span><i class="fas fa-times"></i></span>
         </button>
      </div>
      <div class="modal-body text-center">
      <h6 style="font-family:'Aclonica', sans-serif;font-weight: bold; margin-top:10px;margin-bottom:15px;">Details</h6>

      <div style="display: flex; flex-direction:column; justify-content:center; align-items:center" class="jumbotron">

         <!--Table-->
   <table class="table table-striped w-auto">
<!--Table body-->
<tbody>
  <tr>
    <th scope="row">1</th>
    <th>Image</th>
    <td><img src="{{asset('storage/products/'.$p->image)}}" alt="image" width="60" height="60"/></td>
  </tr>
  <tr class="table-info">
    <th scope="row">1</th>
    <th>Name</th>
    <td>{{$p->name}}</td>
  </tr>

  <tr>
    <th scope="row">2</th>
    <th>Description</th>
    <td>{{$p->description}}</td>
  </tr>
  <tr class="table-info">
    <th scope="row">3</th>
    <th>Price</th>
    <td>₹.{{$p->price}}/-</td>
  </tr>
</tbody>
</table>
<!--Table-->
      </div>
      </div>
      <div class="modal-footer" style='border: none;'>
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>


  <!--Edit Modal-->

  <div class="modal top fade" id="MyEditmodal<?php echo $p->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="true">
  <div class="modal-dialog  modal-dialog-centered" style="padding: 10px;">
    <div class="modal-content">
      <div class="modal-header" style='border: none;background-color: rgb(41, 38, 38,0.8);'>
        <h5 class="modal-title" style="margin-left:130px;margin-top:8px; font-family:'Aclonica', sans-serif;font-weight: bold; color:white">Edit Record</h5>

        <button type="button" class="rounded" aria-label="Close" data-mdb-dismiss="modal" style="border:0;width:25px">
              <span><i class="fas fa-times"></i></span>
         </button>
      </div>
      <form action="/products/{{$p->id}}" method="POST" style="margin-top:12px" id="edit-user-form{{$p->id}}" class="eidtForm">
      <div class="modal-body text-center">
      <h6 style="font-family:'Aclonica', sans-serif;font-weight: bold; margin-top:15px;margin-bottom:20px;">Re-enter the details</h6>
      @csrf
      {{method_field('PATCH')}}
      <div style="display: flex; flex-direction:column; justify-content:center; align-items:center">
      <div class="form-outline mb-4" style="width: 70%; margin:6px">
      <input type="text" id="ed1formL{{$p->id}}" class="form-control" name="name" value="{{$p->name}}" />
      <label class="form-label" for="ed1formL{{$p->id}}" >Name</label>
      </div>
      <div class="form-outline mb-4" style="width: 70%; margin:6px">
      <input type="text" id="ed2formL{{$p->id}}" class="form-control" name="description" value="{{$p->description}}" />
      <label class="form-label" for="ed2formL{{$p->id}}" >Description</label>
      </div>
      <div class="form-outline mb-4" style="width: 70%; margin:6px">
      <input type="text" id="ed3formL{{$p->id}}" class="form-control" name="price" value="{{$p->price}}"/>
      <label class="form-label" for="ed3formL{{$p->id}}">Price</label>
      </div>
      <div class="form-outline mb-4" style="width: 70%; margin:4px">
      <label style="color:grey">Product Image</label>
      <input type="file" name="filep" class="efilepond" id="efp{{$p->id}}" data-id="editfilepond{{$p->id}}" data-allow-reorder="true" data-max-file-size="2MB" data-max-files="1" required >
      </div>
      </div>

      </div>
      <div class="modal-footer" style='border: none; margin-top:8px'>
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
        <!-- <input type="submit" class="btn btn-primary" value="Update" /> -->
        <button class="btn btn-primary editing" data-id="{{$p->id}}">Edit</button>
      </div>
      </form>
    </div>
  </div>
</div>


</div>

</div>

</div>







   @empty
    <div style="text-align: center;" class="jumbotron">
       <h4 style="font-style: italic; color:gray">No products available in the database</h4>
    </div>
  @endforelse
</div>

@endsection


@section('script')
<script>
$(document).ready(function(){


  $(".deleting").click(function(e){
      e.preventDefault();
      let pid=$(this).data('id');
      console.log(pid);
      let curr=$(this);

    Swal.fire({
     title: 'Are you sure?',
     text: "You won't be able to revert this!",
     icon: 'warning',
     showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
   }).then((willDelete) => {
       if (willDelete.isConfirmed) {
        curr.closest('.deleteForm').submit();
      }
    });
  });

  $(".editing").click(function(e){
      e.preventDefault();
      let pid=$(this).data('id');
      console.log(pid);

      let fName="#edit-user-form"+pid;
    Swal.fire({
     title: 'Are you sure?',
     text: "This data will be changed",
     icon: 'warning',
     showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Edit it!'
   }).then((willDelete) => {
       if (willDelete.isConfirmed) {
           $(fName).submit();
      }
    });
  });

});
</script>
@endsection

