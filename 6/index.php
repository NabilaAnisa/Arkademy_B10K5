<?php require_once "koneksi.php"; ?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

		<style>
			.card{
				    box-shadow: 2px 2px 7px 1px #6666661a;
				    -webkit-border-radius: 25px 2px 25px 2px;
				    border-radius: 25px 2px 25px 2px;
			}
			.card-header:first-child {
			    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
			    box-shadow: 2px 2px 7px 1px #6666661a;
			    -webkit-border-radius: 25px 2px 25px 2px;
			    border-radius: 25px 2px 25px 2px;
			}

			.card-header{
				background-color: rgba(68, 80, 216, 0.09);
			}

			h2{
				color: rgba(0, 28, 126, 0.57);
    			text-shadow: 1px 2px 2px #0003;
			}
		</style>

		<title>Data Programmer</title>
	</head>
	<body>
		<div class="container">
			<!-- while sini -->
			<div class="wrap">
				<div class="row">
					<div class="col text-center">
						<h2 class="mb-5 mt-5">Data Programmer</h2>
					</div>
					<div class="col-sm-12">
						<form action="" method="post">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-11">
											<input type="text" id="namaProgrammer" name="namaProgrammer" class="form-control"  placeholder="Tambah Programmer Baru">
										</div>
										<div class="col-sm-1">
											<button type="submit" class="btn btn-primary float-right rounded-pill" >Tambah</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="mb-4"></div>
				<?php
				//{ add programmer
					$namaProgrammer = $_POST['namaProgrammer'];

					if (isset($namaProgrammer) && strlen($namaProgrammer)>0) 
					{
						$query = "INSERT INTO `data_programmers`.`user`(`name`) 								  VALUES ('".$namaProgrammer."')";
						$addProgrammer = mysqli_query($conn, $query);

						if ($addProgrammer === TRUE) 
						{
							?>
								<script type="text/javascript">
									iziToast.success({
			                            title: 'Yay!',
			                            message: 'Data Programmer berhasil ditambahkan',
			                            position: 'topCenter'
			                        });	
								</script>
							<?php
						} 
						else 
						{
							?>
								<script type="text/javascript">
									iziToast.error({
			                            title: 'Error!',
			                            message: 'Data Programmer Gagal ditambahkan',
			                            position: 'topCenter'
			                        });	
								</script>
							<?php
						}

						$query = '';
					} 
				//} add programmer
				//{ add skills
					$skill = $_POST['skill'];
					$idProgrammer = $_POST['idProgrammer'];

					if (isset($skill) && strlen($skill)>0) 
					{
						$query = "INSERT INTO `data_programmers`.`skills`(`name`,`user_id`) 								  VALUES ('".$skill."','".$idProgrammer."')";
						$addSkill = mysqli_query($conn, $query);

						if ($addSkill === TRUE) 
						{
							?>
								<script type="text/javascript">
									iziToast.success({
			                            title: 'Yay!',
			                            message: 'Skill Berhasil ditambahkan',
			                            position: 'topCenter'
			                        });	
								</script>
							<?php
						} 
						else 
						{
							?>
								<script type="text/javascript">
									iziToast.error({
			                            title: 'Error!',
			                            message: 'Skill Gagal ditambahkan',
			                            position: 'topCenter'
			                        });	
								</script>
							<?php
						}

						$query = '';
					} 
				//} add programmer 

					$query =  "SELECT user.id idUser
										,user.name namaUser
										,GROUP_CONCAT(DISTINCT skills.name SEPARATOR ', ') skills
								FROM user
								LEFT JOIN skills 
									ON user.id = skills.user_id
								GROUP BY user.name, user.id";
					$selectProgrammer = mysqli_query($conn,$query);
					$query = '';
					while($user_data = mysqli_fetch_array($selectProgrammer)) :
						$nama = $user_data['namaUser'];
						$id_programmer = $user_data['idUser'];
						$skills = $user_data['skills'];
				?>
						<div class="row mt-3">
							<div class="col-sm-7">
								<div class="card">
									<div class="card-header"><?=$nama; ?></div>
									<div class="card-body"><?=$skills; ?></div>
								</div>
							</div>
							<div class="col-sm-5">
								<form action="" method="post">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-9">
													<input type="text" id="skill" name="skill" class="form-control"  placeholder="Tambah Skill">
												</div>
												<div class="col-md-3">
													<button type="submit" class="btn btn-primary rounded-pill">Tambah</button>
												</div>
											</div>
										</div>
									</div>
													<input type="hidden" name="idProgrammer" value="<?=$id_programmer; ?>">
								</form>
							</div>
						</div>
			<?php endwhile; ?>
			<?php $conn->close(); ?>
					</div>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>