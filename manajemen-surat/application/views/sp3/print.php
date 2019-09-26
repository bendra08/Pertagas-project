<?php 
$time = strtotime($sp3['tanggal']);

$month = date('m',$time);
$day = date('d',$time);
$year = date('Y',$time);
$month = convert_bulan($month);

$time = strtotime($sp3['tanggal_po']);

$po_month = date('m',$time);
$po_day = date('d',$time);
$po_year = date('Y',$time);
$po_month = convert_bulan($po_month);


$time = strtotime($sp3['tanggal_invoice']);

$in_month = date('m',$time);
$in_day = date('d',$time);
$in_year = date('Y',$time);
$in_month = convert_bulan($in_month);
?>
<html>

<head>
    <title>Print SP3</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>


    <div style="height:70px;padding:5px;vertical-align: middle">
        <img width="200px" style="position:absolute;right:20px;" src="<?= site_url('resources/img/logo1.png') ?>" />
    </div>
    <h3>SURAT PERMINTAAN PROSES PEMBAYARAN (SP3)</h3>
    <p><?= 'Jakarta, '.$day.' '.$month.' '.$year ?></p>
    <p><?= $sp3['no_kontrak'] ?></p>
    <table style="border: 0px solid black;" width="100%">
        <tr>
            <td width="150px">Kepada</td>
            <td>: <?= 'VP Financial Controller' ?></td>
        </tr>
        <tr>
            <td>Dari</td>
            <td>: <?= $sp3['dari'] ?></td>
        </tr>
    </table><br>
    <p>Terlampir dikirimkan dokumen pendukung pembayaran terdiri atas :</p>
    <?= $sp3['lampiran_doc'] ?><br><br>
    <table style="border: 0px solid black;" width="100%">
        <tr>
            <td width="150px">Untuk Pembayaran</td>
            <td>: <b>Pembayaran <?= $sp3['judul_pembayaran'].' '.$sp3['tahap'] ?></b></td>
        </tr>
        <tr>
            <td>JumlahPembayaran</td>
            <td>: <?= '<b>Rp. '.number_format($sp3['nilai_invoice'],2).'</b>'.' ('.ucwords(terbilang2($sp3['nilai_invoice'])).' Rupiah)' ?></td>
        </tr>
    </table><br>
    <table style="border: 0px solid black;" width="100%">
        <tr>
            <td width="150px">No. PO/Kontrak*</td>
            <td>: <?= $sp3['no_po'] ?></td>
            <td width="150px">Tanggal PO/Kontrak*   </td>
            <td>: <?= $po_day.' '.$po_month.' '.$po_year; ?></td>
        </tr>
        <tr>
            <td>No. SA/GR</td>
            <td>: <?= $sp3['no_sa_gr'] ?></td>
            <td>G/L Account</td>
            <td>: <?= $sp3['gl_account'] ?></td>
        </tr>
        <tr>
            <td>No.Invoice</td>
            <td>: <?= $sp3['no_invoice'] ?></td>
            <td>Lap./Lokasi</td>
            <td>: <?= $sp3['lokasi'] ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Tgl.Invoice</td>
            <td>: <?= $in_day.' '.$in_month.' '.$in_year; ?></td>
        </tr>
    </table><br>

    <table style="border: 0px solid black;" width="100%">
        <tr>
            <td width="200px">Harap dibayarkan kepada </td>
            <td>: a/n <?= $sp3['nama_perusahaan'] ?></td>
        </tr>
        <tr>
            <td>Nomor Rekening</td>
            <td>: <?= $sp3['no_rek'] ?></td>
        </tr>
        <tr>
            <td>Nama Bank</td>
            <td>: <?= $sp3['nama_bank'] ?></td>
        </tr>
    </table><br>
    <p>Bersama ini kami nyatakan bahwa transaksi yang ditagihkan ini berdasarkan dokumen yang lengkap dan benar sehingga absah untuk dibayar. Dokumen-dokumen terkait yang tidak disampaikan pada Permintaan Proses Pembayaran ini disimpan ditempat kami dan dapat diperlihatkan kepada Fungsi Finance apabila diperlukan.</p>
    <p>Atas perhatian dan kerja sama Saudara diucapkan terima kasih.</p><br>
    <table style="border: 0px solid black;text-align:center" width="100%">
        <tr>
            <td>Menyetujui, </td>
            <td>Pemohon,</td>
        </tr>
        <tr>
            <td><?= $sp3['fungsi'] ?></td>
            <td><?= $sp3['jabatan'] ?></td>
        </tr>
        <tr>
            <td><br><br><br><b><?= $sp3['nama_pejabat'] ?></b></td>
            <td><br><br><br><b><?= $sp3['pemilik_pekerjaan'] ?></b></td>
        </tr>
    </table><br>	
    
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