<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration Form</title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>student registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="dob">Date Of Birth :</label>
                                <input type="text" name="dob" id="dob" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="blodgroup">blodgroup :</label>
                            <input type="text" name="blodgroup" id="blodgroup" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">State :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value=""></option>
                                        <option value="us">America</option>
                                        <option value="india">gujarat</option>
										<option value="india">rajasthan</option>
										<option value="india">panjab</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">City :</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                        <option value=""></option>
                                        <option value="vadodara">vadodara</option>
                                        <option value="surat">surat</option>
										 <option value="ahmedabad">ahmedabad</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pincode">pincode :</label>
                            <input type="text" name="pincode" id="pincode">
                        </div>
                        <div class="form-group">
                            <label for="mobile">mobile :</label>
                            <input type="text" name="mobile" id="mobile">
                        </div>
                       
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID:</label>
                            <input type="email" name="email" id="email" />
                        </div>
						
                            <div class="form-group">
                                <label for="password">password:</label>
                                <input type="text" name="password" id="password" required/>
                            </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>