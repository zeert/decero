<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css" />
	<style type="text/css">
	h3 {
		text-align: center;
	}
	</style>
</head>
<body>
	
<div class="modal" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-header">
    
    <h3 id="LoginLabel">Aplicacion de Gestion Estudio Decero</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>

<!-- Jquery JS -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.1.min.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="<?= base_url(); ?>js/bootstrap.min.js"></script>

<script type="text/javascript">
	$('.btn').click( function(){
		$('.alert').css({ visibility: 'visible'});
});
</script>
</body>
</html>