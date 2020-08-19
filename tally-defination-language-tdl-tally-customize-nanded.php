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
                <h1 class="text-primary text-center">Why Tally Defination Language? <span><a href="contact-us.php" class="btn btn-outline-info">Enroll Now!</a></span></h1><hr>
    <small class="text-center text-secondary"><h3>Tally Definition Language (TDL) isthe development of Tally.ERP9. This allows the programmers to develop and deploy faster, effective Tally Extensions with ease .</h3></small>  <hr>
               <h3 class="text-center">Syllabus </h3>
            <div class="row list-unstyled">
                   <div class="col-md-3" style="text-align:justify;">
          <h3 style="text-align:center;">Page 1</h3>
          <li class="text-danger" style="list-style-type: none;">Tally Definition Language – An Introduction </li>
          <span class="text-primary text-center">Tally Definition Language</span>
          <li>Comparison with other Languages</li>
          <br>
          <li>The TDL Program - At a Glance</li>
          <li>TDL Capabilities</li>
          <li>TDL – Features </li>
          <br>
          <li class="text-danger" style="list-style-type: none;">TDL Components </li>
          <span class="text-primary text-center">Writing a Basic TDL Program </span>
          <li>Steps to create a TDL Program</li>
          <li>Specification of TDL Files</li>
          <li>Executing Multiple Files using Include Definition</li>
          <span class="text-primary text-center">TDL Interfaces</span><br>
          <span class="text-primary text-center">Hello TDL’ Program</span><br>
          <span class="text-primary text-center">TDL Components</span>
          <li>Definitions</li>
          <li>Attributes</li>
          <li>Modifiers</li>
          <li>Actions in TDL</li>
          <li>Data Types</li>
          <li>Operators in TDL</li>
          <li>Special Symbols </li>
          <li>Functions</li>
          <br>
          <li class="text-danger" style="list-style-type: none;">Symbols and Prefixes </li>
          <li>Access Specifiers/Symbol Prefixes </li>
          <li>General Symbols</li>
          <span class="text-primary text-center">The Usage of @ and @@</span>
          <li>efining a Local Formula using @</li>
          <li>Defining a Global Formula using @@</li>
          <span class="text-primary text-center">The Usage of # and ## </span>
          <li>Referencing a Field using #</li>
          <li>Modifying existing Definitions using # </li>
          <li>Accessing value from a Variable using ##</li>
          <span class="text-primary text-center">The Usage of $ and $$ </span>
          <li>Accessing a Method using $</li>
          <li>Calling an Internal Function using $$ </li>
          <br>
          <li>Commenting a Code using ;, ;; and /**/</li>
          <li>Line Continuation Character (+) </li>
          <li>Exposing Methods and Creating Procedures (_)</li>
          <li>Reinitialize Definitions (*) </li>
          <li>Optional Definitions (!)</li>
          <br>
          <li class="text-danger" style="list-style-type: none;">Dimensions and Formatting</li>
          <span class="text-primary text-center">Unit of Measurement</span><br>
          <span class="text-primary text-center">Dimensional Attributes</span>
          <li>Sizing/Size Attributes</li>
          <li>Spacing/Position Attributes</li>
          <li>Alignment Attributes</li>
          <span class="text-primary text-center">Some Specific Attributes</span>
          <li>Inactive</li>
          <li>Invisible</li>
          <span class="text-primary text-center">Some Specific Attributes</span>
          <li>Definitions and Attributes for Formatting</li>
          <li>Definition - Border</li>
          <li>Definition - Style</li>
          <li>Definition - Color </li>
          <li>Attributes ‘Background’ and ‘Print BG’ </li>
          <li>Attribute - Format</li>
          <br>
        </div>
        <div class="col-md-3" style="text-align:justify;">
          <h3 style="text-align:center;">Page 2</h3>
          <li class="text-danger" style="list-style-type: none;">Variables, Buttons and Keys </li>
          <span class="text-primary text-center">Variable</span>
          <li>Attributes of a Variable</li>
          <li>The Scope of a Variable</li>
          <li>Modifying the Variable Value</li>
          <li>Example - Variables</li>
          <span class="text-primary text-center">Buttons and Keys</span>
          <li>Attributes of Buttons/ Keys</li>
          <br>
          <li class=" text-danger" style="list-style-type: none;">Objects and Collections </li>
          <span class="text-primary text-center"> Objects</span>
          <li>Tally Object Structure</li>
          <li>Tally Objects Types</li>
          <li>Object Context </li>
          <span class="text-primary text-center">Collections</span>
          <li>Types of Collection</li>
          <li>Sources of Collection</li>
          <li>Creating a Collection</li>
          <span class="text-primary text-center">Object Association</span>
          <li>Report Level Object association</li>
          <li>Part Level Object Association </li>
          <li>Line Level Object Association</li>
          <li>Field Level Object Association</li>
          <span class="text-primary text-center">Methods</span>
          <li>Types of Methods</li>
          <li>Accessing Methods</li>
          <span class="text-primary text-center">Collection Capabilities</span>
          <li>Basic Capabilities</li>
          <li>Advanced Capabilities</li>
          <br>
          <li class="text-danger" style="list-style-type: none;">Actions in TDL</li>
          <span class="text-primary text-center">Categories of Actions</span><br>
          <span class="text-primary text-center">Action Association</span>
          <li>Action Association at ‘Menu’ Definition</li>
          <li>Action Association at ‘Button’/ ‘Key’ Definition</li>
          <li>Action Association at ‘Field’ Definition</li>
          <span class="text-primary text-center">Components of Actions</span><br>
          <span class="text-primary text-center">Global Actions</span>
          <li>Action — Menu</li>
          <li>Action — Modify Object </li>
          <li>Action – Browse URL </li>
          <li>Actions – ‘Create’ and ‘Alter’</li>
          <li>Actions — Create Collection, Display Collection and Alter Collection</li>
          <span class="text-primary text-center">Object Specific Actions</span>
          <li>Menu Actions – Menu Up, Menu Down, Menu Reject</li>
          <li>Form Actions – Form Accept, Form Reject, Form End</li>
          <li>Part Actions – Part Home, Part End, Part Pg Up</li>
          <li>Line Actions – Explode, Display Object, Alter Object</li>
          <li>Field Actions – Field Copy, Field Paste, Field Erase, Calculator </li>
          <br>
          <li class=" text-danger" style="list-style-type: none;"> User Defined Fields</li>
          <span class="text-primary text-center">What is UDF?</span>
          <li>Creating a UDF</li>
          <li>Storing User Inputs in the UDF</li>
          <li>Retrieving the value of UDF from an Object</li>
          <span class="text-primary text-center">Classification of UDF’s</span>
          <li>Simple UDF</li>
          <li>Aggregate UDF</li>
          <br>
        </div>
        <div class="col-md-3"  style="text-align:justify;">
          <h3 style="text-align:center;">Page 3</h3>
          <li class=" text-danger" style="list-style-type: none;"> Reports, Printing and Validation Controls</li>
          <span class="text-primary text-center">Reports</span>
          <li>Tabular Reports</li>
          <li>Hierarchical Report (Drill down Report)</li>
          <li>Column Based Reports</li>
          <span class="text-primary text-center">Printing</span>
          <li>Menu Action – Print/ Print Collection</li>
          <li>Button Action – Print Report</li>
          <li>Page Breaks</li>
          <li>Frequently Used Attributes and Functions</li>
          <br>
          <span class="text-primary text-center">Validation and Controls</span>
          <li>Field Level Attribute — Validate</li>
          <li>Field Level Attribute — Unique</li>
          <li>Field Level Attribute — Notify</li>
          <li>Field Level Attribute — Control </li>
          <li>Form Level Attribute — Control</li>
          <li>Menu Level Attribute — Control</li>
          <li>Report Level Attribute — Family </li>
          <br>
          <li class=" text-danger" style="list-style-type: none;"> Voucher and Invoice Customisation </li>
          <span class="text-primary text-center">Classification of Vouchers</span>
          <li>Accounting Vouchers</li>
          <li>Inventory Vouchers</li>
          <li>Accounting-cum-Inventory Vouchers</li>
          <span class="text-primary text-center">The Structure of a Voucher Object</span><br>
          <span class="text-primary text-center">Customisation</span>
          <li>Voucher Customisation</li>
          <li>Invoice Customisation</li>
          <br>
          <li class=" text-danger" style="list-style-type: none;">General and Collection Enhancements </li>
          <span class="text-primary text-center">Definition, Attribute and Modifier Enhancements </span>
          <li>Attribute Enhancements</li>
          <li>Modifier Enhancements</li>
          <li>Behavioral change in System Definitions</li>
          <li>Partial Attribute Support </li>
          <span class="text-primary text-center">Enhanced Special Symbols</span>
          <li>Multi – line commenting in TDL source code using /* and */</li>
          <li>Extension of modifying definitions using #</li>
          <li>‘*’ (Reinitialize) Definition modifier </li>
          <br>
          <span class="text-primary text-center">Method Formula Syntax with Relative Object Specification </span><br>
          <span class="text-primary text-center">Enhancements – ObjectAssociation</span>
          <li>Report Level Object Association</li>
          <li>Part Level Object Association</li>
          <li>Line Level Object Association</li>
          <li>Field Level Object Association</li>
        </div>
        <div class="col-md-3" style="text-align:justify;">
          <h3 style="text-align:center;">Page 4</h3>
          <span class="text-primary text-center">Enhancements – Object Access via Interface Object</span>
          <li>Identifying Part and Line Interface object with ‘Access Name’ </li>
          <li>Value Extraction</li>
          <span class="text-primary text-center">Bracket support in TDL</span>
          <li>During the Function Call</li>
          <li>In the language syntax for nesting formulas </li>
          <li>As a Mathematical Operator</li>
          <span class="text-primary text-center">Action Enhancements</span>
          <li>Enhancements in Key Actions</li>
          <li>New Actions</li>
          <span class="text-primary text-center">Events introduced</span>
          <li>Event – On Form Accept</li>
          <li>Event – On Focus </li>
          <span class="text-primary text-center"> User Defined Function</span><br>
          <span class="text-primary text-center">New Functions</span>
          <li>Function - $$IsObjectBelongsTo</li>
          <li>Function - $$NumLinesInScope</li>
          <li>Function - $$DateRange</li>
          <span class="text-primary text-center">Enhanced Collection Capabilities</span>
          <li>Aggregation and Reporting </li>
          <li>The Summary Collection is available through Tally ODBC Interface</li>
          <li>HTTP XML Collection (GET and POSTwith and without Object Specification)</li>
          <li>Usage As Tables</li>
          <li>Dynamic Object support for HTTP–XML Information Interchange</li>
          <span class="text-primary text-center">Collection Capabilities for Remoting</span><br>
          <li class=" text-danger" style="list-style-type: none;">User Defined Functions</li>
          <li>Functions – In General</li>
          <li>Functions – In TDL</li>
          <li>Function – Building Blocks </li>
          <li>Definition Block </li>
          <li>Procedural Block </li>
          <span class="text-primary text-center">Valid Statements inside a Function</span>
          <li>Programming Constructs In Function</li>
          <li>Actions used in a TDL Function</li>
          <span class="text-primary text-center">Calling a Function </span>
          <li>Using the Action ‘CALL’ </li>
          <li>Using the Symbol Prefix ‘$$’ </li>
          <span class="text-primary text-center">Function Execution – Object Context</span>
          <li>Target Object Context</li>
          <li>Parameter Evaluation Context</li>
          <li>Return Value Evaluation</li>
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
                <img src="images/003.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/002.jpg" class="img-fluid shadow-light"><br><br>
                <img src="images/001.jpg" class="img-fluid shadow-light"><br><br>
                
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



	

