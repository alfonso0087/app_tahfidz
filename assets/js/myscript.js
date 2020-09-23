const flashData = $('.flash-data').data('flashdata');
const title = $('.flash-data').data('title');

// sweetalert data
if (flashData) {
	Swal.fire({
		title: title,
		text: flashData,
		icon: 'success'
	})
}


// sweetalert tombol hapus
$('.tombol-hapus').on('click', function (e) {
	const data = $(this).attr('namaData')
	const tipeData = $(this).attr('tipeData')
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Hapus ' + title + '?',
		text: 'Yakin hapus ' + tipeData + ' ' + data + '?',
		icon: 'question',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Batal',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});
