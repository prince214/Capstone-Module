<!-- BOOTSTRAP VERSION : 4.3.1 -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mystyle.css">

    <title>ADD Interests</title>
  </head>
  <body>


    <!-- <div class="container shadow p-3 mb-5 bg-white rounded">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Add Interests</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="fname" name="interest" type="text" placeholder="Enter Interest" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" name="interest_next">Next</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div> -->


<div class="container shadow p-3 mb-5 bg-white rounded">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form action="skill_ajax.php" id="skill_form" class="form-horizontal" >
                    <fieldset>
                        <legend class="text-center header">Add Interests</legend>

                        <span id = "store_skills" >
                            
                         </span>
                        <div class="form-group text-center">
                           
                            <div class="col-md-12">
                              <ul id="list">
                                  <li>
                                  <input id="fname" name="skill" type="text" placeholder="Interest Name" class="form-control">
                                  </li>
                              </ul>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                            <input id="test" type="button" onclick="send_server()" class="btn btn-primary btn-lg m-2" value = "+" name="skill_next"> 
                            </div>

                            <div class="col-md-12 text-center">
                            <input type="button" class="btn btn-primary btn-lg" value = "Next" onclick="location.href='certificate.php'">    
                            
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
  const list1 = document.getElementById("store_skills");
  var x = document.getElementById('fname')
  console.log(list);
  document.getElementById('test').addEventListener("click",function(){

    var temp = document.getElementById('fname').value;

    const item1 = `<li style="list-style-type:none;">
       <span>&#x2713; ${temp}</span>
    </li>`;

    const position = "beforeend";
    list1.insertAdjacentHTML(position, item1);

    x.value = "";

  });
</script>

<script> 

          
  function send_server(){
            console.log("innn");
              // Creating the XMLHttpRequest object
              var request = new XMLHttpRequest();
              
              // Instantiating the request object
              request.open("POST", "ajax/skill_ajax.php");
              
              // Defining event listener for readystatechange event
              request.onreadystatechange = function() {
                  // Check if the request is compete and was successful
                  if(this.readyState === 4 && this.status === 200) {
                      // Inserting the response from server into an HTML element
                      document.getElementById("result").innerHTML = this.responseText;
                  }
              };
              
              // Retrieving the form data
              var myForm = document.getElementById("skill_form");
              var formData = new FormData(myForm);

              // Sending the request to the server
              request.send(formData);

            }

</script>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>