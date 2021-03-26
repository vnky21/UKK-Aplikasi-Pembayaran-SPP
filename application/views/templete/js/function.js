 var BASE_URL = "<?php echo base_url();  ?>"

  /////////// Petugas  ////////////////////
  $(function(){

            $('.edit-petugas').on('click',function(){
         
                const id = $(this).attr('id');

              $.ajax({
                url : '/petugas/getJsonPetugas',
                data : {id : id},
                method : 'post',
                dataType : 'json',
                success : function(data){
                    $('#edit-petugas').modal('show');
                    $('#id_petugas').val(data.id_petugas);
                    $('#nama_petugas').val(data.nama_petugas);
   
                    
                }

              });
       

            });

        });

    /////////// Jurusan  ////////////////////
  $(function(){

            $('.edit-jurusan').on('click',function(){
         
                const id = $(this).attr('id');

              $.ajax({
                url : '/jurusan/getJsonJurusan',
                data : {id : id},
                method : 'post',
                dataType : 'json',
                success : function(data){
                    $('#edit-jurusan').modal('show');
                    $('#id_jurusan').val(data.id_jurusan);
                    $('#jurusan').val(data.jurusan);
   
                    
                }

              });
       

            });

        });

      /////////// Kelas  ////////////////////
  $(function(){

            $('.edit-kelas').on('click',function(){
         
                const id = $(this).attr('id');

              $.ajax({
                url :  BASE_URL+'/kelas/getJsonKelas',
                data : {id : id},
                method : 'post',
                dataType : 'json',
                success : function(data){
                    $('#edit-kelas').modal('show');
                    $('#id_kelas').val(data.id_kelas);
                    $('#nama_kelas').val(data.nama_kelas);
                    $('#id_jurusan').val(data.id_jurusan).selectric('refresh');
                      
                }

              });
       

            });

        });


        /////////// Kelas  ////////////////////
  $(function(){

            $('.edit-spp').on('click',function(){
         
                const id = $(this).attr('id');

              $.ajax({
                url : '/spp/getJsonSpp',
                data : {id : id},
                method : 'post',
                dataType : 'json',
                success : function(data){
                    $('#edit-spp').modal('show');
                    $('#id_spp').val(data.id_spp);
                    $('#tahun').val(data.tahun);
                    $('#nominal_bulan_edit').val(data.nominal_bulan);
                    $("#nominal_bulan_edit").unmask().mask('000.000.000.000.000', {reverse:true});
                    
                      
                }

              });
       

            });

        });