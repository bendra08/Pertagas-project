<script>
    
        function getAcara(){
            $(document).ready(function(){
                var no_notulen = $("#acara").val();
                $("#loading").show();
                $.ajax({
                    url: "<?= site_url('konsumsi/get_acara') ?>",
                    type: "post",
                    dataType: "json",
                    data: {no_notulen:no_notulen},
                    success: function (response) {
                        $("#loading").hide();
                        if (response.status){
                            $("#id_fungsi").val(response.data.id_fungsi);
                            $("#no_kbo").val(response.data.no_kbo);
                            $("#hari_tanggal").val(response.data.waktu);
                            $("#tempat").val(response.data.tempat);
                        }else{
                            alert(response.message);
                        }
                    
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $("#loading").hide();
                        alert("Error : "+ textStatus);
                        //$('#kelurahan').html('<option value=\"\">Gagal load data</option>');
                    }
                });
            });
        }
        function jmlPeserta(){
            var jumlah = $("#pg_jumlah").val();
            var peserta_undangan = $("#peserta_undangan").val();
            $("#peserta").val(parseInt(jumlah) + parseInt(peserta_undangan));
        }
        function jmlPgJumlah(){
            var pg_direksi = $("#pg_direksi").val();
            var pg_vicepresident = $("#pg_vicepresident").val();
            var pg_manajer = $("#pg_manajer").val();
            var pg_staff = $("#pg_staff").val();
            $("#pg_jumlah").val(parseInt(pg_direksi) + parseInt(pg_vicepresident)+ parseInt(pg_manajer)+ parseInt(pg_staff));
        }
</script>