$(document).ready(function() {
	// кнопка "заказать обратный звонок"
	$('.actionOpenFormCall').click(function() {
		var form = $('#form-popup form');
		form.find('textarea').removeAttr('data-req').hide();
		form.find('.form-title').html('Заказ звонка');
		form.find('.btn-doStuff')
		    .removeAttr('data-send-sms')
			.attr('data-btn', 'getCall')
			//.attr('data-send-sms', '1')
			.html('Заказать звонок');

		$('#form-popup-opener').trigger('click');

		return false;
	});


	// кнопка "заказать услугу"
	$('.actionOpenFormService').click(function() {
		var form = $('#form-popup form');
		form.find('textarea').removeAttr('data-req').hide();
		form.find('.form-title').html('Заказ услуги');
		form.find('.btn-doStuff')
		    .removeAttr('data-send-sms')
			.attr('data-btn', 'getService')
			//.attr('data-send-sms', '1')
			.html('Заказать услугу');

		$('#form-popup-opener').trigger('click');

		return false;
	});

	// кнопка "получить расчет"
	$('.actionOpenFormRaschet').click(function() {
		var form = $('#form-popup form');
		form.find('textarea').removeAttr('data-req').hide();
		form.find('.form-title').html('Получить расчет');
		form.find('.btn-doStuff')
		    .removeAttr('data-send-sms')
			.attr('data-btn', 'getRaschet')
			//.attr('data-send-sms', '1')
			.html('Получить расчет');

		$('#form-popup-opener').trigger('click');

		return false;
	});








	// кнопка "подробнее"
	$('.actionGetMore').click(function() {
		var form = $('#form-popup form');
		form.find('textarea').removeAttr('data-req').hide();
		form.find('.form-title').html('Узнать о продуке');
		form.find('.btn-doStuff')
		    .removeAttr('data-send-sms')
			.attr('data-btn', 'getMore')
			//.attr('data-send-sms', '1')
			.html('Узнать больше');

		$('#form-popup-opener').trigger('click');

		return false;
	});

	// кнопка "подробнее" в разделе купить
	$('.actionGetMoreBuy').click(function() {
		var form = $('#form-popup form');
		form.find('textarea').removeAttr('data-req').hide();
		form.find('.form-title').html('Узнать о продуке');
		form.find('.btn-doStuff')
		    .removeAttr('data-send-sms')
			.attr('data-btn', 'getMoreBuy')
			//.attr('data-send-sms', '1')
			.html('Узнать больше');

		$('#form-popup-opener').trigger('click');

		return false;
	});

	// кнопка "подробнее" в разделе купить
	$('.actionGetBuy').click(function() {
		var form = $('#form-popup form');
		form.find('textarea').removeAttr('data-req').hide();
		form.find('.form-title').html('Заказать');
		form.find('.btn-doStuff')
		    .removeAttr('data-send-sms')
			.attr('data-btn', 'getBuy')
			//.attr('data-send-sms', '1')
			.html('Заказать');

		$('#form-popup-opener').trigger('click');

		return false;
	});


	
	
	
});