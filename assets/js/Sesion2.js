function Validacion()
{
	$("#errol29").html("");
	$("#errol30").html("");
	var form = $("#form-login").serialize();
	var controller = 'Validacion_Controller/Validaradmin';
	$.ajax({
		data: form,
		url: controller,
		type: 'post',
		dataType: 'json',

		success: function(data)
		{
			if(data.estatus == 0)
			{
				$(".loader").show();
				location.href="Inicio";
			}
			else if(data.estatus == 1)
			{
				$dat = ['username','password']
					for($i=29 ; $i<=$dat.length+29; $i++)
					{
						if(data.ERRORES[$dat[$i-29]] != undefined)
						{
							$("#errol"+$i).html('<div class = "error">'+data.ERRORES[$dat[$i-29]]+'<div>');
						}
						else
						{
							continue;
						}

					}
			}

		}

	});
}
