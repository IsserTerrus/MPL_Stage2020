
<?php /**/ /*$error;*/?>


		<section class="jumbotron text-center">
			<div class="container">
			  <h1>MaPhoto.Link</h1>
			  <p class="lead">Ajout d'une nouvelle photo</p>
			</div>  
		</section>
		<div class="container">
			<div class="card">
				<div class="card-header text-center bg-dark text-light"><h1>Insertion d'une ou plusieurs photos</h1></div>
				<?php echo form_open('Membre/upload');?> 
					<div class="form-group">
						<label for="file" class="btn btn-lg btn-secondary form-control-file text-center" style="font-size: 40px;">
	<!-- 						<i class="material-icons" style="font-size: 50px;">file_copy</i> -->
							Ajouter une photo
						</label>
						<input class="buttonAddFile text-center" id="file" type="file" name="userfile" size="20" />
					</div>
				<br>
					<div class="text-center">
						<input type="submit" class="btn btn-secondary btn-lg" value="Ajouter la photo" />
					</div>
				</form>				
			</div>
			<br>
		</div>