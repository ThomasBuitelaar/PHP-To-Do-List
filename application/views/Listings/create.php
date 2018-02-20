<h2><?= $title ?></h2>

<form>
  <fieldset>
    <div class="form-group">
      <label for="task_name">Task</label>
      <input type="text" class="form-control" placeholder="Task name">
    </div>
    <div class="form-group">
      <label for="task_description">Task Description</label>
      <textarea class="form-control" id="task_description" rows="3"></textarea>
    </div>
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>