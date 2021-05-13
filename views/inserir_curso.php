<?php if(!isset($_GET['editar'])){ ?>

		<h1>Inserir novo curso</h1>
		<form method="post" action="processa_curso.php">
			<br>
				<label class="badge badge-pill badge-secondary"> Nome curso</label><br>
				<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso">
			<br><br>
				<label class="badge badge-pill badge-secondary">Carga Horaria</label><br>
				<input class="form-control" type="text" name="carga_horaria" placeholder ="insira a carga horaria">
			<br><br>
				<input  type="submit" class="btn btn-success" name="Inserir curso" >
		</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
		<?php if($linha['id_curso'] == $_GET['editar']) { ?>

	<h1>Editar Curso</h1>
			<form method="post" action="edita_curso.php">
				<input  type="hidden" name="id_curso" value="<?php echo $linha['id_curso'];?>">
			<br>
				<label> Nome curso</label><br>
				<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" value=" <?php echo $linha['nome_curso'];?>">
			<br><br>
				<label>Carga Horaria</label><br>
				<input class="form-control" type="text" name="carga_horaria" placeholder ="insira a carga horaria" value=" <?php echo $linha['carga_horaria'];?>">
				<br><br>
				<input type="submit" class="btn btn-success" name="Editar curso" >
			</form>

		<?php } ?>
	<?php } ?>
<?php } ?>