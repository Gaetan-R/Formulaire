<form  action="thanks.php"  method="post">

    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
      </div>
      <div>
      <label  for="prenom">Prenom :</label>
      <input  type="text"  id="prenom"  name="user_name2">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div label for="telNumber">Phone Number :</label>
        <input  type="phone number" id="telNumber" name="user_phone"> 
    </div>
    <div>
    <label for="object">Object :</label>
      <select class=form-control id="form-control" name="form-control">
            <option value=Inscription😃>Inscription😃</option>
              <option value=Désinscription😡>Désinscription😡</option>
              <option value=Aide😶>Aide😶</option>
               <option value=Autre🧐>Autre🧐</option>
        </select>
      <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
      </div>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
 
  </form>
