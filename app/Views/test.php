<table id="useful_links" class="table table-striped projects" role="grid" aria-describedby="example2_info">
   <thead>
      <tr>
         <td>Id</td>
         <td>Name</td>
         <td>Phone</td>
         <td>E-mail</td>
         <td>Vacation days</td>   
         <td>Position</td>  
         <td>Active</td>
         <td>Deleted</td>
         <td>Options</td>
      </tr>
   </thead>
   <?php
      $n=1;
      foreach ($user as $row)
      {?>
   <tr>
      <td><?php echo $n;?>
      <td><div class="user-block">
              <span class="username" style="margin-top:5px;"><?php echo $row['surname']." ".$row['firstname'];?> </span></div></td>
      <td><?php echo $row['user_phone'];?></td>
      <td><?php echo $row['user_email'];?></td>
      <td><?php echo $row['yearly_vacation_days'];?></td>
      <td>
          <?php  foreach ($company as $row)
      {
              echo $row['position_name'];
      }?>
      </td>
      <td><?php echo $row['user_active'];?></td>
      <td><?php echo $row['user_deleted'];?></td>
      <td>
         <a href="<?php echo site_url('/useful_links/editUseful_link/'.$row['link_id']);?>" class="btn btn-primary btn-sm" href="#"><i class="fas fa-folder"></i> View</a>&nbsp;
         <a href="<?php echo site_url('/useful_links/editUseful_link/'.$row['link_id']);?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>&nbsp;
         <a href="<?php echo site_url('/useful_links/delete/'.$row['link_id']);?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
      </td>
      <?php $n++;   }
         ?>
</table>