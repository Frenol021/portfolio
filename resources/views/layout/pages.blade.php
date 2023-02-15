<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>porfolio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- counter -->
<link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" />
<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />

<!--chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
      @livewireStyles
</head>
<body>

   <livewire:pages.header />

   <main id="content">
    {{ $slot }}
</main>
 <!-- styling -->
       <style>

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

        body{
        overflow-x: hidden;
        }
      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
      .home{
        margin-bottom: 100px;
      }
      .btn{
    margin-bottom: 50px;
      }
      .icons{
      display: flex;
    justify-content: space-evenly;
      }
    img{
        border-radius: 20px;

    }
    .image{
          display: flex;
        align-items: center;
        justify-content: center;
        margin-top: -80px;
    }
    .card {
    border: 3px solid #C27664;
    }
    .services{
    display: flex;
    justify-content: space-between;
    }
    .counter{
        margin-top: 50px;
        border: solid rgba(0, 0, 0, .15);

    }
    .skill{
        margin-top: 100px;

    }
    .project{
        margin-top: 100px;
    }
    .project .image2{
          display: flex;
        justify-content: space-between;
    }
    .project .image2 .card:hover{

    }
    </style>

    <script src="@@path/vendor/countup.js/dist/countUp.umd.js"></script>
  @livewireScripts
<script>

</script>
</body>
</html>
