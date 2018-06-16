<?php include 'inc/header.php'; ?>
    
    <main role="main">
        <div class="container mt-65">
            <h2 class="page-header">Create Job Posting</h2>

            <form method="post" action="create.php">
                <div class="form-group">
                    <label for="txtCompany">Company</label>
                    <input type="text" name="company" class="form-control" id="txtCompany" placeholder="Company Name...">
                </div>

                <div class="form-group">
                    <label for="txtTitle">Job Title</label>
                    <input type="text" name="job_title" class="form-control" id="txtTitle" placeholder="Job Title...">
                </div>

                <div class="form-group">
                    <label for="ddlCategory">Category</label>
                    <select class="form-control" name="category" id="ddlCategory">
                        <option value="0">Choose Category</option>
                        <?php foreach($categories as $category): ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="txtDesc">Description</label>
                    <textarea type="text" name="description" class="form-control" id="txtDesc">
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="txtLocation">Location</label>
                    <input type="text" name="location" class="form-control" id="txtLocation" placeholder="Company Location..">
                </div>

                <div class="form-group">
                    <label for="txtSalary">Salary</label>
                    <input type="text" name="salary" class="form-control" id="txtSalary" placeholder="Salary...">
                </div>

                <div class="form-group">
                    <label for="txtUser">Contact User</label>
                    <input type="text" name="contact_user" class="form-control" id="txtUser" placeholder="Contact User...">
                </div>

                <div class="form-group">
                    <label for="txtEmail">Contact Email</label>
                    <input type="text" name="contact_email" class="form-control" id="txtEmail" placeholder="Contact Email...">
                </div>

                <button type="submit" class="btn btn-success" name="submit">
                    Submit
                </button>
            </form>
        </div>
    </main> 

<?php include 'inc/footer.php'; ?>