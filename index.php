<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Учёт клиентов</title>
</head>
<body>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button> -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Новый клиент</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Имя</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Фамилия</label>
                    <input type="text" class="form-control" id="recipient-lastname">
                  </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Сообщение</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="save">Сохранить</button>
            </div>
          </div>
        </div>
      </div>


    <nav class="navbar sticky-top navbar-expand-xl navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="/img/logo.png"  alt="P" width="30" height="30" class="d-inline-block align-text-top"/>
          Pokemon
        </a></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse show" id="navbarDark">
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Feedback</a>
            </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-link" href="#"><i class="bi bi-person"></i> Login</a></li>
                <li><a class="nav-link" href="#"><i class="bi bi-box-arrow-in-right"></i> Sign Up</a></li>
              </ul>
          </div>
        </div>
      </nav>

<div class="container-fluid">
<?php
require ($_SERVER["DOCUMENT_ROOT"]."/conf/db.php");


$sql = 'SELECT * FROM cardcode WHERE id > 1';
$resultSql = mysqli_query($link, $sql);
$result = [];
echo '<h1>Участники системы</h1>';
echo '<table class="table table-responsive table-striped table-hover"><thead><tr>';
echo '<th scope="col">#</th><th scope="col">Имя</th><th scope="col">Фамилия</th><th scope="col">Обращение</th><th scope="col">Ссылка</th></tr></thead><tbody>';
while ($row = mysqli_fetch_array($resultSql)) {
    echo('<tr><th scope="row">' . $row['id'] . '</th><td>' . $row['login'] . '</td><td>' . $row['loginsec'] . '</td><td>' . $row['message'] . '</td><td><a href="#">Тап</a></td></tr>');
}
echo '</tbody></table></div>';
?>

      <script src="js/main.js"></script>
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>