<!DOCTYPE html>
<html lang="en">
  <?php include "./includes/header_info.php" ?>
    <?php  
        $standings  = file_get_contents('./includes/klassement/team standings/team_standings_query.php');
        $result = mysql_query($standings);

        if (!$result) {
            die('Could not connect: ' . mysql_error());
        }
    ?>
  <body>    
    <section class="text-white tm-font-big tm-parallax">
        <?php include "./includes/navbar.php" ?>
    </section>

    <section id="introduction" class="tm-section-pad-top">
        <div class="container">
            <?php include "./includes/klassement/uitslagen_header.php" ?>
                <div class="col-lg-12">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Constructors</th>
                            <th scope="col">Punten</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php while($row = mysql_fetch_assoc($result)) {
                                    echo    "<tr>          
                                                <td>".$row["Team"]."</td>
                                                <td>".$row["Punten"]."</td>
                                            <tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </section>
    <br>   <!-- breaks the line to add a tiny bit of white space-->                
    <?php include "./includes/footer.php"?>
    <?php include "./includes/js_functions.php"?>
  </body>
</html>
