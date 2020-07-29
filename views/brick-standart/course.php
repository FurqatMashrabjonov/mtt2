
<h2 >Darslar</h2>
				<table class="table table-hover">	
  <thead>
    <tr>
      <th scope="col">Nomi </th>
      <th scope="col">O'chirish</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($courses as $course) { ?>
    <tr>
      <td class="bg-white text-white text-center"><?php echo $course['name']; ?></td>
      <td class="bg-white text-white text-center"><a href="?page=start&hook=Admin" id="<?php echo $course['id']; ?>"  class="btn btn-danger removeOne">X</a></td>
    </tr>  
    <div style="display:none;" class="getType" id="darslar"></div>
  <?php } ?>
  </tbody>
</table>   