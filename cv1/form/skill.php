<!-- BOOTSTRAP VERSION : 4.3.1 -->
<?php include 'connection.php' ?>
<?php 
    
    function add_skill() {
      if(isset($_POST['skill_next'])){
          $name =  $_POST['skill'];
          $sql = "INSERT INTO skills (id,skill_name) VALUES (NULL,'$name')";

          if(mysqli_query($conn,$sql)){
            echo "<script>window.location='certificate.php';</script>";

          }
      }
}
      
      

      ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mystyle.css">

    <script src="https://kit.fontawesome.com/5106db6593.js" crossorigin="anonymous"></script>

    <title>Add Skills</title>
    <style type="text/css">
      #list li{
        list-style-type: none;
        margin-left: -45px;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>


    <div class="container shadow p-3 mb-5 bg-white rounded">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Add Skill</legend>

                        <div class="form-group text-center">
                           
                            <div class="col-md-12">
                              <ul id="list">
                                  <li>
                                  <input id="fname" name="skill" type="text" placeholder="Skill Name" class="form-control">
                                  </li>
                              </ul>
                              
                                

                            </div>
                            <span id ="add_skill" class="col-md-1 text-primary" style="font-size: 2rem; cursor: pointer;"><i class="far fa-plus-square"></i></span>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" name="skill_next">Next</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
  
  const list = document.getElementById("list");
  console.log(list);
  document.getElementById('add_skill').addEventListener("click",function(){
    // add_skill();
    const item = `<li>
       <input id="fname" name="skill" type="text" placeholder="Skill Name" class="form-control">
    </li>`;
    const position = "beforeend";
    list.insertAdjacentHTML(position, item);
  });
</script>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>