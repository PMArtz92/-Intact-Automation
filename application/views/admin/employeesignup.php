<div class="content">
    <div class="container_12">
        <div class="grid_12">
            <h3>Signup As a Employee</h3>
        </div>

        <div class="">
            <form id="form"  method="post" action="<?php echo base_url()?>index.php/home/Employee_create">
                <div class="form-group grid_9">
                    <label class="grid_4">First Name: </label>
                    <span class="grid_5">
                           <input type="text" name="FirstName" placeholder="First name" required>
                    </span>
                </div>

                <div class="form-group grid_9">
                    <label class="grid_4">Last Name: </label>
                    <span class="grid_5">
                        <input type="text" name="LastName" placeholder="last name" required>
                    </span>
                </div>

                <div class="form-group grid_9">
                    <label class="grid_4">Address No: </label>
                    <span class="grid_5">
                        <input type="text" name="AddressNo" placeholder="address no" required>
                    </span>
                </div>

                <div class="form-group grid_9">
                    <label class="grid_4">Address Street: </label>
                    <span class="grid_5">
                        <input type="text" name="AddressStreet"  placeholder="street" required>
                    </span>
                </div>

                <div class="form-group grid_9">
                    <label class="grid_4">Address City: </label>
                     <span class="grid_5">
                        <input type="text" name="AddressCity" placeholder="city" required>
                    </span>
                </div>
                <div class="form-group grid_9">
                    <label class="grid_4">Contact: </label>
                     <span class="grid_5">
                        <input type="number" name="Contact" placeholder="contact" required>
                    </span>
                </div>

                <div class="form-group grid_9">
                    <label class="grid_4">Email: </label>
                     <span class="grid_5">
                        <input type="email" name=" EmailAddress" placeholder="email" required>
                    </span>
                </div>

                <div class="form-group grid_9">
                    <label class="grid_4">Password: </label>
                     <span class="grid_5">
                        <input type="PASSWORD" name="Password" placeholder="password" required>
                    </span>
                </div>
                <div class="form-group grid_9">
                    <label class="grid_4">Confirm Password: </label>
                     <span class="grid_5">
                        <input type="PASSWORD" name="Password" placeholder="Confirm password" required>
                    </span>
                </div>
                <div class="form-group grid_9 submit-form">
                    <span class="push_4 grid_5">
                        <input type="submit"  value="Sign Up" class="service-btn">
                    </span>
                </div>
            </form>
        </div>

        <div class="clear"></div>
    </div>
</div>
</div>