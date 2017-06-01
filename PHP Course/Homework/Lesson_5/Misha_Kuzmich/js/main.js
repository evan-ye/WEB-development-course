function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};

$(document).ready(function() {
	var valid = false;
	var validEmail = false;
	var regular = {
		"firstname": {
			reg: /^[а-яА-ЯЇїЄєЁёa-zA-Z\s\.]{1,}$/,
			msg: "Пожалуйста, укажите имя без спецсимволов длинной от 1 символа."
		},
		"secondname": { 
			reg : /^[а-яА-ЯЇїЄєЁёa-zA-Z\.]{1,}$/u,
			msg : "Пожалуйста, укажите фамилию без спецсимволов длинной от 1 символа."
		},
		"email": {
			reg : /^([a-zA-Z0-9_-]+\.)*[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\.[a-zA-Z]{2,6}$/,
			msg : "Пожалуйста, проверьте правильность указаного вами email."
		}
	}
	var checkEmail = debounce(function() {
		$('.email_status').css('display','none')
		if(regular.email.reg.test($('#email').val())){
			$.post('../scripts/checkEmail.php', {email : $('#email').val()}, function(data) {
				data = JSON.parse(data);
				status = data.status;
				if(status === "fail"){
					validEmail = false;
					showMsg('Извините, но такой адрес уже зарегестрирован.');
					$('.email_status').html('<div class="exist"></div>');
					$('.email_status').css('display','block');
				}
				else{
					validEmail = true;
					$('.email_status').html('<div class="new"></div>');
					$('.email_status').css('display','block');
				}
			});
		}
	}, 50);
	$('#email').keyup(checkEmail);
	$('.submit_button').on('click', function(e) {
		e.preventDefault();
		
		$(this).parent('form').find('.form__input').each(function(i) {
			let name = $(this).attr('name');
			let val = $(this).val();
			let reg = regular[name].reg;
			let result = reg.test(val);

			if(result === false){
				wrong(name);
				valid = false;
				return false;
			}
			valid = true;
		});
		if(valid == true && validEmail == false){
			$('#email').select();
			console.log(validEmail);
			showMsg('Извините, но такой адрес уже зарегестрирован.');
			return false;
		}
		if(valid && validEmail){
			$.ajax({
				url: '../scripts/reg.php',
				type: 'POST',
				data: $('form').serialize(),
			})
			.done(function(data) {
				$('.email_status').css('display','none');
				data = JSON.parse(data);
				var status = data.status;
				var msg = data.msg;
				valid = false;
				validEmail = false;

				showMsg(msg,status);
				console.log(data);
				$('form').trigger('reset');
				document.activeElement.blur();	
			})
			.fail(function() {
				alert("error");
			})
		}
	});

	function wrong(name) {
		$('input[name=' + name + ']').select();
		showMsg(regular[name].msg);
	}
	function showMsg(text, type="fail") {
		switch(type) {
			case "ok":
			$('.infobox').html('<div class=msg>' + text + "</div>");
			break;
			case "fail":
			$('.infobox').html('<div class=error>' + text + "</div>");
			break;
		}
		setTimeout(function() {$('.infobox').html('')},3000);
	}
});