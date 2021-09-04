
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>DataTables example - Bootstrap 3</title>
    <style>
        .back-to-top {
    cursor: pointer;
    position: fixed;
    bottom: 20px;
    right: 20px;
    display:none;
}
    </style>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>


    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
   
</head>
<body>
    
<div class="container">    
    <div class="row">
     
                            </div>
                               
 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">


           <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>movie_name</th>
                                            <th>Description</th>
                                            <th>language</th>
                                            <th>Launch_date</th>
                                            <th>duration_time</th>
                                            <th>Screen_no</th>
                                            <th>image</th>
                                            <th>City</th>
                                            <th>amount</th>
                                            <th>status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include_once("config.php");
                                         $a=1;
                           $stmt = $conn->prepare(
                                "SELECT * FROM Add_movie");
                           $stmt->execute();
                           $users = $stmt->fetchAll();
                           //$users= = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                           foreach($users as $user) 
                        {  
                    ?>
                    <tr>
                        <td>
                            <?php echo $user['id']; ?>
                        </td>
                        <td>
                            <?php echo $user['movie_name']; ?>
                        </td>
                         <td>
                            <?php echo $user['Description']; ?>
                        </td>
                         <td>
                            <?php echo $user['Language']; ?>
                        </td>
                         <td>
                            <?php echo $user['Launch_date']; ?>
                        </td>
                         <td>
                            <?php echo $user['duration_time']; ?>
                        </td>
                         <td>
                            <?php echo $user['Screen_no']; ?>
                        </td>
                         <td>
                            <?php echo $user['Image']; ?>
                        </td>
                             <td>
                            <?php echo $user['City']; ?>
                        </td>
                         <td>
                            <?php echo $user['amount']; ?>
                        </td>
                         <td>
                            <?php echo $user['status']; ?>
                        </td>
                         <td><?php

                                            echo" <a href=\"editmovie.php?id=$user[id]\">edit</a>";
                                            ?>
                            </td> 
                             <td>
                                            <?php
                                            echo" <a href=\"deletemovie.php?id=$user[id]\">Delete</a>";
                                            ?>
                            </td>                                      
                         <?php
                    }
                    ?>
                </tr>
  
                                    </tbody>
                                    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
   
                </div>
</div>  
<script>
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
    </script>
    <script>
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
</script>  
</body>
</html>