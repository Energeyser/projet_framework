<?php content_for('main'); ?>
    <h1>Promos</h1></br>
    <div class="row">
            <div class="col-md-6">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
        <p>
            <a href="./ajouter_promo"><button type="button" class="btn btn-lg btn-default">Ajouter</button></a>
            <button type="button" class="btn btn-lg btn-default">Modifier</button>
            <button type="button" class="btn btn-lg btn-default">Supprimer</button>
        </p>
        <a href="../admin.php"><button type="button" class="btn btn-lg btn-default">Retour</button></a>
<?php end_content_for(); ?>
