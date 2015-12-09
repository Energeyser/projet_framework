<?php content_for('main'); ?>
    <h1>Fichiers</h1></br>
    <div class="row">
            <div class="col-md-6">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>libellé</th>
                    <th>nom du fichier</th>
                    <th>promo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>menu deroulant</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>menu deroulant</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>menu deroulant</td>
                  </tr>
                </tbody>
              </table>
            </div>
        <p>
            <a href="./ajouter_fichiers"><button type="button" class="btn btn-lg btn-default">Ajouter</button>
            <button type="button" class="btn btn-lg btn-default">Supprimer</button>
        </p>
        <a href="../admin.php"><button type="button" class="btn btn-lg btn-default">Retour</button></a>
<?php end_content_for(); ?>
