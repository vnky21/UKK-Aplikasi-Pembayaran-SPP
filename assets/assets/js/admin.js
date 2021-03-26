    $(document).ready(function(){

      $('.uang').mask('000.000.000.000.000', {reverse:true});
      $('.telepon').mask('000 000 000 0000', {reverse:true});
      $('.nisn').mask('000 000 0000', {reverse:true});


    });

      $('.tambah-siswa').on('click',function(){

            $('.telepon').unmask();
            $('.nisn').unmask();

      });