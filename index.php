<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <title>Employee Management System</title>
    </head>
    <body>

        <h1>Employee Management</h1>
        
        <section class="area">
            <input type="text" placeholder="Employee Name" id="u_name">
            <input type="number" placeholder="Employee Contact Number" id="u_contact">
            <input type="text" placeholder="Employee Email" id="u_email">
            <select id="u_position">
                <option value="">-- Select Position --</option>
                <option value="CEO">CEO</option>
                <option value="Manager">Manager</option>
                <option value="Developer">Developer</option>
                <option value="Internee">Internee</option>
            </select>
            <input type="text" placeholder="Employee Salery" id="u_salery">
            <input type="button" value="Add Data" onclick="addData()">
        </section>

        <table>
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Employee Name</th>
                    <th>Employee Contact</th>
                    <th>Employee Email</th>
                    <th>Employee Position</th>
                    <th>Employee Salary</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="empData">

            </tbody>
        </table>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>    
    </body>
</html>