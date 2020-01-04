<?php require_once 'inc/header.php'; ?>
<style>

</style>
		<div class="page-wrapper">
			<?php require_once 'inc/navbar.php'; ?>
			
			<div class="page-content">
<div class="card">
    <table class="table">          	
<tr>
<td>Envoyer les données qui ne sont pas encore transmises sur le compte toutes les</td>
<td><select ><option value="">1</option><option value="">2</option></select></td>
</tr>
<tr>
<td>SMS</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr>
<tr>
<td>MMS</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr>
<tr>
<td>Appels</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr>
<tr>
<td>Enregistrement des appels</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr>
<tr>
<td>Configuration type</td>
<td><select ><option value="">1</option><option value="">2</option></select></td>
</tr>
<tr>
<td>Type du fichier audio</td>
<td><select ><option value="">1</option><option value="">2</option></select></td>
</tr>
<tr>
<td>Activer automatiquement le mode mains-libres (Attention cela peut désactiver les oreillettes bluetooth)</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr>
<tr>
<td>Augmenter le son des appels automatiquement
</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr>
<tr>
<td>Utiliser que le WiFi pour envoyer les appels
</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr><tr>
<td>Taille limite du fichier d'enregistrement des appels lors de l'envoi par 3G/4G</td>
<td><select ><option value="">1</option><option value="">2</option></select></td
</tr>
<tr>
<td>Envoyer la position toutes les</td>
<td><select ><option value="">1</option><option value="">2</option></select></td
</tr>
<tr>
<td>Utiliser le GPS pour la localisation
</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr><tr>
<td>Photos</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr>
<tr>
<td>Applications</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr><tr>
<td>Blocage Applications
</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr>
<tr>
<td>Site</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr><tr>
<td>Blocage Site
</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr>
<tr>
<td>Calendrier</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr><tr>
<td>Contacts</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr>
<tr>
<td> Messagerie instantanée (ROOT) 1</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr>
<tr>
<td>Messagerie instantanée 2</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr>
<tr>
<td>Prendre une photo si le mot de passe est incorrect 3
</td>
<td>  
	<div class="form-check form-check-inline">
	<label class="form-check-label">
	<input type="checkbox" class="form-check-input">
    <i class="input-frame"></i></label>
	</div>    
    
</td>
</tr>
 </table> 
 </div>
</div>

<?php require_once 'inc/footer.php'; ?>
