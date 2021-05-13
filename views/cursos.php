<a class="btn btn-success" 
	href="?pagina=inserir_curso">Inserir novo cursos</a>

<table class="table table-hover table-striped" id="cursos" style ="border: 1px solid #ccc; width: 100%">
<thead>
	<tr>
		<td> Nome Curso</td>
		<th> Carga horario</th>
		<th> Editar</th>
		<th> Deletar</th>
	</tr>
</thead>

<tbody>
	<?php 	
		while($linha = mysqli_fetch_array($consulta_cursos)){
			echo '<tr><td>'.$linha['nome_curso'].'</td>';
			echo '<td>'.$linha['carga_horaria'].'</td>';
	?>
		<td><a href ="?pagina=inserir_curso&editar=<?php echo $linha ['id_curso']; ?>">
			<span style="color: Mediumslateblue;">
				<i class="fas fa-edit"></i>
			</span>

		</a></td>

		<td><a href ="deleta_curso.php?id_curso=<?php echo $linha ['id_curso']; ?>">
			<span style="color: Tomato;">
				<i class="fas fa-trash-alt"></i>
			</span>

		</a></td></tr>

		<?php
		}
	?>
</tbody>
</table>