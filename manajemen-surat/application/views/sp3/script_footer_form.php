<script>
    
        function getFungsi(){
            $(document).ready(function(){
                var id_fungsi = $("#dari").val();
                $("#loading").show();
                $.ajax({
                    url: "<?= site_url('sp3/get_fungsi') ?>",
                    type: "post",
                    dataType: "json",
                    data: {id_fungsi:id_fungsi},
                    success: function (response) {
                        $("#loading").hide();
                        if (response.status){
                            $("#id_fungsi").val(response.data.id_fungsi);
                            $("#nama_user").val(response.data.nama_pejabat);
                            $("#jabatan_user").val(response.data.fungsi);
                            $("#no_kbo").val(response.data.no_kbo);
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
        function getPO(){
            $(document).ready(function(){
                var no_po = $("#no_po").val();
                $("#loading_po").show();
                $.ajax({
                    url: "<?= site_url('sp3/get_po') ?>",
                    type: "post",
                    dataType: "json",
                    data: {no_po:no_po},
                    success: function (response) {
                        $("#loading_po").hide();
                        if (response.status){
                            $("#judul_pembayaran").val(response.data.judul_pembayaran);
                            $("#tanggal_po").val(response.data.tanggal_po);
                            $("#gl_account").val(response.data.gl_account);
                            $("#cost_center").val(response.data.cost_center);
                            $("#pemilik_pekerjaan").val(response.data.pemilik_pekerjaan);
                            $("#jabatan").val(response.data.jabatan);
                            $("#nama_perusahaan").val(response.data.nama_perusahaan);
                            $("#nama_bank").val(response.data.nama_bank);
                            $("#no_rek").val(response.data.no_rek);
                        }else{
                            alert(response.message);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $("#loading_po").hide();
                        alert("Error : "+ textStatus);
                        //$('#kelurahan').html('<option value=\"\">Gagal load data</option>');
                    }
                });
            });
        }
</script>