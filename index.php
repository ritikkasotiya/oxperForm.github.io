<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="wrapper">
        <section class="form signup">
            <header>Registration Form</header>
            <form name="regForm" method="POST" action="form.php">
                <div class="name-details">
                    <div class="field input">
                        <label> First Name</label>
                        <input type="text" placeholder="First Name" name="fname" id="fname" required >
                    </div>
                    <div class="field input">
                        <label> Last Name</label>
                        <input type="text" placeholder="Last Name" name="lname" id="lname" required>
                    </div>    
                </div>
                    <div class="field input">
                        <label> Email Address</label>
                        <input type="text" placeholder="Enter Your Email" name="email" id="email" required>
                    </div>
                    <div class="field input">
                        <label> Phone No.</label>
                        <input type="text" placeholder="Enter Your mobile" name="mobile" id="mobile" required>
                    </div>
                    <div class="field input">
                        <label> Alternative phone No.</label>
                        <input type="text" placeholder="Alternate" name="alter" id="alter" required>
                    </div>
                    <div class="field input">
                        <label> Qualification</label>
                        <select class="form-select" aria-label="Default select example" name="qualification" id="qualification">
                               <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="field input">
                        <label> Full Address</label>
                        <input type="text" placeholder="Address" name="address"  id="address" required>
                    </div>
                    <div class="field input">
                        <label>State</label>
                        <input type="text" placeholder="State" name="state" id="state" required>
                    </div>
                    <div class="field input">
                        <label>Pin Code</label>
                        <input type="text" placeholder="pincode" name="pin" id="pin" required>
                    </div>
                    <div class="field input image">
                        <label> Select Profile Image</label>
                        <input type="file" name="image" id="image">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Submit Now">
                    </div>
            </form>
        </section>
    </div>
</body>
</html>