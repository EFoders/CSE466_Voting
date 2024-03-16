This project implements a voting system for a hypothetical government

- Before prod, all .PHP files will need to be used outside of the /html file in UNIX and links to them changed, so that they cannot be stolen by attackers.

- PHP cannot be included in html files in an unconfigured apache server. Ensure you do the proper configuration to enable inline php and php files. 

- Databases are to be handled by mysql. This means that mysql needs to be installed on the machine and running, before connecting to a database. This will be very inconvenient for active testing, try to work with it. We will standardize the database naming and columns for ease of testing. 

Requirements (<span style="color:green">Text in green or **bolded** is already done.</span>):

1. Landing page
   - <span style="color:green">**_Display a welcome message and the different pages they can go to_**.</span>
   - <span style="color:green">**_Login button_**.</span>
3. Login/Auth mechanism
   - Login page that links to a PHP file
   - research and implement proper authentication
   - pulls from the **users** table 
5. View page
   - View page that links to a PHP file
   - The view page will display the current votes for candidates
   - This page will pull from the database **votes** table
7. Voting Page
   - Login page that links to a PHP file
   - This page should send a post request with information containing information about the voter and the candidate they want to vote for
   - this page will pull data for candidates from a **candidates** table 
   - this page will send data to the DB **votes** table.
9. All Pages
   - All pages will have a nav bar to get between the different pages. For the landing page, if a person tries to go anywhere, they will be forced to login first
   - Login will not have a nav bar
   - Anywhere where data is pushed to a database, parameterized statements will be used
