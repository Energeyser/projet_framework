function identification(f)
{
   var pseudoOk = verifPseudo(f.pseudo);
   var mdpOk = verifMdp(f.mdp);

   if(pseudoOk && mdpOk)
      return true;
   else
   {
      alert("Identifiant ou mot de passe erroné");
      return false;
   }
}

function verifPseudo(champ)
{
   if(document.getElementById("inputId") == "admin")
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifMdp(champ)
{
   if(document.getElementById("inputMdp") == "admin")
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}
