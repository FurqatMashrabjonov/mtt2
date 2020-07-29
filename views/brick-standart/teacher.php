<h2 >O'qituvchilar</h2>
<a href="?page=start&hook=Insert&typeInsert&typeInsert=teacher" class="btn btn-primary block">Qo'shish +</a>

				<table class="table table-hover">	
  <thead>
    <tr>
      <th scope="col">FIO </th>
      <th scope="col">Fan</th>
      <th scope="col">O'chirish</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($teachers as $teacher) { ?>
    <tr>
      <td class="bg-white text-white text-center"><?php echo $teacher['name']; ?></td>
      <td class="bg-white text-white text-center"><?php echo $teacher['subject']; ?></td>
      <td class="bg-white text-white text-center"><a href=?page=start&hook=Admin&type=teacher" id="<?php echo $teacher['id']; ?>"  class="btn btn-danger removeOne">X</a></td>
    </tr>  
    <div style="display:none;" class="getType" id="oqituvchilar"></div>
  <?php } ?>
  </tbody>
</table>   