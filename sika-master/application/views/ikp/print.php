<html>

<head>
    <title>Sika</title>
    <link rel="stylesheet" href="<?= base_url('resources/css') ?>/font-awesome.min.css">
    <style>
        .circleBase {
            border-radius: 50%;
            behavior: url(PIE.htc); /* remove if you don't care about IE8 */
        }
    body {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            padding:10px;
            border: 1px solid black;
        } */
    </style>
</head>

<body>
<div style="border:1px solid">
<table width="100%">
    <tr>
        <td width="120px" style="font-size:9pt; padding:5px;font-weight:bold">Nomor</td>
        <td width="140px"><div style="font-size:10.5pt;border: 1px solid black;padding-top:5px;padding-bottom:10px;padding-left:10px;padding-right:10px;text-align:center;font-weight:bold;color:red;width:140px;height:10px"><?= @$hira->no ?></div></td>
        <td rowspan="2" style="font-size:18pt;font-weight:bold;text-align:center; padding:5px">SURAT IZIN KERJA AMAN<br>( SIKA )</td>
        <td rowspan="2" width="400px" style="padding-right:10px"><img src="<?= base_url('assets/img/logo_pertagas.png') ?>" width="400px"></td>
    </tr>
    <tr>
        <td style="font-size:9pt; padding:5px;font-weight:bold">Lanjutan SIKA No. </td>
        <td><div style="border: 1px solid black;;padding-top:5px;padding-bottom:10px;padding-left:10px;padding-right:10px;text-align:center;font-weight:bold;color:red;width:140px;height:10px"><?= @$hira->lanjutan_no ?></div></td>
    </tr>
    <tr>
        <table width="100%" style="border-collapse: collapse;">
            <tr>
                <td style="border-top:1px solid black;border-right:1px solid black;vertical-align: top">
                    <table width="100.4%" style="border-collapse: collapse;margin-left:-2px">
                        <tr>
                            <td style="font-size:9pt;border-right:1px solid black;border-bottom:1px solid black;padding:2px">Tanggal Diterbitkan: <?= @$hira->tanggal_terbit ?></td>
                            <td style="font-size:9pt;border-right:1px solid black;border-bottom:1px solid black;padding:2px">Tgl/Bln/Thn: <?= @$hira->tanggal_terbit ?> s.d <?= @$hira->tgl_akhir_terbit ?></td>
                            <td style="font-size:9pt;border-bottom:1px solid black;padding:2px">Jam Kerja : <?= @$hira->jam_kerja ?> s.d <?= @$hira->jam_akhir_kerja ?></td>
                        </tr>
                    </table>
                    <table width="100.4%" style="border-collapse: collapse;margin-top:-1px;margin-left:-2px">
                        <tr>
                            <td style="font-size:9pt;border-bottom:1px solid black;padding:2px" width="40%">Nama Pelaksana Kerja : <?= @$hira->nama_pelaksana ?></td>
                            <td style="font-size:9pt;border-bottom:1px solid black;padding:2px" width="35%">Perusahaan : <?= @$hira->perusahaan ?></td>
                            <td style="font-size:9pt;border-left:1px solid black;border-bottom:1px solid black;padding:2px" width="25%">Jml pekerja: <?= @$hira->jumlah_pekerja ?> orang</td>
                        </tr>
                    </table>
                    <table width="100.4%" style="border-collapse: collapse;margin-top:-1px;margin-left:-2px">
                        <tr>
                            <td width="60%" style="vertical-align: top;border-bottom:1px solid black">
                                <table width="100.4%" style="border-collapse: collapse;margin-top:-1px;margin-left:-1px">
                                    <tr>
                                        <td style="font-size:9pt;border:1px solid black;padding:2px">Lokasi/Fasilitas: <?= @$hira->lokasi ?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size:9pt;padding:2px;border-right:1px solid black" width="50%"><p style="margin-bottom:15px">Uraian pekerjaan: <?= @$hira->uraian_pekerjaan ?> </p></td>
                                    </tr>
                                </table>
                            </td>
                            <td style="font-size:9pt;border-bottom:1px solid black;padding:2px;vertical-align: top" width="40%">Peralatan yang digunakan : <?= @$hira->peralatan ?></td>
                        </tr>
                        <tr>
                            <td  style="vertical-align: top;border-bottom:1px solid black">
                                <table width="100.4%" style="border-collapse: collapse;margin-top:-1px;margin-left:-1px">
                                    <tr>
                                        <td style="font-size:9pt;border-right:1px solid black;border-bottom:1px solid black;padding:2px;font-weight: bold">Isolasi Peralatan</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size:9pt;padding:2px;border-right:1px solid black" width="50%">
                                        <table width="100%">
                                            <tr>
                                                <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("LOTO Electric Circuits",$isolasi)!==false) ? 'check-' : '' ?>square-o"></i></td>
                                                <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                                <td style="font-size:9pt;">LOTO Electric Circuits</td>
                                                <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("LOTO Valve Air Instrument",$isolasi)!==false) ? 'check-' : '' ?>square-o"></i></td>
                                                <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                                <td style="font-size:9pt;">LOTO Valve Air Instrument </td>
                                            </tr>
                                            <tr>
                                                <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("LOTO Valve Gas",$isolasi)!==false) ? 'check-' : '' ?>square-o"></i></td>
                                                <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                                <td style="font-size:9pt;">LOTO Valve Gas</td>
                                                <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                                                <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                                <td style="font-size:9pt;">_________________ </td>
                                            </tr>
                                            <tr>
                                                <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("LOTO Valve Water",$isolasi)!==false) ? 'check-' : '' ?>square-o"></i></td>
                                                <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                                <td style="font-size:9pt;">LOTO Valve Water</td>
                                                <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                                                <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                                <td style="font-size:9pt;">_________________ </td>
                                            </tr>
                                        </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="font-size:9pt;border-bottom:1px solid black;padding:2px;vertical-align: top">Lampiran : <br>
                                <table width="100%">
                                    <tr>
                                        <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("Prosedur Khusus",$lampiran)!==false) ? 'check-' : '' ?>square-o"></i></td>
                                        <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                        <td style="font-size:9pt;">Prosedur Khusus</td>
                                        <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("HIRA",$lampiran)!==false) ? 'check-' : '' ?>square-o"></i></td>
                                        <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                        <td style="font-size:9pt;">HIRA </td>
                                    </tr>
                                    <tr>
                                        <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("Gambar P&ID",$lampiran)!==false)  ? 'check-' : '' ?>square-o"></i></td>
                                        <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                        <td style="font-size:9pt;">Gambar, P&ID</td>
                                        <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                                        <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                        <td style="font-size:9pt;">_________________ </td>
                                    </tr>
                                    <tr>
                                        <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("TKO, TKI, TKPA",$lampiran)!==false)  ? 'check-' : '' ?>square-o"></i></td>
                                        <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                        <td style="font-size:9pt;">TKO, TKI, TKPA</td>
                                        <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                                        <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                        <td style="font-size:9pt;">_________________ </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td  style="font-size:9pt;border-bottom:1px solid black">Identifikasi Bahaya</td>
                            <td style="border-bottom:1px solid black;padding:2px;vertical-align: top">
                            <i class="fa fa-check-square-o"></i> <span style="font-size:9pt;">Diberi tanda centang untuk identifikasi bahaya</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="vertical-align: top;">
                                <table width="100.4%" style="border-collapse: collapse;margin-top:-1px;margin-left:-1px">
                                    <tr>
                                        <td style="font-size:9pt;padding:2px;" width="50%">
                                        <table width="100%">
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Nyala api, percikan api",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Nyala api, percikan api</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Cairan/gas bertekanan",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Cairan/gas bertekanan</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Temperatur ekstrim (dingin/panas)",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Temperatur ekstrim (dingin/panas)</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Biohazard",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Biohazard</span></td>
                                            </tr>
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Bahan mudah terbakar",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Bahan mudah terbakar</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Longsoran",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Longsoran</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Pengangkatan Manual/alat angkat",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Pengangkatan manual/alat angkat</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Iritasi Mata/Kulit",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Iritasi mata/kulit</span></td>
                                            </tr>
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Gas/Uap Beracun",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Gas/uap beracun</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Benda bergerak",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Benda bergerak</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Ruang terbatas/kekurangan oksigen",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Ruang terbatas/kekurangan oksigen</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Gangguan Pernafasan",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Gangguan pernafasan</span></td>
                                            </tr>
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Bising",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Bising</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Pengangkatan Benda berat",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Pengangkatan benda berat</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Bahaya Pencemaran Lingkungan",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Bahaya pencemaran lingkungan</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Faktor fisik/biologis",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Faktor fisik/biologis</span></td>
                                            </tr>
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Bahan Berbahaya dan beracun",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Bahan berbahaya & beracun</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Kerja di ketinggian",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Kerja di ketinggian</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Faktor Ergonomis",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Faktor ergonomis</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Gangguan Keamanan",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Gangguan keamanan</span></td>
                                            </tr>
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Peralatan jalan/listrik hidup/tersengat",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Peralatan jalan/listrik hidup/tersengat</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Radiasi Radio Aktif",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Radiasi radioaktif</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Paparan Debu",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Paparan debu</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Mesin-mesin yang bergerak/berputar",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Mesin-mesin yang bergerak/berputar</span></td>
                                            </tr>
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Ledakan",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Ledakan</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Kontaminasi Tanah",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Kontaminasi tanah</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Kebersihan Makanan",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Kebersihan makanan</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-<?= (array_search("Pencurian",$bahaya)!==false) ? 'check-' : '' ?>square-o"></i> <span style="font-size:9pt;">Pencurian</span></td>
                                            </tr>
                                        </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="230px"  style="border-top:1px solid black;vertical-align: top">
                    <div style="background-color:red;text-align:center;vertical-align: center;padding:10px;font-size:9pt">IZIN KERJA PANAS (IKP)</div>
                    <p style="font-size:9pt;font-weight:bold;text-decoration: underline;text-align:center;margin-top:5px">Izin kerja khusus yg diperlukan</p>
                    <table width="100%">
                        <tr>
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("Izin Kerja masuk ruang Terbatas",$diperlukan)!==false) ? 'check-' : '' ?>square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Izin Kerja masuk ruang terbatas</td>   
                        </tr>
                        <tr>
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("Izin Kerja Radiografi",$diperlukan)!==false) ? 'check-' : '' ?>square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Izin Kerja Radiografi</td>   
                        </tr>
                        <tr>
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("Izin Kerja Isolasi Listrik",$diperlukan)!==false) ? 'check-' : '' ?>square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Izin Kerja Isolasi Listrik</td>   
                        </tr>
                        <tr>
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("Izin Kerja Penggalian",$diperlukan)!==false)? 'check-' : '' ?>square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Izin Kerja Penggalian</td>   
                        </tr>
                        <tr>
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("Izin Kerja Pengangkatan",$diperlukan)!==false) ? 'check-' : '' ?>square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Izin Kerja Pengangkatan</td>   
                        </tr>
                        <tr>
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("Izin Kerja Ketinggian",$diperlukan)!==false) ? 'check-' : '' ?>square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Izin Kerja Ketinggian</td>   
                        </tr>
                    </table>
                    <p style="font-size:9pt;font-weight:bold;text-decoration: underline;text-align:center;margin-top:15px">Sifat Pekerjaan</p>
                    <table width="100%">
                        <tr>
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("Normal",$sifat)!==false) ? 'check-' : '' ?>square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Normal</td>  
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("T/A",$sifat)!==false) ? 'check-' : '' ?>square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">T/A</td>    
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-<?= (array_search("Emergency",$sifat)!==false) ? 'check-' : '' ?>square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px;color:red">Emergency</td>    
                        </tr>
                    </table>
                    <p style="font-size:9pt;text-decoration: underline;margin-top:5px;margin-left:5px">Keterangan :</p>
                    <table width="100%">
                        <tr>
                        <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Beri tanda bila diminta</td>   
                        </tr>
                        <tr>
                            <td><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>
                            <td><p style="font-size:9pt;margin-top:0px">Periksa sebelum pengesahan/validasi diisi oleh Fiel Operator</td>   
                        </tr>
                        
                    </table>
                </td>
            </tr>
            
            <tr>
                <td colspan="2" style="border-top:1px solid black;padding:5px;"><p style="font-size:9pt;padding-bottom:15px">Identifikasi tambahan : <?= @$hira->identifikasi_tambahan ?> </p></td> 
            </tr>
        </table>
    </tr>
    <tr>
        <table width="100%" style="border-collapse:collapse">
            <tr>
                <td width="60%" style="font-size:9pt;border-top:1px solid black;font-weight: bold">Pengendalian Bahaya</td>
                <td style="border-top:1px solid black;padding:2px;vertical-align: top">
                    <i class="fa fa-check-square-o"></i> &nbsp;<i class="fa fa-check-circle-o"></i>&nbsp; <span style="font-size:9pt">Diberi tanda centang untuk pengendali bahaya</span>
                </td>
            </tr>

        </table>
    </tr>
    <tr>
        <table width="100%" style="border-collapse:collapse">
            <tr>
                
                <td style="border-top:1px solid black;padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Topi Keselamatan yang sesuai",$pengendalian)!==false) ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Topi keselamatan yang sesuai</span>
                </td>
                <td style="border-top:1px solid black;padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Lapisan penahan percikan las",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Lapisan penahan percikan las</span>
                </td>
                <td style="border-top:1px solid black;padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Alat bantu pernafasan udara tekan",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Alat bantu pernafasan udara tekan</span>
                </td>
                <td style="border-top:1px solid black;padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Semua sewer dalam jarak 15 m ditutup",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Semua sewer dalam jarak 15 m ditutup</span>
                </td>
            </tr>
            <tr>
                
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Sepatu Keselamatan yang sesuai",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Sepatu keselamatan yang sesuai</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Tirai Pelindung Pengelasan",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Tirai pelindung pengelasan</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Alat Pemadam Api Ringan (APAR)",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Alat Pemadam Api Ringan (APAR)</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Fire Blanket",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Fire Blanket</span>
                </td>
            </tr>
            <tr>
                
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Kacamata Keselamatan yang sesuai",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Kacamata keselamatan yang sesuai</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Tirai Air",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Tirai air</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("PPE Bahan Kimia",$pengendalian)!==false) ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">PPE bahan kimia</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Non Sparking Tools",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Non Sparking Tools</span>
                </td>
            </tr>
            <tr>
                
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Pelindung Telinga yang sesuai",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Pelindung telinga yang sesuai</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Area Kerja Selalu Dibasahi",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Area kerja selalu dibasahi</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Alat Penanggulangan pencemaran",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Alat penanggulangan pencemaran</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Disiapkan Jalur Evakuasi",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Disiapkan jalur evakuasi</span>
                </td>
            </tr>
            <tr>
                
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Sarung Tangan Keselamatan",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Sarung tangan keselamatan</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Tanda Peringatan/rintangan",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Tanda peringatan/rintangan</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Tanda Keseleamatan",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Tanda keselamatan</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Standby : ___ Fireman, ___ Safetymen, </span>
                </td>
            </tr>
            <tr>
                
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Harnes/Tali Pengaman",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Harness/tali pengaman</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Pengetesan HC gas terus menerus",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Pengetesan HC gas terus menerus</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Peralatan di-purging dengan N2",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Peralatan di-purging dengan N2</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Standby : ___ Rescuer, ___ Paramedic</span>
                </td>
            </tr>
            <tr>
                
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Masker debu/gas",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Masker debu / gas </span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Pengetesan Gas Sebelum mulai",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Pengetesan gas sebelum mulai</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Dipassang Scaffolding/perancah/tanggah",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Dipasang Scaffolding/perancah/tangga</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Kacamata Las dan Apron",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Kacamata las dan apron</span>
                </td>
            </tr>
            <tr>
                
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Masker Kimia",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Masker Kimia</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Tempat Kerja di-ventilasi",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Tempat kerja di-ventilasi</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Dibebaskan dari tekanan",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Dibebaskan dari tekanan</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Alat penampung cairan B3",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Alat penampung cairan B3</span>
                </td>
            </tr>
            <tr>
                
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Tali Pembatas Daerah",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Tali pembatas daerah</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Peralatan disolasi/dilepas",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Peralatan disolasi/dilepas</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Didinginkan Secara Mekanis",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Didinginkan secara mekanis</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Absorben",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Absorben</span>
                </td>
            </tr>
            <tr>
                
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Peralatan Dikosongkan/dibersihkan/difhusing",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Peralatan dikosongkan/dibersihkan/diflushing</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Sekering dicabut/dimatikan dan dipasang LOTO",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Sekering dicabut/dimatikan dan dipasang LOTO</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Bebas dari endapan yg explosive/toxic",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">Bebas dari endapan yg  explosve/toxic</span>
                </td>
                <td style="padding:2px;vertical-align: top">
                &nbsp;<i class="fa fa-<?= (array_search("Normal",$pengendalian)!==false)  ? 'check-' : '' ?>square-o"></i> &nbsp;<i class="fa fa-circle-o"></i> &nbsp; <span style="font-size:9pt">__________________________________</span>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="border-top:1px solid black;padding:5px;"><p style="font-size:9pt;padding-bottom:15px">Permintaan tambahan : <?= @$hira->permintaan_tambahan ?> </p></td> 
            </tr>
            <tr>
                <td colspan="4" style="border-top:1px solid black;padding:5px;border-bottom:1px solid black"><p style="font-size:9pt;padding-bottom:15px">Kami yang bertandatangan dibawah ini sebagai penanggung jawab keselamatan dan lingkungan di daerah kerja, mengizinkan untuk memulai melaksanakan pekerjaan yang dijelaskan di atas, jika seluruh pengendali bahaya yang ditentukan telah dipenuhi.</p></td> 
            </tr>
            <tr>
                <td style="padding:2px;vertical-align: top;font-size:9pt;padding:5px">Diminta oleh Penerima Izin Kerja :
                    <p>Tanda tangan : _____________________</p>
                    <p>Nama :  <?= @$hira->nama1 ?></p>
                    <p>Tanggal : <?= @$hira->date1 ?></p>
                </td>
                <td style="padding:2px;vertical-align: top;font-size:9pt;padding:5px;border-left:1px solid black">Diperiksa oleh Pengawas Pekerjaan:
                    <p>Tanda tangan : _____________________</p>
                    <p>Nama :  <?= @$hira->nama2 ?></p>
                    <p>Tanggal : <?= @$hira->date2 ?></p>
                </td>
                <td style="padding:2px;vertical-align: top;font-size:9pt;padding:5px;border-left:1px solid black">Dikaji oleh Pengawas HSE:
                    <p>Tanda tangan : _____________________</p>
                    <p>Nama :  <?= @$hira->nama3 ?></p>
                    <p>Tanggal : <?= @$hira->date3 ?></p>
                </td>
                <td style="padding:2px;vertical-align: top;font-size:9pt;padding:5px;border-left:1px solid black">Disetujui oleh Pemberi Izin Kerja :
                    <p>Tanda tangan : _____________________</p>
                    <p>Nama :  <?= @$hira->nama4 ?></p>
                    <p>Tanggal : <?= @$hira->date4 ?></p>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="border-top:1px solid black;padding:5px;border-bottom:1px solid black"><p style="font-size:9pt;font-weight:bold;color:red;text-align:center">PENGESAHAN PEKERJAAN EMERGENCY</p></td> 
            </tr>
            <tr>
                <td colspan="4" style="border-top:1px solid black;padding:5px;border-bottom:1px solid black"><p style="font-size:9pt;padding-bottom:15px;">Saya yang bertanda tangan dibawah ini sebagai Sr. Spv. Operation / HSE mengijinkan untuk memulai melaksanakan pekerjaan, jika seluruh tindakan pencegahan yang ditentukan telah terpenuhi.</p></td> 
            </tr>
        </table>
    </tr>
    <tr>
        <table width="100%" style="border-collapse:collapse">
            <tr>
                <td style="font-size:9pt;padding:5px">Nama : <?= @$hira->nama ?></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black">Tanda Tangan :</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black">Tanggal : <?= @$hira->date ?></td>
            </tr>
            <tr>
                <td colspan="3" style="font-size:9pt;padding:5px;font-weight: bold;border-top:1px solid black">Pengukuran Gas di Lapangan</td>
            </tr>
            <tr>
                <td colspan="3" style="font-size:9pt;padding:5px;border-top:1px solid black;border-bottom:1px solid black;">Yang bertanda tangan di bawah ini menyatakan bahwa pengukuran gas telah dilakukan seperti hasil di bawah ini:</td>
            </tr>
        </table>
    </tr>
    <tr>
        <table width="100%" style="border-collapse:collapse">
            <tr>
                <td width="150px" style="font-size:9pt;padding:10px;text-align:center">Item / Pemeriksaan ke-</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;text-align:center">Kondisi Awal </td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;text-align:center">I </td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;text-align:center">II </td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;text-align:center">III </td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;text-align:center">IV </td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;text-align:center">V </td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;text-align:center">VI </td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;text-align:center">VII </td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;text-align:center">VIII </td>

            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">Tanggal</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">Comb./Ex.</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">% O<sub>2</sub></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">% CO</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">H<sub>2</sub></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">Nama</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">Paraf</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
            </tr>
        </table>
    </tr>
    <tr>
        <table width="100%" style="border-collapse:collapse">
            <tr>
                <td colspan="5" style="border-top:1px solid black;font-size:9pt;padding:5px;text-align:center;font-weight:bold">Pengontrol Izin Kerja (Field Operator)</td>
                <td colspan="7" style="border-top:1px solid black;font-size:9pt;padding:5px;border-left:1px solid black;text-align:center;font-weight:bold">Permintaan Perpanjangan Jam Kerja </td>
            </tr>
            <tr>
                <td colspan="5" style="border-top:1px solid black;font-size:9pt;padding:5px;">Saya menyatakan bahwa tindakan pengendalian bahaya yg diperlukan telah dipenuhi dan pekerjaan dapat dilaksanakan.</td>
                <td colspan="4" style="border-top:1px solid black;font-size:9pt;padding:5px;border-left:1px solid black;text-align:center;">Pelaksana Pekerjaan</td>
                <td colspan="3" style="border-top:1px solid black;font-size:9pt;padding:5px;border-left:1px solid black;text-align:center;">Persetujuan Pengawas Pekerjaan</td>
            </tr>
            <tr>
                <td width="100px" style="font-size:9pt;padding:5px;border-top:1px solid black;text-align: center">Tanggal</td>
                <td width="100px" style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align: center">Waktu</td>
                <td width="100px" style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align: center">Nama</td>
                <td width="100px" style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align: center">Keterangan</td>
                <td width="100px" style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align: center">Paraf</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align: center">Tanggal</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align: center">Waktu</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align: center">Nama</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align: center">Paraf</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center">Perpanjangan</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center">Paraf Pengawas</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center">Paraf Operator</td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">&nbsp</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">&nbsp</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">&nbsp</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">&nbsp</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">&nbsp</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">&nbsp</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;">&nbsp</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"></td>
            </tr>
            <tr>
                <td colspan="5" style="border-top:1px solid black;font-size:9pt;padding:5px;font-weight:bold;text-align:center">Penghentian Izin Sementara</td>
                <td colspan="7" style="border-top:1px solid black;font-size:9pt;padding:5px;border-left:1px solid black;text-align:center;font-weight:bold;">Pengesahan Kembali Izin Kerja</td>
            </tr>
            <tr>
                <td colspan="5" style="border-top:1px solid black;font-size:9pt;padding:5px;">Saya menyatakan bahwa pekerjaan ini untuk sementara dihentikan/ditunda dengan alasan : <?= $hira->alasan ?></td>
                <td colspan="7" style="border-top:1px solid black;font-size:9pt;padding:5px;border-left:1px solid black;">Saya menyatakan bahwa pekerjaan ini dapat kembali di lanjutkan dengan catatan : <?= $hira->catatan ?></td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;text-align:center">Tanggal</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center">Waktu</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center" colspan="2">Nama</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center" >Tanda Tangan</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center">Tanggal</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center">Waktu</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center" colspan="3">Nama</td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center" colspan="2">Tanda Tangan</td>
            </tr>
            <tr>
                <td style="font-size:9pt;padding:5px;border-top:1px solid black;text-align:center"><?= @$hira->date_penghentian ?></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"><?= @$hira->waktu_penghentian ?></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center" colspan="2"><?= @$hira->nama_penghentian ?></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center" ></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"><?= @$hira->date_pengesahan ?></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center"><?= @$hira->waktu_pengesahan ?></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center" colspan="3"><?= @$hira->nama_pengesahan ?></td>
                <td style="font-size:9pt;padding:5px;border-left:1px solid black;border-top:1px solid black;text-align:center" colspan="2"></td>
            </tr>
            <tr>
                <td colspan="11" style="font-size:9pt;padding:5px;border-top:1px solid black;font-weight:bold">PENUTUPAN IZIN KERJA</td>
            </tr>
            <tr>
                <td colspan="11" style="font-size:9pt;padding:5px;border-top:1px solid black;">Kami yang bertanda tangan di bawah ini menyatakan bahwa pekerjaan yang tercantum pada izin kerja ini :</td>
            </tr>
        </table>
    </tr>
    <tr>
        <table width="100%" style="border-collapse:collapse">
            <tr>
                <td width="30%" style="padding-left:15px;padding-right:15px;vertical-align:top"><i class="fa fa-square-o"></i> &nbsp; <span style="font-size:9pt;">Belum selesai dan dilanjutkan dengan izin kerja nomor: </span><br><br>
                <div style="border:1px solid black;height:25px"></div>
            </td>
                <td style="padding-left:15px;padding-right:15px;vertical-align:top"><i class="fa fa-square-o"></i> &nbsp; <span style="font-size:9pt;">Tidak terselesaikan dan secara tegas dihentikan dan langkah-langkah yang harus diambil sebelum pekerjaan dapat dilanjutkan <br><br>___________________________________</span></td>
                <td style="padding-left:15px;padding-right:15px;vertical-align:top" width="40%"><i class="fa fa-square-o"></i> &nbsp; <span style="font-size:9pt;">Selesai untuk dapat diperiksa persiapan beroperasi secara normal<br>
                <ul>
                    <li>Telah dilakukan pelepasan isolasi pada peralatan</li>
                    <li>Telah dilakukan pemeriksaan bersama housekeeping lokasi pekerjaan dengan hasil baik dan dapat diterima.</li>
                </ul>
            </td>
            </tr>
        </table>
    </tr>
    <tr>
        <table width="100%" style="border-collapse:collapse">
            <tr>
                <td colspan="2" style="border-top:1px solid black;padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">Disiapkan oleh Penerima Izin Kerja: </span></td>
                <td colspan="2"  style="border-top:1px solid black;padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">Diperiksa oleh Pengawas Pekerjaan:</td>
                <td colspan="2"  style="border-top:1px solid black;padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">Disetujui oleh Pemberi Izin Kerja:</td>
            </tr>
            <tr>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">Tanda tangan</span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">: ______________________________</span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">Tanda tangan</span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">: ______________________________</span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">Tanda tangan</span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">: ______________________________</span></td>
            </tr>
            <tr>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">Nama</span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">: <?= @$hira->nama_penerima ?></span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">Nama</span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">: <?= @$hira->nama_pengawas ?></span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">Nama</span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">: <?= @$hira->nama_pemberi ?></span></td>
            </tr>
            <tr>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">Tanggal</span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">: <?= @$hira->date_penerima ?></span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">Tanggal</span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">: <?= @$hira->date_pengawas ?></span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">Tanggal</span></td>
                <td style="padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top;padding-bottom:5px"><span style="font-size:9pt;">: <?= @$hira->date_pemberi ?></span></td>
            </tr>
        </table>
    </tr>
    <tr>
        <table width="100%" style="border-collapse:collapse">
            <tr>
                <td width="100px" style="background-color:blue;color:white;font-weight:bold;border-top:1px solid black;padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top"><span style="font-size:9pt;">DISTRIBUSI: </span></td>
                <td style="background-color:white;border-top:1px solid black;padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top;text-align: center"><span style="font-size:9pt;">Putih : HSE </td>
                <td style="background-color:#c9e0a6;border-top:1px solid black;padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top;text-align: center"><span style="font-size:9pt;">Hijau : Penerima Izin Kerja</td>
                <td style="background-color:#e0a6a6;border-top:1px solid black;padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top;text-align: center"><span style="font-size:9pt;">Merah : Pemeliharaan</td>
                <td style="background-color:yellow;border-top:1px solid black;padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top;text-align: center"><span style="font-size:9pt;">Kuning : Operasi</td>
            </tr>
            <tr>
                <td colspan="5" style="font-size:9pt;border-top:1px solid black;padding-top:5px;padding-left:15px;padding-right:15px;vertical-align:top">F-008/B-501/PG400/2019-S9</td>
            </tr>
        </table>
    </tr>
    <tr>
        
    </tr>
</table>
</div>
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