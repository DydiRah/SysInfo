<div class="row infoSociete">
    <h1>Information societe</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>Listes</h2>
            <table>
                <tr>
                    <td>Nom</td>
                    <td>Nom</td>
                    <td>Nom</td>
                    <td>Nom</td>
                    <td>Nom</td>
                    <td>Nom</td>
                    <td>Nom</td>
                    <td>Nom</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <h2>Insertion</h2>
            <form action="<?php echo site_url('accueil/ajoutInfo');?>" method="post">
                <p><input type="text" placeholder="Nom de l'entreprise"></p>
                <p><input type="text" placeholder="Nom de dirigeant"></p>
                <p><input type="text" placeholder="Objet"></p>
                <p>Debut de l'exercice: <input type="date" name="" id=""></p>
                <p><input type="text" placeholder="Siege"></p>
                <p><input type="text" placeholder="Id Fiscale"></p>
                <p><input type="text" placeholder="Stat"></p>
                <p><input type="text" placeholder="RCS"></p>
                <p><input type="text" placeholder="Statut"></p>
                <p><input type="text" placeholder="Tenu du compte"></p>
                <p><input type="text" placeholder="Devise d'equivalence"></p>
                <p><input type="submit" value="Ajouter"></p>
            </form>
        </div>
    </div>
</div>