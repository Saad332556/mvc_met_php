<h3><?= $data['title']; ?></h3>

<table border="1">
    <thead>
        <th>Barcode</th>
        <th>Naam</th>
        <th>Verpakkingseenheid</th>
        <th>Aantal aanwezig</th>
        <th>Allergenen Info</th>
        <th>Leverantie Info</th>
    </thead>
    <tbody>
        <?= $data['rows']; ?>
    </tbody>
</table>