<?php 
$page_title = "Home Pages";
$page_key = "";
$page_desc = "";
include('inc/top.php');
?>
<!-- Start from here-->
<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
			<div class="col-md-9 ">
                <h1 class="text-primary text-center">PHP & MySql <span><a href="contact-us.php" class="btn btn-outline-info">Enroll Now!</a></span></h1><hr>
    <small class="text-center text-secondary"><h3>PHP is completely free, and supported by a worldwide community of volunteers. This open-source, community-driven approach has ....... </h3></small>  <hr>
               <h3 class="text-center">Syllabus </h3>
            <div class="row list-unstyled">
                 <div class="col-md-3" style="text-align:justify;">
          <h3 style="text-align:center;">Page 1</h3>
          <li class=" text-danger" style="list-style-type: none;">Introducing PHP</li>
          <li>History</li>
          <li>Unique Features</li>
          <li>Basic Development Concepts</li>
          <span class="text-primary text-center">Creating Your First PHP Script</span>
          <li>Writing and Running the Script</li>
          <li>Understanding the Script </li>
          <li>Handling Script Errors </li>
          <span class="text-primary text-center">Mixing PHP with HTML</span>
          <li>Escaping Special Characters</li>
          <span class="text-primary text-center">Sample Applications</span>
          <li>phpMyAdmin</li>
          <li>phpMyAdmin</li>
          <li>Gallery</li>
          <li>PoMMo</li>
          <li>Smarty</li>
          <li>Squirrelmail</li>
          <li>eZ Publish</li>
          <li>Mantis</li>
          <li>Wordpress</li>
          <BR>
          <li class=" text-danger" style="list-style-type: none;">Using Variables and Operators </li>
          <span class="text-primary text-center">Storing Data in Variables</span>
          <li>Assigning Values to Variables</li>
          <li>Destroying Variables </li>
          <li>Inspecting Variable Contents</li>
          <span class="text-primary text-center">Understanding PHP’s Data Types</span> <BR>
          <span class="text-primary text-center">Setting and Checking Variable Data Types</span><BR>
          <span class="text-primary text-center">Using Constants </span><BR>
          <span class="text-primary text-center">Manipulating Variables with Operators </span>
          <li>Performing Arithmetic Operations</li>
          <li>Concatenating Strings</li>
          <li>Comparing Variables</li>
          <li>Performing Logical Tests</li>
          <li>Other Useful Operators</li>
          <li>Understanding Operator Precedence</li>
          <li>Try This : Building a Dollars-to-Euros Converter</li>
          <li>Handling Form Input</li>
          <li>Try This : Building an Interactive HTML Color Sampler</li>
          <br>
          <li class=" text-danger" style="list-style-type: none;">Controlling Program Flow </li>
          <span class="text-primary text-center">Writing Simple Conditional Statements </span>
          <li>The if Statement </li>
          <li>The if-else Statement </li>
          <li>Try This : Testing Odd and Even Numbers</li>
          <span class="text-primary text-center">Writing More Complex Conditional Statements </span>
          <li>The if-elseif-else Statement</li>
          <li>The switch-case Statement</li>
          <li>Try This : Assigning Boy Scouts to Tents </li>
          <li>Combining Conditional Statements </li>
         
        </div>
         <div class="col-md-3" style="text-align:justify;">
          <h3 style="text-align:center;">Page 2</h3>
           <span class="text-primary text-center">Repeating Actions with Loops </span>
          <li>The while Loop </li>
          <li>The do-while Loop </li>
          <li>The for Loop</li>
          <li>Combining Loops</li>
          <li>Interrupting and Skipping Loops</li>
          <li>Try This : Building aFactorial Calculator</li>
          <span class="text-primary text-center">Using String Functions</span>
          <li>Using Numeric Functions</li>
          <li>Try This : Processing a Member Registration Form </li>
          <li class=" text-danger" style="list-style-type: none;">Working with Arrays </li>
          <span class="text-primary text-center">Storing Data in Arrays</span>
          <li>Assigning Array Values</li>
          <li>Modifying Array Values</li>
          <li>Retrieving Array Size </li>
          <li>Nesting Arrays</li>
          <span class="text-primary text-center">Processing Arrays with Loops and Iterators</span>
          <li>The foreach Loop</li>
          <li>The Array Iterator</li>
          <li>Try This : Averaging the Grades of a Class </li>
          <span class="text-primary text-center">Using Arrays with Forms</span>
          <li>Try This : Selecting Pizza Toppings</li>
          <span class="text-primary text-center">Working with Array Functions</span>
          <li>Try This : Checking Prime Numbers </li>
          <span class="text-primary text-center">Working with Dates and Times</span>
          <li>Generating Dates and Times</li>
          <li>Formatting Dates and Times</li>
          <li>Useful Date and Time Functions</li>
          <li>Try This : Building an Age Calculator</li>
          <li class=" text-danger" style="list-style-type: none;">Using Functions and Classes </li>
          <span class="text-primary text-center">Creating User-Defined Functions</span>
          <li>Creating and Invoking Functions </li>
          <li>Using Arguments and Return Values</li>
          <li>Setting Default Argument Values </li>
          <li>Using Dynamic Argument Lists</li>
          <li>Understanding Variable Scope</li>
          <li>Using Recursive Functions</li>
          <li>Try This : Calculating GCF and LCM</li>
          <span class="text-primary text-center">Creating Classes</span>
          <li>Introducing Classes and Objects</li>
          <li>Defining and Using Classes</li>
          <li>Try This : Encrypting and Decrypting Text</li>
          <span class="text-primary text-center">Using Advanced OOP Concepts</span>
          <li>Using Constructors and Destructors </li>
          <li>Extending Classes</li>
          <li>Adjusting Visibility Settings</li>
          <li>Try This : Generating Form Selection Lists</li>
          <br>
          
        </div>
		<div class="col-md-3"  style="text-align:justify;">
          <h3 style="text-align:center;">Page 3</h3>
          <li class=" text-danger" style="list-style-type: none;">Working with Files and Directories</li>
          <span class="text-primary text-center">Reading Files</span>
          <li>Reading Local Files</li>
          <li>Reading Remote Files</li>
          <li>Reading Specific Segments of a File</li>
          <span class="text-primary text-center">Writing Files</span>
          <li>Try This: Reading and Writing Configuration Files</li>
          <span class="text-primary text-center">Processing Directories</span><br>
          <span class="text-primary text-center">Performing Other File and Directory Operations</span>
          <li>Try This : Creating a Photo Gallery </li>
          <li class=" text-danger" style="list-style-type: none;">Working with Databases and SQL </li>
          <span class="text-primary text-center">Introducing Databases and SQL</span>
          <li>Understanding Databases, Records, and Primary Keys</li>
          <li>Understanding Relationships and Foreign Keys</li>
          <li>Understanding SQL Statements</li>
          <li>Try This : Creating and Populating a Database </li>
          <li>Creating the Database</li>
          <li>Adding Tables</li>
          <li>Adding Records</li>
          <span class="text-primary text-center">Using PHP’s MySQLi Extension</span>
          <li>Retrieving Data </li>
          <li>Adding or Modifying Data</li>
          <li>Handling Errors</li>
          <li>Try This : Adding Employees to a Database</li>
          <li>Try This : Building a Login Form</li>
          <li>Using a MySQL Database</li>
          <li>Switching to a Different Database</li>
          <br>
          <li class=" text-danger" style="list-style-type: none;">Working with XML </li>
          <span class="text-primary text-center">Introducing XML</span>
          <li>XML Basics</li>
          <li>Anatomy of an XML Document </li>
          <li>Well-Formed and Valid XML</li>
          <li>XML Parsing Methods</li>
          <li>XML Technologies</li>
          <li>Try This : Creating an XML Document</li>
          <span class="text-primary text-center">Using PHP’s SimpleXML Extension</span>
          <li>Working with Elements</li>
          <li>Working with Attributes</li>
          <li>Try This : Converting XML to SQL</li>
          <li>Altering Element and Attribute Values</li>
          <li>Adding New Elements and Attributes</li>
          <li>Creating New XML Documents </li>
          <li>Try This : Reading RSS Feeds</li>
        </div>
        <div class="col-md-3" style="text-align:justify;">
          <h3 style="text-align:center;">Page 4</h3>
          <span class="text-primary text-center">Using PHP’s DOM Extension</span>
          <li>Working with Elements</li>
          <li>Working with Attributes</li>
          <li>Try This : Recursively Processing an XML Document Tree</li>
          <li>Altering Element and Attribute Values</li>
          <li>Creating New XML Documents</li>
          <li>Converting Between DOM and SimpleXML</li>
          <li>Try This : Reading and Writing XML Configuration Files </li>
          <br>
          <li class=" text-danger" style="list-style-type: none;">Working with Cookies, Sessions, and Headers </li>
          <span class="text-primary text-center">Working with Cookies</span>
          <li>Cookie Basics</li>
          <li>Cookie Attributes</li>
          <li>Cookie Headers</li>
          <li>Setting Cookies</li>
          <li>Reading Cookies </li>
          <li>Removing Cookies</li>
          <li>Try This : Saving and Restoring User Preferences</li>
          <span class="text-primary text-center">Working with Cookies</span>
          <li>Working with Sessions </li>
          <li>Session Basics</li>
          <li>Creating Sessions and Session Variables</li>
          <li>Removing Sessions and Session Variables </li>
          <li>Try This : Tracking Previous Visits to a Page </li>
          <span class="text-primary text-center">Using HTTP Headers</span>
          <li>Try This : Building a Better Login Form</li>
          <br>
          <li class=" text-danger" style="list-style-type: none;">Handling Errors</li>
          <span class="text-primary text-center">Handling Script Errors</span>
          <li>Controlling Error Reporting</li>
          <li>Using a Custom Error Handler</li>
          <li>Try This : Generating a Clean Error Page</li>
          <span class="text-primary text-center">Using Exceptions</span>
          <li>Using Custom Exceptions </li>
          <li>Try This : Validating Form Input</li>
          <li>Logging Errors </li>
          <li>Debugging Errors </li>
          <br>
          <li class=" text-danger" style="list-style-type: none;">Securing PHP</li>
          <span class="text-primary text-center">Sanitizing Input and Output</span><br>
          <span class="text-primary text-center">Securing Data </span>
          <li>Securing Configuration Files </li>
          <li>Securing Database Access </li>
          <li>Securing Sessions</li>
          <span class="text-primary text-center">Validating User Input </span>
          <li>Working with Required Fields </li>
          <li>Working with Numbers</li>
          <li>Working with Strings</li>
          <li>Working with Dates </li>
          <li>Try This : Validating Form Input </li>
          <li>Configuring PHP Security</li>
          <li class=" text-danger" style="list-style-type: none;">Many More.....</li>
        </div>
            </div>
      <hr>
      <!----------Table2-------->
      <h3>Some of the Brands we deals...</h3>
      <marquee><br><img src="images/logo.jpg"><br></marquee><hr>
            </div>
            <div class="col-md-3">
                <img src="images/009.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/008.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/007.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/006.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/005.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/004.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/003.jpg" class="img-fluid shadow-light"><br>
            </div>
        </div><hr>
    
    
       
<!--------------------Footer---------------------------------->
    <div class="row bg-dark" style="padding-top:20px;">
			
               <?php include('inc/footer.php');?>
            
        </div>
<!--------------------Footer---------------------------------->
</div>
</body>
</html>



	

