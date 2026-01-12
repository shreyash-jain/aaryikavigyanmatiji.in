@extends('user.app')
@section('styles') 
<link rel="stylesheet" href="{{asset('frontend/assets/graph/codebase/diagram.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/graph/common/index.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/graph/common/diagram.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/graph/common/slider/slider.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/graph/style.css')}}">
<style>
.sample__container {
    height: 450px;
    width: 100% !important;
    overflow: auto;
}
.modal-dialog.dl-modal-sm {
    width: 400px;
}
.modal-body .sidebar__container {
    min-width: 100%;
    width: 75%;
}
.modal-body .sidebar__container img {
    max-width: 100%;
    width: 60%;
    margin-left: 15%;
}
#slider {
  
    width: 70% !important;
}
.custom-container-w {
  
    max-width: 1475px;
}
.custom-title{
	text-align: center;
    font-size: 14px;
    line-height: 20px;
    margin: 0 0 4px 0;
    font-weight: 600;
    color: indianred;
}
</style>
@endsection

@section('content')
	
	<div class="main-body">		
		<section class="wakil-blog-layout section-p-100">
			<div class="container-fluid text-center">
				<h2 class="color-text color-blue mb-25 ds">{{trans('Parampara.guru_parampara')}}</h2>
				<div class="container-lg custom-container-w ">
					<div class="card card-custom gutter-b">
						<div class="card-body">
						<div class="row">
							  <div class="col-sm-3">
								<div class="card mx-4">
								  <div class="card-body">
								   
									<span class="custom-title custom-guru" data-name="आचार्य श्री 108 कुन्द कुन्द स्वामी महाराज जी" data-image="{{asset('frontend/images/aaryika/kundkundswamiji.jpg')}}"  data-url="{{route('aacharya_shri_108_kund_kund_swami_maharaj_ji.index')}}"><b>आचार्य श्री 108 कुन्द कुन्द स्वामी महाराज जी</b> </span>
									 
								  </div>
								</div>
							  </div>
							 <div class="col-sm-3">
								<div class="card mx-4">
								  <div class="card-body">
								   
									<span class="custom-title custom-guru" data-name="आचार्य श्री 108 शांतिसागर महाराज जी" data-image="{{asset('frontend/images/aaryika/shantisagarji.jpg')}}" data-url="{{route('aachary_shri_108_shanti_sagar_maharaj_ji.index')}}" ><b>आचार्य श्री 108 शांतिसागर महाराज जी</b> </span>
									 
								  </div>
								</div>
							  </div>
							  <div class="col-sm-3">
								<div class="card mx-4">
								  <div class="card-body">
								   
									<span class="custom-title custom-guru" data-name="आचार्य श्री 108 वीरसागर महाराज जी" data-image="{{asset('frontend/images/aaryika/veersagarji.jpg')}}" data-url="{{route('aachary_shri_108_veer_sagar_maharaj_ji.index')}}"><b>आचार्य श्री 108 वीरसागर महाराज जी</b> </span>
									 
								  </div>
								</div>
							  </div>
							 <div class="col-sm-3">
								<div class="card mx-4 ">
								  <div class="card-body">
								   
									<span class="custom-title custom-guru" data-name="आचार्य श्री 108 शिवसागर महाराज जी" data-image="{{asset('frontend/images/aaryika/shivsagarji.jpg')}}" data-url="{{route('aachary_shri_108_shiv_sagar_maharaj_ji.index')}}"><b>आचार्य श्री 108 शिवसागर महाराज जी</b> </span>
									 
								  </div>
								</div>
							  </div>
							</div>
							<section class="dhx_sample-controls">
								<div class="dhx_sample-slider__container" id="slider"></div>
							</section>
							<section class="main__container" id="prejjj">
								<div class="sample__container" id="diagram"></div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<div class="modal fade" id="view_records_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" style="z-index: 99999;" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Info</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="sidebar__container">
					<img id="image_graph" src="" alt="">
					<div  class="d-none" id="textDiv">
					</div>
					<span id="name" style="font-weight:500">Name</span>
					
					<span id="mail" style="color:#0288D1; cursor: pointer;">Mail</span>
					<a id="send" class="d-none" href="javascript:void(0)">Send email</a>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>		
<div class="modal fade" id="view_records_modal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" style="z-index: 99999;" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" >Info</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="sidebar__container">
					<img id="image_graph_2" src="" alt="">
					
					<span id="name_2" style="font-weight:800">Name</span>
				
					<a id="send_2"  href="">View Details</a>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>		
@endsection
@section('scripts') 
<link rel="stylesheet" href="{{asset('frontend/assets/graph/style.css')}}">
<script type="text/javascript" src="{{asset('frontend/assets/graph/codebase/diagram.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/graph/common/searchsampledata.js')}}"></script>
<script>

	var medCardShape =<?=json_encode($tree_data)?>;
</script>
<script type="text/javascript" src="{{asset('frontend/assets/graph/common/slider/slider.min.js')}}"></script>

<script>
var default_picture="{{asset('frontend/assets/images/default/big-avatar-19.jpg')}}";
$(document).on('click','.custom-guru',function(){
	var url  = $(this).data('url');
	var name  = $(this).data('name');
	var image  = $(this).data('image');
	$("#name_2").html(name);
	$("#send_2").attr('href',url);
	$("#image_graph_2").attr('src',image);
	//$("#image_graph_2").attr('src',default_picture);
	$('#view_records_modal2').modal('show');
});
function printDiv() {
     var printContents = document.getElementById('prejjj').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
			function tickTemplate(v) {
				return v;
			}

			var slider = new dhx.Slider("slider", {
				min: 0.4,
				max: 1,
				tooltip: false,
				step: 0.05,
				tick: 1,
				majorTick: 2,
				value: 0.7,
				tickTemplate: tickTemplate
			});

			var diagram;

			function largeTemplate(config) {
				var textClass= getMessage();
				console.log(config);
				var template = '<section class="template">';
					
					if(config.is_photo==1){
						 var style="";
						if(config.id !="main"){
							//template += '<div class="template_container template_img-container" style="'+style+'" >';
							//template += '<img src="'+ config.photo +'" alt="'+ config.name + "-" + config.job_title_name +'"></img>';
							//template += '</div>';
						}
					}else{
						if(config.id !="main"){
							//template += '<div style="width: 60px;" class="symbol symbol-40  symbol-light-'+textClass+' symbol-sm flex-shrink-0"><span class="symbol-label font-size-h4 font-weight-bold">E</span></div>';
						}
					}
					
					if(config.id =="main"){
					 var style="height: auto;";
					}
					template += '<div class="template_container" style="'+style+'" >';
					if(config.id =="main" && config.is_photo==1){
						//template += '<img src="'+ config.photo +'" alt="" style="max-width:100%; max-height: 65%;width:50%;" ></img>';
					}
					var style="color: "+config.color;
					template += '<h3 class="text-center" style="'+style+'">'+ config.name +'</h3>';
					
					/*if(config.id !="main"){
						
						template += '<span>';
						template += '<img class="template_icon" src="public/assets/custom/graph/img/work_phone.png" alt="phone number"></img>';
						template += '<p>'+ config.work_phone +'</p>';
						template += '</span>';
						if(config.publish_mobile_orgchart==1){
							template += '<span>';
							template += '<img class="template_icon" src="public/assets/custom/graph/img/cellphone-android.svg" alt="phone number"></img>';
							template += '<p>'+ config.mobile_phone +'</p>'; 
							template += '</span>';
						}
						template += '<span>';
						template += '<img class="template_icon" src="public/assets/custom/graph/img/email-outline.svg" alt="email"></img>';
						template += '<a style="color:#0288D1" href="mailto:'+ config.mail +'" target="_blank">'+ config.mail +'</a> ';
						template += '</span>';
					}*/
					template += '</div>';
					template += '</section>';
				return template;
			}
			var messages = ["primary", "success","dark","danger", "warning", "dark","primary","success","info"];
			function getMessage() {
			   return messages[Math.floor(Math.random() * messages.length)];
			} 
			function mediumTemplate(config) {
				//console.log(config);
				var textClass= getMessage();
				var template = '<section class="template">';
				if(config.is_photo==1){
						//template += '<div class="template_container template_img-container-medium">';
						//template += '<img src="'+ config.photo +'" alt=""></img>';
						//template += '</div>';
					}else{
						if(config.id !="main"){
							//template += '<div class="template_container template_img-container-medium">';
							//template += '<div class="symbol symbol-40  symbol-light-'+textClass+' symbol-sm flex-shrink-0"><span class="symbol-label font-size-h4 font-weight-bold">E</span></div>';
							//template += '</div>';
						}
					}
					
					var style="color: "+config.color;
					template += '<div class="template_container">';
					template += '<h3 style="'+style+'">'+ config.name +'</h3>';
				
					template += '</div>';
					template += '</section>';
				return template;
			}

			function smallTemplate(config) {
				var style="color: "+config.color;
				var template = '<section class="template">';
					template += '<div class="template_container">';
					template += '<h3 style="'+style+'" >'+ config.name +'</h3>';
					template += '</div>';
					template += '</section>';
				return template;
			}

			var largeDefaults = {
				width: 330,
				height: 140
			};

			var mediumDefaults = {
				width: 200,
				height: 68
			};

			var smallDefaults = {
				width: 200,
				height: 44
			};

			var person;

			function getInfo(person) {
				var color = person.color;
				
				var textClass= getMessage();
				var image = document.querySelector("#image_graph");
				var name = document.querySelector("#name");
				var post = document.querySelector("#post");
				var phone = document.querySelector("#phone");
				var mobile_no = document.querySelector("#mobile_no");
				var mail = document.querySelector("#mail");
				var department = document.querySelector("#department");
				var staff_member = document.querySelector("#staff_member");
				$('#view_records_modal').modal('show');
				
				$('#mail').removeClass('d-none');
				$('#mobile_no').removeClass('d-none');
				$('#phone').removeClass('d-none');
				$('#send').addClass('d-none');
				$('#department').removeClass('d-none');
				$('#staff_member').addClass('d-none');
				var send = document.querySelector("#send");
				//console.log(person);
				if(person.publish_mobile_orgchart==0){
					$('#mobile_no').addClass('d-none');	
				}else{
					$('#mobile_no').removeClass('d-none');	
				}
				if(person.is_photo==0){
					//$('#textDiv').removeClass('d-none');
					$('#image_graph').addClass('d-none');
					//$('#textDiv').html('<div class="symbol symbol-80  symbol-light-'+textClass+' symbol-sm flex-shrink-0 "><span class="symbol-label font-size-h4 font-weight-bold" id="textDivContent">'+person.shortname+'</span></div>');
					$('#textDiv').html('<div class="symbol symbol-80  symbol-light-'+textClass+' symbol-sm flex-shrink-0 "><span class="symbol-label font-size-h4 font-weight-bold" id="textDivContent">'+person.shortname+'</span></div>');
				}else{
					$('#textDiv').addClass('d-none');	
					$('#image_graph').removeClass('d-none');	
				}
				name.innerHTML = "<b>"+person.name + "</b>";
			
				//if(person.row_id !="main"){
				   
					$("#post").css('white-space','nowrap');
					mail.innerHTML ="<a class='send-email-link' target='_blank' href ="+person.mail+" >View Details</a>";
					
				//}else{
					name.innerHTML = "<b>" +person.name+"</b>";
					$('#staff_member').removeClass('d-none');
					$("#post").css('white-space','unset');
					//staff_member.innerHTML ="<b>Active Staffs:</b> ";
					
					
					
					//$('#mail').addClass('d-none');
					$('#mobile_no').addClass('d-none');
					$('#phone').addClass('d-none');
					$('#send').addClass('d-none');
					$('#department').addClass('d-none');
					
					
					
				//}
				$('[data-toggle="popover"]').popover();
				//birthday.innerHTML = "Birthday: " + person.birthday;
				//start.innerHTML = "Start work: " + person.start + "";
				send.href = person.mail + "";
				image.src = person.img + "";
				image.alt = person.name + "-" + person.job_title_name + "";
			}


			
			function createDiagram(config) {
				diagram = new dhx.Diagram("diagram", {
					type: "org",
					defaultShapeType: "template",
					scale: config.scale
				});

				diagram.addShape("template", {
					template: config.template,
					defaults: config.defaults
				});

				medCardShape.forEach(function(item) {
					item.width = config.defaults.width;
					item.height = config.defaults.height;
				});

				diagram.data.parse(medCardShape);

				diagram.events.on("ShapeClick", function(id) {
					diagram.selection.add(id);
					person = diagram.data.getItem(id); 
				//	console.log('midimus'); console.log(person);
					getInfo({
						name: person.name?person.name:'NA',
						color: person.color?person.color:'',
						img: person.photo,
						is_photo: person.is_photo,
						row_id: person.id,
						mail: person.link,
					});
				});
			}

			function changeTemplate(scale) {
				var selectionItem = diagram.selection.getItem();
				if (diagram) {
					diagram.destructor();
				}
				switch (true) {
					case scale >= 0.8:
						createDiagram({
							defaults: largeDefaults,
							template: largeTemplate,
							scale: scale
						});
						break;
					case scale <= 0.8 && scale >= 0.6:
						createDiagram({
							defaults: mediumDefaults,
							template: mediumTemplate,
							scale: scale
						});
						break;
					case scale <= 0.6:
						createDiagram({
							defaults: smallDefaults,
							template: smallTemplate,
							scale: scale
						});
						break;
				}
				diagram.selection.add(selectionItem.id);
			}

			slider.events.on("Change", function(value) {
				changeTemplate(value);
			});

			createDiagram({
				defaults: mediumDefaults,
				template: mediumTemplate,
				scale: 0.7
			});

		//	diagram.selection.add("main");

			//person = diagram.data.getItem("main");

			getInfo({
				name: person.name?person.name:'NA',
				color: person.color?person.color:'',
				img: person.photo,
				is_photo: person.is_photo,
				row_id: person.id,
				mail: person.link,
			});
			$(function () {
			$('[data-toggle="popover"]').popover()
		});
		</script>
	@endsection	