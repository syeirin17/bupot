
<body>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h1 class="card-header text-center"style="height:40px; width:20%; text-align:center; color:grey;" >Login</h1>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div style="padding:5px;"></div>
                            <div class="form-group mb-3" style="padding-left:15px; ">
                                <input type="text" style="height:40px; width:20%; border:1px solid white; background-color:#f4dcd2;" placeholder="Masukkan NPWP" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div style="padding:5px;"></div>
                            <div class="form-group mb-3"style="padding-left:15px;">
                                <input type="password" style="height:40px; width:20%; border:1px solid white; background-color:#f4dcd2;"placeholder="Masukkan Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div style="padding:5px;"></div>
                            <div class="form-group mb-3" style="margin-left:10px;">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div style="padding:5px;"></div>
                            <div class="d-grid mx-auto"style="margin-left:20px;">
                                <button type="submit" style="height:35px; width:8%; border:1px solid white;background-color:grey; color:white;"class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>