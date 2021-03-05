<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | A-fri Shooper</title>
    <link href="components/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="components/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="components/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="components/assets/css/price-range.css" rel="stylesheet">
    <link href="components/assets/css/animate.css" rel="stylesheet">
  <link href="components/assets/css/main.css" rel="stylesheet">
  <link href="components/assets/css/responsive.css" rel="stylesheet">
</head>
<body>
<style>
.signUp{
   width: 20%;
   height: 40px;
   border: none;
   outline: none; 
   border: 1px solid burlywood;
   border-radius: 6px;
   background-color: #fff;
   margin-top: 15px;
}
.log{
    text-align: center;
}
.log >div{
    color:darkgray;
    text-transform: uppercase;
    font-style: italic;
}
.log >div>span{
    color: darksalmon;
    text-transform:uppercase;
    
}
.log >p{
    color: deeppink;
    text-transform: uppercase;
    font-family: Arial, Helvetica, sans-serif;
   
}
#male{
    width: 20px;
    height: 20px;
    border-radius: 50px;
}
#female{
    width: 20px;
    height: 20px;
    border-radius: 50px;
}
main{
    margin: 24px auto;
    width: 50%;
    overflow-x: hidden;
}
</style>
<main>
                    <div  class="container">
                    <div class="row justify-content-center">
                    <div class="col-sm-5">
                    <!-- Basic registration form-->
                    <div class="card shadow-sm border-1 rounded-lg mt-1">
                    <div class="card-header justify-content-center"><center><h3 class="font-weight-light my-4">Afristyle||API</h3></center></div>
                    <div class="card-body">
                    <!-- Registration form-->
                    <form id="regform">
                    <!-- Form Row-->

                    <div class="form-row">
                        <div class="col-sm-6">
                        
                        <!-- Form Group (first name)-->
                        <div class="form-group">
                        <label class="small mb-1" for="username">
                            <span id="a">First name</span>
                            
                            <span id="errorFirst" class="error"></span> 
                        </label>
                        <input class="form-control py-4" id="firstname" type="text" placeholder="First name" />
                        </div>
                        </div>
                        <div class="col-sm-6">
                        
                        <!-- Form Group (last name)-->
                        <div class="form-group">
                        <label class="small mb-1" for="contactinfo">
                            <span id="b">Last Name</span>
                            <span id="errorLastName" class="error"></span> 
                        </label>
                        <input class="form-control py-4" id="lastname" type="text" placeholder="last name" />
                        </div>
                        </div>
                        </div>
                    <div class="form-row">
                    <div class="col-sm-6">
                    
                    <!-- Form Group (first name)-->
                    <div class="form-group">
                    <label class="small mb-1" for="username">
                        <span id="a">username</span>
                        <span id="errorUName" class="error"></span> 
                    </label>
                    <input class="form-control py-4" id="username" type="text" placeholder="Enter username" />
                    </div>
                    </div>
                    <div class="col-sm-6">
                    
                    <!-- Form Group (last name)-->
                    <div class="form-group">
                    <label class="small mb-1" for="contactinfo">
                        <span id="b">contactinfo</span>
                        <span id="errorContact" class="error"></span> 
                    </label>
                    <input class="form-control py-4" id="contactinfo" type="number" placeholder="contact info +254878....." />
                    </div>
                    </div>
                    </div>
                    
                    <!-- Form Group (email address)            -->
                    <div style="margin-left: 10px; width: 95%;" class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">
                         <span id="c">Email</span>
                        <span id="errorEmail" class="error"></span> 
                    </label>
                    <input  class="form-control py-3" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                    <label class="small mb-1" for="companyUrl">
                         <span id="c">Url</span>
                        <span id="errorUrl" class="error"></span> 
                    </label>
                    <input  class="form-control py-3" id="url" type="text" aria-describedby="url" placeholder="Enter url:afristyle.co.ke" />
                    </div>
                    
                    <!-- Form Row    -->
                    <div class="form-row">
                    <div class="col-sm-6">
                    
                    <!-- Form Group (password)-->
                    <div class="form-group">
                    <label class="small mb-1" for="inputPassword">
                        <span id="d">password</span>
                        <span id="errorPass" class="error"></span> 

                    </label>

                    <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                    </div>
                    </div>
                    <div class="col-sm-6">
                    
                    <!-- Form Group (confirm password)-->
                    <div class="form-group">
                    <label class="small mb-1" for="inputConfirmPassword">
                        <span id="e">confirm password</span>
                        <span id="errorCpass" class="error"></span> 
                    </label>
                    <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                    </div>
                    
                    </div>
                    </div>
                    <!-- Form Group (create account submit)-->
                    <div class="form-group mt-4 mb-0">
                      <div class="col-md-12">
                        <p><b>Note</b></p>
                          Password must be atleast 8 to 15 characters. Only letter, numeric digits, underscore and first character must be a letter.
                       </div> <br>
                      
                      <input type="button" id="submit"  class="btn btn-primary btn-block" value="create">
                    
                    </div>
                    </form>
                    </div>
                    <div class="card-footer text-center">
                    
                    </div>

                    

                    </div>
                    </div>
                    </div>
                    </div>
                    </main>
</body>
</html>

<script src="components/assets/jquery/jquery.js"></script>
<script src="components/assets/js/main.js"></script>