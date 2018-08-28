@extends('layouts.app')
@section('content')
@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
			<?php $message=Session::get('message') ?>
			@if ($message=='store')
    <div class="alert alert-warning	">
        <ul>
            Bienvenido, Recuerda que no debes repetir los numeros en Cada una de las preguntas.
        </ul>
    </div><br />
@endif
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="panel-title">El arte de pensar</h1><br>
				<small class="text-muted">Leyenda: </small>
			</div>
			<div class="panel-body">
				<form class="form-inline" method="POST" action="">
					{{ csrf_field()}}
					<input type="text" name="pA" value="A" hidden>
					<input type="text" name="pB" value="B" hidden>
					<input type="text" name="pC" value="C" hidden>
					<input type="text" name="pD" value="D" hidden>
					<input type="text" name="pE" value="E" hidden>
					<input type="text" name="pF" value="F" hidden>
					<input type="text" name="pG" value="G" hidden>
					<input type="text" name="pH" value="H" hidden>
					<input type="text" name="pI" value="I" hidden>
					<input type="text" name="pJ" value="J" hidden>
					<input type="text" name="pK" value="K" hidden>
					<input type="text" name="pL" value="L" hidden>
					<input type="text" name="pM" value="M" hidden>
					<input type="text" name="pN" value="N" hidden>
					<input type="text" name="pO" value="O" hidden>
					<input type="text" name="pP" value="P" hidden>
					<input type="text" name="pQ" value="Q" hidden>
					<input type="text" name="pR" value="R" hidden>
					<div class="form-row">
						<table class="table table-striped">
							<p><b>A. Cuando se presenta un conflicto entre personas acerca de ideas. Tiendo a estar a favor de la parte que</b></p>
							
							<thead>
								<th></th>
								<th></th>
								<th></th>
							
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Identifica e intenta sacar a la luz el conflicto</td>
								<td><input class="form-control" 
									type="number" 
									name="1a"
									id="1a"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Expresa de la mejor manera los valores e ideales involucrados</td>
									<td><input type="number"
											class="form-control" 
											name="2a"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Refleja de la mejor manera mi opinión y experiencia personal</td>
									<td><input type="number"
											class="form-control" 
											name="3a"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Se aproxima a la situación con la mayor lógica y consistencia</td>
									<td><input type="number"
											class="form-control" 
											name="4a"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Mejor expresa el argumento de forma más concisa y contundente.</td>
									<td><input type="number"
											class="form-control" 
											name="5a"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
							
						</table>
						<hr>
						<table class="table table-striped">
							<p><b>B. Cuando inicio un trabajo en un proyecto grupal, que es lo más importante para mí:</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Entender los propósitos y el valor del proyecto</td>
								<td><input class="form-control" 
									type="number" 
									name="1b"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Descubrir las metas y valores de los individuos que forman parte del grupo.</td>
									<td><input type="number"
											class="form-control" 
											name="2b"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Determinar cómo vamos a abordar el proyecto</td>
									<td><input type="number"
											class="form-control" 
											name="3b"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Entender como el proyecto puede ser de beneficio para el grupo</td>
									<td><input type="number"
											class="form-control" 
											name="4b"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Organizar y poner en marcha el proyecto.</td>
									<td><input type="number"
											class="form-control" 
											name="5b"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						</table>
						<hr>
						<table class="table table-striped">
							<p><b>C. En términos generales, absorbo mejor nuevas ideas al:</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Relacionarlas con actividades actuales o futuras.</td>
								<td><input class="form-control" 
									type="number" 
									name="1c"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Aplicarlas a situaciones concretas.</td>
									<td><input type="number"
											class="form-control" 
											name="2c"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Realizar un análisis concentrado y cuidadoso.</td>
									<td><input type="number"
											class="form-control" 
											name="3c"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Entender como son similares a ideas conocidas.</td>
									<td><input type="number"
											class="form-control" 
											name="4c"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Contrastarlas con otras ideas.</td>
									<td><input type="number"
											class="form-control" 
											name="5c"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						</table>
						<hr>
						<table class="table table-striped">
							<p><b>D. Para mí, las tablas y gráficas en un libro o artículo son usualmente:</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Mas útiles que una narrativa si son exactas.</td>
								<td><input class="form-control" 
									type="number" 
									name="1d"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Útiles, si claramente muestran los hechos importantes.</td>
									<td><input type="number"
											class="form-control" 
											name="2d"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Útiles, si están apoyados y explicados por la narrativa.</td>
									<td><input type="number"
											class="form-control" 
											name="3d"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Útiles, si generan preguntas acerca de la narrativa.</td>
									<td><input type="number"
											class="form-control" 
											name="4d"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Ni menos ni más útil que otro material.</td>
									<td><input type="number"
											class="form-control" 
											name="5d"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						</table>
						<hr>
						<table class="table table-striped">
							<p><b>E. Si me fuera solicitado realizar un proyecto de investigación, probablemente comenzaría por:</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Tratar de encuadrar el proyecto dentro de una perspectiva amplia.</td>
								<td><input class="form-control" 
									type="number" 
									name="1e"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Decidir si puedo hacerlo solo o requiero de ayuda.</td>
									<td><input type="number"
											class="form-control" 
											name="2e"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Especular acerca de cuáles serían los posibles resultados.</td>
									<td><input type="number"
											class="form-control" 
											name="3e"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Determinar si el proyecto debería o no realizarse.</td>
									<td><input type="number"
											class="form-control" 
											name="4e"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Tratar de formular el problema lo más exhaustivamente posible.</td>
									<td><input type="number"
											class="form-control" 
											name="5e"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						</table>
						<hr>
						<table class="table table-striped">
							<p><b>F. Si fuera a obtener información de los vecinos sobre una preocupación comunitaria preferiría.</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Reunirme con ellos individualmente a hacer preguntas especificas..</td>
								<td><input class="form-control" 
									type="number" 
									name="1f"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Tener una reunión abierta con todos y pedirles que externen sus observaciones.</td>
									<td><input type="number"
											class="form-control" 
											name="2f"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Entrevistarlos en pequeños grupos y hacerles preguntas generales.</td>
									<td><input type="number"
											class="form-control" 
											name="3f"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Reunirme de manera informal con personas clave para obtener sus ideas.</td>
									<td><input type="number"
											class="form-control" 
											name="4f"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Solicitar que me entreguen toda la información relevante en su posesión.</td>
									<td><input type="number"
											class="form-control" 
											name="5f"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						</table>
						<hr>
						<table class="table table-striped">
							<p><b>G. Tengo a bien creer que algo es verdad, solo si ello:</b></p>
							<thead>	
							<tr>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Se ha mantenido contra la oposición</td>
								<td><input class="form-control" 
									type="number" 
									name="1g"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Se empata con otras cosas en las que creo.</td>
									<td><input type="number"
											class="form-control" 
											name="2g"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Se ha demostrado que funciona en la práctica.</td>
									<td><input type="number"
											class="form-control" 
											name="3g"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Hace sentido lógico y científico.</td>
									<td><input type="number"
											class="form-control" 
											name="4g"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Puede ser verificado personalmente por hechos visibles.</td>
									<td><input type="number"
											class="form-control" 
											name="5g"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						</table>
						<hr>
						<table class="table table-striped">
							<p><b>H. Cuando leo el artículo de una revista en mi tiempo libre es muy probable que sea acerca de:</b></p>
							<thead>	
							<tr>
								<th scope="col"></th>
								<th scope="col"></th>
								<th scope="col"></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Como alguien resolvió un problema de tipo personal o social</td>
								<td><input class="form-control" 
									type="number" 
									name="1h"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Un tema controvertido de naturaleza política o social.</td>
									<td><input type="number"
											class="form-control" 
											name="2h"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Un relato de una investigación científica o histórica.</td>
									<td><input type="number"
											class="form-control" 
											name="3h"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Un evento o persona interesante o divertida.</td>
									<td><input type="number"
											class="form-control" 
											name="4h"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>De un relato real sobre una experiencia interesante de alguna persona.</td>
									<td><input type="number"
											class="form-control" 
											name="5h"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						<hr>
						<table class="table table-striped">
							<p><b>I. Cuando leo un reporte en el trabajo, normalmente presto más atención a:</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>La relación de las conclusiones con mi experiencia personal.</td>
								<td><input class="form-control" 
									type="number" 
									name="1i"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Si las recomendaciones pueden o no ser implementadas.</td>
									<td><input type="number"
											class="form-control" 
											name="2i"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>La validación de los hallazgos, apoyado por los datos de información.</td>
									<td><input type="number"
											class="form-control" 
											name="3i"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>El entendimiento del autor sobre sus metas y objetivos.</td>
									<td><input type="number"
											class="form-control" 
											name="4i"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Las inferencias que se desprenden de los datos.</td>
									<td><input type="number"
											class="form-control" 
											name="5i"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						<hr>
						<table class="table table-striped">
							<p><b>J. Cuando tengo una tarea por hacer lo primero que quiero saber es:</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Cuál es el mejor método para concluir la tarea.</td>
								<td><input class="form-control" 
									type="number" 
									name="1j"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Quien y cuando requieren que la tarea sea completada.</td>
									<td><input type="number"
											class="form-control" 
											name="2j"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Por que vale la pena hacer la tarea.</td>
									<td><input type="number"
											class="form-control" 
											name="3j"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>El efecto que puede tener en otras tareas que se deben realizar.</td>
									<td><input type="number"
											class="form-control" 
											name="4j"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Cual es el beneficio inmediato al hacer la tarea.</td>
									<td><input type="number"
											class="form-control" 
											name="5j"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody><!--Separador-->
						<hr>
						<table class="table table-striped">
							<p><b>K. Por lo general, aprendo más si voy a hacer algo nuevo, al:</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Comprender cómo se relaciona con otras cosas que sé.</td>
								<td><input class="form-control" 
									type="number" 
									name="1k"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Poniendolo en práctica lo más pronto posible.</td>
									<td><input type="number"
											class="form-control" 
											name="2k"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Escuchando diferentes puntos de vista de cómo se hace.</td>
									<td><input type="number"
											class="form-control" 
											name="3k"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Que alguien me muestre cómo hacerlo.</td>
									<td><input type="number"
											class="form-control" 
											name="4k"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Analizando cómo hacerlo de la mejor manera.</td>
									<td><input type="number"
											class="form-control" 
											name="5k"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						<hr>
						<table class="table table-striped">
							<p><b>L. i me examinan o me someten a una prueba, preferiría:</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Un conjunto objetivo de preguntas orientadas al problema sobre un tema.</td>
								<td><input class="form-control" 
									type="number" 
									name="1l"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Un debate con otros que también están siendo examinados.</td>
									<td><input type="number"
											class="form-control" 
											name="2l"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Una presentación oral-visual que cubra lo que sé.</td>
									<td><input type="number"
											class="form-control" 
											name="3l"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Un reporte informal sobre cómo he aplicado lo que he aprendido.</td>
									<td><input type="number"
											class="form-control" 
											name="4l"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Un informe escrito que cubre antecedentes, teoría y método.</td>
									<td><input type="number"
											class="form-control" 
											name="5l"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						<hr>
						<table class="table table-striped">
							<p><b>M. Las personas cuyas habilidades respeto más, probablemente son:</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Filósofos y estadistas.</td>
								<td><input class="form-control" 
									type="number" 
									name="1m"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Escritores y maestros.</td>
									<td><input type="number"
											class="form-control" 
											name="2m"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Líderes empresariales y gubernamentales.</td>
									<td><input type="number"
											class="form-control" 
											name="3m"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Economistas e ingenieros.</td>
									<td><input type="number"
											class="form-control" 
											name="4m"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Granjeros y periodistas.</td>
									<td><input type="number"
											class="form-control" 
											name="5m"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						<hr>
						<table class="table table-striped">
							<p><b>N. En general, creo que una teoría es útil cuando.</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Parece estar relacionada con otras teorías o ideas que he aprendido.</td>
								<td><input class="form-control" 
									type="number" 
									name="1n"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Me explica las cosas de una nueva forma.</td>
									<td><input type="number"
											class="form-control" 
											name="2n"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Puede explicar sistemáticamente una cantidad de situaciones relacionadas.</td>
									<td><input type="number"
											class="form-control" 
											name="3n"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Sirve para clarificar mis propias observaciones experiencia.</td>
									<td><input type="number"
											class="form-control" 
											name="4n"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Tiene una aplicación práctica y concreta.</td>
									<td><input type="number"
											class="form-control" 
											name="5n"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						<hr>
						<table class="table table-striped">
							<p><b>O. Cuando leo un artículo sobre un tema controvertido, prefiero que</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Me muestre los beneficios de tomar un punto de vista determinado.</td>
								<td><input class="form-control" 
									type="number" 
									name="1o"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Exponer todos los hechos de la controversia.</td>
									<td><input type="number"
											class="form-control" 
											name="2o"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Esbozar de una manera lógica los temas involucrados.</td>
									<td><input type="number"
											class="form-control" 
											name="3o"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Identificar los valores que respalda el escritor.</td>
									<td><input type="number"
											class="form-control" 
											name="4o"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Resaltar ambos lados de la problemática y aclarar el conflicto.</td>
									<td><input type="number"
											class="form-control" 
											name="5o"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						<hr>
						<table class="table table-striped">
							<p><b>P. Si leo un libro fuera de mi campo profesional, es muy probable que lo haga debido a:</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Un interés en mejorar mi conocimiento profesional.</td>
								<td><input class="form-control" 
									type="number" 
									name="1p"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Que alguien a quien respeto haya dicho que es útil.</td>
									<td><input type="number"
											class="form-control" 
											name="2p"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>El deseo de incrementar mi conocimiento general.</td>
									<td><input type="number"
											class="form-control" 
											name="3p"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Un deseo de cambiar, saliendo de mi campo profesional.</td>
									<td><input type="number"
											class="form-control" 
											name="4p"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>La curiosidad de aprender más acerca de un tema específico.</td>
									<td><input type="number"
											class="form-control" 
											name="5p"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						<hr>
						<table class="table table-striped">
							<p><b>Q. Cuando me aproximo por primera vez a un problema técnico, es muy probable que:</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Intente relacionarlo con una teoría o un problema más amplio.</td>
								<td><input class="form-control" 
									type="number" 
									name="1q"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Busque maneras de resolver el problema rápidamente.</td>
									<td><input type="number"
											class="form-control" 
											name="2q"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Piense en una serie de formas opuestas para resolverlo.</td>
									<td><input type="number"
											class="form-control" 
											name="3q"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Busque maneras en que otros lo hayan podido solucionar.</td>
									<td><input type="number"
											class="form-control" 
											name="4q"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Intente encontrar el mejor procedimiento para resolverlo.</td>
									<td><input type="number"
											class="form-control" 
											name="5q"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						</table>
						<hr>
						<table class="table table-striped">
							<p><b>R. Hablando en general, estoy más inclinado a:</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Encontrar métodos existentes que funcionan, y usarlos lo mejor posible.</td>
								<td><input class="form-control" 
									type="number" 
									name="1q"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Especular sobre cómo métodos dispares podrían funcionar juntos.</td>
									<td><input type="number"
											class="form-control" 
											name="2q"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Descubrir nuevos y mejores métodos.</td>
									<td><input type="number"
											class="form-control" 
											name="3q"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Encontrar maneras de hacer que los métodos existentes funcionen de una nueva y mejor forma.</td>
									<td><input type="number"
											class="form-control" 
											name="4q"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Averiguar cómo deberían funcionar los métodos existentes.</td>
									<td><input type="number"
											class="form-control" 
											name="5q"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						</table>

						</table>
						</div><!--Cierre del form row-->
			</div><!--Cierre del panel body-->
					<button class="btn btn-success btn-block">Enviar</button>
				</form>
			</div>
		</div>
	</div>
</div>
				
			</div>
			<div class="col">
				
			</div>
		</div>
@endsection