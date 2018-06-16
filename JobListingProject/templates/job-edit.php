<?php include 'inc/header.php'; ?>
    
    <main role="main">
        <div class="container mt-65">
            <h2 class="page-header">Edit Job Posting</h2>

            <form method="post" action="edit.php?id=<?php echo $job->id; ?>">
                <div class="form-group">
                    <label for="txtCompany">Company</label>
                    <input type="text" name="company" class="form-control" id="txtCompany" value="<?php echo $job->company; ?>">
                </div>

                <div class="form-group">
                    <label for="txtTitle">Job Title</label>
                    <input type="text" name="job_title" class="form-control" id="txtTitle" value="<?php echo $job->job_title; ?>">
                </div>

                <div class="form-group">
                    <label for="ddlCategory">Category</label>
                    <select class="form-control" name="category" id="ddlCategory">
                        <option value="0">Choose Category</option>
                        <?php foreach($categories as $category): ?>
                            <?php if($job->category_id == $category->id): ?>
                                <option value="<?php echo $category->id; ?>" selected ><?php echo $category->name; ?></option>
                            <?php else :?>
                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                            <?php endif; ?>                            
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="txtDesc">Description</label>
                    <textarea type="text" name="description" class="form-control" id="txtDesc">
                        <?php echo $job->job_description; ?>
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="txtLocation">Location</label>
                    <input type="text" name="location" class="form-control" id="txtLocation" value="<?php echo $job->location; ?>">
                </div>

                <div class="form-group">
                    <label for="txtSalary">Salary</label>
                    <input type="text" name="salary" class="form-control" id="txtSalary" value="<?php echo $job->salary; ?>">
                </div>

                <div class="form-group">
                    <label for="txtUser">Contact User</label>
                    <input type="text" name="contact_user" class="form-control" id="txtUser" value="<?php echo $job->contact_user; ?>">
                </div>

                <div class="form-group">
                    <label for="txtEmail">Contact Email</label>
                    <input type="text" name="contact_email" class="form-control" id="txtEmail" value="<?php echo $job->contact_email; ?>">
                </div>

                <button type="submit" class="btn btn-success" name="submit">
                    Submit Canges
                </button>
            </form>
        </div>
    </main> 

<?php include 'inc/footer.php'; ?>