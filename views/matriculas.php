<a class="btn btn-success" 
	href="?pagina=inserir_matricula">Inserir matricula</a>

<table class="table table-hover table-striped" id="alunos" style ="border: 1px solid #ccc; width: 100%">
<thead>
	<tr>
		<td> Nome do Aluno</td>
		<th> Nome do Curso </th>
		<th> Deletar Matricula</th>
	</tr>
</thead>

<tbody>
	<?php 	
		while($linha = mysqli_fetch_array($consulta_matriculas)){
			echo '<tr><td>'.$linha['nome_aluno'].'</td>';
			echo '<td>'.$linha['nome_curso'].'</td>';
	?>
		<td><a href ="deleta_matricula.php?id_aluno_curso=<?php echo $linha ['id_aluno_curso']; ?>">
			<span style="color: Tomato;">
				<i class="fas fa-trash-alt"></i>
			</span>
			
		</a></td></tr>

		<?php
		}

	?>
</tbody>
</table>