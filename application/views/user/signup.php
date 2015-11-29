<div class="content">
    <div class="container_12" >
        <div class="grid_12">
            <h3>Signup Today..!</h3>
        </div>

        <div class="">
            <form id="form" action="<?php echo base_url()?>index.php/home/add_details" method="post">
                <div class="form-group grid_9">
                    <label class="grid_4">First Name: </label>
                    <span class="grid_5">
                        <input type="text" value="first name" name="first_name" required>
                    </span>
                </div>

                <div class="form-group grid_9">
                    <label class="grid_4">Last Name: </label>
                    <span class="grid_5">
                        <input type="text" value="last name" name="last_name" required>
                    </span>
                </div>

                <div class="form-group grid_9">
                    <label class="grid_4">Address No: </label>
                    <span class="grid_5">
                        <input type="text" value="address no" name="address_no" required>
                    </span>
                </div>

                <div class="form-group grid_9">
                    <label class="grid_4">Address Street: </label>
                    <span class="grid_5">
                        <input type="text" value="street" name="address_street" required>
                    </span>
                </div>

                <div class="form-group grid_9">
                    <label class="grid_4">Address City: </label>
                     <span class="grid_5">
                        <input type="text" value="city" name="address_city" required>
                    </span>
                </div>
                <div class="form-group grid_9">
                    <label class="grid_4">Contact: </label>
                     <span class="grid_5">
                        <input type="tel" value="contact" name="contact" required>
                    </span>
                </div>

                <div class="form-group grid_9">
                    <label class="grid_4">Email: </label>
                     <span class="grid_5">
                        <input type="email" value="email" name="email_address" required>
                    </span>
                </div>

                <div class="form-group grid_9">
                    <label class="grid_4">Password: </label>
                     <span class="grid_5">
                        <input type="password" value="password" name="password" required>
                    </span>
                </div>
                <div class="form-group grid_9 submit-form">
                    <span class="push_4 grid_5">
                        <input type="submit" value="Sign Up" class="service-btn">
                    </span>
                </div>
            </form>
        </div>

        <div class="clear"></div>
    </div>
</div>
</div>