<!DOCTYPE html>
<html>
  <head>
      <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>RECHRCHE</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="backoffice.css">


      <!-- Font Awesome JS -->
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
  </head>

  <body>
  <div  id="AJOUTER" class="container">
    <h1> Ajouter un article </h1>
    <form class="was-validated">
        <div class="col-md-4 mb-3">
        <label for="validationTooltip01">Titre Article</label>
        <input type="text" class="form-control" id="validationTooltip01" placeholder="Titre article" value="" required>
        <div class="valid-tooltip">
          Looks good!
        </div>
      </div>
    <div class="mb-3">
      <label for="validationTextarea">Contenu de l'article</label>
      <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
      <div class="invalid-feedback">
        Please enter a message in the textarea.
      </div>
    </div>

    <div class="form-group">
      <select class="custom-select" required>
        <option value="">Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>

    <div class="custom-file">
      <input type="file" class="custom-file-input" id="validatedCustomFile" required>
      <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
      <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>
  </form>
  </div>

  <?php include 'sidebar.php';?>
  <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
  </body>
</html>
