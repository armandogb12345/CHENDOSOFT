function ValidarCamposRP() 
{
	if(document.formulario.NomProy.value == "")
	{
		alert ("Falta el Nombre del Proyecto");
		return false;
	}
	else
	{
		if(document.formulario.NomDep.value == "")
		{
			alert ("Falta el Nombre del Departamento");
			return false;
		}
		else
		{
			if(document.formulario.Lugar.value == "")
			{
				alert ("Falta el lugar");
				return false;
			}
			else
			{
				if(document.formulario.Observaciones.value == "")
				{
					alert ("Faltan las Observaciones");
					return false;
				}
				else
				{
					if(document.formulario.Carrera.value == "0")
					{
						alert ("Selecciona una carrera");
						return false;
					}
					else
					{
						
					}
				}
			}
		}
	}
}
