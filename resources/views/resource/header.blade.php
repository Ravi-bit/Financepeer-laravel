<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shopee</title>
    <link rel="icon" href="{{ asset('images/e1.png') }}" type="image/x-icon" />
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />

    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <link
  href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css"
  rel="stylesheet"
/>

    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>
<link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Acme&family=Cookie&family=Dancing+Script:wght@700&family=Grandstander:ital,wght@0,500;0,600;0,700;1,600&family=Henny+Penny&family=Indie+Flower&family=Josefin+Sans:wght@500;600&family=Lobster&family=Marck+Script&family=Mukta:wght@500;600&family=Nothing+You+Could+Do&family=Pacifico&family=Roboto:ital,wght@0,500;0,700;1,400&family=Syne+Mono&family=Syne+Tactile&family=Trispace:wght@300;500;600&display=swap" rel="stylesheet" />

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Compiled and minified JavaScript -->
<style>
.icolor{
    color: white;

}
.mar{
    width: 100px;
    text-align: center;
    margin: 5px 18px;
}

.act{
    color: white;
    cursor: pointer;
    border-radius: 21px;
    background-color: rgb(255, 255, 255, 0.3);
}

.contain {object-fit: fill;}

.mar:hover{

    cursor: pointer;
    border-radius: 21px;
    background-color: rgb(255, 255, 255, 0.3);
}
.container{
    margin-top: 20px;
    margin-bottom: 20px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    width: 90%;
    height: auto;

}
.boxing{
    position: relative;
    width: 28%;
    margin:21px;
    border-radius: 20px;
    box-shadow: 3px 4px 15px rgba(5, 5, 5, 0.2);
}


.boxing:hover{
        top: -6px;
        right: 7px;
        cursor: pointer;
        transition: all .6s ease-in-out;
        box-shadow: 5px 7px 19px rgba(5, 5, 5, 0.5);
}

.inserting:hover{
    cursor: pointer;
}
.buttonsize {
    min-width: 80px;
    max-width: 80px;
    margin: 5px auto;
}
</style>
</head>
<body>
<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-dark" style="padding: 10px;">
  <div class="container-fluid justify-content-between">
    <!-- Left elements -->
    <div class="d-flex">
      <!-- Brand -->
      <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
        <img
          src="{{ asset('images/e5.png') }}"
          height="50"
          alt=""
          loading="lazy"
          style="margin-top: 2px;"
        />
      </a>

      <!-- Search form -->
      <form class="input-group w-auto my-auto d-none d-sm-flex">
        <input
          autocomplete="off"
          type="search"
          class="form-control rounded"
          placeholder="Search"
          style="min-width: 125px;"
        />
        <span class="input-group-text border-0 d-none d-lg-flex"
          ><i class="fas fa-search icolor"></i
        ></span>
      </form>
    </div>
    <!-- Left elements -->

    <!-- Center elements -->
    <ul class="navbar-nav flex-row d-none d-md-flex">

      <li class="nav-item  mar act">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item mar">
        <a class="nav-link" href="#">Products</a>
      </li>
      <li class="nav-item mar">
        <a class="nav-link" href="#">About us</a>
      </li>

      <li class="nav-item mar">
        <a class="nav-link disabled" href="#">Contact us</a>
      </li>

    </ul>
    <!-- Center elements -->

    <!-- Right elements -->
    <ul class="navbar-nav flex-row">

      <li class="nav-item me-3 me-lg-1 inserting" title="Insert a record">
        <a class="nav-link" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
          <span><i class="fas fa-plus-circle fa-lg icolor"></i></span>
        </a>
      </li>

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
          <span><i class="fas fa-bell fa-lg icolor"></i>
          <span class="badge rounded-pill badge-notification bg-danger">0</span>
        </span>
        </a>
      </li>
      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link d-sm-flex align-items-sm-center" href="#">
          <img
            src="https://mdbootstrap.com/img/new/avatars/1.jpg"
            class="rounded-circle"
            height="22"
            alt=""
            loading="lazy"
          />
          <strong class="d-none d-sm-block ms-1 icolor">Ravi</strong>
        </a>
      </li>

      <li class="nav-item dropdown me-3 me-lg-1">
        <a
          class="nav-link dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-chevron-circle-down fa-lg icolor"></i>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li><a class="dropdown-item" href="#">Change details</a></li>
          <li><a class="dropdown-item" href="#">Acount details</a></li>
          <li style="width:150px;margin:5px 15px 15px 15px;">
            <a class="btn btn-danger" href="#" type="button">Log out</a>
          </li>
        </ul>
      </li>
    </ul>

  </div>
</nav>

<!--Nav bar completed-->


<!-- Modal -->
<div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="true">
  <div class="modal-dialog  modal-dialog-centered" style="padding: 10px;">
    <div class="modal-content">
      <div class="modal-header" style='border: none;background-color: rgb(41, 38, 38,0.8);'>
        <h5 class="modal-title"  style="margin: 0 auto; font-family:'Aclonica', sans-serif;font-weight: bold; color:white">Insert a record</h5>

        <button type="button" class="rounded" aria-label="Close" data-mdb-dismiss="modal" style="border:0;width:25px">
              <span><i class="fas fa-times"></i></span>
         </button>
      </div>

      <form action="/products" method="POST" style="margin-top:12px" enctype="multipart/form-data">
      <div class="modal-body text-center">
      <h6 style="font-family:'Aclonica', sans-serif;font-weight: bold; margin-top:15px;margin-bottom:20px;">Enter Products Details</h6>
      @csrf
      <div style="display: flex; flex-direction:column; justify-content:center; align-items:center">
      <div class="form-outline mb-4" style="width: 70%; margin:6px">
      <input type="text" id="form1Example1" class="form-control" name="name" required />
      <label class="form-label" for="form1Example1">Name</label>
      </div>
      <div class="form-outline mb-4" style="width: 70%; margin:6px">
      <input type="text" id="form1Example2" class="form-control" name="description" required />
      <label class="form-label" for="form1Example2">Description</label>
      </div>
      <div class="form-outline mb-4" style="width: 70%; margin:6px">
      <input type="text" id="form1Example3" class="form-control" name="price" required />
      <label class="form-label" for="form1Example3">Price</label>
      </div>
      <div class="form-outline mb-4" style="width: 70%; margin:4px">
      <div>
      <label style="text-align:left;color:grey">Product Image</label>

      <input type="file" name="filep" id="filepond" class="fpond" data-allow-reorder="true" data-max-file-size="2MB" data-max-files="1" required>

      </div>

      </div>

      </div>

      </div>

      <div class="modal-footer" style='border: none; margin-top:8px'>
      <input type="hidden" class="hidden_val" value="hidden hi">

        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal" >Close</button>

        <input type="submit" class="btn btn-primary" value="Insert" />
      </div>
      </form>
    </div>
  </div>
</div>







@yield('content')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
const inputElement = document.querySelector('#filepond');

FilePond.registerPlugin(
  FilePondPluginImagePreview,
  FilePondPluginImageExifOrientation,
  FilePondPluginFileValidateSize,
  FilePondPluginImageEdit
);

const pond = FilePond.create( inputElement);
const inputElements = document.getElementsByClassName("efilepond");
var eachEle;
for(var i=0;i<inputElements.length;i++){
    eachEle=inputElements[i];
    assign(eachEle,i);
}
function assign(obj,pos){
    FilePond.create( obj);
}
//   console.log(inputElement1);
//   const pond1= FilePond.create( inputElement1);
FilePond.setOptions({
    server: {
        url:'/uploadFile',
        headers:{
            'X-CSRF-TOKEN':'{{csrf_token()}}'
        }

    }
});


</script>
@include('sweetalert::alert')
</body>
@yield('script')
</html>
