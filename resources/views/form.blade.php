<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>


    <form action="{{url('/')}}/form" method="post">
        @csrf
        <div class="container">

            <h1 class="text-center">Registration</h1>

            <div class="mb-3">
              <label for="" class="form-label">Name</label>
              <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('name')}}">
              <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
              </span>
              {{-- <small id="helpId" class="text-muted">Help text</small> --}}
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Email Id</label>
                <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('email')}}">
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                  </span>
                {{-- <small id="helpId" class="text-muted">Help text</small> --}}
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="text" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId" >
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                  </span>
                {{-- <small id="helpId" class="text-muted">Help text</small> --}}
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Confirm Password</label>
                <input type="text" name="password_confirmation" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <span class="text-danger">
                    @error('password_confirmation')
                        {{$message}}
                    @enderror
                  </span>
                {{-- <small id="helpId" class="text-muted">Help text</small> --}}
              </div>

             <button class="btn btn-primary" type="submit">Submit</button>
        </div>


    </form>






  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>