<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>

    body{

        background-image: url("img/pattern.png");
    }
    .main {
        height: 100vh;
    }

    .register-box {
        border-radius: 20px;
        width:500px;
        border: solid 1px;
        padding: 30px;
        background-color:rgb(239, 244, 249);
    }

    .register-box button {
        background:linear-gradient(to right, #0a0b47, #14229f);
    }

    form div{
        margin-bottom: 15px;
    }
</style>
<body>

    <div class="main d-flex flex-column justify-content-center align-items-center">
        {{-- pengecekan untuk input yang belum diisi --}}
        @if ($errors->any())
            <div class="alert alert-danger" style="width:500px">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- jika register sukses --}}
        @if (session('status'))
            <div class="alert alert-success" style="width:500px">
                {{ session('message') }}
            </div>
        @endif
        <div class="register-box">
            <form action="" method="post">
                @csrf
                <div>
                    <h2 class="d-flex justify-content-center text-primary ">Register</h2>
                </div>
                <div>
                    <label for="username" class="form-label ">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter Your Username">
                </div>
                <div>
                    <label for="username" class="form-label">Password</label>
                    <input type="password" name="password" id="password"  class="form-control" placeholder="Enter Your Password">
                </div>
                <div>
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone">
                </div>
                <div>
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" id="address" cols="30" rows="4" class="form-control"  required placeholder="Enter Your Address"></textarea>
                </div>
                <div>
                    <button name="login" type="submit" class="btn btn-primary form-control">Register</button>
                </div>
                <div class="text-center">
                    Have account?<a href="login" > Login</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>