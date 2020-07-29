<h2>Tadbirlar</h2>
				<table class="table table-hover">	
  <thead>
    <tr>
      <th scope="col">Rasm</th>
      <th scope="col">Nom</th>
      <th scope="col">O'chirish</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($blogs as $blog) { ?>
    <tr>
      <td class="bg-white text-white text-center"><img src="images/<?php echo $blog['image']; ?>" width=120 height=100></td>
      <td class="bg-white text-white text-center"><?php echo $blog['name']; ?></td>
      <td class="bg-white text-white text-center"><a href="?page=start&hook=Admin" id="<?php echo $blog['id']; ?>"  class="btn btn-danger removeOne">X</a></td>
    </tr> 
    <div style="display:none;" class="getType" id="blogs"></div> 
  <?php } ?>
  </tbody>
</table>   