<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/solid.css">
    <style>
        .toast-content {
            position: fixed;
            padding: 20px 20px 0 0;
            top: 0;
            right: 0;
            width: 300px;
            max-width: 100%;
            z-index: 9999;
        }
        label.required::after{
            content: ' *';
            color: red;
        }
    </style>
    <title>Loja Zone Helpers Packages</title>
</head>
<body>
<div class="container">
    <h1>Helpers</h1>
</div>

@include('helper::partials.session_message')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('lojazone_helper_from_test') }}" method="post">
                <div class="row">

                    @csrf
                    @method('post')

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="first_name" class="required">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}">
                            <span class="d-block">@include('helper::partials.invalid_message', ['input' => 'first_name'])</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}">
                            <span
                                class="d-block">@include('helper::partials.invalid_message', ['input' => 'last_name'])</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Test required</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@include('helper::partials.notify_message')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script>
    $('.toast').toast('show');
</script>
</body>
</html>
