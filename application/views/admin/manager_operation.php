<div class="content">
    <div class="container_12">
        <div class="grid_12">
            <h3>Manager Add and Update Operations</h3>
            <form action="<?php echo base_url()?>index.php/home/manager_signup" style="float: right"><input type="submit" value="Add Manager" class="service-btn"></form>
        </div>
        <div class="grid_12">
            <form id="manager-form">
                <div class="form-group grid_2">
                    <label class="grid_4">First name: </label>
                    <span class="grid_4">
                        <input type="text" placeholder="First Name" required>
                    </span>
                </div>
                <div class="form-group grid_2">
                    <label class="grid_4">Last Name: </label>
                    <span class="grid_4">
                        <input type="text" placeholder="Last Name" required>
                    </span>
                </div>
                <div class="form-group grid_2">
                    <label class="grid_4">Search Manager</label>
                    <span class="grid_3">
                        <button>Search</button>
                    </span>
                </div>

            </form>
        </div>
        <div class="clear"></div><br><br>
        <div class="grid_16">
            <table class="table_content">
                <thead>
                <tr>
                    <th class="grid_2">First name</th>
                    <th class="grid_2">Last Name</th>
                    <th class="grid_2">Address No |street |City</th>
                    <th class="grid_2">Contact</th>
                    <th class="grid_2">Email Address</th>
                    <th class="grid_2">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="grid_2" align="center">Sunil</td>
                    <td class="grid_2" align="center">Kumara</td>
                    <td class="grid_2" align="center"> 12A ,Kiridiwela, Gampaha</td>
                    <td class="grid_2" align="center">077-3243234</td>
                    <td class="grid_2" align="center">sunilkuma@gmail.com</td>
                    <td class="grid_2" align="center"><a href="#" class="edit">Edit</a> &nbsp;
                        <a href="#" class="delete">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td class="grid_2" align="center">Sunil</td>
                    <td class="grid_2" align="center">Kumara</td>
                    <td class="grid_2" align="center">120/3 ,kottawa, Mahara</td>
                    <td class="grid_2" align="center">071-234523</td>
                    <td class="grid_2" align="center">sunil@gmail.com</td>
                    <td class="grid_2" align="center"><a href="#" class="edit">Edit</a> &nbsp;
                        <a href="#" class="delete">Delete</a>
                    </td>
                </tr>


                </tbody>



            </table>
        </div>
    </div>
</div>