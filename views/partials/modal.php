<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="form" action="/main/add_story" enctype="multipart/form-data" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Add a new story</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="storyTitle">Title</label>
                        <input type="text" class="form-control" id="storyTitle" name="storyTitle" placeholder="storyTitle">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Body</label>
                        <textarea class="form-control" id="storyBody" name="storyBody" placeholder="Story text"></textarea>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>

                        <select name="storyCategory" id="storyCategory">
                          <option selected="selected">Choose category</option>
                          <?php
                            foreach($categories as $category) { ?>
                              <option value="<?= $category ?>"><?= $category ?></option>
                          <?php
                            }   ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="storyImage">Image (upload)</label>
                        <input type="file" id="storyImage" name="storyImage">
                        <p class="help-block">(accepted file types: jpg, jpeg, png)</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" ">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>

<a class="addButton" href="#" title="" data-toggle="modal" data-target="#myModal"></a>