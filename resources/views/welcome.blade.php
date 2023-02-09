<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Комментарии</title>
        <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
             .form-control:focus {
              color: var(--bs-body-color);
              background-color: var(--bs-form-control-bg);
              outline: 0;
              box-shadow: 0 0 0 0.15rem rgb(0, 0, 0);
            }
            .pagination {
              --bs-pagination-color: black;
              --bs-pagination-active-bg: rgb(61, 61, 61);
              --bs-pagination-active-border-color: rgb(61,61,61);
            }
            p {
              margin-top: 0.2em ;
              margin-bottom: 0.2em ;
            }
          </style>
    </head>
    <body class="antialiased">
        <header class="border-bottom" style="background-color: #fffdfde5; box-shadow: 0px 20px 20px rgb(0, 0, 0);">
            <div class="container col-xxl-8 px-4 py-1">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-3">
                    <div class="col-10 col-sm-8 col-lg-6">
                      <img class="" src="{{ asset('img/logo2x.png') }}" alt="" style="float: right; max-width: 40%;">
                    </div>
                    <div class="col-lg-6">
                        <p class="lead fw-bold fs-6">Телефон:8999999</p>
                        <p class="lead fw-bold fs-6">Email:<a href="info@future-group.ru" style="color: rgb(34, 34, 34)">info@future-group.ru</a></p><br><br><br>
                        <h1 class="display-5 lh-1 mb-3">Комментарии</h1>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main style="background-color: rgb(222, 224, 219)">
            <div class="container col-xxl-8 px-4 py-5 border-bottom">
              @foreach ($users as $user)
                  <div class="row g-3 mt-2">
                    <div class="col-auto"><b>{{ $user->name }}</b></div>
                    <div class="col-auto" style="margin-left:50px">{{ $user->created_at->format('H:i d.m.y') }}</div>
                    <div>{{ $user->comment }}</div>
                </div>
              @endforeach
              <div class="mt-5">{{ $users->links() }}</div>
            </div>
            <div class="container col-xxl-8 px-4 py-5" style="border-top: 1px solid">
                <h1 class="display-9 lh-1 mb-3">Оставить комментарий</h1>
                  <form method="POST" 
                        action="{{ route('users.store') }}" class="mt-3">
                    @csrf
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <label class="mb-2" for="name">Ваше имя</label>
                          <input name="name" type="text" class="form-control w-50" placeholder="Name" aria-label="name" style="border: 0">  
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col">
                          <label class="mb-2" for="name">Ваше имя</label>
                          <textarea name="comment" class="form-control w-50" id="exampleFormControlTextarea1" rows="6" aria-label="comment" style="border: 0"></textarea>
                        </div>
                      </div>
                      <div class="row mt-3 w-50">
                        <div class="col">
                            <button type="submit" class="btn" style="bacground-color: rgb(222, 224, 219); border: 2px solid; float: right">Отправить</button>
                        </div>
                      </div>
                    </div>
                </form>
            </div>
        </main>
        <footer class="border-top" style="background-color: #fffdfde5">
          <div class="container mt-3 mb-5">
            <div class="row justify-content-start">
              <div class="col-3">
                <img src="{{ asset('img/logo2x.png') }}" alt="" style="max-width: 50%">
              </div>
              <div class="col-3 mt-4">
                <p class="lead fw-bold fs-6">Телефон:8999999</p>
                <p class="lead fw-bold fs-6">Email: <a href="{{ route('users') }}" style="color: rgb(34, 34, 34)">info@future-group.ru</a></p>
                <p class="lead fw-bold fs-6">Адрес: <a href="{{ route('users') }}" style="color: rgb(34, 34, 34)">115088 Москва, ул. 2-я Машиностроения, д.7   стр.  1</a></p>
                <p class="lead fs-6">© 2010-2014 Future. Все права защищены</p>
              </div>
              <div class="col-3"></div>
              <div class="col-3"></div>
            </div>
          </div>
        </footer>
    <script src="https://getbootstrap.com/docs/5.3/examples/checkout/checkout.js"></script>
    </body>
</html>
