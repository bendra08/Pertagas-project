<?php 
$time = strtotime($konsumsi['tanggal']);

$month = date('m',$time);
$day = date('d',$time);
$year = date('Y',$time);
$month = convert_bulan($month);

?>
<html>

<head>
    <title>Konsumsi</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <div style="border:1px solid black;padding:10px">
    <table width="125%">
        <tr>
            <td><h3 align="center" style="margin-top:0px">SURAT PERMINTAAN KONSUMSI RAPAT KANTOR PUSAT<br>PT PERTAMINA GAS</h3></td>
            <td width="150px"><img width="150px" style="right:20px;margin-top:15px" src="<?= site_url('resources/img/logo1.png') ?>" /></td>
        </tr>
    </table>
    
        

        <div style="border:0.5px solid black;margin-bottom:10px"></div>
        <table style="border: 0px solid black;" width="100%">
            <tr>
                <td width="150px">Kepada</td>
                <td>: <?= 'Manager Corporate Support' ?></td>
                <td width="150px">No</td>
                <td>: <?= $konsumsi['no_konsumsi_origin'] ?></td>
            </tr>
            <tr>
                <td>Dari</td>
                <td>: <?= $konsumsi['dari'] ?></td>
                <td>Tanggal</td>
                <td>: <?= $day.' '.$month.' '.$year; ?></td>
            </tr>
        </table><br>
        <div style="border:0.5px solid black;margin-bottom:2px"></div>
        <div style="border:0.5px solid black;margin-bottom:10px"></div>
        <p>Harap bantuan Saudara untuk menyediakan konsumsi rapat *)</p>
        <p><strong>Kategori Konsumsi (✓)</strong></p>
        <table style="border: 0px solid black;" width="200px">
            <tr>
                <td width="150px">VVIP</td>
                <td align="center">
                    <div style="border:0.5px solid black;"><?= (empty($vvip)) ? '&nbsp' : '✓' ?></div>
                </td>
            </tr>
            <tr>
                <td width="150px">VIP</td>
                <td align="center">
                    <div style="border:0.5px solid black;"><?= (empty($vip)) ? '&nbsp' : '✓' ?></div>
                </td>
            </tr>
            <tr>
                <td width="150px">Biasa</td>
                <td align="center">
                    <div style="border:0.5px solid black;"><?= (empty($biasa)) ? '&nbsp' : '✓' ?></div>
                </td>
            </tr>
        </table>
        <p><strong>Jenis Konsumsi (✓)</strong></p>
        <table style="border: 0px solid black;" width="200px">
            <tr>
                <td width="150px">Snack Pagi</td>
                <td align="center">
                    <div style="border:0.5px solid black;"><?= (empty($snack_pagi)) ? '&nbsp' : '✓' ?></div>
                </td>
            </tr>
            <tr>
                <td width="150px">Makan Siang</td>
                <td align="center">
                    <div style="border:0.5px solid black;"><?= (empty($makan_siang)) ? '&nbsp' : '✓' ?></div>
                </td>
            </tr>
            <tr>
                <td width="150px">Snack / buah sore</td>
                <td align="center">
                    <div style="border:0.5px solid black;"><?= (empty($buah)) ? '&nbsp' : '✓' ?></div>
                </td>
            </tr>
        </table><br>

        <table style="border: 0px solid black;" width="100%">
            <tr>
                <td width="150px">Acara Rapat</td>
                <td>: <?= $konsumsi['acara'] ?></td>
            </tr>
            <tr>
                <td width="150px">Hari/Tanggal</td>
                <td>: <?= $konsumsi['hari_tanggal'] ?></td>
            </tr>
            <tr>
                <td width="150px">Mulai Jam</td>
                <td>: <?= $konsumsi['mulai'].' . Sampai Jam : '.$konsumsi['selesai'] ?></td>
            </tr>
            <tr>
                <td width="150px">Tempat</td>
                <td>: <?= $konsumsi['tempat'] ?></td>
            </tr>
            <tr>
                <td width="150px">Peserta Rapat</td>
                <td>: <?= $konsumsi['peserta'].' orang' ?></td>
            </tr>
        </table>
        <p>Dengan rincian sebagai berikut :</p>
        <table style="border: 0px solid black;" width="100%">
            <tr>
                <td align="center">
                    <div style="border:0.5px solid black;padding:2px"><b>PERTAMINA GAS</b></div>
                </td>
                <td align="center">
                    <div style="border:0.5px solid black;padding:2px"><b>UNDANGAN</b></div>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="padding-left:20px;border:0.5px solid black" width="100%">
                        <tr>
                            <td width="50%">Direksi</td>
                            <td>: <?= $konsumsi['pg_direksi']. ' orang' ?></td>
                        </tr>
                        <tr>
                            <td>Vice President</td>
                            <td>: <?= $konsumsi['pg_vicepresident']. ' orang' ?></td>
                        </tr>
                        <tr>
                            <td>Manajer</td>
                            <td>: <?= $konsumsi['pg_manajer']. ' orang' ?></td>
                        </tr>
                        <tr>
                            <td>Staf</td>
                            <td>: <?= $konsumsi['pg_jumlah']. ' orang' ?></td>
                        </tr>
                    </table>
                    <table style="padding-left:20px;margin-top:2px;border:0.5px solid black" width="100%">

                        <tr>
                            <td width="50%">Jumlah Peserta</td>
                            <td>: <?= $konsumsi['pg_jumlah'].' orang' ?></td>
                        </tr>
                    </table>
                </td>
                <td align="center">
                    <table style="padding-left:20px;border:0.5px solid black;text-align: center" width="100%">
                        <tr>
                            <td>Instansi / Lembaga / Perusahaan</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>PT Pertamina (Persero)</td>
                        </tr>
                    </table>
                    <table style="padding-left:20px;margin-top:2px;border:0.5px solid black" width="100%">
                        <tr>
                            <td>Jumlah Peserta : <?= $konsumsi['peserta_undangan'].' orang' ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <br>
        <br>

        <table style="text-align:center" width="100%">
            <tr>
                <td width="33%" align="center">
                    <table style="border: 1px solid black;text-align:center;padding:5px" width="97%">
                        <tr>
                            <td>Diminta Oleh</td>
                        </tr>
                        <tr>
                            <td><?= $konsumsi['jabatan_diminta'] ?></td>
                        </tr>
                        <tr>
                            <td><br><br><br><b><?= $konsumsi['diminta'] ?></td>
                        </tr>
                    </table>
                </td>
                <td width="33%" align="center">
                    <table style="border: 1px solid black;text-align:center;padding:5px" width="97%">
                        <tr>
                            <td>Diverifikasi Oleh</td>
                        </tr>
                        <tr>
                            <td><?= $konsumsi['jabatan_verifikasi'] ?></td>
                        </tr>
                        <tr>
                            <td><br><br><br><b><?= $konsumsi['diverifikasi'] ?></td>
                        </tr>
                    </table>
                </td>
                <td width="33%" align="center">
                    <table style="border: 1px solid black;text-align:center;padding:5px" width="97%">
                        <tr>
                            <td>Diproses Oleh</td>
                        </tr>
                        <tr>
                            <td><?= $konsumsi['jabatan_proses'] ?></td>
                        </tr>
                        <tr>
                            <td><br><br><br><b><?= $konsumsi['diproses'] ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table><br>
        <p>- *) Pilih yang diperlukan</p>
        <p style="margin-top:-10px">- Surat Permintaan Konsumsi Rapat asli diambil oleh Admin Konsumsi Rapat PWP untuk
            lampiran tagihan/invoice</p>
        <p style="margin-top:-10px">- Setiap Permintaan Konsumsi Rapat wajib melampirkan Undangan Rapat</p>
        <p style="margin-top:-10px">- Permintaan Konsumsi dapat disetujui apabila yang menandatangani minimal Staf</p>
        <p style="margin-top:-10px">- Ref. Telepon/Ext pemesanan yang dapat dihubungi 1220</p>
        <p style="border:1px solid black;padding:5px">Keterangan tambahan : <?= $konsumsi['keterangan'] ?><br><br></p>
    </div>

    <script type="text/javascript">
    function wprint() {
        window.print();
    }
    setTimeout(function() {
        wprint();	
    }, 1000);
    </script>
</body>

</html>