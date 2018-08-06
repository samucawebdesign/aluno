<h4>Alunos</h4>
<a class="btn btn-primary" href="?pagina=home&action=add"> <i class="glyphicon glyphicon-plus"></i> Cadastrar</a>
<a class="btn btn-primary" href="?pagina=home">Listar</a>
<hr>
<?php 
$action = '';
if(!empty($_GET['action']))
	{	
		$action = $_GET['action'];
	}
if($action == 'insert')
	{	
		$nome_alu = addslashes($_POST['nome_alu']);
		$email_alu = addslashes($_POST['email_alu']);
		$bd->query("insert into tb_aluno (nome_alu,email_alu) values ('$nome_alu','$email_alu')");
		$action = '';
	}
if($action == 'update')
	{	
		$id_alu = addslashes($_POST['id_alu']);
		$nome_alu = addslashes($_POST['nome_alu']);
		$email_alu = addslashes($_POST['email_alu']);
		$bd->query("update tb_aluno set nome_alu='$nome_alu',email_alu='$email_alu' where id_alu=$id_alu");
		$action = '';
	}
if($action == 'add')
	{	
		?>
		<form action="?action=insert" method="post" name="form1" id="form1"> 
			<label>Nome</label>
			<input type="text" name="nome_alu" id="nome_alu" class="form-control">
			<label>E-mail</label>
			<input type="text" name="email_alu" id="email_alu" class="form-control">
			<br>
			<button type="submit" class="btn btn-success"> <i class="glyphicon glyphicon-ok"></i> Salvar</button>
			<a class="btn btn-default" href="?">Cancelar</a>
		</form>
		<?PHP
	}
if($action == 'edit')
	{	
		$id_alu = $_GET['id_alu'];
		$bd->query("select * from tb_aluno where id_alu=$id_alu");
		foreach($bd->result() as $dados)
			{	
				?>
				<form action="?action=update" method="post" name="form1" id="form1"> 
					<input type="hidden" name="id_alu" id="id_alu" class="form-control" value="<?PHP echo $dados['id_alu']; ?>">
					<label>Nome</label>
					<input type="text" name="nome_alu" id="nome_alu" class="form-control" value="<?PHP echo $dados['nome_alu']; ?>">
					<label>E-mail</label>
					<input type="text" name="email_alu" id="email_alu" class="form-control" value="<?PHP echo $dados['email_alu']; ?>">
					<br>
					<button type="submit" class="btn btn-success"> <i class="glyphicon glyphicon-ok"></i> Salvar</button>
					<a class="btn btn-default" href="?">Cancelar</a>
				</form>
				<?PHP
			}
	}
if($action == 'delete')
	{	
		$id_alu = $_GET['id_alu'];
		$bd->query("delete from tb_aluno where id_alu=$id_alu");
		$action = '';
	}
if($action == '')
	{	
		$qt_por_paginas = 5;
		$sql = "select * from tb_aluno";
		$bd->query($sql);
		$total = $bd->linhas();
		$paginas = $total / $qt_por_paginas;
		$pg = 1;
		if(isset($_GET['p']) && !empty($_GET['p']))
			{	
				$pg = $_GET['p'];
			}
		$p = ($pg - 1) * $qt_por_paginas;
		$anterior = $pg - 1;
		$proximo = $pg + 1;

		$bd->query("$sql LIMIT $p,$qt_por_paginas");
		if($total == '')
			{	
				echo 'Nenhum resultado encontrado';
			}
		else
			{
				?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>E-mail</th>
							<th align="center">Opções</th>
						</tr>
					</thead>
					<tbody>
						<?PHP
						echo 'Total de registros encontrados: '.$bd->linhas().'<br><br>';
						foreach($bd->result() as $dados)
							{	
								?>
								<tr>
									<td><?php echo $dados['id_alu']; ?></td>
									<td><?php echo $dados['nome_alu']; ?></td>
									<td><?php echo $dados['email_alu']; ?></td>
									<td>
										<a class="btn btn-primary btn-sm" href="?action=edit&id_alu=<?PHP echo $dados['id_alu']; ?>"> <i class="glyphicon glyphicon glyphicon-pencil"></i> </a>

										<a class="btn btn-danger btn-sm" href="?action=delete&id_alu=<?PHP echo $dados['id_alu']; ?>"> <i class="glyphicon glyphicon glyphicon-trash"></i> </a>
									</td>
								</tr>
								<?PHP
							}	
						?>
					</tbody>
				</table>

				<div class="text-center">
					<ul class="pagination pagination-sm">
						<?php 
						if($pg > 1)
							{	
								?>
								<li><a href="?p=<?PHP echo $anterior; ?>"> <i class="glyphicon glyphicon-menu-left"></i> </a></li>
								<?PHP
							}
						if($paginas > 1)
							{	
								for($i=1;$i<=$paginas;$i++)
									{	
										if($pg == $i or $anterior < 0)
											{	
												$cor = 'class="active"';
											}
										else
											{	
												$cor = '';
											}
										?><li <?php echo $cor; ?>><a href="?p=<?PHP echo $i; ?>"> <?PHP echo $i; ?> </a></li><?PHP
									}
							}
						if($pg < $paginas)
							{	
								?>
								<li><a href="?p=<?PHP echo $proximo; ?>"> <i class="glyphicon glyphicon-menu-right"></i> </a></li>
								<?PHP
							}
						?>
						
					</ul>
				</div>
				<?PHP
			}
	}
?>