<div class="col-md-12 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Upcoming Events</p>
                  <ul class="icon-data-list">
					  <?php

					  	$query = "SELECT * FROM events";

						$result = mysqli_query($conn, $query);

						while($row = mysqli_fetch_assoc($result)){
							$img_path = $row['img_path'];
							$link = $row['link'];
							$link_name = $row['link_name'];
							$description = $row['event_description'];
							$pub_date = $row['published_date'];

?>

<?php
		echo " <li>
		<div class='d-flex'>
		";

		echo "<div>
		<p class='text-info mb-1'><a href='$link'>$link_name</a></p>
		<p class='mb-0'>$description</p>
		<small>$pub_date</small>
	  </div>
	</div>
  </li>";					


  echo $img_path;

                   
                      
                    

						}



						?>
                  </ul>
                </div>
              </div>
            </div>
          </div>