
<html>
        <head>
                <title>Bookshop</title>
   	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="/bookshop/CSS/style.css">
	
	<link rel="stylesheet" type="text/css" href="/bookshop/CSS/style.css">
        </head>
        <body>
 
 <ul class="navigation">
  <li class="nav"><a href="/bookshop/index.php/books">Home</a></li>
  <li ><a href="/bookshop/index.php/books/create">Create</a></li>
</ul>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <?php if( $this->session->flashdata('success')) 
          {?>
          <div class="alert alert-success">
            <a href="#" class="close" data-dismiss='alert'>
              &times;
            </a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success');?>

          </div>  
          
         <?php } ?>

