<script type="text/javascript">

	//untuk load datatable

	$(document).ready(function(){
		//untuk notifikasi berhasil save data
		var flag_save_barang = "{{ Session::get('s') }}";
		if (flag_save_barang == 1) {
			swal({
				type: 'success',
				title: 'Sukses!',
				text: 'Data barang berhasil ditambahkan',
				confirmButtonColor: '#3085d6',
				confirmButtonText: 'Oke'
			});
		}
	}); //untuk penutup fungsi yang berjalan saat halaman reload

</script>