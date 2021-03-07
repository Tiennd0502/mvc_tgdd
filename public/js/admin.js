$(function(){
	var inforGenerals = [
	"Name", "Avatar", "Icon",
	"Trademarks", "Library", "Price", "Gift",
	"Discount", "Active", "Hot",
	"Screen","HDH", "CPU", "RAM", "Image_hot",
	"InternalMemory", "Description", "Carousel",
	"Installment"
	];
	var inforMobiles = [	
	"RearCamera", "FrontCamera", "MemoryStick",
	"SIM" , "Battery"
	];
	var inforTablets = [
	"RearCamera", "FrontCamera", "PortConnect",
	"SIM", "Size"
	]	;
	var inforLaptops = [
	"GraphicCard", "PortConnect", "Design",
	"Size", "LaunchTime"
	];
	var inforPC_Printer	= [
	"GraphicCard", "PortConnect", "OpticalDrive",
	"Name", "Avatar",
	"Avatar", "Price", "Discount",
	"GraphicCard", "PortConnect", "OpticalDrive",
	"MachineType", "Function", "Wattage",
	"PrintSpeed","PrintingLife", "PrintQuality", 
	"FirstPage","InkTypes",  "InternalMemory",
	"PortConnect","Trademarks",
	];
	var inforInkTypes = [
	"Name", "Avatar",
	"Avatar", "Price", "Discount",
	"WhereProduction", "Trademarks",
	"PrinterCompatibility", "MaxPrinterPage"
	];
	var inforFWatchs	= [
	"Name", "Trademarks", "Icon","Library", 
	"Avatar", "Price", "Discount", "Gift",
	"Hot", "Active", "FaceDiameter",
	"FaceMaterial", "FrameMaterial","WireMaterial", 
	"WireWidth", "Utilities", "Waterproof", 
	"BatteryLifeTime", "ObjectUser", "Description"
	];
	var inforSWatchs  = [
	"Name", "Trademarks", "Icon","Library", "Carousel", 
	"Avatar", "Price", "Discount", "Gift",
	"Hot", "Active", "Screen","GraphicCard", "HDH", "FaceDiameter",
	"FaceMaterial", "PortConnect", "Utilities", 
	"BatteryLifeTime", "Description",
	];
	$("#categoryId").change(function() {
		var categoryId = $(this).val();
		$.post("./Ajax/ViewTrademark",{id: categoryId}, function (data) {
			var text = "";
			var data = JSON.parse(data);
			for (var item in data) {
				text += "<option value='" + data[item]["id"] + "'>"+ data[item]["name"] + "</option>";
			}
			$("#Trademarks").html(text);
		});
		// $(this).parent().nextAll().hide();
		$(this).parent().nextAll().removeClass('d-block');
		$(this).parent().nextAll().addClass('d-none');
		switch (categoryId) {
			case "1":	
			inforGenerals.forEach(function(currentValue){
				var temp = "#"+ currentValue;
				  // $(temp).parent().show();
				  $(temp).parent().addClass('d-block');
				  $(temp).parent().removeClass('d-none');
				})
			inforMobiles.forEach(function(currentValue){
				var temp = "#"+ currentValue;
				  // $(temp).parent().show();
				  $(temp).parent().addClass('d-block');
				  $(temp).parent().removeClass('d-none');
				})
			break;
			case "2":	
			inforGenerals.forEach(function(currentValue){
				var temp = "#"+ currentValue;
				  // $(temp).parent().show();
				  $(temp).parent().addClass('d-block');
				  $(temp).parent().removeClass('d-none');
				})
			inforLaptops.forEach(function(currentValue){
				var temp = "#"+ currentValue;
				  // $(temp).parent().show();
				  $(temp).parent().addClass('d-block');
				  $(temp).parent().removeClass('d-none');
				})
			break;
			case "3":
			inforGenerals.forEach(function(currentValue){
				var temp = "#"+ currentValue;
				  // $(temp).parent().show();
				  $(temp).parent().addClass('d-block');
				  $(temp).parent().removeClass('d-none');
				})
			inforTablets.forEach(function(currentValue){
				var temp = "#"+ currentValue;
				  // $(temp).parent().show();
				  $(temp).parent().addClass('d-block');
				  $(temp).parent().removeClass('d-none');
				})
			break;
			case "4":
        // inforGenerals.forEach(function(currentValue){
        //   var temp = "#"+ currentValue;
        //   // $(temp).parent().show();
        //   $(temp).parent().addClass('d-block');
        //   $(temp).parent().removeClass('d-none');
        // })
        // inforTablets.forEach(function(currentValue){
        //   var temp = "#"+ currentValue;
        //   // $(temp).parent().show();
        //   $(temp).parent().addClass('d-block');
        //   $(temp).parent().removeClass('d-none');
        // })
        // break;
        break;
        case "5":
        inforFWatchs.forEach(function(currentValue){
        	var temp = "#"+ currentValue;
          // $(temp).parent().show();
          $(temp).parent().addClass('d-block');
          $(temp).parent().removeClass('d-none');
        })
        break;
        case "6": 
        inforSWatchs.forEach(function(currentValue){
        	var temp = "#"+ currentValue;
          // $(temp).parent().show();
          $(temp).parent().addClass('d-block');
          $(temp).parent().removeClass('d-none');
        })
        break;
        case "7":	
        inforPC_Printer.forEach(function(currentValue){
        	var temp = "#"+ currentValue;
          // $(temp).parent().show();
          $(temp).parent().addClass('d-block');
          $(temp).parent().removeClass('d-none');
        })
        break;
        default:
        break;
      }
    });

	// $("#Avatar").change(function() {
	// 	var file = this.files[0];
	// 	var fileType = file.type;
	// 	var fileSize = file.size;
	// 	var checkType = /(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF)$/i;
	// 	$("#pathAvatar").val($(this).val());
	// 	if(!checkType.exec(fileType)){
	// 		$("#messageAvatar").addClass('text-danger');
	// 		$("#messageAvatar").html("Chỉ upload file có định dạng: jpg, jpeg, png, gif");
	// 		this.value = '';

	// 		$("#submitProduct").prop("disabled", true);
	// 		return false;
	// 	}
	// 	if(fileSize > 2*1024*1024){
	// 		$("#messageAvatar").addClass('text-danger');
	// 		$("#messageAvatar").html("Vui lòng chọn file dưới 2MB");
	// 		this.value = '';
	// 		$("#submitProduct").prop("disabled", true);
	// 		return false;
	// 	}else {
	// 		$("#submitProduct").prop("disabled", false);
	// 		$("#messageAvatar").addClass('text-success');
	// 		$("#messageAvatar").html("File hợp lệ");
	// 	}		
	// });
	// $("#Library").change(function () {
	// 	var result = true;
	// 	var file = this.files;
	// 	for (var i = 0; i < file["length"]; i++) {
	// 		var fileType = file[i].type;
	// 		var fileSize = file[i].size;
	// 		var checkType = /(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF)$/i;
	// 		$("#pathLibrary").val($(this).val());
	// 		if(!checkType.exec(fileType)){
	// 			$("#messageLibrary").addClass('text-danger');
	// 			$("#messageLibrary").html("Chỉ upload file có định dạng: jpg, jpeg, png, gif");
	// 			result = false;
	// 			$("#submitProduct").prop("disabled", true);
	// 			break;
	// 		}
	// 		if(fileSize > 2*1024*1024){
	// 			$("#messageLibrary").addClass('text-danger');
	// 			$("#messageLibrary").html("Vui lòng chọn những file dưới 2MB");
	// 			result = false;
	// 			$("#submitProduct").prop("disabled", true);
	// 			break;
	// 		}	
	// 	}
	// 	if (result == true) {
	// 		$("#submitProduct").prop("disabled", false);
	// 		$("#messageLibrary").removeClass('text-danger');
	// 		$("#messageLibrary").addClass('text-success');
	// 		$("#messageLibrary").html("File hợp lệ");
	// 	};
	// })

	$(".js-image-item").on('change', function() {
		if ($(this).val() != '') {
			$(this).parent().prev('li.img-box').addClass('d-none');
      // nó thay dổi
      // lấy data-edit truỳen cho input
      // chi tiết
      // let parent = $(this).parent().prev('li.img-box');
      // let iconClose = parent.children('.icon-close');
      // let link = iconClose.data('edit');
      // let inputLink = parent.children('input');
      // inputLink.val(link);
      // console.log(inputLink.val());
      // cách ngắn nhất
      $(this).parent().prev('li.img-box').children('input').val($(this).parent().prev('li.img-box').children('.icon-close').data('edit'));
      // console.log($(this).parent().prev('li.img-box').children('input').val());

      let fileSelected = this.files;
      if (fileSelected.length > 0) {
      	let fileToLoad = fileSelected[0];
      	let fileReader = new FileReader();
      	let img = $(this).next().next();
      	fileReader.onload = function(fileLoaderEvent) {
      		let srcData = fileLoaderEvent.target.result;
      		img.attr('src', srcData);
      	}
      	fileReader.readAsDataURL(fileToLoad);
      }
      $(this).parent().removeClass('d-none');
    }
  });
  // delete image attach
  $('.icon-close').on('click', function() {
  	$(this).parent().addClass('d-none');

  	$(this).next().attr('src', '');
  	if ($(this).is('[data-edit]')) {
  		$(this).prev('input').val($(this).data('edit'))
  	}
  	console.log('hello');
  });
	// insert-img
	$('.js-insert-attach').on('click', function() {
		let insertNames = $(this).data('name');
		let lasting = $('#attach-view-' + insertNames + ' li').last().prev().find('input[type="file"]').val();
		if (lasting != "") {
			let date = new Date();
			let time = date.getTime();
			let _html = '<li class="img-box d-none" id="' + insertNames + time + '">';
			_html += '<input type="file" name="' + insertNames + '[]" multiple="multiple" class="form-control showImage d-none" data-time="' + time + '" data-name="' + insertNames + '" >';
			_html += '<input type="hidden" name="delete_' + insertNames + '[]">';
			_html += '<span class="icon-close" data-id="' + insertNames + time + '">';
			_html += '<i class="fas fa-times-circle"></i></span>';
			_html += '</li>';
			let insertAttach = $("#insert-attach-" + insertNames);
			insertAttach.before(_html);
			$('#attach-view-' + insertNames + ' li').last().prev().find('input[type="file"]').click();
		} else {

			if (lasting == "") {
				$('#attach-view-' + insertNames + ' li').last().prev().find('input[type="file"]').click();
			};
		};

		$('.showImage').on('change', function() {
			if (lasting != '') {
				let insertNames = $(this).data('name');
				let time = $(this).data('time');
				let fileSelected = this.files;
				let length = fileSelected.length;
				for (const key in fileSelected) {
					if (key == 0) {
						let fileToLoad = fileSelected[key];
						let fileReader = new FileReader();
						fileReader.onload = function(fileLoaderEvent) {
							let srcData = fileLoaderEvent.target.result;
							let newImg = document.createElement("img");
							newImg.src = srcData;
							$("#" + insertNames + time).append(newImg.outerHTML);
						}
						fileReader.readAsDataURL(fileToLoad);
						if (length == 1) {
							break;
						}
					} else {
						let lastModified = fileSelected[key]['lastModified'];
						let _html = '<li class="img-box " id="' + insertNames + lastModified + '">';
						_html += '<span class="icon-close" data-key="' + key + '" data-parent="' + insertNames + time + '">';
						_html += '<i class="fas fa-times-circle"></i></span>';
						_html += '</li>';
						let insertAttach = $("#insert-attach-" + insertNames);
						insertAttach.before(_html);
						let fileToLoad = fileSelected[key];
						let fileReader = new FileReader();
						fileReader.onload = function(fileLoaderEvent) {
							let srcData = fileLoaderEvent.target.result;
							let newImg = document.createElement("img");
							newImg.src = srcData;
							$("#" + insertNames + lastModified).append(newImg.outerHTML);
						}
						fileReader.readAsDataURL(fileToLoad);
						if (key == length - 1) {
							break;
						}
					}
				}
				$(this).parent().removeClass('d-none');
			}
			$('.icon-close').off('click').on('click', function() {
				if ($(this).is('[data-key]') && $(this).is('[data-parent]')) {
					let key = $(this).data('key');
					let parent = $(this).data('parent');
					if ($('#' + parent).length) {
						let rootDel = $('#' + parent).children('input[type=hidden]:first');
						let rootFile = $('#' + parent).children('input[type=file]:first')[0].files;
						console.log(rootFile);
						if (rootDel.val() == '') {
							rootDel.val(rootFile[key].name);
						} else {
							rootDel.val(rootDel.val() + ',' + rootFile[key].name);
						}
						$(this).parent().remove();
						let arrDeleteRoot = rootDel.val().split(',');
						if (arrDeleteRoot.length == rootFile.length) {
							console.log('hủy toàn bộ với click k file');
							$('#' + parent).remove();
						}
						console.log(rootDel.val());
					}
				} else {
					if ($(this).is('[data-id]')) {
						let id = $(this).data('id');
						if ($('#' + id).length) {
							let checkFiles = $('#' + id + ' > input:first')[0].files;
							let deleteName = $(this).prev('input[type=hidden]');
							if (checkFiles.length == 1) {
								$(this).parent().remove();
							} else {
								if (deleteName.val() == '') {
									deleteName.val(checkFiles[0].name);
								} else {
									deleteName.val(deleteName.val() + ',' + checkFiles[0].name);
								}
								$(this).parent().addClass('d-none');
                                // kiểm tra khi hủy file các file đã chọn 
                                let arrDelete = deleteName.val().split(',');
                                if (arrDelete.length == checkFiles.length) {
                                	console.log('hủy toàn bộ với click có file');
                                	$(this).parent().remove();
                                }
                              }
                            }
                          }
                        }

                      })
		});

    // $('.icon-close').on('click', function() {
    //     console.log('hello');
    // if ($(this).is('[data-id]')) {
    //     let id = $(this).data('id');
    //     if ($('#' + id).length) {
    //         let checkFiles = $('#' + id + ' > input:first')[0].files;
    //         let deleteName = $(this).prev('input[type=hidden]');
    //         if (checkFiles.length == 1) {
    //             $(this).parent().remove();
    //         } else {
    //             if (deleteName.val() == '') {
    //                 deleteName.val(checkFiles[0].name);
    //             } else {
    //                 deleteName.val(deleteName.val() + ',' + checkFiles[0].name);
    //             }
    //             $(this).parent().addClass('d-none');
    //             // kiểm tra khi hủy file các file đã chọn 
    //             let arrDelete = deleteName.val().split(',');
    //             if (arrDelete.length == checkFiles.length) {
    //                 console.log('hủy toàn bộ với click có file');
    //                 $(this).parent().remove();
    //             }
    //         }
    //     }
    // }
    // })
  });

})