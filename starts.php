<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <title>President chooser</title>
    <style>
        <?php include ('Stylings/index.css');
include ('script.js');
?>
</style>
</head>
<body>
    <!-- Bootstrap part -->
    <div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            
            <form action="process.php" method="post" id="regForm">
                <h1 id="register">President chooser</h1>
                <div class="all-steps" id="all-steps"> <span class="step"><i class="fa fa-universal-access"></i></span> <span class="step"><i class="fa fa-map-marker"></i></span> <span class="step"><i class="fa fa-shopping-bag"></i></span> <span class="step"><i class="fa fa-car"></i></span> <span class="step"><i class="fa fa-spotify"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> </div>
                <div class="tab">
                    
                    <h5>What field do you want your president to focus?</h5>
                    <!-- Group of default radios - option 1 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" value="first" checked>
  <label class="custom-control-label" for="defaultGroupExample1">Focuses on Economy</label>
</div>

<!-- Group of default radios - option 2 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" value="second">
  <label class="custom-control-label" for="defaultGroupExample2">Focuses on Military</label>
</div>

<!-- Group of default radios - option 3 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios" value="third">
  <label class="custom-control-label" for="defaultGroupExample3">Focuses on Science and Technology</label>
</div>
<!-- Group of default radios - option 4 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultGroupExample4" name="groupOfDefaultRadios">
  <label class="custom-control-label" for="defaultGroupExample4">Focuses on Education</label>
</div>

                        
                    </div>
                <div class="tab">
                    <div class="custom-control custom-radio">
                        <h5>On what basis do you assess your presidential candidate?</h5>
                        <select class="custom-select">
                        <option selected>Open this select menu</option>
                        <option value="b1">News on tv</option>
                        <option value="b2">The family upbringing of the candidate</option>
                        <option value="b3">Attend events where the candidate is addressing the people</option>
                        <option value="b4">I research all the channels before making my choice</option>
                        <option value="b5">Number of fundraisers the candidate has done in your area</option>
                        <option value="b6" name="second_part">Click</option>
                        </select>
                    </div>
                    <div class="custom-control custom-radio"></div>
                </div>
                <div class="tab">
                    <h6>Do you think environment safety is more important than business tax revenue?</h6>
                    <select class="custom-select">
                        <option selected>Open this select menu</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                        </select>
                </div>
                <div class="tab">
                    <h6>Do you think possession of guns should be allowed to</h6>
                    <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="yes_gun">
                    <label class="custom-control-label" for="customRadio1">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="no_gun">
                    <label class="custom-control-label" for="customRadio2">No</label>
                    </div>
                        
                    </div>
                <div class="tab">
                    <h6>In your opinion, do you think gun control laws and regulation should be changed?</h6>
                    <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="yes_control">
                    <label class="custom-control-label" for="customRadioInline1">Yes</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" value="no_control">
                    <label class="custom-control-label" for="customRadioInline2">No</label>
                    </div>
                </div>
                
                <div class="tab">
                    <h5>Do you think there should be rules to incluce all religions in all political parties?</h5>

                    <select class="custom-select">
                        <option selected>Open this select menu</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                        </select>
                </div>
                <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                    <h3>Got the result!</h3> <span> SEE NOW </span>
                    <input type="submit" value="Yes">
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                </div>
               
            </form>
        </div>
    </div>
</div>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
    var currentTab = 0;
document.addEventListener("DOMContentLoaded", function(event) {


    showTab(currentTab);

});

function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
    } else {
        document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
    }
    fixStepIndicator(n)
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {

        document.getElementById("nextprevious").style.display = "none";
        document.getElementById("all-steps").style.display = "none";
        document.getElementById("register").style.display = "none";
        document.getElementById("text-message").style.display = "block";




    }
    showTab(currentTab);
}

function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    for (i = 0; i < y.length; i++) { if (y[i].value == "") { y[i].className += " invalid";
            valid = false; } }
    if (valid) { document.getElementsByClassName("step")[currentTab].className += " finish"; }
    return valid;
}

function fixStepIndicator(n) { var i, x = document.getElementsByClassName("step"); for (i = 0; i < x.length; i++) { x[i].className = x[i].className.replace(" active", ""); }
    x[n].className += " active"; }
</script>
</body>
</html>
