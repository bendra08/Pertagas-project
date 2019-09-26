
<html>
<div style="height:70px;padding:5px;vertical-align: middle">
        <img width="200px" style="position:absolute;right:20px;" src="<?= site_url('resources/img/logo1.png') ?>" />
    </div>

<body>
    <h3>NOTULEN RAPAT</h3>
        <table style="border: 0px solid black;" width="100%">
            <tr>
                <td  style="border: 0px solid black; padding:2px"  width="150px">No</td>
                <td  style="border: 0px solid black; padding:2px" >: <?= $notulen['no_notulen'] ?></td>
            </tr>
            <tr>
                <td  style="border: 0px solid black; padding:2px" >Perihal</td>
                <td  style="border: 0px solid black; padding:2px" >: <?= $notulen['perihal'] ?></td>
            </tr>
            <tr>
                <td  style="border: 0px solid black; padding:2px" >Waktu</td>
                <td style="border: 0px solid black; padding:2px" >: <?= $notulen['waktu'] ?></td>
            </tr>
            <tr>
                <td style="border: 0px solid black; padding:2px" >Tempat</td>
                <td style="border: 0px solid black; padding:2px" >: <?= $notulen['tempat'] ?></td>
            </tr>
            <tr>
                <td style="border: 0px solid black; padding:2px" >Daftar Hadir</td>
                <td style="border: 0px solid black; padding:2px" >: <?= $notulen['daftar_hadir'] ?></td>
            </tr>
        </table><br>
        <table id="tabstyle" width="100%" border="1">
        <thead>
            <th>NO</th>
            <th>POKOK URAIAN PEMBAHASAN</th>
            <th>RENCANA TINDAK LANJUT</th>
            <th>JANGKA WAKTU</th>
            <th>PENANGGUNG JAWAB</th>
        </thead>
        <tbody>
            <?php $i=0; foreach($uraian as $row) { $i++;
                $time = strtotime($row->jangka_waktu);
                $jangka_waktu = date('d',$time).' '.convert_bulan(date('m',$time)).' '.date('Y',$time);
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row->uraian ?></td>
                    <td><?= $row->rencana ?></td>
                    <td><?= $jangka_waktu ?></td>
                    <td><?= $row->penanggung_jawab ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
        <br>
        <br>

        <table style="border: 0px;text-align:center" width="100%">
            <tr style="">
                <td style="border: 0px solid black;"  width="33%" align="center">
                    <table style="border: 0px;text-align:center;padding:5px" width="97%">
                        <tr>
                            <td style="border: 0px solid black;" ></td>
                        </tr>    
                        <tr>
                            <td style="border: 0px solid black;" ><?= $notulen['jabatan1'] ?></td>
                        </tr>
                        <tr>
                            <td style="border: 0px solid black;" ><br><br><br><b><?= $notulen['ttd_1'] ?></td>
                        </tr>
                    </table>
                </td>
                <td style="border: 0px solid black;"  width="33%" align="center">
                    <table style="border: 0px;text-align:center;padding:5px" width="97%">
                    <tr>
                            <td style="border: 0px solid black;" ></td>
                        </tr>    
                    <tr>
                            <td style="border: 0px solid black;" ><?= $notulen['jabatan2'] ?></td>
                        </tr>
                        <tr>
                            <td style="border: 0px solid black;" ><br><br><br><b><?= $notulen['ttd_2'] ?></td>
                        </tr>
                    </table>
                </td>
                <td style="border: 0px solid black;"  width="33%" align="center">
                    <table style="border: 0px;text-align:center;padding:5px" width="97%">
                        <tr>
                            <td style="border: 0px solid black;" >Mengetahui,</td>
                        </tr>
                        <tr>
                            <td style="border: 0px solid black;" ><?= $notulen['jabatan3'] ?></td>
                        </tr>
                        <tr>
                            <td style="border: 0px solid black;" ><br><br><br><b><?= $notulen['ttd_3'] ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
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