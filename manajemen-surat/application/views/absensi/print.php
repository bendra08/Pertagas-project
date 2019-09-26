<html>

<head>
    <title></title>
    <style>
    body {
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            padding:10px;
            border: 1px solid black;
        }
    </style>
</head>

<body>


    <div style="background:#77abff;height:100px;padding:5px;vertical-align: middle">
        <img width="200px" style="position:absolute;right:20px;" src="<?= site_url('resources/img/logo1.png') ?>" />
        <h2 style="text-align:center;">Daftar Hadir</h2>
    </div><br>
    <table style="border: 0px solid black;" width="100%">
        <tr>
            <td width="150px">Agenda Rapat</td>
            <td>: <?= $absensi['agenda'] ?></td>
        </tr>
        <tr>
            <td>Hari/Tanggal</td>
            <td>: <?= $absensi['hari_tanggal'] ?></td>
        </tr>
        <tr>
            <td>Pukul</td>
            <td>: <?= $absensi['pukul'] ?></td>
        </tr>
        <tr>
            <td>Tempat</td>
            <td>: <?= $absensi['tempat'] ?></td>
        </tr>
    </table><br>
    <table id="tabstyle" width="100%" border="1">
        <thead>
            <th>NO</th>
            <th>NAMA</th>
            <th><?= ($absensi['tipe']=='eksternal') ? 'PERUSAHAAN' : 'JABATAN' ?></th>
            <th>TELEPON</th>
            <th>EMAIL</th>
            <th colspan="2">TANDA TANGAN</th>
        </thead>
        <tbody>
            <?php for ($i=0; $i < 29; $i++) { ?>
            <tr height="50px">
                <td align="center"><?= $i+1 ?></td>
                <td width="150px"></td>
                <td></td>
                <td></td>
                <td></td>
                <td <?= ($i%2) ? '' : 'style="background-color:#77abff"' ?>><?= ($i%2) ? '' : $i+1 ?></td>
                <td><?= ($i%2) ? $i+1 : '' ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

<script type="text/javascript">
	function wprint(){
		window.print();
	}
	setTimeout(function() {
		wprint();	
	}, 1000);
	
</script>
</body>

</html>