<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
  <div class="container-fluid  bg-primary shadow mb-5">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark ">

        <a class="navbar-brand" href="/">Regi Al Habib</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  d-flex flex-row-reverse" id="navbarNav  ">
          <ul class="navbar-nav me-aut float-end ">
            <li class="nav-item">
              <a href="/" class="text-white nav-link active">Home</a>
            </li>
              <a href="/form" class="nav-link active">Pendaftaran</a>
            <li class="nav-item">
             <a  href="/regi/read" class="text-white nav-link active">Data Mhs</a>
            </li>
          </ul>
        </div>

      </nav>
    </div>

  </div>


  <?php $this->renderSection('content'); ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>