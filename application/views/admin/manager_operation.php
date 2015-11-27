<div class="content">
    <div class="container_12">
        <div class="grid_12">
            <h3>Manager Add and Update Operations</h3>
            <form action="<?php echo base_url()?>index.php/home/manager_signup" style="float: right"><input type="submit" value="Add Manager" class="service-btn"></form>
        </div>

        <div class="grid_12">
            <form id="manager-form"  method="post" action="<?php echo base_url()?>index.php/home/search_manager">
                <div class="form-group grid_2">
                    <label class="grid_4">First name: </label>
                    <span class="grid_4">
                        <input type="text" name="FirstName" placeholder="First Name" required>
                    </span>
                </div>
                <div class="form-group grid_2">
                    <label class="grid_4">Last Name: </label>
                    <span class="grid_4">
                        <input type="text" name="LastName" placeholder="Last Name" required>
                    </span>
                </div>
                <div class="form-group grid_12">
                        <span class="grid_4">
                        <input type="submit"  value="Search">
                    </span>
                </div>
            </form>
        </div>

        <div class="clear"></div><br><br>
        <div class='grid_16'>
            <table class='table_content'>
                <thead>
                <tr>
                    <th class='grid_2'>First name</th>
                    <th class='grid_2'>Last Name</th>
                    <th class='grid_2'>Address No |street |City</th>
                    <th class='grid_2'>Contact</th>
                    <th class='grid_2'>Email Address</th>
                    <th class='grid_2'>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($posts as $post ) {?>
                    <tr>
                    <td class='grid_2' align='center'><?php echo $post->First_name ?></td>
                    <td class='grid_2' align='center'><?php echo $post->Last_name ?></td>
                    <td class='grid_2' align='center'><?php echo $post->Address_no.','.$post->Address_street.','.$post->Address_city ?></td>
                    <td class='grid_2' align='center'><?php echo $post->Contact ?></td>
                    <td class='grid_2' align='center'><?php echo $post->Email_address ?></td>
                    <td class='grid_2' align='center'><a href="<?php echo base_url()?>index.php/home/delete_manager/<?php echo $post->User_ID ?>" class='Remove'>Remove</a>
                    </td>
                </tr>

                <?php }?>
                </tbody>



            </table>
        </div>
    </div>
</div>