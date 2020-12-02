<?php
    include_once("changeCompany.php");
    include_once("getEmployee.php");
?>
<html>
    <head>
        <link rel="icon" type="image/png" href="https://lh5.googleusercontent.com/ZHs1Mp8ehNfqVQQtIb7z5m7i4FzkzUJ0EUVL-pLUz2pTXO9iIbtDYQQKYHVEvQdEpcvivSM=w16383"/>
         <link rel="preconnect" href="https://fonts.gstatic.com">
         <style>
@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
</style>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Bhavya's PC A2</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
        <meta name="description" content="Practice SQL injection by changing the salary of employees">
        <meta name="author" content="Bhavya Tyagi">
        <meta name="keywords" content="sql injection,employees sql injection">
       

    </head>
    <body>
        <div class="heading text-center word-spacing" style="font-family: 'Kaushan Script', cursive;">Amazon Software Development Engineers</div>
        <p class="text-center font-large">The below listed software developers from Amazon and their Salaries are mentioned.<br>
            Can you recommend them some awesome companies ?<br><br>
            Performing SQL injection in this website that will change Salaries of these employees !!!
            </p>
        
        <div class="text-center">
            <form action="changeCompany.php" method="POST">
                <div class="dropdown">
                    <select name="name" class="word-spacing" id="name" required>
                        <option value="" disabled selected hidden>Select Developer</option>
                        <?php
                        foreach ($arry as $v) 
                        {
                        ?>            
                        <option value="<?php echo $v[0]?>"><?php echo $v[0]?></option>
                        <?php  
                            }
                        ?>
                    </select> 
                </div>
                 
                <div class="dropdown">
                    <input type="text" name="company" required>
                </div>
               
                <div class="dropdown">
                    <input type="submit" name="submit" value="Recommend">
                </div>

            
            </form> 
                
        </div>

        <table rules="all">
            <thead>
                <th>Name</th>
                <th>Company</th>
                <th>Salary</th>
            </thead>
            <tbody>
                <?php
                    foreach ($arry as $v) 
                    {
                ?>            
                <tr>
                    <td><?php echo $v[0]?></td>
                    <td><?php echo $v[1]?></td>
                    <td>₹<?php echo $v[2]?></td>
                </tr>
                <?php  
                    }
                ?>         
            </tbody>
        </table>
        
        

        <footer class="text-center font-large word-spacing">
            Made with ❤ by Bhavya Tyagi            </footer>
    </body>
</html>
