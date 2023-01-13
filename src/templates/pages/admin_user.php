<?php
$page_title = "panneau admin";
$reponce = $userManager -> take_user();
ob_start();

if ($user < 200) { 
 header('Location: /?page=home');
  } else {
    
    ?>

    <div class="fill">
    <h1>Admin</h1>
    <?php
    var_dump($user)
    ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col"> </th>
        </tr>
      </thead> 
      <tbody><?php
        foreach ($reponce as $row){
        ?>
          <tr>
            <td><?=$row->id?></td>
            <td><?=$row->email?></td>
            <td>
              <form action="/actions/update_admin_user.php" method="post">
                <select name="role">
                  <option value="10">vérifier</option>
                  <option value="0">banni</option>
                </select>
            </td>
            <td>
            
                <input type="hidden" name="user_id" value="<?=$row->id?>">
                <button type="submit" class="btn btn-sucess btn-sm">Valider</button>
              
              </form>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    </div>
    <?php
    $page_content = ob_get_clean();
}


