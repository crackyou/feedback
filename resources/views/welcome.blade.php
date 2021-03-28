<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Feedback</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="feedback-form">

    <div class="card" style="width: 25rem;">

        <div class="card-body">
            <form action="{{url('/send-feedback')}}" method="post">
                @csrf

                @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif

                <div class="mb-3">
                    <label for="name" class="form-label">Имя</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                           aria-describedby="name">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Э-маил</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                           name="email" aria-describedby="emailHelp">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                    <textarea class="form-control @error('feedback') is-invalid @enderror" id="feedback" name="feedback"
                              rows="3"></textarea>
                    @error('feedback')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            </form>

        </div>
    </div>

</div>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
