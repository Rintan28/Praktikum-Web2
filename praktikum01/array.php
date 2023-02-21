<?php
// Buat Array
$animals = ['kucing','ayam','ikan','burung'];
echo $animals[0] . '<br>';
echo $animals[3] . '<br>';

// Looping Array
foreach ($animals as $animal) {
    echo $animal . '<br>';
}

echo '<br>';


// Buat array asosiatif
$mahasiswa = ['Nama'=>'Rintan', 'Umur'=>19, 'Alamat'=>'Cibinong'];
echo $mahasiswa['Nama'] . '<br>';

foreach ($mahasiswa as $key => $value) {
    echo $key . ' : '. $value;
    echo '<br>';
}
echo '<br>';

// Buat Array Multidimensi
$dosen = [
    ['Pak Rojul', 'Web'],
    ['Pak Reza', 'DDP'],
    ['Pak Lukman', 'OS']
];

echo $dosen[0][1];
echo '<br>';

foreach ($dosen as $dsn){
    echo 'Nama Dosen : ' . $dsn[0];
    echo '<br>';
    echo ' Matkul : ' . $dsn[1];
    echo '<br>';
}

?>
