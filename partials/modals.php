<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalLabel">Add Course</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="alert-add"></div>
                <form id="add-form">
                    <div class="mb-3">
                        <label for="name-add" class="form-label">Name</label>
                        <input type="text" id="name-add" class="form-control" placeholder="Enter course name!">
                    </div>

                    <div class="mb-3">
                        <label for="duration-add" class="form-label">Duration</label>
                        <input type="text" id="duration-add" class="form-control" placeholder="Enter course duration!">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel">Edit Course</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="alert-edit"></div>
                <form id="edit-form">
                    <div class="mb-3">
                        <label for="name-edit" class="form-label">Name</label>
                        <input type="text" id="name-edit" class="form-control" placeholder="Enter course name!">
                    </div>

                    <div class="mb-3">
                        <label for="duration-edit" class="form-label">Duration</label>
                        <input type="text" id="duration-edit" class="form-control" placeholder="Enter course duration!">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteModalLabel">Delete Course</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="delete-form">
                    <div class="mb-3">
                        Are you sure, you want to delete?
                    </div>
                    <input type="submit" class="btn btn-danger" value="Yes">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                </form>
            </div>
        </div>
    </div>
</div>