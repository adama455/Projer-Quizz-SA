

    <div >
        <table>
            <caption> LISTE DES JOUEURS </caption>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Score</th>
            </tr>
            <?php foreach($data as $value) :?>
                <tr>
                    <td><?= $value['nom']?></td>
                    <td><?= $value['prenom'] ?></td>
                    <td><?= $value['score'] ?> pts</td>
                </tr>
            <?php endforeach ?>
        </table>
        <button class="pagination" type="button" >Suivant</button>

    </div>
