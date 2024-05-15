<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Load file CSS Bootstrap offline -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
	<center>
		<div class="container" style="margin-top: 80px">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="card">
							<div class="card-header" <h2> Input Data </h2>
								<div class="card-body">
									<form action="insert.php" method="post">
										<div class="form-group">
											<div class="card" style="width: 18rem;">
												<div class="text-center">
													<img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
												</div>
												<label>Username:</label>
												<input type="text" name="username" class="form-control" placeholder="Masukan username" />
											</div>
											<div class="form-group">
												<label>Pasword:</label>
												<input type="text" name="pasword" class="form-control" placeholder="Masukan pasword" />
											</div>

											<button type="submit" name="submit" class="btn btn-primary">Submit</button>

  											</form>
								     </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</center>
</body>

</html>