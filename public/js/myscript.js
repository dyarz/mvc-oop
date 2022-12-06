const flashData = $(".pesan").data('data-pesan');
console.log(flashData);

// }
//tombol hapus
$('.tombol-hps').on('click', function (e) {
  e.preventDefault();
  const href = $(this).attr('href');
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  });
});

// // document.querySelector(".tombol-hps").addEventListener('click', function (e) {
// //   e.preventDefault();
// //   console.info(document.querySelector('.tombol-hps'));
// //});
// // $('.tombol-hps').on('click'), function (e) {
// //   e.preventDefault();

// // }