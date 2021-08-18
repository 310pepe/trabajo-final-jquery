<!DOCTYPE html>
<html>

    <head>
        <title>PHP Jquery Ajax CRUD Example</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js" integrity="sha512-frFP3ZxLshB4CErXkPVEXnd5ingvYYtYhE5qllGdZmcOlRKNEPbufyupfdSTNmoF5ICaQNO6SenXzOZvoGkiIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha512-dTu0vJs5ndrd3kPwnYixvOCsvef5SGYW/zSSK4bcjRBcZHzqThq7pt7PmCv55yb8iBvni0TSeIDV8RYKjZL36A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        

        <script type="text/javascript">
            var url = "http://localhost/trabajo/crud-ajax-arr/";
        </script>
        <script src="js/item-ajax.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>PHP Jquery Ajax CRUD Example</h2>
                    </div>
                    <div class="pull-right">

                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create-item">
                            Create Item
                        </button>

                    </div>
                    <a class="btn btn-outline-danger" href="../"> Volver </a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th width="200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <ul id="pagination" class="pagination-sm"></ul>
            <!-- Create Item Modal -->
            <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>                            
                        </div>
                        <div class="modal-body">
                            <form data-toggle="validator" action="api/create.php" method="POST">
                                <div class="form-group">
                                    <label class="control-label" for="title">Title:</label>
                                    <input type="text" name="title" class="form-control" data-error="Please enter title."
                                        required />
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="title">Description:</label>
                                    <textarea name="description" class="form-control" data-error="Please enter description."
                                        required></textarea>

                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group mt-2">

                                    <button type="submit" class="btn crud-submit btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Edit Item Modal -->
            <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form data-toggle="validator" action="api/update.php" method="put">
                                <input type="hidden" name="id" class="edit-id">
                                <div class="form-group">

                                    <label class="control-label" for="title">Title:</label>
                                    <input type="text" name="title" class="form-control" data-error="Please enter title."
                                        required />

                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="title">Description:</label>
                                    <textarea name="description" class="form-control" data-error="Please enter description."
                                        required></textarea>

                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>