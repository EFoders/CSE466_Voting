This project implements a voting system for a hypothetical government



Requirements: 



1. Landing page
   - Display a welcome message and the different pages they can go to.
   - Login button
3. Login/Auth mechanism
   - Login page that links to a PHP file
   - research and implement proper authentication
   - refrence the **users** table 
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
