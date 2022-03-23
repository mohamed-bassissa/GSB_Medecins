<table class="table table-striped">
    <tr>
        <th class="table-success">Nom</th>
        <th class="table-success">Prénom</th>
        <th class="table-success">Spécialité complémentaire</th>
        <th class="table-success">Telephone</th>
        <th class="table-success">Departement</th>
        <th class="table-success">Adresse</th>
    </tr>
    <tr>
        <td class="table-light"><?php echo $r['nom'];?></td>
        <td class="table-light"><?php echo $r['prenom'];?></td>
        <td class="table-light"><?php echo $r['specialiteComplementaire'];?></td>
        <td class="table-light" ><?php echo $r['tel'];?></td>
        <td class="table-light"><?php echo $r['departement'];?></td>
        <td class="table-light"><?php echo $r['adresse'];?></td>
    </tr>    
</table>