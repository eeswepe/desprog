<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen Sederhana</title>
    <style>
        table {
            border-collapse: collapse; 
            width: 60%; 
            margin-top: 20px; 
            border-radius: 8px; 
            overflow: hidden; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); 
        }
        
        td, th {
            border-bottom: 1px solid #000000;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #38ff53ff;
        }
    </style>
</head>
<body>

    <h2>Biodata Dosen</h2>

    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan' 
        ];
    ?>

    <table>
      <tr>
        <th>Keterangan</th>
        <th>Data</th>
      </tr>
      <tr>
        <td>Nama</td>
        <td><?php echo $Dosen['nama']; ?></td>
      </tr>
      <tr>
        <td>Domisili</td>
        <td><?php echo $Dosen['domisili']; ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $Dosen['jenis_kelamin']; ?></td>
      </tr>
    </table>

</body>
</html>