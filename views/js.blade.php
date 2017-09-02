<script>
	function decSendRequest(formId, data)
	{

	}

	$(document).ready(function()
	{
		// $('#cs-act-modal-form').jqMgVal('addFormFieldsValidations');
		$('#ob-fa-form').jqMgVal('addFormFieldsValidations');

		// $('#cs-act-btn-modal').click(function()
		// {
		// 	var data = $('#cs-act-modal-form').formToObject('cs-act-');
		//
		// 	if(!$('#cs-act-modal-form').jqMgVal('isFormValid'))
		// 	{
		// 		return;
		// 	}
		//
		// 	$.ajax(
		// 	{
		// 		type: 'POST',
		// 		data: JSON.stringify(data),
		// 		dataType : 'json',
		// 		url: $('#cs-act-modal-form').attr('action'),
		// 		error: function (jqXHR, textStatus, errorThrown)
		// 		{
		// 			handleServerExceptions(jqXHR, 'cs-act-modal-form');
		// 		},
		// 		beforeSend:function()
		// 		{
		// 			$('#app-loader').removeClass('hidden-xs-up');
		// 			disabledAll();
		// 		},
		// 		success:function(json)
		// 		{
		// 			$('#cs-act-modal-form').showAlertAsFirstChild('alert-success', 'Gracias por su interés, nos comunicaremos con usted a la brevedad posible.', 10000);
		// 			$('#cs-act-modal-form').jqMgVal('clearForm');
		// 			$('#app-loader').addClass('hidden-xs-up');
		// 			enableAll();
		// 		}
		// 	});
		// });

		$('#ob-fa-btn').click(function()
		{
			var data = $('#ob-fa-form').formToObject('ob-fa-');

			if(!$('#ob-fa-form').jqMgVal('isFormValid'))
			{
				return;
			}

			$.ajax(
			{
				type: 'POST',
				data: JSON.stringify(data),
				dataType : 'json',
				url: $('#ob-fa-form').attr('action'),
				error: function (jqXHR, textStatus, errorThrown)
				{
					handleServerExceptions(jqXHR, 'ob-fa-form');
				},
				beforeSend:function()
				{
					$('#app-loader').removeClass('hidden-xs-up');
					disabledAll();
				},
				success:function(json)
				{
					$('#ob-fa-form').showAlertAsFirstChild('alert-success', 'Ha sido suscrito, gracias por su interés.', 10000);
					$('#ob-fa-form').jqMgVal('clearForm');
					$('#app-loader').addClass('hidden-xs-up');
					enableAll();
				}
			});
		});


		// if ((window.location.href).split("action=")[1] == "DecimaERP-Cloud")
		// {
		// 		$('#dec-intro-op-modal').modal();
		// }
		// else if ((window.location.href).split("action=")[1] == "DecimaERP-WebSite")
		// {
		// 		$('#dec-intro-ws-modal').modal();
		// }
		// else if ((window.location.href).split("action=")[1] == "DecimaERP-Academic")
		// {
		// 		$('#dec-intro-ac-modal').modal();
		// }
		// else if ((window.location.href).split("action=")[1] == "DecimaERP-Customized")
		// {
		// 		$('#dec-intro-pd-modal').modal();
		// }
		// else if ((window.location.href).split("action=")[1] == "DecimaERP-Support")
		// {
		// 		$('#dec-intro-ps-modal').modal();
		// }
		// else
		// {
		// 	 // do nothing ...
		// }

	});
</script>
