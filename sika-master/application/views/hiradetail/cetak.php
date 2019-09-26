<html>

<head>
    <title>Cetak</title>
    <link rel="stylesheet" href="<?= base_url('resources/css') ?>/font-awesome.min.css">
    <style>
        .circleBase {
            border-radius: 50%;
            behavior: url(PIE.htc); /* remove if you don't care about IE8 */
        }
    body {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* .tb1 table {
            border-collapse: collapse;
        }
        .td1 table,th, td {
            padding:10px;
            border: 1px solid black;
        } */
    </style>
</head>

<body>
    <table style="border-collapse: collapse;" width="100%">
        <tr>
            <td colspan="2" style="padding:10px;border: 1px solid black;font-weight:bold;text-align:center">HAZARD IDENTIFICATION AND RISK ASSESSMENT<br>(HIRA)</td>
            <td colspan="2" style="padding:10px;border: 1px solid black;font-weight:bold;text-align:center" width="300px"><img src="<?= base_url('assets/img/logo_pertamina.png') ?>" width="300px"/></td>
        </tr>
        <tr>
            <td width="30%" style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">PEKERJAAN</td>
            <td width="30%" style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">: <?= $hira['pekerjaan'] ?></td>
            <td width="20%" style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">TANGGAL MULAI</td>
            <td width="20%" style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">: <?= $hira['date_mulai'] ?></td>
        </tr>
        <tr>
            <td style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">FUNGSI/VENDOR PELAKSANA</td>
            <td style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">: <?= $hira['fungsi'] ?></td>
            <td style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">TANGGAL SELESAI</td>
            <td  style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">: <?= $hira['date_selesai'] ?></td>
        </tr>
        <tr>
            <td  style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">   PENGAWAS PEKERJAAN 		</td>
            <td  style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">: <?= $hira['pengawas'] ?></td>
            <td  style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">NOMOR</td>
            <td  style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">: <?= $hira['no'] ?></td>
        </tr>
        <tr>
            <td  style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">   LOKASI/PEMILIK AREA 		</td>
            <td  style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">: <?= $hira['lokasi_owner'] ?></td>
            <td  style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">HALAMAN</td>
            <td  style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">:</td>
        </tr>
        <tr>
            <td  style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">   ALAT YANG DIGUNAKAN		</td>
            <td  style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left">: <?= $hira['tools'] ?></td>
            <td colspan="2" style="font-size:11pt;padding:10px;border: 1px solid black;font-weight:bold;text-align:left"></td>

        </tr>
    </table>
<table style="border-collapse: collapse;padding:10px;font-size:10pt" width="100%">
    <tr>
        <td colspan="12" style="text-align:center;color:blue"><br><i>P: Probability/ Frequency; C: Consequence (Personnel, Environment, Material, Production, Company Image and reputation and Media); R: Risk.</i><br><br></td>
    </tr>
    <tr style="text-align:center">
        <td style="padding:10px;border: 1px solid black;font-weight:bold">No.</td>
        <td style="padding:10px;border: 1px solid black;font-weight:bold">Urutan Kegiatan<br><i>Step Of activities</i></td>
        <td style="padding:10px;border: 1px solid black;font-weight:bold">Bahaya<br><i>Hazards</i></td>
        <td style="padding:10px;border: 1px solid black;font-weight:bold">Konsekwensi<br><i>Consequences</i></td>
        <td style="padding:10px;border: 1px solid black;font-weight:bold">P</td>
        <td style="padding:10px;border: 1px solid black;font-weight:bold">C</td>
        <td style="padding:10px;border: 1px solid black;font-weight:bold">R</td>
        <td style="padding:10px;border: 1px solid black;font-weight:bold">Pengendalian bahaya<br><i>Control Meassures</i></td>
        <td style="padding:10px;border: 1px solid black;font-weight:bold">Penanggungjawab<br><i>Person Incharge</i></td>
        <td style="padding:10px;border: 1px solid black;font-weight:bold">P</td>
        <td style="padding:10px;border: 1px solid black;font-weight:bold">C</td>
        <td style="padding:10px;border: 1px solid black;font-weight:bold">R</td>
    </tr>
    <tbody>
        <?php if (isset($hira)){ ?>
        <?php $i = 0;foreach($hiradetail as $row){ $i++; ?>
            <tr>
                <td width="30px" style="padding:10px;border: 1px solid black;"><?= $i ?></td>
                <td width="20%" style="padding:10px;border: 1px solid black;"><?= $row['dh_kegiatan'] ?></td>
                <td width="20%" style="padding:10px;border: 1px solid black;"><?= $row['dh_bahaya'] ?></td>
                <td width="20%" style="padding:10px;border: 1px solid black;"><?= $row['dh_konsekwensi'] ?></td>
                <td width="20px" style="padding:10px;border: 1px solid black;"><?= $row['dh_p1'] ?></td>
                <td width="20px" style="padding:10px;border: 1px solid black;"><?= $row['dh_c1'] ?></td>
                <td width="20px" style="padding:10px;border: 1px solid black;"><?= $row['dh_r1'] ?></td>
                <td width="20%" style="padding:10px;border: 1px solid black;"><?= $row['dh_pengendalian'] ?></td>
                <td width="20%" style="padding:10px;border: 1px solid black;"><?= $row['dh_penanggungjawab'] ?></td>
                <td width="20px" style="padding:10px;border: 1px solid black;"><?= $row['dh_p2'] ?></td>
                <td width="20px" style="padding:10px;border: 1px solid black;"><?= $row['dh_c2'] ?></td>
                <td width="20px" style="padding:10px;border: 1px solid black;"><?= $row['dh_r2'] ?></td>
            </tr>
        <?php }} ?>
        <tr>
                <td style="padding:10px;border: 1px solid black;"></td>
                <td style="padding:10px;border: 1px solid black;"></td>
                <td style="padding:10px;border: 1px solid black;"></td>
                <td style="padding:10px;border: 1px solid black;"></td>
                <td style="padding:10px;border: 1px solid black;"></td>
                <td style="padding:10px;border: 1px solid black;"></td>
                <td style="padding:10px;border: 1px solid black;"></td>
                <td style="padding:10px;border: 1px solid black;"></td>
                <td style="padding:10px;border: 1px solid black;font-weight:bold">Risiko Sisa:<br><i>Overall Residual Risk:</i></td>
                <td style="padding:10px;border: 1px solid black;"></td>
                <td style="padding:10px;border: 1px solid black;"></td>
                <td style="padding:10px;border: 1px solid black;"></td>
            </tr>
            <tr>
                <td colspan="12">&nbsp</td>
            </tr>
            <tr>
                <td style=""></td>
                <td style="">Dibuat oleh,<br>Pelaksana kerja<br><br><br><br>Nama :</td>
                <td style=""></td>
                <td style="">Direview oleh,<br>Pengawas pelaksana kerja<br><br><br><br>Nama :</td>
                <td style=""></td>
                <td style=""></td>
                <td style="">HSE</td>
                <td style=""></td>
                <td style="">Disetujui oleh,<br>Pemilik Area/aset yang berwenang<br><br><br><br>Nama :</td>
                <td style=""></td>
                <td style=""></td>
                <td style=""></td>
            </tr>
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