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
                <h1 class="text-primary text-center">CentOS Linux Server Edition <span><a href="contact-us.php" class="btn btn-outline-info">Enroll Now!</a></span></h1><hr>
    <small class="text-center text-secondary"><h3>This course provides foundation-level knowledge and skills necessary for a career in System Admin.</h3></small>  <hr>
               <h3 class="text-center">Syllabus </h3>
            <div class="row list-unstyled">
                 <div class="col-md-3 col-sm-6" style="text-align:justify;">
            <h3 style="text-align:center;">Page 1</h3>
            <li class=" text-danger" style="list-style-type: none;">Installation </li>
            <span class="text-primary">Starting the Installation</span>
            <li>The Firstboot Process</li>
            <li>Verifying the Installation</li>
            <br>
            <li class=" text-danger" style="list-style-type: none;">System Initialization </li>
            <span class="text-primary">The Boot Process </span><br>
            <br>
            <span class="text-primary">Working with GRUB </span>
            <li>The Config File</li>
            <li>The GRUB Command Line</li>
            <span class="text-primary">Runlevels </span>
            <li>Runlevel Utilities</li>
            <li>Rescue and Recovery Runlevels</li>
            <span class="text-primary">Service Management </span>
            <li>The Upstart Conversion</li>
            <br>
            <li class=" text-danger" style="list-style-type: none;">Disks and Partitioning </li>
            <span class="text-primary">Basic Partitions</span>
            <li>Creating a Partition</li>
            <li>Making a Swap Partition</li>
            <li>Deleting a Partition</li>
            <span class="text-primary">Logical Volume Manager</span>
            <li>Creating an LVM Partition</li>
            <li>Adjusting the Size of LVM Partitions</li>
            <li>Migrating Data </li>
            <li>Deleting an LVM Partition</li>
            <span class="text-primary">Setting Up RAID </span>
            <li>Creating a RAID Array</li>
            <li>What to Do When a Disk Fails</li>
            <li>Deleting a RAID Array</li>
            <br>
            <li class=" text-danger" style="list-style-type: none;">File Systems and Such</li>
            <span class="text-primary">File System Setup</span>
            <li>Creating a File System</li>
            <li>Creating a Swap</li>
            <li>Mounting a File System</li>
            <li>Extra File System Commands </li>
            <span class="text-primary">Encryption with LUKS</span>
            <li>Creating Encrypted Partitions</li>
            <li>Mounting LUKS at Boot</li>
            <span class="text-primary">Managing File System Quotas</span>
            <li>Setting Up Quotas</li>
            <li>Enabling Quotas</li>
            <li>Quota Usage Reports</li>
            <span class="text-primary">File System Security</span>
            <li>Setting Up ACLs</li>
            <li>GnuPG </li>
            <span class="text-primary">Using AutoFS</span><br>
            <br>
            <li class=" text-danger" style="list-style-type: none;">Networking</li>
            <span class="text-primary">Setting Up Networking</span>
            <li>Static IP Addresses</li>
            <li>Routing</li>
            <li>Creating Static Routes</li>
            <span class="text-primary">Troubleshooting Network Connections</span>
            <li>Networking Utilities</li>
            <li>Network Monitoring and Analysis </li>
            <span class="text-primary">Advanced Networking </span>
            <li>Ethernet Bonding</li>
            <span class="text-primary">Client DNS Troubleshooting </span> </div>
          <div class="col-md-3 clearfix" style="text-align:justify;">
            <h3 style="text-align:center;">Page 2</h3>
            <li class=" text-danger" style="list-style-type: none;"> Package Management</li>
            <span class="text-primary">Working with RPM</span>
            <li>Installing and Removing Packages</li>
            <li>Querying and Verifying Packages </li>
            <span class="text-primary">Doing It Again with Yum</span>
            <li>Installing and Removing Packages </li>
            <li>Searching for Packages</li>
            <li>Configuring Additional Repositories</li>
            <span class="text-primary">Making Your Own RPM</span>
            <li>Creating an RPM</li>
            <span class="text-primary">Creating Your Own Repository </span>
            <li>Adding Your Custom Packages</li>
            <span class="text-primary">The Red Hat Network </span>
            <li>Registering Your System</li>
            <li class=" text-danger" style="list-style-type: none;">User Administration </li>
            <span class="text-primary">Users and Groups</span>
            <li>Users</li>
            <li>Passwords</li>
            <li>The Password File</li>
            <li>The Shadow File</li>
            <li>Groups</li>
            <li>The Group File</li>
            <li>Switching Accounts</li>
            <span class="text-primary">User Account Initialization</span>
            <li>User-Specific Files</li>
            <li>Global User Configuration</li>
            <span class="text-primary">Group Collaboration</span><br>
            <br>
            <span class="text-primary">Network User Authentication</span><br>
            <li class=" text-danger" style="list-style-type: none;">Network Installs </li>
            <span class="text-primary">Kickstart Server Setup</span>
            <li>Firewall and SELinux Configuration</li>
            <span class="text-primary">Mastering Kickstart Config Files</span>
            <li>Post Install</li>
            <li>Advanced Partitioning</li>
            <span class="text-primary">Automating Kickstart</span>
            <li>TFTP Server </li>
            <li>PXE Boot</li>
            <li>Firewall and SELinux Configuration </li>
            <span class="text-primary">Other Network Installs</span>
            <li class=" text-danger" style="list-style-type: none;">System Logging, Monitoring, and Automation</li>
            <span class="text-primary">Working with Syslog</span>
            <li>The Config File</li>
            <li>Log Rotation</li>
            <li>Centralized Logging </li>
            <li>User Login Events</li>
            <span class="text-primary">Monitoring System Performance</span><br>
            <span class="text-primary">Automation with cron and at </span>
            <li>Creating cron Jobs</li>
            <li>Single Jobs with at</li>
            <br>
            <li class=" text-danger" style="list-style-type: none;">The Kernel</li>
            <li>Kernel Basics</li>
            <li>Updating the Kernel</li>
            <li>Tuning the Kernal with /proc/sys</li>
            <li class=" text-danger" style="list-style-type: none;">SELinux</li>
            <span class="text-primary">Understanding SELinux</span>
            <li>Configuring SELinux</li>
            <li>File Contexts </li>
            <li>Service and Boolean Options</li>
            <span class="text-primary">SELinux Troubleshooting</span>
            <li>Policy Violations</li>
          </div>
          <div class="col-md-3 col-sm-6"  style="text-align:justify;">
            <h3 style="text-align:center;">Page 3</h3>
            <li class=" text-danger" style="list-style-type: none;">System Security </li>
            <span class="text-primary">Security Through TCP Wrappers</span><br>
            <br>
            <span class="text-primary">Firewall Rules Using iptables</span>
            <li>Configuring iptables</li>
            <li>Troubleshooting Firewall Rules </li>
            <span class="text-primary">SWorking wit h NAT</span><br>
            <span class="text-primary">Pluggable Authentication Module</span>
            <li>Securing Access</li>
            <li>PAM Troubleshooting</li>
            <li>Managing Password Policies</li>
            <br>
            <li class=" text-danger" style="list-style-type: none;">Remote Access </li>
            <span class="text-primary">Secure SHell (SSH)</span>
            <li>Configuring SSH</li>
            <li>Firewall and SELinux Configuration</li>
            <li>SSH Security</li>
            <li>Troubleshooting SSH</li>
            <span class="text-primary">SSH Security Revisited</span>
            <li>Public/Private Keys</li>
            <li>Port Forwarding</li>
            <span class="text-primary">VNC Servers </span>
            <li>Connecting Clients</li>
            <li class=" text-danger" style="list-style-type: none;">Web Services </li>
            <span class="text-primary">The Apache Web Server</span>
            <li>Installing Apache</li>
            <li>Configuring the Web Server</li>
            <li>Firewall and SELinux Configuration</li>
            <li>Troubleshooting  Apache</li>
            <span class="text-primary">Apache Security</span>
            <li>Host-Based Security</li>
            <li>User-Based Security</li>
            <li>Setting Up HTTPS</li>
            <span class="text-primary">CGI Applications</span><br>
            <br>
            <span class="text-primary">Virtual Hosts </span><br>
            <br>
            <span class="text-primary">Virtual Hosts </span>
            <li>Installing Squid</li>
            <li>Configuring the Proxy</li>
            <li>Firewall and SELinux Configuration</li>
            <li>Web Proxy Security</li>
            <li class=" text-danger" style="list-style-type: none;">NFS </li>
            <span class="text-primary">Network File Systems</span>
            <li>Installing an NFS Server</li>
            <li>Configuring NFS</li>
            <li>Firewall and SELinux Configuration</li>
            <span class="text-primary">NFS Security</span><br>
            <br>
            <span class="text-primary">Troubleshooting  NFS </span><br>
            <br>
            <span class="text-primary">Connecting Clients</span>
            <li class=" text-danger" style="list-style-type: none;">Samba </li>
            <span class="text-primary">Samba </span>
            <li>Configuring Samba</li>
            <span class="text-primary">Samba Security</span><br>
            <span class="text-primary">Samba Clients</span><br>
            <li class=" text-danger" style="list-style-type: none;">FTP </li>
            <span class="text-primary">File Transfer Protocol </span>
            <li>File Transfer Protocol</li>
            <li>Configuring vsftp </li>
            <li>Firewall and SELinux Configuration</li>
            <span class="text-primary">FTP Security </span><br>
            <span class="text-primary">Troubleshooting FTP </span><br>
            <li class=" text-danger" style="list-style-type: none;">DNS </li>
            <span class="text-primary">Setting Up BIND</span>
            <li>Firewall and SELinux Configuration </li>
            <span class="text-primary">Configuring a DNS Server</span>
            <li>Master Server</li>
            <li>Slave Server</li>
            <li>Caching-Only Server</li>
            <li>Forwarding-Only Server </li>
          </div>
          <div class="col-md-3 col-sm-6" style="text-align:justify;">
            <h3 style="text-align:center;">Page 4</h3>
            <span class="text-primary">DNS Utilities and Troubleshooting</span><br>
            <span class="text-primary">BIND Security</span><br>
            <li class=" text-danger" style="list-style-type: none;">Network Services </li>
            <span class="text-primary">Xinetd: The Master Service</span> <span class="text-primary">Dynamic Host Configuration Protocol </span>
            <li>Installing a DHCP Server</li>
            <li>Configuring the DHCP Server</li>
            <li>Security Configuration</li>
            <li>Troubleshooting  DHCP </li>
            <span class="text-primary">Network Time Protocol </span>
            <li>Installing a Time Server</li>
            <li>Configuring NTP</li>
            <li>Firewall and SELinux Configuration</li>
            <li>NTP Security </li>
            <li>NTP Security </li>
            <Br>
            <li class=" text-danger" style="list-style-type: none;">Email Services </li>
            <span class="text-primary">Email Service Overview</span><br>
            <span class="text-primary">SMTP with Postfix </span>
            <li>Configuring Postfix</li>
            <li>Firewall and SELinux Configuration </li>
            <li>Postfix Security</li>
            <li>Alias Mapping</li>
            <span class="text-primary">Receiving Mail with Dovecot </span>
            <li>Configuring Dovecot </li>
            <li>Firewall and SELinux Configuration</li>
            <li>Dovecot Security</li>
            <span class="text-primary">Testing the Mail Server</span><br>
            <li class=" text-danger" style="list-style-type: none;">Troubleshooting </li>
            <span class="text-primary">Boot Issues</span><br>
            <li>I Lost My Root User Password</li>
            <li>Password Change Not Available in Single-User Mode</li>
            <li>The MBR Is Corrupt</li>
            <li>The Partition or Root File System Can’t Be Found </li>
            <span class="text-primary">Troubleshooting File  Systems</span>
            <li>The System Complains About a File System Label</li>
            <li>The Superblock Has Become Corrupt</li>
            <li>Users Can’t Create Files in Their Home Directories</li>
            <span class="text-primary">Miscellaneous</span>
            <li>I Can’t Remote into My System </li>
            <li>I Can’t Access Service X</li>
            <li>When I Start a Service, It Tells Me “Cannot Bind to Address”</li>
            <li>I Get the Error Message “No Route to Host”</li>
            <li>My Ping to Another Host Has Failed</li>
            <li class=" text-danger" style="list-style-type: none;">Virtualization with KVM </li>
            <span class="text-primary">Working with Virtual Machines</span>
            <li>Setting Up the Physical Host</li>
            <li>Installing a Virtual Client</li>
            <li>Managing a Virtual Client</li>
            <span class="text-primary">Monitoring Virtual Resources</span>
            <li></li>
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
                <img src="images/002.jpg" class="img-fluid shadow-light"><br>
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



	

