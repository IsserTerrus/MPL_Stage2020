
<?php /**/ /*$error;*/?>


		<section class="jumbotron text-center">
			<div class="container">
			  <h1>MaPhoto.Link</h1>
			  <p class="lead">Ajout d'une nouvelle photo</p>
			</div>  
		</section>
		<div class="container">
			<?php echo form_open_multipart('Membre/upload');?>

			<label>Ajouter une photo</label>
			<input class="buttonAddFile" type="file" name="userfile" size="20" />

			<br><br>

			<input type="submit" class="btn btn-secondary btn-lg" value="Ajouter la photo" />

			</form>
			<br>
		</div>