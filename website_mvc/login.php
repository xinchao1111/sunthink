<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
?>

<?php
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        $insertCustomers = $cs->insert_customers($_POST);
        
    }
?>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        
        $login_Customers = $cs->login_customers($_POST);
        
    }
?>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Đăng nhập tài khoản</h3>
        	<?php
			if(isset($login_Customers)){
    			echo $login_Customers;
    		}
        	?>
        	<form action="" method="post">
                	<input  type="text" name="email" class="field" placeholder="Enter Email....">
                    <input  type="password" name="password" class="field"  placeholder="Enter Password...." >
                 
                 <p class="note">Quên mật khẩu <a href="#">Nhấp vào đây</a></p>
                    <div class="buttons"><div><input type="submit" name="login" class="grey" value="Đăng nhập"></div></div>
             </form>
          </div>
         <?php

         ?> 
    	<div class="register_account">
    		<h3>Đăng ký tài khoản</h3>
    		<?php
    		if(isset($insertCustomers)){
    			echo $insertCustomers;
    		}
    		?>
    		<form action="" method="POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="name" placeholder="Họ tên..." >
							</div>
							
							<div>
							   <input type="text" name="city"  placeholder="Thành phố..."  >
							</div>
							
							<div>
								<input type="text" name="zipcode"  placeholder="Mã code..."  >
							</div>
							<div>
								<input type="text" name="email"  placeholder="Email..."  >
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="address"  placeholder="Địa chỉ..."  >
						</div>
		    		<div>
						<select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Chọn thành phố</option>   

							<option value="hcm">Việt Nam</option>
							<option value="na">Thái Lan</option>
							<option value="hn">Mỹ</option>
							<option value="dn">Nhật Bản</option>
							

		         </select>
				 </div>		        
	
		           <div>
		          <input type="text" name="phone"  placeholder="Diện thoại..." >
		          </div>
				  
				  <div>
					<input type="text" name="password"  placeholder="Mật khẩu..." >
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><input type="submit" name="submit" class="grey" value="Tạo tài khoản"></div></div>
		    <p class="terms">Bằng cách nhấp vào "Tạo tài khoản" bạn đồng ý với chúng tôi<a href="#"> &amp; Điều khoản</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php 
	include 'inc/footer.php';
	
 ?>
