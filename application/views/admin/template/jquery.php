<!-- DataTables Export Buttons -->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css">
<script src="<?= base_url() ?>assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>



<script type="text/javascript">
     $(document).ready(function() {
        var max = 20;
        var cnt = 1;
        $(".add-textbox").on("click", function(e){
            e.preventDefault();
            if(cnt < max){
                cnt++;
                $(".textbox-wrapper").append(
                    '<div class="baru">' +
                    '<hr><div class="item form-group">'+
                        '<label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Nama Undangan <span class="required">*</span>'+
                        '</label>'+
                        '<div class="col-md-10 col-sm-6 ">'+
                            '<input type="text" placeholder="Nama" id="namaundangan" name="namaundangan[]" required="required" class="form-control" data-parsley-id="5" autofocus>'+
                        '</div>'+
                    '</div>'+
                    '<div class="item form-group">'+
                    '<label class="col-form-label col-md-2 col-sm-3 label-align" for="first-name">Alamat <span class="required">*</span>'+
                        '</label>'+
                        '<div class="col-md-10 col-sm-6 ">'+
                            '<input type="text" placeholder="Alamat Tujuan" id="alamat" name="alamat[]" required="required" class="form-control" data-parsley-id="5">' +
                        '</div>'+
                    '</div></div>');
            }
        });
       
        $(".textbox-wrapper").on("click",".remove-textbox", function(e){
            e.preventDefault();
            $(this).parents(".input-group").remove();
            cnt--;
        });
    });
	 $(document).ready(function(){
	 	var dtable1=$("#datatable1").DataTable({
            // scrollX: true,
            // dom: 'Bfrtip',
            // responsive: true,
	 	});
	 	$("#tanggal1").datetimepicker({
	 		format: 'YYYY/MM/DD'
	 	});
	 	$("#tanggal2").datetimepicker({
	 		format: 'YYYY/MM/DD'
	 	});

	 	$("#select2").select2();

	 });
    function simpan(){
        NProgress.start();
        var data = $("#pernikahanform").serialize();
        var url = "<?= base_url('myadmin/simpanundangan') ?>";
        console.log(data);
        $.ajax({
            type: "POST",
            url: url,
            dataType: 'json',
            data: data,
            success: function(data) {
                console.log(data);
                NProgress.done();
                if (data == 1){
                    new PNotify({
                      title: 'Simpan Berhasil',
                      text: 'Bisa lanjut menambah atau mau lihat di data anda!',
                      type: 'success',
                      styling: 'bootstrap3'
                  });
                    // $(".simpanbutton").attr("disabled", "disabled").button('refresh');
                    $("#pernikahanform")[0].reset();
                    $(".baru").remove();
                }
                else{
                    new PNotify({
                        title: 'Oh No!',
                        text: 'Something terrible happened.',
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                }
                
            }
        });
    }
    function hapus(id, nama){
        $("#ucapandari").html(nama);
        $("#id_ucapan").val(id);
        $("#delete-modal").modal();
    }
	function showdatapernikahan(){
	 	let tanggal1 = $("#tanggal1").val();
	 	let tanggal2 = $("#tanggal2").val();
	 	NProgress.start();
	 	$.ajax({
	        url : "<?= base_url() ?>/myadmin/ajaxgetpernikahan",
	        data : {tanggal1:tanggal1, tanggal2:tanggal2},
	        type : 'GET',
	        success: function(data){
	            console.log(data);
		        
			        var listdata = data.listdata; 
			        var a = "";
			        for (let i = 0; i < listdata.length; i++) {
					        var d = listdata[i];
				        a += `
				            <tr id="row"> 
				              <td>${d.id_pernikahan}</td>  
				              <td>${d.uri_2}</td>  
				              <td>${d.nama_p}</td>
				              <td>${d.nama_l}</td>
				              <td>${d.tgl_akad}</td>
				              <td>${d.tgl_resepsi}</td>
				              <td></td>
				            </tr>
				        `;
				     }
        
        		$("#datatable1").dataTable().fnDestroy();
		        $('#pernikahanlist').empty();
		        $('#pernikahanlist').append(a);
		        $("#datatable1").DataTable({
		            paging: false,
		            scrollX: true,
		            "order": [[ 0, "desc" ]],
		            
		        });
		        NProgress.done();
        	},
	        error : function (data) {
	            loading('outletrecord-loading');
	            alert("ERROR");
	        }
    	});
	}

</script>