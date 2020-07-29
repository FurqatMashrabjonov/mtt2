<h2>Fikr va takliflar</h2>
				<table class="table table-hover">	
  <thead>
    <tr>
      <th scope="col">Ismi</th>
      <th scope="col">Elektron pochta</th>
      <th scope="col">Xabar</th>
      <th scope="col">O'chirish</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($messages as $message) { ?>
    <tr>
      <td class="bg-white text-white text-center"><?php echo $message['name']; ?></td>
      <td class="bg-white text-white text-center"><?php echo $message['email']; ?></td>
      <td class="bg-white text-white text-center"><?php echo $message['message']; ?></td>
      <td class="bg-white text-white text-center"><a href="?page=start&hook=Admin" id="<?php echo $message['id']; ?>"  class="btn btn-danger removeOne">X</a></td>
    </tr>  
    <div style="display:none;" class="getType" id="message"></div>
  <?php } ?>
  </tbody>
</table>   