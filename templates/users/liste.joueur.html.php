

    <div style="margin:10rem 20rem;color:white;font-size:1.5em">
        <table border="2">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Score</th>
            </tr>
            <?php foreach($data as $value) :?>
                <tr>
                    <td><?= $value['nom']?></td>
                    <td><?= $value['prenom'] ?></td>
                    <td><?= $value['score'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>

    </div>
