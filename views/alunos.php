<a class="btn btn-success" 
	href="?pagina=inserir_aluno">Inserir novo aluno</a>

<table class="table table-hover table-striped" id="alunos" style ="border: 1px solid #ccc; width: 100%">
<thead>
	<tr>
		<td> Nome do Aluno</td>
		<th> Data de Nascimento </th>
		<th> Editar</th>
		<th> Deletar aluno</th>
	</tr>
</thead>

<tbody>
	<?php 	
		while($linha = mysqli_fetch_array($consulta_alunos)){
			echo '<tr><td>'.$linha['nome_aluno'].'</td>';
			echo '<td>'.$linha['data_nascimento'].'</td>';	
	?>
		<td><a href ="?pagina=inserir_aluno&editar=<?php echo $linha ['id_aluno']; ?>">
			<span style="color: Mediumslateblue;">
				<i class="fas fa-user-edit"></i>
			</span>

		</a></td>
		<td><a href ="deleta_aluno.php?id_aluno=<?php echo $linha ['id_aluno']; ?>">
			<span style="color: Tomato;">
				<i class="fas fa-user-minus"></i>
			</span>
			
		</a></td>


		<?php
		}
	?>
</tbody>
</table>
