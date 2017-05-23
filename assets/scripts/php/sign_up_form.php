<form method = "POST" action = "sign_up.php">
            <field>
                <legend>Sign Up</legend>
                <small>Login Details</small>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name = "username"  type="text" class="form-control"  placeholder="username" required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class = "glyphicon glyphicon-envelope"></i></span>
                    <input name = "email" type="email" class="form-control"  placeholder="email" <?php if(isset($email)) echo "value = $email"; ?> required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input name = "password" type="password" class="form-control"  placeholder="password"  required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                    <input name = "confirm_password" type="password" class="form-control"  placeholder="confirm password" required>
                </div>
                <br>
                  <small>Personal Information</small>
                    <div class="input-group">
                        <span class="input-group-addon">First Name</span>
                        <input name = "fname" type="text" class="form-control"  placeholder="" <?php if(isset($fname)) echo "value = $fname"; ?> required>
                    </div>
                     <div class="input-group">
                        <span class="input-group-addon">Last Name</span>
                        <input name = "lname" type="text" class="form-control"  placeholder="" <?php if(isset($lname)) echo "value = $lname"; ?>  required>
                    </div>
                <br>
                <small>Contact Information</small>
                <div class="input-group">
                    <span class="input-group-addon"><i class = "glyphicon glyphicon-phone"></i></span>
                    <input name = "phone" type="number" class="form-control"  placeholder="phone" <?php if(isset($phone)) echo "value = $phone"; ?> required>
                </div>
                <br>
                <small>Address
                Information</small>
                 <div class="input-group">
                    <span class="input-group-addon">House #</span>
                    <input name = "house" type="text" class="form-control"  placeholder="" <?php if(isset($house)) echo "value = $house"; ?> required>
                </div>
                 <div class="input-group">
                    <span class="input-group-addon">Street #</span>
                    <input name = "street" type="text" class="form-control"  placeholder="" <?php if(isset($street)) echo "value = $street"; ?> required>
                </div>
                 <div class="input-group">
                    <span class="input-group-addon"> City </span>
                    <input name = "city" type="text" class="form-control"  placeholder="" <?php if(isset($city)) echo "value = $city"; ?> required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">State</span>
                    <input name = "state" type="text" class="form-control"  placeholder="" <?php if(isset($state)) echo "value = $state"; ?> required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Country</span>
                    <input name = "country" type="text" class="form-control"  placeholder="" <?php if(isset($country)) echo "value = $country"; ?> required>
                </div>
            </field>
            <br>
            <div class = "input-group center">
                <button  type = "submit" name = "submit" class = "btn btn-primary btn-lg">Sign Up</button>
            </div>
        </form>