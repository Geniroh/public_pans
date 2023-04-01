<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">We value your suggestion</h4>
        <p class="card-description">
          We appreciate you taking the time to share your thoughts, idea or complaints. What your suggestion
        </p>
        <?php
          if(isset($_POST['suggest'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $office = $_POST['office'];
            $message = $_POST['message'];


            $subject = "Message from PANS E-portal Suggestion box";
           

            switch ($office) {
              case 'pres':
                  $emailto = "president@pansuniport.com";
                break;
              case 'vp':
                  $emailto = "vp@pansuniport.com";
                break;
              case 'sec':
                $emailto = "secretary@pansuniport.com";
                break;
              case 'dowh':
                $emailto = "dowh@pansuniport.com";
                break;
              case 'dosports':
                $emailto = "dosport@pansuniport.com";
                break;
              case 'dosocial':
                $emailto = "dosocial@pansuniport.com";
                break;
              case 'all':
                $emailto = "help@pansuniport.com";
                break;
              
              default:
                $emailto = "help@pansuniport.com";
                break;
            }
        
            $message = '
            <!DOCTYPE html>
              <html lang="en">
              <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>PANS UNIPORT</title>
              <!-- Latest compiled and minified CSS -->
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

              </head>
              <body>
              <div class="container">
                  <h1 class="h1">You have a message from suggestion box</h1>
                  <p class="display-5">
                     '.$message.'
                  </p>

                  <img src="https://www.pansuniport.com/pans-logo.jpg" alt="image" style="height: 120px;">
              </div>

              </body>
              </html>
                          
            
            '; 
    
           
    
            $headers = "From: Pansuniport <$email> \r\n";
            $headers .= "Reply-To: $emailto\r\n";
            $headers .= "Content-type: text/html\r\n";
    
            

            $result = mail($emailto, $subject, $message, $headers);
            if(!$result) {   
                echo "<p class='alert alert-danger'>There was an error, please try again and ensure to fill in all fields</p>";   
            } else {
                echo "<p class='alert alert-success'>Message sent</p>";
            }
          }






        ?>
        <form class="forms-sample" method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="office">Addres this to:</label>
              <select class="form-control" id="office" name="office">
                <option value="all">General (To all Exco's)</option>
                <option value="pres">President</option>
                <option value="vp">Vice President</option>
                <option value="sec">Secretary</option>
                <option value="dowh">Director of welfare and health</option>
                <option value="dosports">Director of sports</option>
                <option value="dosocial">Director of socials</option>
              </select>
            </div>


          <div class="form-group">
            <label for="message">Please give you as much detail as you can and share examples if you have any.</label>
            <textarea class="form-control" id="message" rows="7" name="message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2" name="suggest">Make a suggestion</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
