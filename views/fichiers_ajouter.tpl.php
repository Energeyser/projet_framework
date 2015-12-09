<?php content_for('main'); ?>
    <h1>Fichiers</h1></br>
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
                <script>
                    $(function() {
                      /* Affichage du menu déroulant au clic */
                       $("#menu-deroulant-style").on("click", function() {
                         /* $("#menu-deroulant-style-on").show(); */
                         $("#menu-deroulant-style-on").show();
                       });

                      /* Disparition du menu déroulant au clic sur le bouton OK */
                      $("#bouton-valid-style").on("click", function() {
                          $("#menu-deroulant-style-on").hide();
                       });

                      /* Disparition du menu déroulant au clic hors de la zone (sauf sur le champ input #menu-deroulant-style) */
                      $( document ).on( "click", function( e ){
                        if ( $( e.target ).closest( "#menu-deroulant-style-on" )[0] === undefined ){
                            if ( (e.target.id != "menu-deroulant-style-on") && (e.target.id != "menu-deroulant-style") ){
                                $( "#menu-deroulant-style-on" ).hide();
                            }
                        }
                      });
                    });
                </script>




                <div class="input-prepend" >
                    <span class="add-on"><i class="icon-music"></i></span>
                    <input type="text" placeholder="Style musical" class="input-large" id="menu-deroulant-style">
                </div>


                <div id="menu-deroulant-style-on" style="height: 100px; width: 100px; background-color: red;">
                    <label for="checkbox1">Option 1 </label><input type="checkbox" name="checkbox1" id="checkbox1" value="1"/><br />
                    <label for="checkbox2">Option 2 </label><input type="checkbox" name="checkbox2" id="checkbox2" value="2"/><br />
                    <label for="checkbox3">Option 3 </label><input type="checkbox" name="checkbox3" id="checkbox3" value="3"/>

                    <button type="submit" class="btn" id="bouton-valid-style">OK</button>

                </div>
        <p>
            <button type="button" class="btn btn-lg btn-default">Ajouter</button>
            <button type="button" class="btn btn-lg btn-default">Modifier</button>
            <button type="button" class="btn btn-lg btn-default">Supprimer</button>
        </p>
        <a href="../admin.php"><button type="button" class="btn btn-lg btn-default">Retour</button></a>
<?php end_content_for(); ?>
