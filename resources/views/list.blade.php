<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>List</title>
  <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
  <body>
    @include('elem.header')
    <div class="list">
      <ul>
        <?php foreach ($numDisp as $value): ?>
          <li>{{$value}}</li>
        <?php endforeach; ?>
      </ul>
    </div>

    @include('elem.footer')
  </body>
</html>
