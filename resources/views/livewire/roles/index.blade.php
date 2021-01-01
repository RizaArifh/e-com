<div>
   <form action="" method="post">
   <div class="form-group">
       <label for="name">Name </label>
       <input id="name" class="form-control" type="text" name="name">
   </div>
   <div class="form-check">
       @forelse ($permissions as $permission)
       <input id="" class="form-check-input" type="checkbox" name="" value="true">
       <label for="" class="form-check-label">{{ $permission->name }}</label>
       <br>
       @empty
        No Data Was Found
       @endforelse
   </div>
   </form>
</div>
