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
        <td width="140px"><div style="font-size:10.5pt;border: 1px solid black;padding-top:5px;padding-bottom:10px;padding-left:10px;padding-right:10px;text-align:center;font-weight:bold;color:red;width:140px;height:10px"><?= print_r($hira) ?></div></td>
        <td rowspan="2" style="font-size:18pt;font-weight:bold;text-align:center; padding:5px">SURAT IZIN KERJA AMAN<br>( SIKA )</td>
        <td rowspan="2" width="400px" style="padding-right:10px"><img src="<?= base_url('assets/img/logo_pertagas.png') ?>" width="400px"></td>
    </tr>
    <tr>
        <td style="font-size:9pt; padding:5px;font-weight:bold">Lanjutan SIKA No. </td>
        <td><div style="border: 1px solid black;;padding-top:5px;padding-bottom:10px;padding-left:10px;padding-right:10px;text-align:center;font-weight:bold;color:red;width:140px;height:10px"></div></td>
    </tr>
    <tr>
        <table width="100%" style="border-collapse: collapse;">
            <tr>
                <td style="border-top:1px solid black;border-right:1px solid black;vertical-align: top">
                    <table width="100.4%" style="border-collapse: collapse;margin-left:-2px">
                        <tr>
                            <td style="font-size:9pt;border-right:1px solid black;border-bottom:1px solid black;padding:2px">Tanggal Diterbitkan</td>
                            <td style="font-size:9pt;border-right:1px solid black;border-bottom:1px solid black;padding:2px">Tgl/Bln/Thn:       /               /              s.d           /               /</td>
                            <td style="font-size:9pt;border-bottom:1px solid black;padding:2px">Jam Kerja : _______ s.d ________</td>
                        </tr>
                    </table>
                    <table width="100.4%" style="border-collapse: collapse;margin-top:-1px;margin-left:-2px">
                        <tr>
                            <td style="font-size:9pt;border-bottom:1px solid black;padding:2px" width="40%">Nama Pelaksana Kerja : </td>
                            <td style="font-size:9pt;border-bottom:1px solid black;padding:2px" width="35%">Perusahaan :</td>
                            <td style="font-size:9pt;border-left:1px solid black;border-bottom:1px solid black;padding:2px" width="25%">Jml pekerja:               orang</td>
                        </tr>
                    </table>
                    <table width="100.4%" style="border-collapse: collapse;margin-top:-1px;margin-left:-2px">
                        <tr>
                            <td width="60%" style="vertical-align: top;border-bottom:1px solid black">
                                <table width="100.4%" style="border-collapse: collapse;margin-top:-1px;margin-left:-1px">
                                    <tr>
                                        <td style="font-size:9pt;border:1px solid black;padding:2px">Lokasi/Fasilitas:</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size:9pt;padding:2px;border-right:1px solid black" width="50%"><p style="margin-bottom:15px">Uraian pekerjaan: _____________________________________ </p></td>
                                    </tr>
                                </table>
                            </td>
                            <td style="font-size:9pt;border-bottom:1px solid black;padding:2px;vertical-align: top" width="40%">Peralatan yang digunakan : ____________________________ <br> <p style="margin-top:5px;">&nbsp;__________________________________________________ </p></td>
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
                                                <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                                                <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                                <td style="font-size:9pt;">LOTO Electric Circuits</td>
                                                <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                                                <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                                <td style="font-size:9pt;">LOTO Valve Air Instrument </td>
                                            </tr>
                                            <tr>
                                                <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                                                <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                                <td style="font-size:9pt;">LOTO Valve Gas</td>
                                                <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                                                <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                                <td style="font-size:9pt;">_________________ </td>
                                            </tr>
                                            <tr>
                                                <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
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
                                        <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                                        <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                        <td style="font-size:9pt;">Prosedur Khusus</td>
                                        <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                                        <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                        <td style="font-size:9pt;">HIRA </td>
                                    </tr>
                                    <tr>
                                        <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                                        <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                        <td style="font-size:9pt;">Gambar, P&ID</td>
                                        <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                                        <td width="10px"><div class="circleBase" style="margin-left:5px;border:1px solid black;width:10px;height:10px"></div></td>   
                                        <td style="font-size:9pt;">_________________ </td>
                                    </tr>
                                    <tr>
                                        <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
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
                            <td style="font-size:9pt;border-bottom:1px solid black;padding:2px;vertical-align: top">
                            <i class="fa fa-check-square-o"></i> Diberi tanda centang untuk identifikasi bahaya
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="vertical-align: top;">
                                <table width="100.4%" style="border-collapse: collapse;margin-top:-1px;margin-left:-1px">
                                    <tr>
                                        <td style="font-size:9pt;padding:2px;" width="50%">
                                        <table width="100%">
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Nyala api, percikan api</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Cairan/gas bertekanan</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Temperatur ekstrim (dingin/panas)</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Biohazard</span></td>
                                            </tr>
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Bahan mudah terbakar</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Longsoran</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Pengangkatan manual/alat angkat</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Iritasi mata/kulit</span></td>
                                            </tr>
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Gas/uap beracun</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Benda bergerak</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Ruang terbatas/kekurangan oksigen</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Gangguan pernafasan</span></td>
                                            </tr>
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Bising</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Pengangkatan benda berat</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Bahaya pencemaran lingkungan</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Faktor fisik/biologis</span></td>
                                            </tr>
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Bahan berbahaya & beracun</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Kerja di ketinggian</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Faktor ergonomis</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Gangguan keamanan</span></td>
                                            </tr>
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Peralatan jalan/listrik hidup/tersengat</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Radiasi radioaktif</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Paparan debu</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Mesin-mesin yang bergerak/berputar</span></td>
                                            </tr>
                                            <tr>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Ledakan</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Kontaminasi tanah</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Kebersihan makanan</span></td>
                                                <td width="10px" ><i style="margin-left:5px;" class="fa fa-square-o"></i> <span style="font-size:9pt;">Pencurian</span></td>
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
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Izin Kerja masuk ruang terbatas</td>   
                        </tr>
                        <tr>
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Izin Kerja Radiografi</td>   
                        </tr>
                        <tr>
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Izin Kerja Isolasi Listrik</td>   
                        </tr>
                        <tr>
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Izin Kerja Penggalian</td>   
                        </tr>
                        <tr>
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Izin Kerja Pengangkatan</td>   
                        </tr>
                        <tr>
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Izin Kerja Ketinggian</td>   
                        </tr>
                    </table>
                    <p style="font-size:9pt;font-weight:bold;text-decoration: underline;text-align:center;margin-top:15px">Sifat Pekerjaan</p>
                    <table width="100%">
                        <tr>
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">Normal</td>  
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
                            <td><p style="font-size:9pt;margin-top:0px">T/A</td>    
                            <td width="10px"><i style="margin-left:5px;" class="fa fa-square-o"></i></td>
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
                <td colspan="2" style="border-top:1px solid black;padding:5px;"><p style="font-size:9pt">Identifikasi tambahan : _______________ </p></td> 
            </tr>
        </table>
    </tr>
</table>
</div>
<script type="text/javascript">
	function wprint(){
		window.print();
	}
	setTimeout(function() {
		//wprint();	
	}, 1000);
	
</script>
</body>

</html>