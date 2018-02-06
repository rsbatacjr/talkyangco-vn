$(document).ready(function(e){
	var dormitorytype = "",
		purpose = "";

console.log('loaded');
	$('input[name=dormitorytype]').change(function(e) {
		if($(this).val() == '기타') {
			$('#dormitorytypeother').toggleClass('hidden', false);
                        $('#dormitorytypeother').focus();
		} else {
			$('#dormitorytypeother').toggleClass('hidden', true);
		}
	});

	$('input[name=purpose]').change(function(e) {
		if($(this).val() == '기타') {
			$('#purposeother').toggleClass('hidden', false);
			$('#purposeother').focus();
		} else {
			$('#purposeother').toggleClass('hidden', true);
		}
	});

	$('#send-consultation').on("click", function(e){
		dormitorytype = $('input[name=dormitorytype]:checked').val();
		dormitorytype = (dormitorytype == "기타" ? $('#dormitorytypeother').val(): dormitorytype);

		purpose = $('input[name=purpose]:checked').val();
		purpose = (purpose == "기타" ? $('#purposeother').val(): purpose);

		$.ajax({
			url: adminajax,
			type: "POST",
			data: {
				action: 'post_consultation_online',
				studentname: $('#studentname').val(),
				englishname: $('#englishname').val(),
				email: $('#email').val(),
				country: $('#country').val(),
				phone: $('#phone').val(),
				gender: $('input[name=gender]:checked').val(),
				age: $('#age').val(),
				program: $('#program').val(),
				dormitorytype: $('input[name=dormitorytype]:checked').val(),
				purpose: $('input[name=purpose]:checked').val(),
				currentenglevel: $('#currentenglevel').val(),
				budget: $('#budget').val(),
				learningexperience: $('input[name=learningexperience]:checked').val(),
				trainingperiod: $('#trainingperiod').val(),
				others: $('#others').val()
			},
			success: function(e) {
				alert(e);
				window.location.reload();
			}
		})
	})

	$('#send-application').on("click", function(e){
		dormitorytype = $('input[name=dormitorytype]:checked').val();
		dormitorytype = (dormitorytype == "기타" ? $('#dormitorytypeother').val(): dormitorytype);
console.log('click send application');
		$.ajax({
			url: adminajax,
			type: "POST",
			data: {
				action: 'post_online_registration',
				studentname: $('#studentname').val(),
				englishname: $('#englishname').val(),
				email: $('#email').val(),
				country: $('#country').val(),
				phone: $('#phone').val(),
				gender: $('input[name=gender]:checked').val(),
				age: $('#age').val(),
				program: $('#program').val(),
				dormitorytype: $('input[name=dormitorytype]:checked').val(),
				purpose: $('input[name=purpose]:checked').val(),
				currentenglevel: $('#currentenglevel').val(),
				budget: $('#budget').val(),
				learningexperience: $('input[name=learningexperience]:checked').val(),
				trainingperiod: $('#trainingperiod').val(),
				others: $('#others').val()
			},
			success: function(e) {
				alert(e);
				window.location.reload();
			}
		})
	})
});
