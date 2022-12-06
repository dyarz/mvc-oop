$(function () {
  $(".tombolTambahData").on('click', function () {
    $('#exampleModalLabel').html("Form Tambah Data Mahasiswa");
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('.modal-body form').attr('action', 'http://localhost/mvc-oop/public/mahasiswa/tambah');

  });
  $('.tampilModalUbah').on('click', function () {
    $('#exampleModalLabel').html("Form Ubah Data Mahasiswa");
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/mvc-oop/public/mahasiswa/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/mvc-oop/public/mahasiswa/getubah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#nim').val(data.nim);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
        $('#id').val(data.id);
      }
    });

  });
});