<!-- Listing the book category -->
 <div class="list-group">
        <h4 class="list-group-item active">Book Catogories</h4>
        <?php 
        
                include('admin/functions/category.php');
                
                //creating object of the Category class
                $cat = new Category();
                //calling the funtion of Category class
                $fetch = $cat->viewCat();
                
                //fecthing the data 
                while($row = $fetch -> fetch_assoc()):
                $nsql = new mysqli('localhost','root','','bookstore');
                $nquery = $nsql->query('SELECT COUNT(*) AS num FROM book WHERE categoryid = '.$row['id']);              
        	echo "<a href='show_books.php?catid=".$row['id']."' class='list-group-item'>
                <span class='badge'>".$nquery->fetch_assoc()['num']."</span>".$row['name']."</a>";
        	endwhile;
        
        ?>
 </div>